<?php
/*
   Template Name: Mon Espace
*/

get_header(); // On affiche l'en-tête du thème WordPress
$url = site_url();
$id_session = $_COOKIE['id_session'];
$id_utilisateur = id_utilisateur_session($id_session);
$mon_espace = recap_mon_espace($id_utilisateur);
$mes_infos =  site_url("/mes-informations/",  null);
$mes_demandes_de_services =  site_url("/mes-demandes-de-services/",  null);
$mes_demandes_de_tickets =  site_url("/mes-demandes-de-tickets/",  null);

?>


            <div class="container-fluid justify-content">
                <h1>Mon Espace</h1>

                  
                  
                <div class="row">
                    <div class="col-1">
                        
                    </div>
                    <div class="col-10">
                        <button type="button" class="btn btn-primary btn-lg btn_espace_admin" ><a class="link_footer_header"  href="<?= $mes_infos ?>" >Mes informations</a></button>
                        <button type="button" class="btn btn-primary btn-lg btn_espace_admin" ><a class="link_footer_header"  href="<?= $mes_demandes_de_services ?>" >Mes demandes de services</a></button>
                        <button type="button" class="btn btn-primary btn-lg btn_espace_admin" ><a class="link_footer_header"  href="<?= $mes_demandes_de_tickets ?>" >Mes demandes de tickets</a></button>
                        
        
                        
                    </div>
                    <div class="col-1">
                        
                    </div>
                </div>
                
            </div><!-- .entry-content -->

<?php
get_footer(); // On affiche de pied de page du thème
?>