<?php

//$_SESSION['login']=$pseudo;
//Connection à la BD
$connexionMYSQL = mysqli_connect ($bd[host],$bd[login],$bd[motdepasse],$bd[nomBase]);

//Vérification de la connexion à la BD
if (! $connexionMYSQL)
	echo "impossible de se connecter au serveur MYSQL";

	
if ($connexionMYSQL)
 //{ $activationBD = mysqli_select_db($bd[nomBase], $connexionMYSQL);
 	

 //if ($activationBD)
 {
 //Connexion grâce aux identifiants donnée par la VueElementaire_Identification
	 $mail = $_POST['mail'];
	 $mdp = $_POST['motdepasse'];
	 //$mdp = md5($_POST['motdepasse']);

	 $rq = "select * from utilisateurs where utilisateurs.email_utilisateur = '$mail' and utilisateurs.mdp_utilisateur = '$mdp'";
	
	 $resultatRequete = mysqli_query ($connexionMYSQL,$rq);
	 
	 $nb = mysqli_num_rows($resultatRequete);
       $results=mysqli_fetch_row($resultatRequete);
       $_SESSION['mail']=$results[0];
	   $_SESSION['mdp']=$results[1];
	   $_SESSION['privilege']=$results[2];
	   $_SESSION['nom']=$results[3];
	   $_SESSION['prenom']=$results[4];

 }


if ($nb>0) {
 
 //Cette  portion de code est à mettre si l'authentification est réussie
 	
	// Definition de l'etat acceuilClient
	if ($_SESSION['privilege']=='client'){
	$_SESSION['etat'] = 'etat_accueilClient';
  
  // Definition des données structurelles de la vue
  $donneesVue['zone_haute']=$vuesElementaires['vueElementaire_banniere'];
  $donneesVue['zone_info']=$vuesElementaires['vueElementaire_infoconnecte'];
  $donneesVue['zone_gauche']=$vuesElementaires['vueElementaire_recherche'];
  $donneesVue['zone_droite']=$vuesElementaires['vueClient_compteConnecte'];
  $donneesVue['zone_centrale']=$vuesElementaires['vueElementaire_toutesAnnonces'];
  $donneesVue['style']=$feuillesDeStyle['feuille1'];
  
  // Enregistrement des donnees de la vue dans la session
  $_SESSION['donneesVue']=$donneesVue;
}
    if ($_SESSION['privilege']=='pro'){
	$_SESSION['etat'] = 'etat_accueilPro';
  
  // Definition des données structurelles de la vue
  $donneesVue['zone_haute']=$vuesElementaires['vueElementaire_banniere'];
  $donneesVue['zone_info']=$vuesElementaires['vueElementaire_infoconnecte'];
  $donneesVue['zone_onglets']=$vuesElementaires['vuePro_onglets'];
  $donneesVue['zone_gauche']=$vuesElementaires['vueElementaire_recherche'];
  $donneesVue['zone_droite']=$vuesElementaires['vuePro_compteConnecte'];
  $donneesVue['zone_centrale']=$vuesElementaires['vueElementaire_toutesAnnonces'];
  $donneesVue['style']=$feuillesDeStyle['feuille1'];
  
  // Enregistrement des donnees de la vue dans la session
  $_SESSION['donneesVue']=$donneesVue;
}

if ($_SESSION['privilege']=='admin'){
	$_SESSION['etat'] = 'etat_accueilAdmin';
  //echo "etatadmin";
  // Definition des données structurelles de la vue
  $donneesVue['zone_haute']=$vuesElementaires['vueElementaire_banniere'];
  $donneesVue['zone_info']=$vuesElementaires['vueElementaire_infoconnecte'];
  $donneesVue['zone_onglets']=$vuesElementaires['vueAdmin_onglets'];
  $donneesVue['zone_gauche']=$vuesElementaires['vueElementaire_recherche'];
  $donneesVue['zone_droite']=$vuesElementaires['vueAdmin_compteConnecte'];
  $donneesVue['zone_centrale']=$vuesElementaires['vueElementaire_toutesAnnonces'];
  $donneesVue['style']=$feuillesDeStyle['feuille1'];
  
  // Enregistrement des donnees de la vue dans la session
  $_SESSION['donneesVue']=$donneesVue;
}

}

else {
// Definition de l'etat deconnecte
$_SESSION['etat'] = 'etat_accueilNonConnecte';
 //echo "etatdeconnecte";
// Definition des données structurelles de la vue
  $donneesVue['zone_haute']=$vuesElementaires['vueElementaire_banniere'];
  $donneesVue['zone_info']=$vuesElementaires['vueElementaire_infoconnecte'];
  $donneesVue['zone_onglets']=$vuesElementaires['vueElementaire_onglets'];
  $donneesVue['zone_gauche']=$vuesElementaires['vueElementaire_recherche'];
  $donneesVue['zone_droite']=$vuesElementaires['vueElementaire_identifiantsIncorrects'];
  $donneesVue['zone_centrale']=$vuesElementaires['vueElementaire_toutesAnnonces'];
  $donneesVue['style']=$feuillesDeStyle['feuille1'];


  // Enregistrement des donnees de la vue dans la session
  $_SESSION['donneesVue']=$donneesVue;
  
}
?>


