

<?php
// Récupération des données du formulaire d'inscription
$titre=$_POST["titre"];
$descriptif=$_POST["descriptif"];
$auteur=$_SESSION["mail"];
$type=$_POST["type"];
$sexe=$_POST["sexe"];
$race=$_POST["race"];
$prix=$_POST["prix"];
$naissance=$_POST["naissance"];
$tatoue=$_POST["tatoue"];
if ($tatoue!="oui") $tatoue="non";
$puce=$_POST["puce"];
if ($puce!="oui") $puce="non";
$sterilise=$_POST["sterilise"];
if ($sterilise!="oui") $sterilise="non";
$prix=$_POST["prix"];




$resultatRequete= false;

//Connection à la BD
$connexionMYSQL = mysqli_connect ($bd[host],$bd[login],$bd[motdepasse],$bd[nomBase]);

//Vérification de la connexion à la BD
if (! $connexionMYSQL)
	echo "impossible de se connecter au serveur MYSQL";

	
 else{
	 echo "Connection réussie";
	 echo $titre;

	 $rq = "INSERT INTO annonces(email_auteur,titre_annonce,descriptif_annonce,date_annonce,prix_annonce,type_animal,race_animal,naiss_animal,sexe_animal,tatoue_animal,puce_animal,steril_animal) 
			VALUES ('$auteur','$titre','$descriptif',NOW(),'$prix','$type','$race','$naissance','$sexe','$tatoue','$puce','$sterilise')";
	
	 $resultatRequete = mysqli_query ($connexionMYSQL,$rq);
	 
 }


// -------------------------------------------------------
// Preparer les donnees de la vue resultante
// -------------------------------------------------------

  // Definition des donnees structurelles de la vue
  $donneesVue['zone_haute']=$vuesElementaires['vueElementaire_banniere'];
  $donneesVue['zone_info']=$vuesElementaires['vueElementaire_infoconnecte']; 
  $donneesVue['zone_onglets']=$vuesElementaires['vuePro_onglets'];
  $donneesVue['zone_gauche']=$vuesElementaires['vueElementaire_recherche'];
  $donneesVue['zone_droite']=$vuesElementaires['vuePro_compteConnecte'];
  $donneesVue['zone_centrale']=$vuesElementaires['vueElementaire_compteCree'];
  $donneesVue['style']=$feuillesDeStyle['feuille1'];


  // Enregistrement des donnees de la vue dans la session
  $_SESSION['donneesVue']=$donneesVue;
?>