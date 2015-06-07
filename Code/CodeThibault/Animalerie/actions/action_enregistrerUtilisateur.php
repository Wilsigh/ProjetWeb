

<?php
// Récupération des données du formulaire d'inscription
$mail=$_POST["mail"];
$mdp=$_POST["mdp"];
$prenom=$_POST["prenom"];
$nom=$_POST["nom"];
$resultatRequete= false;

//Connection à la BD
$connexionMYSQL = mysqli_connect ($bd[host],$bd[login],$bd[motdepasse],$bd[nomBase]);

//Vérification de la connexion à la BD
if (! $connexionMYSQL)
	echo "impossible de se connecter au serveur MYSQL";

	
 else{

	 $rq = "INSERT INTO utilisateurs VALUES ('$mail','$mdp','client','$nom','$prenom')";
	
	 $resultatRequete = mysqli_query ($connexionMYSQL,$rq);
	 
 }



// -------------------------------------------------------
// Executer l'action
// ---------------------------------------------------------

// On nettoie les variables de session
$_SESSION=array();
// -------------------------------------------------------
// Definir le nouvel etat de l'application
// -------------------------------------------------------

  $_SESSION['etat']='etat_accueilNonConnecte';  


// -------------------------------------------------------
// Preparer les donnees de la vue resultante
// -------------------------------------------------------

  // Definition des donnees structurelles de la vue
  $donneesVue['zone_haute']=$vuesElementaires['vueElementaire_banniere'];
  $donneesVue['zone_onglets']=$vuesElementaires['vueElementaire_onglets'];
  $donneesVue['zone_gauche']=$vuesElementaires['vueElementaire_recherche'];
  $donneesVue['zone_droite']=$vuesElementaires['vueElementaire_compteNonConnecte'];
  $donneesVue['zone_centrale']=$vuesElementaires['vueElementaire_compteCree'];
  $donneesVue['style']=$feuillesDeStyle['feuille1'];


  // Enregistrement des donnees de la vue dans la session
  $_SESSION['donneesVue']=$donneesVue;
?>