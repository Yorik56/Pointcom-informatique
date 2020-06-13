<?php
/*
   Template Name: Accueil
*/

get_header(); // On affiche l'en-tête du thème WordPress
$url = site_url();
?>

            <div class="container-fluid justify-content">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?= $url?>/wp-content/themes/busiway-child/images/windows.jpg" class="d-block h-item" alt="image_windows">
                        </div>
                        <div class="carousel-item">
                          <img src="<?= $url?>/wp-content/themes/busiway-child/images/wall.jpg" class="d-block h-item" alt="image_logos_marque">
                        </div>
                        <div class="carousel-item">
                          <img src="<?= $url?>/wp-content/themes/busiway-child/images/windows.jpg" class="d-block h-item" alt="image_windows">
                        </div>
                    </div>
                </div>
                <div class="acceuil_top_large_screen">
                    <div class="row">
                        <div class="col col-lg-3">
                            <h2 class="accueil_title">Nos liens partenaires</h2>
                            <a href="<?= site_url('/liens-partenaires',  null); ?>"><img class="top img-fluid" src="<?= $url?>/wp-content/themes/busiway-child/images/lien_partenaire.jpg"  alt="image_lien_partenaire"></a>
                        </div>
                        <div class="col col-lg-3">
                            <h2 class="accueil_title">Espace informatique</h2>
                            <a href="<?= site_url('/espace-informatique',  null); ?>"><img class="top img-fluid" src="<?= $url?>/wp-content/themes/busiway-child/images/cyber_espace.jpg"  alt="image_espace_informatique"></a>
                        </div>
                        <div class="col col-lg-3">
                            <h2 class="accueil_title">Reparations Services</h2>
                            <a href="<?= site_url('/reparation',  null); ?>"><img class="top" src="<?= $url?>/wp-content/themes/busiway-child/images/reparation.jpg"  alt="image_reparation_service"></a>
                            
                        </div>
                        <div class="col col-lg-3">
                            <h2 class="accueil_title">Tarifs Imprimerie</h2>
                            <a href="<?= site_url('/imprimerie',  null); ?>"><img class="top" src="<?= $url?>/wp-content/themes/busiway-child/images/sharp-mx-3640n.jpg"  alt="image_imprimerie"></a>
                        </div>
                </div>
                    
                    <div class="row">
                        <div class="col col-lg-3">
                            <h2 class="accueil_title">Location Salle</h2>
                            <a href="<?= site_url('/location-salle',  null); ?>"><img class="top img-fluid" src="<?= $url?>/wp-content/themes/busiway-child/images/location_salle.png"  alt="image_lien_partenaire"></a>
                        </div>
                        <div class="col col-lg-3">
                            
                        </div>
                        <div class="col col-lg-3">
                            
                            
                        </div>
                        <div class="col col-lg-3">
                            
                        </div>
                    </div>
                </div>
                <div class="acceuil_top_medium_screen">
                    <div class="row">
                        <div class="col col-12">
                            <h2 class="accueil_title">Nos liens partenaires</h2>
                            <a href="<?= site_url('/liens-partenaires',  null); ?>"><img class="img-responsive top" src="<?= $url?>/wp-content/themes/busiway-child/images/lien_partenaire.jpg"  alt="image_lien_partenaire"></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-12">
                            <h2 class="accueil_title">Espace informatique</h2>
                            <a href="<?= site_url('/espace-informatique',  null); ?>"><img class="img-responsive top" src="<?= $url?>/wp-content/themes/busiway-child/images/cyber_espace.jpg"  alt="image_espace_informatique"></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-12">
                            <h2 class="accueil_title">Tarifs Imprimerie</h2>
                            <a href="<?= site_url('/imprimerie',  null); ?>"><img class="img-responsive top" src="<?= $url?>/wp-content/themes/busiway-child/images/sharp-mx-3640n.jpg"  alt="image_imprimerie"></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-12">
                            <h2 class="accueil_title">Reparations Services</h2>
                            <a href="<?= site_url('/reparation',  null); ?>"><img class="img-responsive top" src="<?= $url?>/wp-content/themes/busiway-child/images/reparation.jpg"  alt="image_reparation_service"></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-12">
                            <h2 class="accueil_title">Location Salle</h2>
                            <a href="<?= site_url('/location-salle',  null); ?>"><img class="top img-fluid" src="<?= $url?>/wp-content/themes/busiway-child/images/location_salle.png"  alt="image_lien_partenaire"></a>
                        </div>
                    </div>
                    
                    
                </div>

            </div><!-- .entry-content -->

<?php
get_footer(); // On affiche de pied de page du thème
?>