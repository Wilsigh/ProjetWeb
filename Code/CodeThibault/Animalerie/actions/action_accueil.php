<?php


// -------------------------------------------------------
// Executer l'action
// ---------------------------------------------------------

switch ($_SESSION['privilege']) {
	case 'client':
  
		// Definition des données structurelles de la vue
		$donneesVue['zone_haute']=$vuesElementaires['vueElementaire_banniere'];
		$donneesVue['zone_info']=$vuesElementaires['vueClient_compteConnecte'];
		$donneesVue['zone_gauche']=$vuesElementaires['vueElementaire_recherche'];
		$donneesVue['zone_centrale']=$vuesElementaires['vueElementaire_toutesAnnonces'];
		$donneesVue['style']=$feuillesDeStyle['feuille1'];
		
		// Enregistrement des donnees de la vue dans la session
		$_SESSION['donneesVue']=$donneesVue;
		break;
    
	case'pro':
  
		// Definition des données structurelles de la vue
		$donneesVue['zone_haute']=$vuesElementaires['vueElementaire_banniere'];
		$donneesVue['zone_info']=$vuesElementaires['vuePro_compteConnecte'];
		$donneesVue['zone_onglets']=$vuesElementaires['vuePro_onglets'];
		$donneesVue['zone_gauche']=$vuesElementaires['vueElementaire_recherche'];
		$donneesVue['zone_centrale']=$vuesElementaires['vueElementaire_toutesAnnonces'];
		$donneesVue['style']=$feuillesDeStyle['feuille1'];
  
		// Enregistrement des donnees de la vue dans la session
		$_SESSION['donneesVue']=$donneesVue;
		break;


	case'admin':
  
		// Definition des données structurelles de la vue
		$donneesVue['zone_haute']=$vuesElementaires['vueElementaire_banniere'];
		$donneesVue['zone_info']=$vuesElementaires['vueAdmin_compteConnecte'];
		$donneesVue['zone_onglets']=$vuesElementaires['vueAdmin_onglets'];
		$donneesVue['zone_gauche']=$vuesElementaires['vueElementaire_recherche'];
		$donneesVue['zone_centrale']=$vuesElementaires['vueElementaire_toutesAnnonces'];
		$donneesVue['style']=$feuillesDeStyle['feuille1'];
  
		// Enregistrement des donnees de la vue dans la session
		$_SESSION['donneesVue']=$donneesVue;
		break;



	default:
		// Definition de l'etat deconnecte
		$_SESSION['etat'] = 'etat_accueilNonConnecte';
		//echo "etatdeconnecte";
		// Definition des données structurelles de la vue
		$donneesVue['zone_haute']=$vuesElementaires['vueElementaire_banniere'];
		$donneesVue['zone_info']=$vuesElementaires['vueElementaire_infoconnecte'];
		$donneesVue['zone_onglets']=$vuesElementaires['vueElementaire_compteNonConnecte'];
		$donneesVue['zone_gauche']=$vuesElementaires['vueElementaire_recherche'];
		$donneesVue['zone_centrale']=$vuesElementaires['vueElementaire_toutesAnnonces'];
		$donneesVue['style']=$feuillesDeStyle['feuille1'];


		// Enregistrement des donnees de la vue dans la session
		$_SESSION['donneesVue']=$donneesVue;

}

?>  