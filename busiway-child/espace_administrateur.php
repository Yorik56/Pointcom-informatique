<?php
/*
   Template Name: Espace Administrateur
*/

get_header(); // On affiche l'en-tête du thème WordPress
$url = site_url();
$informations_utilisateurs = infos_utilisateur();
$id_session = $_COOKIE['id_session'];
$statut_utilisateur = statut_utilisateur($id_session);
?>


           <?php

            if($statut_utilisateur == "admin" ){
                echo'<div class="container-fluid justify-content">
                
                <h1>Espace Administrateur</h1>
                <div class="row">
                    <div class="col-12">
                    
                        
                        <button type="button" class="btn btn-primary btn-lg btn_espace_admin" ><a class="link_footer_header"  href="'.site_url("/informations-utilisateurs/",  null) .'" >Informations Utilisateurs du site</a></button>
                        
                        <button type="button" class="btn btn-primary btn-lg btn_espace_admin" ><a class="link_footer_header"  href="'.  site_url("/demandes-de-services/",  null) .'" >Les demandes de services</a></button>
                    
                        <button type="button" class="btn btn-primary btn-lg btn_espace_admin" ><a class="link_footer_header"  href="'.site_url("/demandes-de-tickets/",  null) .'" >Les demandes de tickets</a></button>
                        
                        <button type="button" class="btn btn-primary btn-lg btn_espace_admin" ><a class="link_footer_header"  href="'.site_url("/logs-connexion/",  null) .'" >Logs connexion</a></button>

                    </div>
                </div>
            </div>';
                
            }else{ 
                
              $_POST['redirection'];
              redirection_utilisateur();

                
            }  ?>

<?php
get_footer(); // On affiche de pied de page du thème
?>