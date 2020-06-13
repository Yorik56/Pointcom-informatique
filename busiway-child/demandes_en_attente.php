<?php
/*
   Template Name: Demandes en attente
*/

get_header(); // On affiche l'en-tête du thème WordPress
$url = site_url();
$demandes_en_attente = demandes_en_attente();
?>


            <div class="container-fluid justify-content">

                <h2>Demandes en attente</h2>
                    <div class="row">
                        <div class="col-12">
                            <form action='#' method='POST' class='navbar-form'>
							<?php wp_nonce_field('vide_demande_attente', 'vide_demande_attente-verif'); ?>
							<p>
								<button type="submit" name="vide_demande_attente_submit" class="btn btn-labeled btn-danger demande_btn"><span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>Supprimmer toutes les demandes en attente</button>
							</p>
						</form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">

                        </div>
                        <div class="col-10">
                            <table class="table">
                                    <tr>
                                        <th>N° Demande</th>
                                        <th>N° Utilisateur</th>
                                        <th>nom</th>
                                        <th>prenom</th>
                                        <th>Date de demande</th>
                                        <th>Détail demande</th>
                                        <th>demande traitée</th>
                                        <th>Supprimer demande</th>
                                    </tr>
                                <?php 
                                    foreach($demandes_en_attente as $key => $row){
                                    $dateMySQL = $row->date_demande;
                                    $date = date("d/m/Y H:i:s", strtotime($dateMySQL));
                                ?>
                                        
                                        <tr>
                                            <td class='td_demandes_services'><?= $row->id ?></td>
                                            <td class='td_demandes_services'><?= $row->utilisateur ?></td>
                                            <td class='td_demandes_services'><?= $row->nom ?></td>
                                            <td class='td_demandes_services'><?= $row->prenom ?></td>
                                            <td class='td_demandes_services'><?= $date ?></td>
                                            <td>
                                                <form action='<?= site_url('/detail-demande-utilisateur/'); ?>' method='POST' class='form'>
                                                    <?php wp_nonce_field('detail_demande', 'detail_demande-verif'); ?>
                                                    <input  name='id_utilisateur' type='hidden' value= '<?= $row->id ?>'>
                        							<p>
                        								<button type='submit'  name="detail_demande_submit" class='btn btn-labeled btn-success detail_utilisateur_btn'><span class='btn-label'><i class='glyphicon glyphicon-remove'></i></span>Detail de la demande</button>
                        							</p>
                        						</form>
                                            </td>
                                            <td>
                                                <form action='#' method='POST' class='form'>
                                                    <?php wp_nonce_field('demande_validee', 'demande_validee-verif'); ?>
                                                    <input  name='id_demande_validee' type='hidden' value= '<?= $row->id ?>'>
                        							<p>
                        								<button type='submit'  name="demande_validee_submit" class='btn btn-labeled btn-primary detail_utilisateur_btn'><span class='btn-label'><i class='glyphicon glyphicon-remove'></i></span>Valider demande</button>
                        							</p>
                        						</form>
                                            </td>
                                            <td>
                                                <form action='#' method='POST' class='navbar-form'>
                                                    <input  name="id_demande" type="hidden" value="<?= $row->id ?>">
                        							<?php wp_nonce_field('suppression_demande', 'suppression_demande-verif'); ?>
                        							<p>
                        								<button type="submit" name="suppression_demande_submit" class="btn btn-labeled btn-danger demande_btn"><span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>Supprimmer demande</button>
                        							</p>
                        						</form>
                                            </td>
                                        </tr>
                                         
                                <?php
                                    }
                                ?>
                                
                                
                            </table>
                        </div>
                        <div class="col-1">
                            
                        </div>
                    </div>
        
            </div><!-- .entry-content -->

<?php
get_footer(); // On affiche de pied de page du thème
?>