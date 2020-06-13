<?php
/*
   Template Name: Informations Utilisateurs
*/

get_header(); // On affiche l'en-tête du thème WordPress
$url = site_url();
$informations_utilisateurs = infos_utilisateur();
?>
    <div class="container-fluid justify-content">

        <h2>Informations Utilisateurs du site</h2>
            <div class="row">
                <div class="col-1">
                    
                </div>
                <div class="col-10">
                    <table class="table table-dark table_info_utilisateur_large">
                        <thead class="thead-light">
                            <tr>
                                <th class='th_infos'>Id</th>
                                <th class='th_infos'>Pseudo</th>
                                <th class='th_infos'>Nom</th>
                                <th class='th_infos'>Prenom</th>
                                <th class='th_infos'>Staut</th>
                                <th class='th_infos'>Ville</th>
                                <th class='th_infos'>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            
                            foreach($informations_utilisateurs as $key => $row){
                                
                        ?>
                                    <tr>
                                        <td class='td_infos'><?= $row->id ?></td>
                                        <td class='td_infos'><?= $row->pseudo ?></td>
                                        <td class='td_infos'><?= $row->nom ?></td>
                                        <td class='td_infos'><?= $row->prenom ?></td>
                                        <td class='td_infos'><?= $row->statut ?></td>
                                        <td class='td_infos'><?= $row->ville ?></td>
                                        
                                        <td class='td_infos'>
                                        
                                        <form action='<?= site_url('/details-utilisateur/'); ?>' method='POST' class='navbar-form'>
                                            <?php wp_nonce_field('details_utilisateur', 'details_utilisateur-verif'); ?>
                                            <input  name='id_utilisateur' type='hidden' value= '<?= $row->id ?>'>
                							<p>
                								<button type='submit'  name="details_utilisateur_submit" class='btn btn-labeled btn-danger detail_utilisateur_btn'><span class='btn-label'><i class='glyphicon glyphicon-remove'></i></span>Details Utilisateur</button>
                							</p>
                						</form>
                                        
                                        </td>
                                            
                                    </tr>
                        
                        <?php    } ?>
                            </tbody>
                        
                    </table>
                    <table class="table-responsive table-dark table_info_utilisateur_medium">
                        <thead class="thead-light">
                            <tr>
                                <th class='th_infos'>Id</th>
                                <th class='th_infos'>Pseudo</th>
                                <th class='th_infos'>Nom</th>
                                <th class='th_infos'>Prenom</th>
                                <th class='th_infos'>Staut</th>
                                <th class='th_infos'>Ville</th>
                                <th class='th_infos'>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            
                            foreach($informations_utilisateurs as $key => $row){
                                
                        ?>
                                    <tr>
                                        <td class='td_infos'><?= $row->id ?></td>
                                        <td class='td_infos'><?= $row->pseudo ?></td>
                                        <td class='td_infos'><?= $row->nom ?></td>
                                        <td class='td_infos'><?= $row->prenom ?></td>
                                        <td class='td_infos'><?= $row->statut ?></td>
                                        <td class='td_infos'><?= $row->ville ?></td>
                                        
                                        <td class='td_infos'>
                                        
                                        <form action='<?= site_url('/details-utilisateur/'); ?>' method='POST' class='navbar-form'>
                                            <?php wp_nonce_field('details_utilisateur', 'details_utilisateur-verif'); ?>
                                            <input  name='id_utilisateur' type='hidden' value= '<?= $row->id ?>'>
                							<p>
                								<button type='submit'  name="details_utilisateur_submit" class='btn btn-labeled btn-danger detail_utilisateur_btn'><span class='btn-label'><i class='glyphicon glyphicon-remove'></i></span>Details Utilisateur</button>
                							</p>
                						</form>
                                        
                                        </td>
                                            
                                    </tr>
                        
                        <?php    } ?>
                            </tbody>
                        
                    </table>
                </div>
                <div class="col-1">
                    
                </div>
            </div>

    </div><!-- .entry-content -->

<?php
get_footer(); // On affiche de pied de page du thème
?>