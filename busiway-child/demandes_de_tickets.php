<?php
/*
   Template Name: Demandes de tickets
*/

get_header(); // On affiche l'en-tête du thème WordPress
$url = site_url();

?>


            <div class="container-fluid justify-content">

                <h2>Demandes de Tickets</h2>
                    <div class="row">
                        <div class="col-12">
                            <button type='button' class='btn btn-primary btn-lg btn_espace_admin' ><a class='link_footer_header'  href='". <?= site_url('/tickets-en-attente/',  null) ?>."' >Tickets en attente</a></button>
                            <button type='button' class='btn btn-primary btn-lg btn_espace_admin' ><a class='link_footer_header'  href='". <?= site_url('/tickets-traites/',  null) ?>."' >Tickets traités</a></button>
                        </div>
                    </div>

            </div><!-- .entry-content -->

<?php
get_footer(); // On affiche de pied de page du thème
?>