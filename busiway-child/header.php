<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> section and everything up until <div id="content">
 *
 * @package Busiway
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#main"></a>
<div class="wrapper">
    <!--==================== TOP BAR ====================-->
    <header class="ti-trhead"> 
        <div class="clearfix">
          
        </div>
        <div class="ti-main-nav">
            <div class="container"> 
                <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light">
                      <img class='logo' src= '<?= $url?>/wp-content/themes/busiway-child/images/LOGO_SITE_POINTCOM.png' alt='Logo'>
                		<div class="Titre">
                		    <a class="link_footer_header" href="<?= home_url();  ?>">Pointcom-informatique.fr</a>
                		</div>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    
                      <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                          <li class="nav-item dropdown large_navbar">
                            <div class="btn-group">
                                <?php if(!isset($_COOKIE['id_session'])){	?>
             					  <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Connexion<br>Inscription<br>
                                  </button>
                                  <div class="dropdown-menu">
                					<ul class="navbar-nav">
                                       <form class="form-inline" action='#' method='POST'>
                                            <?php wp_nonce_field('connexion', 'connexion-verif'); ?>
                                            <input class="form-control mr-sm-2" type="text" name="pseudo" placeholder="pseudo" aria-label="pseudo">
                							<input class="form-control mr-sm-2" type="password" name="password" placeholder="mot de passe" aria-label="password">
                                            <button id="submit" type="submit" name="connexion_submit" class="submit ">Envoyer</button>
                                            <a class="s_inscrire" href="<?= site_url('/formulaire-inscription',  null); ?>">S'inscrire</a>
                                       </form>
                                    </ul>
                                  </div>
                                <?php
                				} else { $id_session = $_COOKIE['id_session'];
                				         $statut_utilisateur = statut_utilisateur($id_session);
                				?>
                				  <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <br>Deconnexion<br>
                                  </button>
                                  <div class="dropdown-menu">
                					<ul class="navbar-nav">
                                       <form action='#' method='POST' class='navbar-form my-2 '>
                							<?php wp_nonce_field('deconnexion', 'deconnexion-verif'); ?>
                							<p>
                								<button id="submit" type="submit" name="deconnexion_submit" class="submit btn btn-primary btn-lg">Deconnexion</button>
                							</p>
                						</form>
                                    </ul>
                                  </div>
                  				<?php	}?>
                            </div>
                          </li>    
                          <li class="nav-item dropdown medium_navbar">
                            <div class="btn-group">
                                <?php if(!isset($_COOKIE['id_session'])){	?>
             					  <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Connexion Inscription
                                  </button>
                                  <div class="dropdown-menu">
                					<ul class="navbar-nav">
                                       <form class="form-inline" action='#' method='POST'>
                                            <?php wp_nonce_field('connexion', 'connexion-verif'); ?>
                                            <input class="form-control mr-sm-2" type="text" name="pseudo" placeholder="pseudo" aria-label="Search">
                							<input class="form-control mr-sm-2" type="password" name="password" placeholder="mot de passe" aria-label="Search">
                                            <button id="submit" type="submit" name="connexion_submit" class="submit ">Envoyer</button>
                                            <a class="s_inscrire" href="<?= site_url('/formulaire-inscription',  null); ?>">S'inscrire</a>
                                       </form>
                                    </ul>
                                  </div>
                                <?php
                				} else { $id_session = $_COOKIE['id_session'];
                				       $statut_utilisateur = statut_utilisateur($id_session);
                				?>
                				  <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Deconnexion
                                  </button>
                                  <div class="dropdown-menu">
                					<ul class="navbar-nav">
                                       <form action='#' method='POST' class='navbar-form my-2 '>
                							<?php wp_nonce_field('deconnexion', 'deconnexion-verif'); ?>
                							<p>
                								<button id="submit" type="submit" name="deconnexion_submit" class="submit btn btn-primary btn-lg">Deconnexion</button>
                							</p>
                						</form>
                                    </ul>
                                  </div>
                  				<?php	}?>
                            </div>
                          </li>    
                          <li class="nav-item dropdown large_navbar">
                            <div class="btn-group">
                              <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" >
                                <br>Mail<br>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwjBn_KWpY_mAhVUDWMBHUM3CroQFjAAegQIChAC&url=https%3A%2F%2Fwww.google.com%2Fgmail%2F&usg=AOvVaw3mZ_qbD_gQyp_sqkjrwStn">Gmail</a>
                                <a class="dropdown-item" href="https://outlook.live.com/owa/">Outlook</a>
                                <a class="dropdown-item" href="https://support.apple.com/fr-fr/mail">Apple Mail</a>
                                <a class="dropdown-item" href="https://login.yahoo.com/?.src=ym&lang=&done=https%3A%2F%2Fmail.yahoo.com%2F%3F.lang%3Dfr-FR%26guce_referrer%3DaHR0cHM6Ly93d3cuZ29vZ2xlLmNvbS8%26guce_referrer_sig%3DAQAAAJR40WIUELKEA2AclcHXAw2r46k7kgn_B104oyIrlIp0B7yKvHnWA6R1bB_7cm8-pL-XQbRcbXOEbIck4niOsYzLc1SKwgwT9yClWHsIpHO9oRrl7X2jUnMg2t71sBHbbp3L3duS1Ev1TpTchS3VuI_NepzrNbwZP-64Vj2IcOHK">Yahoo Mail</a>
                                
                              </div>
                            </div>
                          </li>
                          <li class="nav-item dropdown medium_navbar">
                            <div class="btn-group">
                              <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" >
                                Mail
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=2ahUKEwjBn_KWpY_mAhVUDWMBHUM3CroQFjAAegQIChAC&url=https%3A%2F%2Fwww.google.com%2Fgmail%2F&usg=AOvVaw3mZ_qbD_gQyp_sqkjrwStn">Gmail</a>
                                <a class="dropdown-item" href="https://outlook.live.com/owa/">Outlook</a>
                                <a class="dropdown-item" href="https://support.apple.com/fr-fr/mail">Apple Mail</a>
                                <a class="dropdown-item" href="https://login.yahoo.com/?.src=ym&lang=&done=https%3A%2F%2Fmail.yahoo.com%2F%3F.lang%3Dfr-FR%26guce_referrer%3DaHR0cHM6Ly93d3cuZ29vZ2xlLmNvbS8%26guce_referrer_sig%3DAQAAAJR40WIUELKEA2AclcHXAw2r46k7kgn_B104oyIrlIp0B7yKvHnWA6R1bB_7cm8-pL-XQbRcbXOEbIck4niOsYzLc1SKwgwT9yClWHsIpHO9oRrl7X2jUnMg2t71sBHbbp3L3duS1Ev1TpTchS3VuI_NepzrNbwZP-64Vj2IcOHK">Yahoo Mail</a>
                                
                              </div>
                            </div>
                          </li>
                          <li class="nav-item dropdown large_navbar">
                            <div class="btn-group">
                              <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Réseaux<br>Sociaux<br>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="https://fr-fr.facebook.com/">Facebook</a>
                                <a class="dropdown-item" href="https://twitter.com/login?lang=fr">Twitter</a>
                                <a class="dropdown-item" href="https://www.twitch.tv/">Twitch</a>
                                <a class="dropdown-item" href="https://www.youtube.com/?hl=fr&gl=FR">Youtube</a>
                              </div>
                            </div>
                          </li>
                          <li class="nav-item dropdown medium_navbar">
                            <div class="btn-group">
                              <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Réseaux Sociaux
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="https://fr-fr.facebook.com/">Facebook</a>
                                <a class="dropdown-item" href="https://twitter.com/login?lang=fr">Twitter</a>
                                <a class="dropdown-item" href="https://www.twitch.tv/">Twitch</a>
                                <a class="dropdown-item" href="https://www.youtube.com/?hl=fr&gl=FR">Youtube</a>
                              </div>
                            </div>
                          </li>
                          <li class="nav-item dropdown large_navbar">
                            <div class="btn-group">
                              <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <br>Actualités<br>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="https://www.lexpress.fr/">L'express</a>
                                <a class="dropdown-item" href="https://www.nouvelobs.com/">Le nouvel Obs</a>
                                <a class="dropdown-item" href="https://www.lemonde.fr/">Le monde</a>
                                <a class="dropdown-item" href="https://www.lefigaro.fr/">Le Figaro</a>
                                <a class="dropdown-item" href="https://www.linternaute.com/">L'internaute</a>
                              </div>
                            </div>
                          </li>
                          <li class="nav-item dropdown medium_navbar">
                            <div class="btn-group">
                              <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Actualités
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="https://www.lexpress.fr/">L'express</a>
                                <a class="dropdown-item" href="https://www.nouvelobs.com/">Le nouvel Obs</a>
                                <a class="dropdown-item" href="https://www.lemonde.fr/">Le monde</a>
                                <a class="dropdown-item" href="https://www.lefigaro.fr/">Le Figaro</a>
                                <a class="dropdown-item" href="https://www.linternaute.com/">L'internaute</a>
                              </div>
                            </div>
                          </li>
                          <?php 
                                if($statut_utilisateur == 'admin'){
                                    echo "<li class='nav-item'>
                                            <button type='button' class='btn btn-primary btn-lg btn_admin' >
                                              <a class='link_footer_header'  href='".site_url('/espace-admin/',  null)."' >Espace Admin</a>";
                                    $url = site_url();         
                                    $alerte = demandes_en_attente();        
                                    if($alerte){
                                        echo("<a  href='".site_url('/demandes-de-services/',  null)."' > <img class='notif' src='".$url."/wp-content/themes/busiway-child/images/icon-bell.png' alt='Card image cap'></a>");
                                       
                                    }         
                                    echo "</li>";          
                                    echo    "</button>";
                                   
                                }
                                elseif($statut_utilisateur == 'membre' || $statut_utilisateur == 'public'|| $statut_utilisateur == 'premium' ){
                                    echo "<li class='nav-item'>
                                            <button type='button' class='btn btn-primary btn-lg btn_public' >
                                              <a  class='link_footer_header' href='".site_url('/mon-espace/',  null)."' >Mon Espace</a>
                                            </button>
                                          </li>";
                                }
                          ?>
                        </ul>
                        <div class="nav_item recherche_google">
                            <script async src="https://cse.google.com/cse.js?cx=006525633618887256312:nvyaldxtput"></script>
                            <div class="gcse-searchbox-only"></div>
                        </div>
                        <div class="nav_item recherche_google_medium_screen">
                            <a href="https://www.google.com/">
                                <img class="logo_google" src="<?= $url?>/wp-content/themes/busiway-child/images/logo_google.jpg"  alt="logo google">
                            </a>
                        </div>
                </nav>
            </div>
    </header>
<?php

		if (isset($_COOKIE['id_session'])) {
			echo   '<div class="alert alert-success alert-dismissible fade show" role="alert">
					  <div>Vous êtes connectés</div>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					  </button>
					</div>';
		} 
	    else if (isset($_POST['statut'])) {
		    switch ($_POST['statut']) {
			case 'court_m':
			    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">';
				echo   '<div>veuillez saisir votre pseudo</div>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>';
				echo '</div>';

				break;
			case 'court_p':
			    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">';
				echo   '<div>veuillez saisir un mot de passe</div>
						    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>';
				echo '</div>';
				break;
			case 'membre_not_exist':
			    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">';
				echo   '<div>Adhérent non trouvé</div>
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
							  </button>';
			    echo '</div>';
				break;
			case 'pass_not_exist':
			    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">';
				echo   '<div>mot de passe incorrect!</div>
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
							  </button>';
			    echo '</div>';

				break;

			default:
			    break;
	        }
	    }
			?>
<!-- #masthead --> 