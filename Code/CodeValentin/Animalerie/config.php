<?php
 include "baseDeDonnees/configBDD.php";
  // ----- PARAMETRES DE L'APPLICATION -----
  // ----- Ces parametres regulent le  -----
  // ----- comportement du controleur  -----

  // Configuration des MODELES DE VUE de l'aplication
  // Pour chaque modele de vue on donne son nom et le fichier qui l'implemente
  $modelesVues=array('modeleVue_4zones'=>'modelesVues/modeleVue_4zones.php',
					 'modeleVue_5zones'=>'modelesVues/modeleVue_5zones.php');

  // Configuration des VUES ELEMENTAIRES de l'aplication
  // Pour chaque vue elementaire on donne son nom et le fichier qui l'implemente
  $vuesElementaires=array('vueElementaire_toutesAnnonces' => 'vues/vueElementaire_toutesAnnonces.html',
							'vueElementaire_annoncesRecherche' => 'vues/vueElementaire_annoncesRecherche.html',
							'vueElementaire_compteConnecte' => 'vues/vueElementaire_compteConnecte.html',
							'vueElementaire_compteNonConnecte' => 'vues/vueElementaire_compteNonConnecte.html',
							'vueElementaire_compteCree' => 'vues/vueElementaire_compteCree.html',
							'vueElementaire_inscription' => 'vues/vueElementaire_inscription.html',
							'vueElementaire_identifiantsIncorrects' => 'vues/vueElementaire_identifiantsIncorrects.html',
							'vueElementaire_recherche' => 'vues/vueElementaire_recherche.html',
							'vueElementaire_onglets' => 'vues/vueElementaire_onglets.html',
							'vueElementaire_banniere' => 'vues/vueElementaire_banniere.html',
							'vueElementaire_enchainementInvalide' => 'vues/vueElementaire_enchainementInvalide.html',
							'vueElementaire_rechercheAvancee' => 'vues/vueElementaire_rechercheAvancee.html',
							
							'vueClient_compteConnecte' => 'vues/vuesClient/vueClient_compteConnecte.html',
							'vueClient_modifierCompte' => 'vues/vuesClient/vueClient_modifierCompte.html',
							
							'vuePro_compteConnecte' => 'vues/vuesPro/vuePro_compteConnecte.html',
							'vuePro_modifierCompte' => 'vues/vuesPro/vuePro_modifierCompte.html',
							'vuePro_onglets' => 'vues/vuesPro/vuePro_onglets.html',
							'vuePro_gestionAnnonces' => 'vues/vuesPro/vuePro_gestionAnnonces.html',
							'vuePro_gestionCommandes' => 'vues/vuesPro/vuePro_gestionCommandes.html',
							'vuePro_creationAnnonce' => 'vues/vuesPro/vuePro_creationAnnonce.html',
							'vuePro_annonceCree' => 'vues/vuesPro/vuePro_annonceCree.html',
							
							'vueAdmin_compteConnecte' => 'vues/vuesAdmin/vueAdmin_compteConnecte.html',
							'vueAdmin_modifierCompte' => 'vues/vuesAdmin/vueAdmin_modifierCompte.html',
							'vueAdmin_onglets' => 'vues/vuesAdmin/vueAdmin_onglets.html',
							'vueAdmin_gestionAnnonces' => 'vues/vuesAdmin/vueAdmin_gestionAnnonces.html',
							'vueAdmin_gestionCommandes' => 'vues/vuesAdmin/vueAdmin_gestionCommandes.html',
							'vueAdmin_gestionComptes' => 'vues/vuesAdmin/vueAdmin_gestionComptes.html',
							'vueAdmin_historique' => 'vues/vuesAdmin/vueAdmin_historique.html'
							
							);

  // Feuilles de styles utilisees pour la mise en forme des vues
   $feuillesDeStyle=array( 'feuille1' => 'feuillesDeStyle/feuille1.css');

  // ACTIONS 
  // Pour chaque action on donne son nom et le fichier qui l'implemente

  $action_initiale = 'action_initialiser';

  $action_si_enchainement_invalide = 'action_enchainementInvalide';

  $actions = array('action_initialiser' => 'actions/action_initialiser.php',
					'action_accueil' => 'actions/action_accueil.php',
					'action_connecter' => 'actions/action_connecter.php',
					'action_deconnecter' => 'actions/action_deconnecter.php',
					'action_enregistrerUtilisateur' => 'actions/action_enregistrerUtilisateur.php',
					'action_inscription' => 'actions/action_inscription.php',
					'action_rechercherAnnonce' => 'actions/action_rechercherAnnonce.php',
					'action_rechercheAvancee' => 'actions/action_rechercheAvancee.php',
					'action_enchainementInvalide' => 'actions/action_enchainementInvalide.php',
					
					'actionClient_modifierCompte' => 'actions/actionsClient/actionClient_modifierCompte.php',
					
					'actionPro_modifierCompte' => 'actions/actionsPro/actionPro_modifierCompte.php',
					'actionPro_gestionAnnonces' => 'actions/actionsPro/actionPro_gestionAnnonces.php',
					'actionPro_gestionCommandes' => 'actions/actionsPro/actionPro_gestionCommandes.php',
					'actionPro_creationAnnonce' => 'actions/actionsPro/actionPro_creationAnnonce.php',
					'actionPro_creerAnnonce' => 'actions/actionsPro/actionPro_creerAnnonce.php',
					'actionPro_supprimerAnnonce' => 'actions/actionsPro/actionPro_supprimerAnnonce.php',
				   
				    'actionAdmin_modifierCompte' => 'actions/actionsAdmin/actionAdmin_modifierCompte.php',
					'actionAdmin_gestionAnnonces' => 'actions/actionsAdmin/actionAdmin_gestionAnnonces.php',
					'actionAdmin_gestionCommandes' => 'actions/actionsAdmin/actionAdmin_gestionCommandes.php',
					'actionAdmin_gestionComptes' => 'actions/actionsAdmin/actionAdmin_gestionComptes.php',
					'actionAdmin_historique' => 'actions/actionsAdmin/actionAdmin_historique.php',
					'actionAdmin_supprimerAnnonce' => 'actions/actionsAdmin/actionAdmin_supprimerAnnonce.php',
					'actionAdmin_supprimerCompte' => 'actions/actionsAdmin/actionAdmin_supprimerCompte.php'
				   
				   
				   
				   );

  // ETATS
  // On definit l'etat initial de l'application puis
  // Pour chaque etat on donne son nom et la liste des actions autorisees
  // lorsque l'application est dans cet etat

  $etat_initial='etat_accueilNonConnecte';

  $etats = array();

  
  //Définition des actions permises en cas de compte non connecté
  $etats['etat_accueilNonConnecte']=array(
                                        'modeleVueAafficher'=>'modeleVue_4zones',
                                        'actionsAutorisees'=>array('action_initialiser','action_accueil',
																   'action_connecter','action_deconnecter',
																   'action_inscription','action_enregistrerUtilisateur',
																   'action_rechercherAnnonce','action_rechercheAvancee'
										                           )
										);

 //Définition des actions permises au Client
  $etats['etat_accueilClient']=array(
                                        'modeleVueAafficher'=>'modeleVue_4zones',
                                        'actionsAutorisees'=>array('action_initialiser','action_accueil',
																   'action_connecter','action_deconnecter',
																   'action_inscription','action_enregistrerUtilisateur',
																   'action_rechercherAnnonce','action_rechercheAvancee',
																   
																   'actionClient_modifierCompte'
										                           )
	
									);

