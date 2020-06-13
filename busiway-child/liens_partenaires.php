<?php
/*
   Template Name: Liens partenaires
*/

get_header(); // On affiche l'en-tête du thème WordPress
$url = site_url();
?>


            <div class="container-fluid justify-content">
                
                 
                
                <div class="row">
                    <div class="col-lg-12">
                	    <h2 class="liens_partenaires_titre">Nos liens partenaires</h2>
                	    <p>Vous treverez ici nos differents sites partenaires :</p>
                  </div>
                 </div>
                  
                  <div class="row">
                      
                        <div class="col-lg-4">
                                <a href="https://www.epouce.fr/"><img class="top img-fluid" src="<?= $url?>/wp-content/themes/busiway-child/images/epouce.png"  alt="logos_epouce"></a>
                                 <p>Epouce.fr</p>
                         </div>
                         <div class="col-lg-4">
                             <a href="https://spleen-district-production.com/"><img class="top img-fluid" src="<?= $url?>/wp-content/themes/busiway-child/images/spleen_district_production.png"  alt="logos_spleen_district_production"></a>
                                  <p>Spleen district production</p>
                        </div>
                        <div class="col-lg-4">
                             <img class="top img-fluid" src="<?= $url?>/wp-content/themes/busiway-child/images/Flixbus_logo.png"  alt="logos_flixbus"></a>
                                 <p>Venez dès à present sur place acheter vos billets Flixbus </p>
                         </div>
                  </div>
                  
                

<?php
get_footer(); // On affiche de pied de page du thème
?>