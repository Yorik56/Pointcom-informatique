<?php
/*
   Template Name: Logs Connexion
*/

get_header(); // On affiche l'en-tête du thème WordPress
$url = site_url();
$logs_connexion = logs_connexion();
?>


            <div class="container-fluid justify-content">

                <h2>Logs de connexion</h2>

                    <div class="row">
                        <div class="col-1">

                        </div>
                        <div class="col-10">

                            <table class="table">
                                    <tr>
                                        <th>N° connexion</th>
                                        <th>N° session</th>
                                        <th>pseudo</th>
                                        <th>utilisateur</th>
                                        <th>Date de connexion</th>
                                    </tr>
                                <?php 
                                    foreach($logs_connexion as $key => $row){
                                    $dateMySQL = $row->date_connexion;
                                    $date = date("d/m/Y H:i:s", strtotime($dateMySQL));
                                ?>
                                        <tr>
                                            <td class='td_demandes_services'><?= $row->id ?></td>
                                            <td class='td_demandes_services'><?= $row->id_session ?></td>
                                            <td class='td_demandes_services'><?= $row->pseudo ?></td>
                                            <td class='td_demandes_services'><?= $row->utilisateur ?></td>
                                            <td class='td_demandes_services'><?= $date ?></td>

                                        </tr>
                                <?php            }        ?>
                            </table>
                        </div>
                        <div class="col-1">
                            
                        </div>
                    </div>
        
            </div><!-- .entry-content -->

<?php
get_footer(); // On affiche de pied de page du thème
?>