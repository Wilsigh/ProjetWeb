<?php


// -------------------------------------------------------
// Preparer les donnees de la vue resultante
// -------------------------------------------------------

  // Definition des donnees structurelles de la vue
  $donneesVue['zone_haute']=$vuesElementaires['vueElementaire_banniere'];
  $donneesVue['zone_onglets']=$vuesElementaires['vueAdmin_onglets'];
  $donneesVue['zone_gauche']=$vuesElementaires['vueElementaire_recherche'];
  $donneesVue['zone_droite']=$vuesElementaires['vueAdmin_compteConnecte'];
  $donneesVue['zone_centrale']=$vuesElementaires['vueAdmin_modifierCompte'];
  $donneesVue['style']=$feuillesDeStyle['feuille1'];


  // Enregistrement des donnees de la vue dans la session
  $_SESSION['donneesVue']=$donneesVue;


?>  
 