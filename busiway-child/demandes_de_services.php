<?php
/*
   Template Name: Demandes de services
*/

get_header(); // On affiche l'en-tête du thème WordPress
$url = site_url();
$demandes_de_services = demandes_en_attente();
?>


            <div class="container-fluid justify-content">

                <h2>Demandes de Services</h2>
                    <div class="row">
                        <div class="col-12">
                            <button type='button' class='btn btn-primary btn-lg btn_espace_admin' ><a class='link_footer_header'  href='". <?= site_url('/demandes-en-attente/',  null) ?>."' >Demandes en attente</a></button>
                            <button type='button' class='btn btn-primary btn-lg btn_espace_admin' ><a class='link_footer_header'  href='". <?= site_url('/demandes-traitees/',  null) ?>."' >Demandes traitées</a></button>
                        </div>
                    </div>

            </div><!-- .entry-content -->

<?php
get_footer(); // On affiche de pied de page du thème
?>