//Définition des actions permises au Professionel						
  $etats['etat_accueilPro']=array(
                                        'modeleVueAafficher'=>'modeleVue_5zones',
                                        'actionsAutorisees'=>array('action_initialiser','action_accueil',
																   'action_connecter','action_deconnecter',
																   'action_inscription','action_enregistrerUtilisateur',
																   'action_rechercherAnnonce','action_rechercheAvancee',
																   
																   'actionPro_modifierCompte',
																   'actionPro_gestionAnnonces',
																   'actionPro_gestionCommandes',
																   'actionPro_creationAnnonce',
																   'actionPro_creerAnnonce',
																   'actionPro_supprimerAnnonce'
										                           )
									);
										
										
//Définition des actions permises à l'Administrateur										
  $etats['etat_accueilAdmin']=array(
                                        'modeleVueAafficher'=>'modeleVue_5zones',
                                        'actionsAutorisees'=>array('action_initialiser','action_accueil',
																   'action_connecter','action_deconnecter',
																   'action_inscription','action_enregistrerUtilisateur',
																   'action_rechercherAnnonce','action_rechercheAvancee',
																   
																   'actionAdmin_modifierCompte',
																   'actionAdmin_gestionAnnonces',
																   'actionAdmin_gestionCommandes',
																   'actionAdmin_gestionComptes',
																   'actionAdmin_historique',
																   'actionAdmin_supprimerAnnonce',
																   'actionAdmin_supprimerCompte'
										                           )
									);								
 
  // AUTRES PARAMETRES   
  // Titre general de l'application
  $titreApplication='Projet Animalerie';


  // configuration de l'affichage  des erreurs/warning de php

    // En phase de developpement :
       ini_set("error_reporting", E_ALL ^ E_NOTICE );  // afficher toutes les erreurs (E_All) sauf (^) les notices (E_NOTICE)

   // En phase de release :
      //ini_set("error_reporting",0); 




?>
