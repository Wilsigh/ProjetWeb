<?php
//D�claration des variables
$CompteASupprimer = $_REQUEST['id_compte'];
//Connexion � la BD
$connexionMYSQL = mysqli_connect ($bd['host'],$bd['login'],$bd['motdepasse'],$bd['nomBase']);

//V�rification de la conexion
if (! $connexionMYSQL)
	echo "impossible de se connecter au serveur MySQL";

if ($connexionMYSQL){
 // $activationBD = mysqli_select_db($bd[nomBase], $connexionMYSQL);
 	

 //if ($activationBD)
//Insertion de la suppression dans la table Historique
	 $rq = "DELETE FROM animalerie.utilisateurs WHERE utilisateurs.email_utilisateur = '$CompteASupprimer' ";	
	 $resultatRequete = mysqli_query ($connexionMYSQL,$rq);
	 	
 
} 

  
  // Definition des donnees structurelles de la vue
  $donneesVue['zone_haute']=$vuesElementaires['vueElementaire_banniere'];
  $donneesVue['zone_onglets']=$vuesElementaires['vueAdmin_onglets'];
  $donneesVue['zone_gauche']=$vuesElementaires['vueElementaire_recherche'];
  $donneesVue['zone_droite']=$vuesElementaires['vueAdmin_compteConnecte'];
  $donneesVue['zone_centrale']=$vuesElementaires['vueAdmin_gestionComptes'];
  $donneesVue['style']=$feuillesDeStyle['feuille1'];
  
  // Enregistrement des donnees de la vue dans la session
  $_SESSION['donneesVue']=$donneesVue;

?>