<?php

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
  $donneesVue['zone_info']=$vuesElementaires['vueElementaire_infoconnecte'];
  $donneesVue['zone_gauche']=$vuesElementaires['vueElementaire_recherche'];
  $donneesVue['zone_droite']=$vuesElementaires['vueElementaire_compteNonConnecte'];
  $donneesVue['zone_centrale']=$vuesElementaires['vueElementaire_toutesAnnonces'];
  $donneesVue['style']=$feuillesDeStyle['feuille1'];


  // Enregistrement des donnees de la vue dans la session
  $_SESSION['donneesVue']=$donneesVue;

?>  
