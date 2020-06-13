<?php
/**
** activation theme
**/



/* 

 feuilles de styles , javascript, jQuery_ui

*/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ), null, true );
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css' );

    if(is_page('espace-informatique')){
        wp_enqueue_script( 'pointcom_cybercafe', get_stylesheet_directory_uri() . '/js/cybercafe.js', array('jquery-ui-accordion'), '1.0.0', true );
    }
    if(is_page('formulaire-inscription')){
        wp_enqueue_script( 'pointcom_formulaire-inscription', get_stylesheet_directory_uri() . '/js/formulaire-inscription.js', array('jquery'), '1.0.0', true );
    }
    if(is_page('reparation')){
        wp_enqueue_script( 'pointcom_formulaire-inscription', get_stylesheet_directory_uri() . '/js/formulaire-demande-service.js', array('jquery'), '1.0.0', true );
    }
    if(is_front_page()){
        wp_enqueue_script( 'pointcom_accueil', get_stylesheet_directory_uri() . '/js/pointcom_accueil.js', array('jquery'), '1.0.0', true );
    }
}


/*

Inscription

*/

add_action('template_redirect', 'formulaire_inscription');

function formulaire_inscription()
{
	if (isset($_POST['inscription_submit']) && isset($_POST['inscription-verif'])) {
		if (wp_verify_nonce($_POST['inscription-verif'], 'formulaire_inscription')) {
		    $url = wp_get_referer();
			$nom = htmlspecialchars ( $_POST['nom'] );
			$prenom = htmlspecialchars ( $_POST['prenom'] );
			$pseudo =  $_POST['pseudo'];
			$telephone = htmlspecialchars ( $_POST['telephone'] );
			$mail = htmlspecialchars ( $_POST['mail'] );
			$adresse = htmlspecialchars ( $_POST['adresse'] );
			$complement_adresse = htmlspecialchars ( $_POST['complement_adresse'] );
			$code_postale = htmlspecialchars ( $_POST['code_postale'] );
			$ville = htmlspecialchars ( $_POST['ville'] );
			$pass =  $_POST['mot_de_passe'];
			$confirm_pass =  $_POST['confirmation_de_mot_de_passe'];
			$table_connexion_utilisateur = $wpdb->prefix . 'connexion_utilisateur';
			
			
			 global $wpdb;
            $table_infos_utilisateur = $wpdb->prefix . 'infos_utilisateur';
        	$sql_verif_pseudo = $wpdb->prepare("SELECT pseudo FROM ".$table_infos_utilisateur." WHERE pseudo = '%s'", $pseudo );
        	$verif_pseudo = $wpdb->get_results($sql_verif_pseudo);
    		foreach ($verif_pseudo[0] as $key => $value) {
			    $verif_pseudo = $value;
			}
			
			if ( !preg_match("#^[0-9]{5,5}$#",$code_postale) || 
			
			     !preg_match("#^0[1-99]([-. ]?[0-9]{2}){4}$#", 	$telephone) ||
			     
			     !preg_match("#^^[a-zA-ZéèîïÉÈÎÏ][a-zA-Zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zA-Zéèêàçîï]+)?$#",$nom) ||
			     
			     !preg_match("#^^[a-zA-ZéèîïÉÈÎÏ][a-zA-Zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zA-Zéèêàçîï]+)?$#",$prenom) ||
			     
			     !preg_match("#^^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$#",$ville) ||
			     
			      !preg_match("#^(?=.{8,}$)(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9]).*$#",$pass) ||
			     
			     $pass != $confirm_pass ||
			     
			     $verif_pseudo ==  $pseudo ) {
		            
		            $_POST['formulaire_success'] = 'error';
			        
			    	if (!preg_match("#^[0-9]{5,5}$#",$code_postale) )
                    {
                        $_POST['statut_code_postale'] = 'error';
                        wp_safe_redirect($url);
                    }
        
        			if (!preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#", 	$telephone) )
                    {
                     $_POST['statut_tel'] = 'error';
                        wp_safe_redirect($url);
                    }
        
                    if (!preg_match("#^^[a-zA-ZéèîïÉÈÎÏ][a-zA-Zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zA-Zéèêàçîï]+)?$#",$nom) )   
                    {
                        $_POST['statut_nom'] = 'error';
                        wp_safe_redirect($url);
                    }
                	if (!preg_match("#^^[a-zA-ZéèîïÉÈÎÏ][a-zA-Zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zA-Zéèêàçîï]+)?$#",$prenom) )   
                    {
                        $_POST['statut_prenom'] = 'error';
                        wp_safe_redirect($url);
                    }
                	if (!preg_match("#^^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$#",$ville) )   
                    {
                        $_POST['statut_ville'] = 'error';
                        wp_safe_redirect($url);
                    }
                   
                   if ( !preg_match("#^(?=.{8,}$)(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9]).*$#",$pass) )   
                    {
                        $_POST['statut_pass'] = 'error';
                        wp_safe_redirect($url);
                    }
                    
                	if ($verif_pseudo ==  $pseudo){
                	     $_POST['statut_pseudo'] = 'error';
                       wp_safe_redirect($url);
                	}
                	if ($pass != $confirm_pass){
                	     $_POST['statut_confirm_pass'] = 'error';
                       wp_safe_redirect($url);
                	}
                	
             
            	
    			}
            
            else { 	
                    $_POST['formulaire_success'] = 'success';
                    $pass = password_hash($pass, PASSWORD_DEFAULT);
                    global $wpdb;
                    $table_infos_utilisateur = $wpdb->prefix . 'infos_utilisateur';
                    $sql_insertion_formulaire = $wpdb->prepare("INSERT INTO  ".$table_infos_utilisateur."  (nom,prenom,pseudo,tel,mail,adresse,complement_adresse,cp,ville,statut,date_inscription) VALUES
                    ('%s','%s','%s','%d','%s','%s','%s','%d','%s','public', NOW())",$nom,$prenom,$pseudo ,$telephone,$mail,$adresse,$complement_adresse,$code_postale,$ville);
                	$wpdb->get_results(	$sql_insertion_formulaire);
                	
                	 $id_utilisateur = id_utilisateur($pseudo);

                	global $wpdb;
                    $table_connexion_utilisateur = $wpdb->prefix . 'connexion_utilisateur';
                    $sql_insertion_id_connexion = $wpdb->prepare("INSERT INTO  ".$table_connexion_utilisateur."  (pseudo,Mdp,utilisateur) VALUES
                    ('%s','%s','%d')",$pseudo ,$pass,$id_utilisateur);
                	$wpdb->get_results(	$sql_insertion_id_connexion);
            }
		}
	}
}



/*

 Connexion Utilisateur

*/

add_action('init','redirection_utilisateur');

function redirection_utilisateur(){
	if(isset($_POST['redirection'])){
	$url = site_url('',  null);
			setcookie('id_session','',time(),"/");
			unset($_COOKIE['id_session']);
			wp_safe_redirect($url);			
	}
}

add_action('template_redirect','deconnexionMembre');

function deconnexionMembre(){
	$url = site_url('',  null);
	if(isset($_POST['deconnexion_submit']) && isset($_POST['deconnexion-verif'])){
		if (wp_verify_nonce($_POST['deconnexion-verif'], 'deconnexion')) {
			setcookie('id_session','',time(),"/");
			unset($_COOKIE['id_session']);
			wp_safe_redirect($url);			
		}
	}
}

add_action('template_redirect','connexionMembre');

function connexionMembre(){
	$url = site_url('',  null);
	if(isset($_POST['connexion_submit']) && isset($_POST['connexion-verif'])){
		if (wp_verify_nonce($_POST['connexion-verif'], 'connexion')) {
			$pass = ($_POST['password']);
			$pseudo = ($_POST['pseudo']);
			

			if ($pseudo == "") {
				$url = wp_get_referer();
				$_POST['statut'] = 'court_m';
				setcookie('id_session','',time(),"/");
				unset($_COOKIE['id_session']);
				wp_safe_redirect($url);
			}
			else if ($pass == "") {
				$url = wp_get_referer();
				$_POST['statut'] = 'court_p';
				setcookie('id_session','',time(),"/");
				unset($_COOKIE['id_session']);
				
				wp_safe_redirect($url);
			}
			else{
				global $wpdb;
				$table_connexion_utilisateur = $wpdb->prefix . 'connexion_utilisateur';
				$sql_pseudo = $wpdb->prepare("SELECT pseudo FROM " . $table_connexion_utilisateur . " WHERE pseudo = '%s'", $pseudo);
				$verif_pseudo = $wpdb->get_results($sql_pseudo);
				$sql_pass = $wpdb->prepare("SELECT Mdp FROM " . $table_connexion_utilisateur . " WHERE pseudo ='%s'", $pseudo);
				$verif_pass = $wpdb->get_results($sql_pass);
				foreach ($verif_pass[0] as $key => $value) {
					$verif_pass = $value;
				}
				if(!$verif_pseudo){
					$url = wp_get_referer();
					// $url = add_query_arg('status', 'membre_not_exist', wp_get_referer());
					$_POST['statut'] = 'membre_not_exist';
					setcookie('id_session','',time(),"/");
					unset($_COOKIE['id_session']);
					wp_safe_redirect($url);
				}
				else if(!$verif_pass){
					$url = wp_get_referer();
					$_POST['statut'] = 'pass_not_exist';
					setcookie('id_session','',time(),"/");
					unset($_COOKIE['id_session']);
					wp_safe_redirect($url);
				}
				else{
					if (password_verify($pass, $verif_pass)) {
					    
					    $id_utilisateur = id_utilisateur($pseudo);
						$site = site_url('',  null);
						$id = uniqid();
						
						setcookie('id_session',$id,time()+3600,"/");
						$_COOKIE['id_session'] = $id;
					
						
						$table_session = $wpdb->prefix . 'session_utilisateur';
						$sql_exist_session = $wpdb->prepare("SELECT pseudo FROM ".$table_session." WHERE pseudo = '%s'","$pseudo" );
						$exist_session = $wpdb->get_results($sql_exist_session);
						foreach ($exist_session[0] as $key => $value) {
							$exist_session = $value;
						}
						if($exist_session == $pseudo){
						    $_POST['id_utilisateur'] = $id_utilisateur;
						    global $wpdb;
						    $table_session = $wpdb->prefix . 'session_utilisateur';
							$sql_session = $wpdb->prepare("UPDATE ".$table_session." SET id_session = %s, pseudo = '%s', utilisateur = %d, date_connexion = NOW() WHERE pseudo = '%s'",$id, $pseudo, $id_utilisateur ,$pseudo);
							$wpdb->query($sql_session);
						}
						else{
						    global $wpdb;
						    $table_session = $wpdb->prefix . 'session_utilisateur';
							$sql_session = $wpdb->prepare("INSERT INTO ".$table_session." (id_session, pseudo, utilisateur, date_connexion) Value ('%s','%s','%s',NOW())", $id, $pseudo ,$id_utilisateur);
							$wpdb->query($sql_session);						
						}
						$_POST['date'] = $date_inscription = strtotime(date_inscription($id));
						$date_inscription = strtotime(date_inscription($id));
						$today = strtotime(date("Y-m-d"));
						$timestampe_periode_inscription = $today - $date_inscription;
						if($timestampe_periode_inscription == 0){
						    $nbr_jours_periode_inscription = 0; 
						}
						else{
						    $nbr_jours_periode_inscription = $timestampe_periode_inscription/86400;
						}
						
						if($nbr_jours_periode_inscription > 365){
						    $url = site_url('/compte-perime',  null);
						    wp_safe_redirect($url);
						}
						
						
						
						$url = wp_get_referer();
						wp_safe_redirect($url);
					}
					else {
					    $_POST['pass'] = $verif_pass;
						$url = wp_get_referer();
						$_POST['statut'] = 'pass_not_exist';
						setcookie('id_session','',time(),"/");
						unset($_COOKIE['id_session']);
						wp_safe_redirect($url);
					}
				}
				
			}
		}
	}
}

add_action( 'init', 'date_inscription' );
function date_inscription($id_session) {
    global $wpdb;
    $table_session_utilisateur = $wpdb->prefix . 'session_utilisateur';
    $table_infos_utilisateur = $wpdb->prefix . 'infos_utilisateur';
	$sql_date_inscription = $wpdb->prepare("SELECT date_inscription from ".$table_infos_utilisateur." LEFT JOIN ".$table_session_utilisateur." ON ".$table_session_utilisateur.".utilisateur = ".$table_infos_utilisateur.".id WHERE ".$table_session_utilisateur.".id_session = '%s' ","$id_session" );
	$date_inscription = $wpdb->get_results($sql_date_inscription);
	$date_inscription_array = $date_inscription[0];
	foreach ($date_inscription_array as $key => $value) {
					$date_inscription = $value;
				}
	return $date_inscription;
}

add_action( 'init', 'statut_utilisateur' );
function statut_utilisateur($id_session) {
    global $wpdb;
    $table_session_utilisateur = $wpdb->prefix . 'session_utilisateur';
    $table_infos_utilisateur = $wpdb->prefix . 'infos_utilisateur';
	$sql_statut_utilisateur = $wpdb->prepare("SELECT statut from ".$table_infos_utilisateur." left join ".$table_session_utilisateur." ON ".$table_infos_utilisateur.".id = ".$table_session_utilisateur.".utilisateur WHERE ".$table_session_utilisateur.".id_session = '%s' ","$id_session" );
	$statut_utilisateur = $wpdb->get_results($sql_statut_utilisateur);
	$statut_utilisateur_array = $statut_utilisateur[0];
	foreach ($statut_utilisateur_array as $key => $value) {
					$statut_utilisateur = $value;
				}
	return $statut_utilisateur;
}

add_action( 'init', 'id_utilisateur' );
function id_utilisateur($pseudo) {
    global $wpdb;
    $table_infos_utilisateur = $wpdb->prefix . 'infos_utilisateur';
	$sql_id_utilisateur = $wpdb->prepare("SELECT id FROM ".$table_infos_utilisateur." WHERE pseudo = '%s'","$pseudo" );
	$id_utilisateur = $wpdb->get_results($sql_id_utilisateur);
	foreach ($id_utilisateur[0] as $key => $value) {
					$id_utilisateur = $value;
				}
	return $id_utilisateur;
}

add_action( 'init', 'id_utilisateur_session' );
function id_utilisateur_session($id_session) {
    global $wpdb;
    $table_session_utilisateur = $wpdb->prefix . 'session_utilisateur';
	$sql_id_utilisateur = $wpdb->prepare("SELECT utilisateur FROM `".$table_session_utilisateur."` WHERE id_session = '%s' GROUP BY utilisateur","$id_session" );

	$id_utilisateur = $wpdb->get_results($sql_id_utilisateur);
	foreach ($id_utilisateur[0] as $key => $value) {
					$id_utilisateur = $value;
				}
	return $id_utilisateur;
}

/*

    Gestion Tickets

*/

add_action('init','tarifs_tickets');

function tarifs_tickets(){
	$url = site_url('',  null);
		global $wpdb;
	    $table_tarifs_tickets = $wpdb->prefix . 'tarifs_tickets';
		$sql_tarifs_tickets = $wpdb->prepare("SELECT * FROM ".$table_tarifs_tickets);
		$tarifs_tickets = $wpdb->get_results($sql_tarifs_tickets);
		return $tarifs_tickets;
}

add_action('template_redirect','temps_ticket');

function temps_ticket($num_ticket){

		global $wpdb;
	    $table_tarifs_tickets = $wpdb->prefix . 'tarifs_tickets';
		$sql_temps_ticket = $wpdb->prepare("SELECT temps FROM ".$table_tarifs_tickets." where id = '%s' ",$num_ticket);
		$temps_ticket = $wpdb->get_results($sql_temps_ticket);
		return $temps_ticket;
}


add_action('init','demande_ticket');

function demande_ticket (){
    if(isset($_POST['demande_ticket_submit']) && isset($_POST['demande_ticket-verif'])){
		if (wp_verify_nonce($_POST['demande_ticket-verif'], 'demande_ticket')) {
            $url = wp_get_referer();
		    $statut = $_POST['statut'];
		    $num_ticket = $_POST['select_ticket'];
		    $temps_ticket = temps_ticket($num_ticket);
		    $id_utilisateur = $_POST['id_utilisateur'];
    		global $wpdb;
    		$table_tarifs_tickets = $wpdb->prefix . 'tarifs_tickets';
    		$sql_prix_ticket = $wpdb->prepare("SELECT tarif_".$statut." FROM ".$table_tarifs_tickets." WHERE id = '%s';",$num_ticket);
		    $prix_ticket = $wpdb->get_results($sql_prix_ticket);
		    foreach($prix_ticket as $key => $value){
		        foreach($value as $indice => $prix){
		            $prix_ticket = $prix;
		        }
		    }
		    $_POST['test'] = $prix_ticket;
    		
    	    $table_demande_tickets = $wpdb->prefix . 'demande_tickets';
			$sql_demande_ticket = $wpdb->prepare("INSERT INTO ".$table_demande_tickets." (temps, numéros_ticket,utilisateur,statut_utilisateur,statut_demande,prix,nombre_ticket,total_tarif_tickets,Date_demande) Values ('%s','%s','%s','%s','en attente','%s','1','%s',NOW())",$temps_ticket[0]->temps,$num_ticket,$id_utilisateur,$statut,$prix_ticket,$prix_ticket);
            $wpdb->query($sql_demande_ticket);
			
		}
	}
}



/*

    Gestion demandes de services

*/

/* Configure le script en français */
setlocale (LC_TIME, 'fr_FR','fra');
//Définit le décalage horaire par défaut de toutes les fonctions date/heure  
date_default_timezone_set("Europe/Paris");
//Definit l'encodage interne
mb_internal_encoding("UTF-8");

//Convertir une date US vers une date en français affichant le jour de la semaine
function dateLongue($date,$heure = 'yes'){
    if($heure == 'yes')
    {
        $strDate = mb_convert_encoding('%A %d %B %Y à %Hh%M','ISO-8859-9','UTF-8');  
    }
    else
    {
        $strDate = mb_convert_encoding('%A %d %B %Y','ISO-8859-9','UTF-8');    
    }
    return iconv("ISO-8859-9","UTF-8",strftime($strDate ,strtotime($date))); 
}
add_action('template_redirect','recap_demande');
function recap_demande($date){
    $id_session = $_COOKIE['id_session'];
    $id_utilisateur = id_utilisateur_session($id_session);
    global $wpdb;
    $table_demande_service = $wpdb->prefix . 'demande_service';
	$sql_recap_demande = $wpdb->prepare("SELECT * FROM ".$table_demande_service." WHERE date_demande = '%s' AND utilisateur = '%s' ",$date,$id_utilisateur);
	$recap_demande = $wpdb->get_results($sql_recap_demande);
    return $recap_demande;
}
add_action('template_redirect','supprime_demande');
function supprime_demande($id_commande){
    global $wpdb;
    $table_demande_service = $wpdb->prefix . 'demande_service';
	$sql_supprime_demande = $wpdb->prepare("DELETE FROM ".$table_demande_service." WHERE id = '".$id_commande."'");
	$supprime_demande = $wpdb->get_results($sql_supprime_demande);
    return $supprime_demande;
}

add_action('template_redirect','annulation_demande');

function annulation_demande(){
    
	if(isset($_POST['annulation_submit']) && isset($_POST['annulation-verif'])){
		if (wp_verify_nonce($_POST['annulation-verif'], 'annulation')) {
		    $id_commande = $_POST['id_commande'];
            supprime_demande($id_commande);
        	$url = site_url('',  null);
			wp_safe_redirect($url);			
		}
	}
}

add_action('init','recap_demande');

function date_demande($id_session){
    global $wpdb;
    $table_infos_utilisateur = $wpdb->prefix . 'infos_utilisateur';
	$sql_date_demande = $wpdb->prepare("SELECT date_demande FROM wp_demande_service LEFT JOIN wp_session_utilisateur ON wp_demande_service.utilisateur = wp_session_utilisateur.utilisateur WHERE id_session = '".$id_session."' ORDER BY date_demande DESC LIMIT 1 ");
	$date_demande = $wpdb->get_results($sql_date_demande);
	foreach ($date_demande[0] as $key => $value) {
			$date_demande = $value;
		}
	return $date_demande;
}

add_action('init','date_demande');


function tarif_simple($service){
    global $wpdb;
    $table_tarifs_services = $wpdb->prefix . 'tarifs_services';
	$sql_tarifs_services = $wpdb->prepare("SELECT  ".$service." FROM ".$table_tarifs_services." WHERE id = '1'");
	$tarifs_services = $wpdb->get_results($sql_tarifs_services);
	foreach ($tarifs_services[0] as $key => $value) {
			$tarifs_services = $value;
		}
	return $tarifs_services;
}

add_action('init','tarif_simple');


function formulaire_demande_service(){
    $id_session = $_COOKIE['id_session'];
    $id_utilisateur = id_utilisateur_session($id_session);
	$url = site_url('/confirmation-demande-service/',  null);
	if(isset($_POST['demande-service_submit']) && isset($_POST['demande_service-verif'])){
		if (wp_verify_nonce($_POST['demande_service-verif'], 'formulaire_demande-service')) {

		    if($_POST['diag_pc_laptop_mac'] == 'true'){
		        $diag_pc_laptop_mac = 1;
		        $tarif_diag_pc_laptop_mac = "tarif_diag_pc_laptop_mac";
		        $tarif_diag_pc_laptop_mac = tarif_simple($tarif_diag_pc_laptop_mac);
		    }
		    else{
		        $diag_pc_laptop_mac = 0;
		        $tarif_diag_pc_laptop_mac = 0;
		    }
		    
		    if($_POST['diag_autre'] == 'true'){
		        $diag_autre = 1;
		        $tarif_diag_autre = "tarif_diag_smartphone_composant";
		        $tarif_diag_autre = tarif_simple($tarif_diag_autre);
		    }
		    else{
		        $diag_autre = 0;
		        $tarif_diag_autre = 0;
		    }
		    if($_POST['install_systeme'] == 'true'){
		        $install_systeme = 1;
		        $tarif_install_systeme = "tarif_install_systeme";
		        $tarif_install_systeme = tarif_simple($tarif_install_systeme);
		    }
		    else{
		        $install_systeme = 0;
		        $tarif_install_systeme = 0;
		    }
		    if($_POST['install_suite_logiciel'] == 'true'){
		        $install_suite_logiciel = 1;
		        $tarif_install_suite_logiciel = "tarif_install_suite_logiciel";
		        $tarif_install_suite_logiciel = tarif_simple($tarif_install_suite_logiciel);
		        $_POST['test'] = $tarif_install_suite_logiciel;
		    }
		    else{
		        $install_suite_logiciel = 0;
		        $tarif_install_suite_logiciel = 0;
		        
		    }
		    
		    
		    
		    if($_POST['install_logiciel_unite'] == 'Nombre de logiciels à installer'){
		        
		        $install_logiciel_unite = 0;
		        $nbr_install_logiciel = 0;
		        $tarif_install_logiciel_unite = 0;
		    }
		    else{

		        $install_logiciel_unite = 1;
		        $nbr_install_logiciel = 1;
		        if($_POST['install_logiciel_unite'] == '1: 15€'){
	                global $wpdb;
		            $service = "tarif_install_logiciel_unitaire";
                    $table_tarifs_services = $wpdb->prefix . 'tarifs_services';
                	$sql_tarifs_services = $wpdb->prepare("SELECT ".$service." FROM ".$table_tarifs_services." WHERE id= 1");
                	$tarif_install_logiciel_unite = $wpdb->get_results($sql_tarifs_services);
                	foreach ($tarif_install_logiciel_unite[0] as $key => $value) {
                			$tarif_install_logiciel_unite = $value;
            		}
            		$_POST['test'] = $tarif_install_logiciel_unite;
	
		        }
		        if($_POST['install_logiciel_unite'] == '2: 25€'){
	                global $wpdb;
	                $nbr_install_logiciel = 2;
		            $service = "tarif_install_logiciel_unitaire";
		            $table_tarifs_services = $wpdb->prefix . 'tarifs_services';
		            $sql_tarifs_services = $wpdb->prepare("SELECT ".$service." FROM ".$table_tarifs_services." WHERE id= 2");
                	$tarif_install_logiciel_unite = $wpdb->get_results($sql_tarifs_services);
                	foreach ($tarif_install_logiciel_unite[0] as $key => $value) {
                			$tarif_install_logiciel_unite = $value;
            		}
            		$_POST['test'] = $tarif_install_logiciel_unite;
		        }
		        if($_POST['install_logiciel_unite'] == '3: 35€'){
	                global $wpdb;
	                $nbr_install_logiciel = 3;
		            $service = "tarif_install_logiciel_unitaire";
		            $table_tarifs_services = $wpdb->prefix . 'tarifs_services';
		            $sql_tarifs_services = $wpdb->prepare("SELECT ".$service." FROM ".$table_tarifs_services." WHERE id= 3");
                	$tarif_install_logiciel_unite = $wpdb->get_results($sql_tarifs_services);
                	foreach ($tarif_install_logiciel_unite[0] as $key => $value) {
                			$tarif_install_logiciel_unite = $value;
            		}
            		$_POST['test'] = $tarif_install_logiciel_unite;
		        }
		        if($_POST['install_logiciel_unite'] == '4: 45€'){
	                global $wpdb;
	                $nbr_install_logiciel = 4;
		            $service = "tarif_install_logiciel_unitaire";
		            $table_tarifs_services = $wpdb->prefix . 'tarifs_services';
		            $sql_tarifs_services = $wpdb->prepare("SELECT ".$service." FROM ".$table_tarifs_services." WHERE id= 4");
                	$tarif_install_logiciel_unite = $wpdb->get_results($sql_tarifs_services);
                	foreach ($tarif_install_logiciel_unite[0] as $key => $value) {
                			$tarif_install_logiciel_unite = $value;
            		}
            		$_POST['test'] = $tarif_install_logiciel_unite;
		        }
		    }
			
			
			if($_POST['montage_unite_centrale'] == 'true'){
		        $montage_unite_centrale = 1;
		        $tarif_montage_unite_centrale = "tarif_montage_unite_centrale";
		        $tarif_montage_unite_centrale = tarif_simple($tarif_montage_unite_centrale);
		        $_POST['test'] = $tarif_montage_unite_centrale;
		    }
		    else{
		        $montage_unite_centrale = 0;
		        $tarif_montage_unite_centrale = 0;
		    }
		    
		    
		    
		    
		        
		    if($_POST['ajout_composant'] == 'Nombre de composants à installer'){
		        
		        $ajout_composant = 0;
		        $nbr_ajout_composant = 0;
		        $tarif_ajout_composant = 0;
		    }
		    else{

		        $ajout_composant = 1;
		        
		      if($_POST['ajout_composant'] == '1: 19€'){
		            $nbr_ajout_composant = 1;
	                global $wpdb;
		            $service = "tarif_ajout_composant";
                    $table_tarifs_services = $wpdb->prefix . 'tarifs_services';
                	$sql_tarifs_services = $wpdb->prepare("SELECT ".$service." FROM ".$table_tarifs_services." WHERE id= 1");
                	$tarif_ajout_composant = $wpdb->get_results($sql_tarifs_services);
                	foreach ($tarif_ajout_composant[0] as $key => $value) {
                			$tarif_ajout_composant = $value;
            		}
            		$_POST['test'] = $tarif_ajout_composant;
	
		        }
		        
		        if($_POST['ajout_composant'] == '2: 38€'){
		            $nbr_ajout_composant = 2;
	                global $wpdb;
		            $service = "tarif_ajout_composant";
                    $table_tarifs_services = $wpdb->prefix . 'tarifs_services';
                	$sql_tarifs_services = $wpdb->prepare("SELECT ".$service." FROM ".$table_tarifs_services." WHERE id= 2");
                	$tarif_ajout_composant = $wpdb->get_results($sql_tarifs_services);
                	foreach ($tarif_ajout_composant[0] as $key => $value) {
                			$tarif_ajout_composant = $value;
            		}
            		$_POST['test'] = $tarif_ajout_composant;
	
		        }
		        
		        if($_POST['ajout_composant'] == '3: 57€'){
		            $nbr_ajout_composant = 3;
	                global $wpdb;
		            $service = "tarif_ajout_composant";
                    $table_tarifs_services = $wpdb->prefix . 'tarifs_services';
                	$sql_tarifs_services = $wpdb->prepare("SELECT ".$service." FROM ".$table_tarifs_services." WHERE id= 3");
                	$tarif_ajout_composant = $wpdb->get_results($sql_tarifs_services);
                	foreach ($tarif_ajout_composant[0] as $key => $value) {
                			$tarif_ajout_composant = $value;
            		}
            		$_POST['test'] = $tarif_ajout_composant;
	                
		            
		        }
		        
		      }
			
			  if($_POST['sauveguarde_inferieur_5gigas'] == 'true'){
		        $sauveguarde_inferieur_5gigas = 1;
		        $tarif_sauveguarde_5gigas = "tarif_sauveguarde_inferieur_5gigas";
		        $tarif_sauveguarde_5gigas = tarif_simple($tarif_sauveguarde_5gigas);
		        $_POST['test'] = $tarif_sauveguarde_5gigas;
		      }
		      else{
		        $sauveguarde_inferieur_5gigas = 0;
		        $tarif_sauveguarde_5giga = 0;
		     }
		     

        	if($_POST['sauveguarde_inferieur_20gigas'] == 'true'){
		       	$sauveguarde_inferieur_20gigas = 1;
		       	$tarif_sauveguarde_inferieur_20gigas = "tarif_sauveguarde_inferieur_20gigas";
		        $tarif_sauveguarde_inferieur_20gigas = tarif_simple($tarif_sauveguarde_inferieur_20gigas);
		        $_POST['test'] = $tarif_sauveguarde_inferieur_20gigas;
		    }
		    else{
		        	$sauveguarde_inferieur_20gigas = 0;
		        	$tarif_sauveguarde_inferieur_20gigas = 0;
		        	
		    }
		    
		    
		      if($_POST['sauveguarde_giga_additionnel'] == 'Au dessus de 20 gigas'){
		        $sauveguarde_giga_additionnel = 0;
		       
		    }
		    else{
                $tarif_sauveguarde_inferieur_20gigas = "tarif_sauveguarde_giga_additionnel";
		        $tarif_sauveguarde_unite = tarif_simple($tarif_sauveguarde_inferieur_20gigas);
		        
		        if($_POST['sauveguarde_giga_additionnel'] == '21 Go: 41€'){
		          $sauveguarde_giga_additionnel = 1;
  		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '22 Go: 43€'){
		          $sauveguarde_giga_additionnel = 2;
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '23 Go: 45€'){
		           $sauveguarde_giga_additionnel = 3;
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '24 Go: 47'){
		           $sauveguarde_giga_additionnel = 4;
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '25 Go: 49€'){
		           $sauveguarde_giga_additionnel = 5;
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '26 Go: 51€'){
		           $sauveguarde_giga_additionnel = 6;
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '27 Go: 53€'){
		           $sauveguarde_giga_additionnel = 7; 
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '28 Go: 55€'){
		           $sauveguarde_giga_additionnel = 8;
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '29 Go: 57€'){
		           $sauveguarde_giga_additionnel = 9;
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '30 Go: 59€'){
		           $sauveguarde_giga_additionnel = 10; 
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '31 Go: 61€'){
		           $sauveguarde_giga_additionnel = 11; 
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '32 Go: 63€'){
		           $sauveguarde_giga_additionnel = 12; 
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '33 Go: 65€'){
		           $sauveguarde_giga_additionnel = 13;  
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '34 Go: 67€'){
		           $sauveguarde_giga_additionnel = 14; 
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '35 Go: 69€'){
		           $sauveguarde_giga_additionnel = 15; 
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '36 Go: 71€'){
		           $sauveguarde_giga_additionnel = 16;  
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '37 Go: 73€'){
		           $sauveguarde_giga_additionnel = 17;
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '38 Go: 75€'){
		           $sauveguarde_giga_additionnel = 18; 
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '39 Go: 77€'){
		          $sauveguarde_giga_additionnel = 19;   
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '40 Go: 79€'){
		          $sauveguarde_giga_additionnel = 20;  
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '41 Go: 81€'){
		          $sauveguarde_giga_additionnel = 21; 
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '42 Go: 83€'){
		          $sauveguarde_giga_additionnel = 22;  
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '43 Go: 85€'){
		          $sauveguarde_giga_additionnel = 23;  
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '44 Go: 87€'){
		          $sauveguarde_giga_additionnel = 24;  
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '45 Go: 89€'){
		          $sauveguarde_giga_additionnel = 25;   
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '46 Go: 91€'){
		          $sauveguarde_giga_additionnel = 26;  
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '47 Go: 93€'){
		          $sauveguarde_giga_additionnel = 27;  
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '48 Go: 95€'){
		          $sauveguarde_giga_additionnel = 28;  
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '49 Go: 97€'){
		          $sauveguarde_giga_additionnel = 29;  
		        }
		        if($_POST['sauveguarde_giga_additionnel'] == '50 Go: 99€'){
		          $sauveguarde_giga_additionnel = 30;  
		        }
		        
		        $tarif_sauveguarde_superieur_20gigas = ($tarif_sauveguarde_unite * $sauveguarde_giga_additionnel) +39;
		        $_POST['test'] = $tarif_sauveguarde_superieur_20gigas; 
		  
		    }
		    
		    if($_POST['sauveguarde_superieur_50giga'] == 'true'){
		            $sauveguarde_superieur_50gigas = 1;
		            $tarif_sauveguarde_superieur_50gigas = "tarif_sauveguarde_superieur_50gigas";
		            $tarif_sauveguarde_superieur_50gigas = tarif_simple($tarif_sauveguarde_superieur_50gigas);
		            $_POST['test'] = $tarif_sauveguarde_superieur_50gigas; 
		    }
		    else{
		        $sauveguarde_superieur_50gigas = 0;
		        $tarif_sauveguarde_superieur_50gigas = 0;
		    }
		    
		    if($_POST['recuperation_disque_dur'] == 'true'){
	            $recuperation_disque_dur = 1;
	            $tarif_recuperation_disque_dur = "tarif_recuperation_disque_dur";
	            $tarif_recuperation_disque_dur = tarif_simple($tarif_recuperation_disque_dur);
	            $_POST['test'] = $tarif_recuperation_disque_dur; 
		    }
		    else{
		        $recuperation_disque_dur = 0;
		        $tarif_recuperation_disque_dur = 0;
		    }
		    
		    if($_POST['clone_disque_dur'] == 'true'){
	            $clone_disque_dur = 1;
	            $tarif_clone_disque_dur = "tarif_clone_disque_dur";
	            $tarif_clone_disque_dur = tarif_simple($tarif_clone_disque_dur);
	            $_POST['test'] = $tarif_clone_disque_dur; 
		    }
		    else{
		        $clone_disque_dur = 0;
		        $tarif_clone_disque_dur = 0; 
		    }
		    
		    
		    if($_POST['nettoyage_physique_laptop'] == 'true'){
	            $nettoyage_physique_laptop = 1;
	            $tarif_nettoyage_physique_laptop = "tarif_nettoyage_physique_laptop";
	            $tarif_nettoyage_physique_laptop = tarif_simple($tarif_nettoyage_physique_laptop);
	            $_POST['test'] = $tarif_nettoyage_physique_laptop; 
		    }
		    else{
		        $nettoyage_physique_laptop = 0;
		        $tarif_nettoyage_physique_laptop = 0; 
		    }
		   
		    
		    if($_POST['nettoyage_physique_uc'] == 'true'){
	            $nettoyage_physique_uc = 1;
	            $tarif_nettoyage_physique_uc = "tarif_nettoyage_physique_uc";
	            $tarif_nettoyage_physique_uc = tarif_simple($tarif_nettoyage_physique_uc);
	            $_POST['test'] = $tarif_nettoyage_physique_uc; 
		    }
		    else{
		        $nettoyage_physique_uc = 0;
		        $tarif_nettoyage_physique_uc = 0; 
		    }
		    
		    if($_POST['entretien_logiciel_annuel'] == 'true'){
	            $entretien_logiciel_annuel = 1;
	            $tarif_entretien_logiciel_annuel = "tarif_entretien_logiciel_annuel";
	            $tarif_entretien_logiciel_annuel = tarif_simple($tarif_entretien_logiciel_annuel);
	            $_POST['test'] = $tarif_entretien_logiciel_annuel; 
		    }
		    else{
		        $entretien_logiciel_annuel = 0;
		        $tarif_entretien_logiciel_annuel = 0;
		    }
    		
    		if($_POST['diag_desinfection_nettoyage'] == 'true'){
	            $diag_desinfection_nettoyage = 1;
	            $tarif_diag_desinfection_nettoyage = "tarif_diag_desinfection_nettoyage";
	            $tarif_diag_desinfection_nettoyage = tarif_simple($tarif_diag_desinfection_nettoyage);
	            $_POST['test'] = $tarif_diag_desinfection_nettoyage; 
		    }
		    else{
		        $diag_desinfection_nettoyage = 0;
		        $tarif_diag_desinfection_nettoyage = 0;
		    }  
		    
		    
		    
		    
		    
		    if($_POST['demande_urgence'] == 'true'){
	            $demande_urgence = 1;
	            $tarif_demande_urgence = "tarif_demande_urgence";
	            $tarif_demande_urgence = tarif_simple($tarif_demande_urgence);
	            $_POST['test'] = $tarif_demande_urgence; 
		    }
		    else{
		        $demande_urgence = 0;
		        $tarif_demande_urgence = 0;
		    }
		   
		     
		    
		    $commentaire = $_POST['commentaire'];


			global $wpdb;
			
            $total_tarif_services =  $tarif_diag_pc_laptop_mac + $tarif_diag_autre + $tarif_install_systeme + $tarif_install_suite_logiciel + $tarif_install_logiciel_unite + $tarif_montage_unite_centrale + $tarif_ajout_composant + $tarif_sauveguarde_5gigas + $tarif_sauveguarde_inferieur_20gigas + $tarif_sauveguarde_superieur_20gigas + $tarif_sauveguarde_superieur_50gigas +  $tarif_recuperation_disque_dur +  $tarif_clone_disque_dur + $tarif_nettoyage_physique_laptop + $tarif_nettoyage_physique_uc + $tarif_entretien_logiciel_annuel + $tarif_diag_desinfection_nettoyage + $tarif_demande_urgence;
            $table_demande_service = $wpdb->prefix . 'demande_service';
        	$insertion_demande_service = $wpdb->prepare("INSERT INTO ".$table_demande_service." (utilisateur, diag_pc_laptop_mac , diag_smartphone_composant, install_systeme, install_suite_logiciel, install_logiciel_unitaire, nombre_install_logiciel, montage_unite_centrale,ajout_composant, nombre_ajout_composant, sauveguarde_inferieur_5gigas , sauveguarde_inferieur_20gigas , sauveguarde_giga_additionnel, sauveguarde_superieur_50gigas, recuperation_disque_dur, clone_disque_dur, nettoyage_physique_laptop, nettoyage_physique_uc, entretien_logiciel_annuel, diag_desinfection_nettoyage, demande_urgence, total_tarif_services,date_demande , commentaire) Value ('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s',NOW(),'%s')",$id_utilisateur,$diag_pc_laptop_mac,$diag_autre,$install_systeme,$install_suite_logiciel,$install_logiciel_unite,$nbr_install_logiciel, $montage_unite_centrale,  $ajout_composant,  $nbr_ajout_composant, $sauveguarde_inferieur_5gigas, 	$sauveguarde_inferieur_20gigas,$sauveguarde_giga_additionnel,$sauveguarde_superieur_50gigas,$recuperation_disque_dur,$clone_disque_dur,$nettoyage_physique_laptop,$nettoyage_physique_uc,$entretien_logiciel_annuel,$diag_desinfection_nettoyage,$demande_urgence,$total_tarif_services,$commentaire);
    		$wpdb->query($insertion_demande_service);
    		

    		wp_safe_redirect($url);
    		


			
            
			
		}
	}
}

add_action('init','formulaire_demande_service');

/*

    Gestion mon_espace

*/



add_action('template_redirect','modification_utilisateur');
function modification_utilisateur(){
	$url = site_url('formulaire-modification-mon-espace',  null);
	if(isset($_POST['modification_utilisateur_submit']) && isset($_POST['modification-verif'])){
		if (wp_verify_nonce($_POST['modification-verif'], 'modification')) {
			$id_utilisateur = $_POST['id_utilisateur'];
			$pseudo = $_POST['pseudo'];
			$nom = $_POST['nom'];
			$prenom = $_POST['prenom'];
		    $telephone = $_POST['telephone'];
			$mail = $_POST['mail'];
			$adresse = $_POST['adresse'];
			$complement_adresse = $_POST['complement_adresse'];
			$code_postal = $_POST['code_postale'];
			$ville = $_POST['ville'];
			$mot_de_passe = $_POST['mot_de_passe'];
			$confirmation_passe = $_POST['confirmation_de_mot_de_passe'];
			

        	$mot_de_passe = password_hash($mot_de_passe, PASSWORD_DEFAULT);

			global $wpdb;
            $table_infos_utilisateur = $wpdb->prefix . 'infos_utilisateur';
            $table_connexion_utilisateur = $wpdb->prefix.'connexion_utilisateur';
            
        	$sql_modifier_utilisateur = $wpdb->prepare("UPDATE ".$table_infos_utilisateur." 
        	SET pseudo = '%s',
            nom = '%s',
            prenom = '%s',
            tel = '%s',
            mail = '%s',
            adresse = '%s',
            complement_adresse = '%s',
            cp = '%s',
            ville = '%s'
            WHERE id = '".$id_utilisateur."'",$pseudo, $nom, $prenom, $telephone, $mail, $adresse, $complement_adresse, $code_postal, $ville );
        	$modifier_utilisateur = $wpdb->get_results($sql_modifier_utilisateur);
        	
        	
        	$sql_modifier_connexion_utilisateur = $wpdb->prepare("UPDATE ".$table_connexion_utilisateur." 
        	SET pseudo = '%s',
                Mdp = '%s'
            WHERE utilisateur = '".$id_utilisateur."'",$pseudo, $mot_de_passe);
        	$modifier_connexion_utilisateur = $wpdb->get_results($sql_modifier_connexion_utilisateur);
            return $modifier_utilisateur;

		
		}
	}
}

add_action('template_redirect','mes_demandes_de_services');
function mes_demandes_de_services($id_utilisateur){
    $id_session = $_COOKIE['id_session'];
    global $wpdb;
    $table_infos_utilisateur = $wpdb->prefix . 'infos_utilisateur';
    $table_demandes_de_services = $wpdb->prefix . 'demande_service';
	$sql_mes_demandes_de_services = $wpdb->prepare("SELECT * FROM ".$table_infos_utilisateur." LEFT JOIN ".$table_demandes_de_services." ON  ".$table_infos_utilisateur.".id = ".$table_demandes_de_services.".utilisateur  WHERE utilisateur = '".$id_utilisateur."'" );
	$mes_demandes_de_services = $wpdb->get_results($sql_mes_demandes_de_services);
	
	
    return $mes_demandes_de_services;
}

add_action('template_redirect','mes_demandes_de_tickets');
function mes_demandes_de_tickets($id_utilisateur){
    $id_session = $_COOKIE['id_session'];
    global $wpdb;
    $table_infos_utilisateur = $wpdb->prefix . 'infos_utilisateur';
    $table_demande_tickets = $wpdb->prefix . 'demande_tickets';
	$sql_mes_demandes_de_tickets = $wpdb->prepare("SELECT * FROM `".$table_infos_utilisateur."` LEFT JOIN ".$table_demande_tickets." ON  ".$table_infos_utilisateur.".id = ".$table_demande_tickets.".utilisateur where utilisateur ='%s'",$id_utilisateur);
	$mes_demandes_de_tickets = $wpdb->get_results($sql_mes_demandes_de_tickets);
	
	
    return $mes_demandes_de_tickets;
}

add_action('template_redirect','recap_mon_espace');
function recap_mon_espace($id_utilisateur){
    $id_session = $_COOKIE['id_session'];
   
    global $wpdb;
    $table_infos_utilisateur = $wpdb->prefix . 'infos_utilisateur';
	$sql_recap_mon_espace = $wpdb->prepare("SELECT * FROM ".$table_infos_utilisateur." WHERE id = '".$id_utilisateur."'" );
	$recap_mon_espace = $wpdb->get_results($sql_recap_mon_espace);
	
	
    return $recap_mon_espace;
}

add_action('template_redirect','supprime_utilisateur');
function supprime_utilisateur($id_utilisateur){
    $id_session = $_COOKIE['id_session'];
    global $wpdb;
    $table_infos_utilisateur = $wpdb->prefix . 'infos_utilisateur';
	$sql_supprime_utilisateur = $wpdb->prepare("DELETE FROM ".$table_infos_utilisateur." WHERE id = '".$id_utilisateur."'" );
	$supprime_utilisateur = $wpdb->get_results($sql_supprime_utilisateur);
	
	
    return $supprime_utilisateur;
}

add_action('template_redirect','suppression_utilisateur');

function suppression_utilisateur(){
	$url = site_url('',  null);
	if(isset($_POST['suppression_utilisateur_submit']) && isset($_POST['suppression-verif'])){
		if (wp_verify_nonce($_POST['suppression-verif'], 'suppression')) {
			$id_utilisateur = $_POST['id_utilisateur'];
			supprime_utilisateur($id_utilisateur);
			setcookie('id_session','',time(),"/");
			unset($_COOKIE['id_session']);
			wp_safe_redirect($url);			
		}
	}
}

add_action('template_redirect','changement_date_inscription');
function changement_date_inscription($id_utilisateur){
    $id_session = $_COOKIE['id_session'];
    global $wpdb;
    $table_infos_utilisateur = $wpdb->prefix . 'infos_utilisateur';
	$sql_changement_date_inscription = $wpdb->prepare("UPDATE wp_infos_utilisateur SET date_inscription = now() WHERE id = '".$id_utilisateur."'" );
	$changement_date_inscription = $wpdb->get_results($sql_changement_date_inscription);
    return $changement_date_inscription;
}

add_action('template_redirect','anniversaire_utilisateur');

function anniversaire_utilisateur(){
	$url = site_url('',  null);
	if(isset($_POST['anniversaire_utilisateur_submit']) && isset($_POST['anniversaire_utilisateur-verif'])){
		if (wp_verify_nonce($_POST['anniversaire_utilisateur-verif'], 'anniversaire_utilisateur')) {
			$id_utilisateur = $_POST['id_utilisateur'];
			changement_date_inscription($id_utilisateur);
			wp_safe_redirect($url);			
		}
	}
}

add_action('init','cron_anniversaire_utilisateur');

function cron_anniversaire_utilisateur(){
	global $wpdb;
    $table_infos_utilisateur = $wpdb->prefix . 'infos_utilisateur';
    $table_session = $wpdb->prefix . 'session_utilisateur';
	$sql_cron_anniversaire_utilisateur = $wpdb->prepare("DELETE ".$table_infos_utilisateur." FROM ".$table_infos_utilisateur." LEFT OUTER JOIN ".$table_session." ON ".$table_infos_utilisateur.".id = ".$table_session.".utilisateur WHERE DATEDIFF( NOW(), date_connexion) > 1095 " );
	$cron_anniversaire_utilisateur = $wpdb->get_results($sql_cron_anniversaire_utilisateur);
    return $cron_anniversaire_utilisateur;
}

/*

    Espace Administrateur

*/




add_action('init','logs_connexion');

function logs_connexion(){
    global $wpdb;
    $table_session_utilisateur = $wpdb->prefix . 'session_utilisateur';
	$sql_logs_connexion = $wpdb->prepare("SELECT * FROM ".$table_session_utilisateur." ORDER BY date_connexion DESC");
	$logs_connexion = $wpdb->get_results($sql_logs_connexion);

	return $logs_connexion;
}



add_action('init','modifier_statut');

function modifier_statut(){
	if(isset($_POST['modifier_statut_submit']) && isset($_POST['modifier_statut-verif'])){
		if (wp_verify_nonce($_POST['modifier_statut-verif'], 'modifier_statut')) {
		    $url = site_url('/informations-utilisateurs/',  null);
			$id_utilisateur = $_POST['id_utilisateur'];
			$statut_select = $_POST['statut_select'];
            global $wpdb;
            $table_infos_utilisateur = $wpdb->prefix . 'infos_utilisateur';
        	$sql_demande_validee = $wpdb->prepare("UPDATE ". $table_infos_utilisateur." SET statut = '%s' WHERE id = '%s';",$statut_select,$id_utilisateur);
        	$demande_validee = $wpdb->get_results($sql_demande_validee);
        	wp_safe_redirect($url);
        	return $demande_validee;	
		}
	}
}

add_action('init','modifier_statut_ticket');

function modifier_statut_ticket(){
	if(isset($_POST['modifier_statut_ticket_submit']) && isset($_POST['modifier_statut_ticket-verif'])){
		if (wp_verify_nonce($_POST['modifier_statut_ticket-verif'], 'modifier_statut_ticket')) {
			$id_demande_ticket = $_POST['id_demande_ticket'];
            global $wpdb;
            $table_demande_tickets = $wpdb->prefix . 'demande_tickets';
        	$sql_demande_tickets = $wpdb->prepare("UPDATE ".$table_demande_tickets." SET statut_demande = 'traitée' WHERE id = '%s';",$id_demande_ticket);
        	$demande_validee = $wpdb->get_results($sql_demande_tickets);
        	return $demande_tickets;	
		}
	}
}



function infos_utilisateur(){
    global $wpdb;
    $table_infos_utilisateur = $wpdb->prefix . 'infos_utilisateur';
	$sql_infos_utilisateur = $wpdb->prepare("SELECT * FROM ".$table_infos_utilisateur." ORDER BY ville ASC");
	$infos_utilisateur = $wpdb->get_results($sql_infos_utilisateur);

	return $infos_utilisateur;
}

function details_utilisateur(){
	if(isset($_POST['details_utilisateur_submit']) && isset($_POST['details_utilisateur-verif'])){
		if (wp_verify_nonce($_POST['details_utilisateur-verif'], 'details_utilisateur')) {
                $id_utilisateur = $_POST['id_utilisateur'];
                global $wpdb;
                $table_infos_utilisateur = $wpdb->prefix . 'infos_utilisateur';
            	$sql_detail_utilisateur = $wpdb->prepare("SELECT * from ".$table_infos_utilisateur." WHERE id = '%s' ","$id_utilisateur" );
            	$detail_utilisateur = $wpdb->get_results($sql_detail_utilisateur);
            
            	return $detail_utilisateur;
		}
	}
}

add_action('template_redirect','details_utilisateur');

function tickets_en_attente(){
    global $wpdb;
    $table_demandes_tickets = $wpdb->prefix . 'demande_tickets';
    $table_infos_utilisateur = $wpdb->prefix . 'infos_utilisateur';
	$sql_tickets_en_attente = $wpdb->prepare("SELECT * FROM ".$table_infos_utilisateur." LEFT JOIN ".$table_demandes_tickets." ON ".$table_demandes_tickets.".utilisateur = ".$table_infos_utilisateur.".id WHERE ".$table_demandes_tickets.".statut_demande = 'en attente' ");
	$tickets_en_attente = $wpdb->get_results($sql_tickets_en_attente);

	return $tickets_en_attente;
}

add_action('init','tickets_en_attente');

function tickets_traites(){
    global $wpdb;
    $table_demandes_tickets = $wpdb->prefix . 'demande_tickets';
    $table_infos_utilisateur = $wpdb->prefix . 'infos_utilisateur';
	$sql_tickets_traites = $wpdb->prepare("SELECT * FROM ".$table_infos_utilisateur." LEFT JOIN ".$table_demandes_tickets." ON ".$table_demandes_tickets.".utilisateur = ".$table_infos_utilisateur.".id WHERE ".$table_demandes_tickets.".statut_demande = 'traitée' ");
	$tickets_traites = $wpdb->get_results($sql_tickets_traites);

	return $tickets_traites;
}

add_action('init','tickets_en_attente');

function demandes_en_attente(){
    global $wpdb;
    $table_demandes_en_attente = $wpdb->prefix . 'demande_service';
    $table_infos_utilisateur = $wpdb->prefix . 'infos_utilisateur';
	$sql_demandes_en_attente = $wpdb->prepare("SELECT * FROM ".$table_infos_utilisateur." LEFT JOIN ".$table_demandes_en_attente." ON ".$table_infos_utilisateur.".id = ".$table_demandes_en_attente.".utilisateur WHERE traitement = 'en attente'  ORDER BY date_demande DESC ");
	$demandes_en_attente = $wpdb->get_results($sql_demandes_en_attente);

	return $demandes_en_attente;
}

add_action('init','demandes_en_attente');

function demandes_traitees(){
    global $wpdb;
    $table_demandes_traitees = $wpdb->prefix . 'demande_service';
    $table_infos_utilisateur = $wpdb->prefix . 'infos_utilisateur';
	$sql_demandes_traitees = $wpdb->prepare("SELECT * FROM ".$table_infos_utilisateur." LEFT JOIN ".$table_demandes_traitees." ON ".$table_infos_utilisateur.".id = ".$table_demandes_traitees.".utilisateur WHERE traitement = 'demande traitée' ORDER BY date_demande DESC ");
	$demandes_traitees = $wpdb->get_results($sql_demandes_traitees);

	return $demandes_traitees;
}

add_action('init','demandes_traitees');

function detail_demande($id_demande_utilisateur){
	if(isset($_POST['detail_demande_submit']) && isset($_POST['detail_demande-verif'])){
		if (wp_verify_nonce($_POST['detail_demande-verif'], 'detail_demande')) {
                $id_demande = $_POST['id_demande'];
                $_POST['test'] = $id_demande;
                global $wpdb;
                $table_infos_utilisateur = $wpdb->prefix . 'infos_utilisateur';
                $table_demandes_en_attente = $wpdb->prefix . 'demande_service';
            	$sql_detail_demande = $wpdb->prepare("SELECT * FROM ".$table_infos_utilisateur." LEFT JOIN ".$table_demandes_en_attente." ON ".$table_infos_utilisateur.".id = ".$table_demandes_en_attente.".utilisateur WHERE ".$table_demandes_en_attente.".id = '%s' ",$id_demande_utilisateur);
            	$detail_demande = $wpdb->get_results($sql_detail_demande);
            	return $detail_demande;
		}
	}
}

add_action('template_redirect','tarifs_services');

function tarifs_services(){
    
    global $wpdb;
    $table_tarifs_services = $wpdb->prefix . 'tarifs_services';
	$sql_tarifs_services = $wpdb->prepare("SELECT * FROM ".$table_tarifs_services.";");
	$tarifs_services = $wpdb->get_results($sql_tarifs_services);
	return $tarifs_services;
	
}

add_action('init','tarifs_services');

function demande_validee(){
    if(isset($_POST['demande_validee_submit']) && isset($_POST['demande_validee-verif'])){
		if (wp_verify_nonce($_POST['demande_validee-verif'], 'demande_validee')) {
		    $id_demande = $_POST['id_demande_validee'];
            global $wpdb;
            $table_demandes_service = $wpdb->prefix . 'demande_service';
        	$sql_demande_validee = $wpdb->prepare("UPDATE ".$table_demandes_service." SET traitement = 'demande traitée' WHERE id = '%s';",$id_demande);
        	$demande_validee = $wpdb->get_results($sql_demande_validee);
        	return $demande_validee;
		}
	}

}

add_action('init','demande_validee');

function suppression_demande(){
    
	if(isset($_POST['suppression_demande_submit']) && isset($_POST['suppression_demande-verif'])){
		if (wp_verify_nonce($_POST['suppression_demande-verif'], 'suppression_demande')) {
		    $id_demande = $_POST['id_demande'];
            supprime_demande($id_demande);
		}
	}
}

add_action('init','suppression_demande');


function vide_demande_attente(){
    
	if(isset($_POST['vide_demande_attente_submit']) && isset($_POST['vide_demande_attente-verif'])){
		if (wp_verify_nonce($_POST['vide_demande_attente-verif'], 'vide_demande_attente')) {
            global $wpdb;
            $table_demandes_service = $wpdb->prefix . 'demande_service';
        	$sql_vide_demande_attente = $wpdb->prepare("DELETE  FROM ".$table_demandes_service." WHERE traitement = 'en attente'");
        	$vide_demande_attente = $wpdb->get_results($sql_vide_demande_attente);
        	return $vide_demande_attente;
		}
	}
}

add_action('init','vide_demande_attente');

function vide_ticket_attente(){
    
	if(isset($_POST['vide_ticket_attente_submit']) && isset($_POST['vide_ticket_attente-verif'])){
		if (wp_verify_nonce($_POST['vide_ticket_attente-verif'], 'vide_ticket_attente')) {
            global $wpdb;
            $table_demande_tickets = $wpdb->prefix . 'demande_tickets';
        	$sql_vide_demande_tickets_attente = $wpdb->prepare("DELETE  FROM ".$table_demande_tickets." WHERE statut_demande = 'en attente'");
        	$vide_demande_tickets_attente = $wpdb->get_results($sql_vide_demande_tickets_attente);
        	return $vide_demande_tickets_attente;
		}
	}
}

add_action('init','vide_ticket_attente');

function vide_ticket_traite(){
    
	if(isset($_POST['vide_ticket_traite_submit']) && isset($_POST['vide_ticket_traite-verif'])){
		if (wp_verify_nonce($_POST['vide_ticket_traite-verif'], 'vide_ticket_traite')) {
            global $wpdb;
            $table_demande_tickets = $wpdb->prefix . 'demande_tickets';
        	$sql_vide_demande_ticket_traite = $wpdb->prepare("DELETE  FROM ".$table_demande_tickets." WHERE statut_demande = 'traitée'");
        	$vide_demande_ticket_traite = $wpdb->get_results($sql_vide_demande_ticket_traite);
        	return $vide_demande_ticket_traite;
		}
	}
}

add_action('init','vide_ticket_traite');


function supprime_ticket(){
    
	if(isset($_POST['supprime_ticket_submit']) && isset($_POST['supprime_ticket-verif'])){
		if (wp_verify_nonce($_POST['supprime_ticket-verif'], 'supprime_ticket')) {
		    $id_demande_ticket = $_POST['id_demande_ticket'];
            global $wpdb;
            $table_demande_tickets = $wpdb->prefix . 'demande_tickets';
        	$sql_vide_demande_ticket_traite = $wpdb->prepare("DELETE  FROM ".$table_demande_tickets." WHERE id = '%s'",$id_demande_ticket);
        	$vide_demande_ticket_traite = $wpdb->get_results($sql_vide_demande_ticket_traite);
        	return $vide_demande_ticket_traite;
		}
	}
}

add_action('init','supprime_ticket');





?>