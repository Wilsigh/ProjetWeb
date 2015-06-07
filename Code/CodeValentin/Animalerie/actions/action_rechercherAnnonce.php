<?php

  //recherche par mot clé
  $AnnonceAchercher = utf8_decode($_REQUEST['AnnonceAchercher']);

  //recherche avancée
  $TitreAchercher = utf8_decode($_REQUEST['titre']);
  $TypeAchercher = utf8_decode($_REQUEST['type']);
  $SexeAchercher = utf8_decode($_REQUEST['sexe']);
  $RaceAchercher = utf8_decode($_REQUEST['race']);

  // Connexion à la base de données
     $connexion = new PDO( $dns, $bd['login'], $bd['motdepasse']);

  // $champignonAchercher >> Construction de la requête a exécuter >> $requete
       // Pour favoriser la recherche : (non obligatoire)
       // Remplacement des accents par des caractères jokers (le caractère _ représente un caractère quelconque)
          $AnnonceAchercher = mb_convert_encoding($AnnonceAchercher, "iso-8859-1");
          for($i=0; $i<strlen($AnnonceAchercher); $i++)
          { 
            if ($AnnonceAchercher[$i]=='è' || $AnnonceAchercher[$i]=='é' || $AnnonceAchercher[$i]=='ê' ||
                $AnnonceAchercher[$i]=='à' || $AnnonceAchercher[$i]=='ù' || $AnnonceAchercher[$i]=='ï')
                $AnnonceAchercher[$i]='_';
          }

      // Extension pour favoriser la recherche 
      // le caractère % représente un nombre quelconque de caractères
         $AnnonceAchercher=$AnnonceAchercher."%";


     $requete="select * from annonces where type_animal like \"".$AnnonceAchercher."\"";

 // $requete >> Exécution de la requête >> $resultatRequete
     $resultatRequete = $connexion->query($requete);

// On précise que l'on souhaite récupérer les résultats sous forme d'objets
  $resultatRequete->setFetchMode(PDO::FETCH_OBJ);

// $resultatRequete >> Déterminer le nombre de résultats >>  $nbResultats
   $nbResultats = $resultatRequete->rowCount();
// $resultatRequete >> Stockage des annonces résultats dans un tableau qui sera transmis à la vue

          for ($i=0 ; $i<$nbResultats ; $i++)
          {
            // $resultatRequete >> Récupération de toutes les données d'une annonce >> 
            $annonceCourante = $resultatRequete->fetch();

          //Mémorisation des données de l'annonce courrante
            $annoncesResultats[$i]['numero'] = utf8_encode($annonceCourante->id_annonce);
            $annoncesResultats[$i]['auteur'] = utf8_encode($annonceCourante->email_auteur);
            $annoncesResultats[$i]['titre'] = utf8_encode($annonceCourante->titre_annonce);
            $annoncesResultats[$i]['description'] = utf8_encode($annonceCourante->descriptif_annonce);
            $annoncesResultats[$i]['dateAnnonce'] = $annonceCourante->date_annonce;
			$annoncesResultats[$i]['prix'] = $annonceCourante->prix_annonce;
			$annoncesResultats[$i]['type'] = utf8_encode($annonceCourante->type_animal);
            $annoncesResultats[$i]['race'] = utf8_encode($annonceCourante->race_animal);
            $annoncesResultats[$i]['sexe'] = utf8_encode($annonceCourante->sexe_animal);
          }  

// Déconnexion de la base de données
$connexion = null;

// -------------------------------------------------------
// Preparer les donnees de la vue resultante
// -------------------------------------------------------
$donneesVue['zone_centrale']=$vuesElementaires['vueElementaire_annoncesRecherche'];

switch ($_SESSION['privilege']) {
	case 'client':
  
		// Definition des données structurelles de la vue
		$donneesVue['zone_haute']=$vuesElementaires['vueElementaire_banniere'];
		$donneesVue['zone_gauche']=$vuesElementaires['vueElementaire_recherche'];
		$donneesVue['zone_droite']=$vuesElementaires['vueClient_compteConnecte'];
		$donneesVue['style']=$feuillesDeStyle['feuille1'];
		
		break;
    
	case'pro':
  
		// Definition des données structurelles de la vue
		$donneesVue['zone_haute']=$vuesElementaires['vueElementaire_banniere'];
		$donneesVue['zone_onglets']=$vuesElementaires['vuePro_onglets'];
		$donneesVue['zone_gauche']=$vuesElementaires['vueElementaire_recherche'];
		$donneesVue['zone_droite']=$vuesElementaires['vuePro_compteConnecte'];
		$donneesVue['style']=$feuillesDeStyle['feuille1'];

		break;

	case'admin':
  
		// Definition des données structurelles de la vue
		$donneesVue['zone_haute']=$vuesElementaires['vueElementaire_banniere'];
		$donneesVue['zone_onglets']=$vuesElementaires['vueAdmin_onglets'];
		$donneesVue['zone_gauche']=$vuesElementaires['vueElementaire_recherche'];
		$donneesVue['zone_droite']=$vuesElementaires['vueAdmin_compteConnecte'];
		$donneesVue['style']=$feuillesDeStyle['feuille1'];

		break;



	default:
		// Definition de l'etat deconnecte
		$_SESSION['etat'] = 'etat_accueilNonConnecte';
		//echo "etatdeconnecte";
		// Definition des données structurelles de la vue
		$donneesVue['zone_haute']=$vuesElementaires['vueElementaire_banniere'];
		$donneesVue['zone_onglets']=$vuesElementaires['vueElementaire_onglets'];
		$donneesVue['zone_gauche']=$vuesElementaires['vueElementaire_recherche'];
		$donneesVue['zone_droite']=$vuesElementaires['vueElementaire_compteNonConnecte'];
		$donneesVue['style']=$feuillesDeStyle['feuille1'];

}


// Définition des données DYNAMIQUES de la vue
    $donneesVue['nbResultats']=$nbResultats;
    $donneesVue['resultats']=$annoncesResultats;
  // Enregistrement des donnees de la vue dans la session
  $_SESSION['donneesVue']=$donneesVue;


?>  