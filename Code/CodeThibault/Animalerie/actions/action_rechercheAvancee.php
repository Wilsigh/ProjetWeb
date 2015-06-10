<?php


// -------------------------------------------------------
// Preparer les donnees de la vue resultante
// -------------------------------------------------------
$donneesVue['zone_gauche']=$vuesElementaires['vueElementaire_rechercheAvancee'];
$donneesVue['zone_centrale']=$vuesElementaires['vueElementaire_toutesAnnonces'];

switch ($_SESSION['privilege']) {
	case 'client':
  
		// Definition des données structurelles de la vue
		$donneesVue['zone_haute']=$vuesElementaires['vueElementaire_banniere'];
		$donneesVue['zone_info']=$vuesElementaires['vueElementaire_infoconnecte'];
		$donneesVue['style']=$feuillesDeStyle['feuille1'];
		
		break;
    
	case'pro':
  
		// Definition des données structurelles de la vue
		$donneesVue['zone_haute']=$vuesElementaires['vueElementaire_banniere'];
		$donneesVue['zone_info']=$vuesElementaires['vueElementaire_infoconnecte'];
		$donneesVue['zone_onglets']=$vuesElementaires['vuePro_onglets'];
		$donneesVue['style']=$feuillesDeStyle['feuille1'];

		break;

	case'admin':
  
		// Definition des données structurelles de la vue
		$donneesVue['zone_haute']=$vuesElementaires['vueElementaire_banniere'];
		$donneesVue['zone_info']=$vuesElementaires['vueElementaire_infoconnecte'];
		$donneesVue['zone_onglets']=$vuesElementaires['vueAdmin_onglets'];
		$donneesVue['style']=$feuillesDeStyle['feuille1'];

		break;



	default:
		// Definition de l'etat deconnecte
		$_SESSION['etat'] = 'etat_accueilNonConnecte';
		//echo "etatdeconnecte";
		// Definition des données structurelles de la vue
		$donneesVue['zone_haute']=$vuesElementaires['vueElementaire_banniere'];
		$donneesVue['zone_info']=$vuesElementaires['vueElementaire_infoconnecte'];
		$donneesVue['zone_onglets']=$vuesElementaires['vueElementaire_compteNonConnecte'];
		$donneesVue['style']=$feuillesDeStyle['feuille1'];

}


// Définition des données DYNAMIQUES de la vue
    $donneesVue['nbResultats']=$nbResultats;
    $donneesVue['resultats']=$annoncesResultats;
  // Enregistrement des donnees de la vue dans la session
  $_SESSION['donneesVue']=$donneesVue;


?>  