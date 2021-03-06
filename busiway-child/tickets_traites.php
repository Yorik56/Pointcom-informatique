<?php
/*
   Template Name: Tickets traités
*/

get_header(); // On affiche l'en-tête du thème WordPress
$url = site_url();
$tickets_traites = tickets_traites();
?>


            <div class="container-fluid justify-content">

                <h2>Tickets traités</h2>
                    <div class="row">
                        <div class="col-12">
                            <form action='#' method='POST' class='navbar-form'>
							<?php wp_nonce_field('vide_ticket_traite', 'vide_ticket_traite-verif'); ?>
							<p>
								<button type="submit" name="vide_ticket_traite_submit" class="btn btn-labeled btn-danger demande_btn"><span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>Supprimmer toutes les demandes traitées</button>
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
                                    <th>Numéro demande ticket</th>
                                    <th>Num ticket</th>
                                    <th>Pseudo utilisateur</th>
                                    <th>nom</th>
                                    <th>prenom</th>
                                    <th>statut utilisateur</th>
                                    <th>statut demande</th>
                                    <th>Temps</th>
                                    <th>Prix</th>
                                    <th>nombre_ticket</th>
                                    <th>Prix Total</th>
                                    <th>Date_demande</th>
                                    <th>Supprimmer demande</th>
                                </tr>
                                <?php foreach($tickets_traites as $key => $row){ 
                                        $dateMySQL = $row->Date_demande;
                                        $date = date("d/m/Y H:i:s", strtotime($dateMySQL));
                                ?>
                                        
                                    <tr>
                                            <td class='td_demandes_services'><?= $row->id ?></td>
                                            <td class='td_demandes_services'><?= $row->numéros_ticket ?></td>
                                            <td class='td_demandes_services'><?= $row->pseudo ?></td>
                                            <td class='td_demandes_services'><?= $row->nom ?></td>
                                            <td class='td_demandes_services'><?= $row->prenom ?></td>
                                            <td class='td_demandes_services'><?= $row->statut_utilisateur ?></td>
                                            <td class='td_demandes_services'><?= $row->statut_demande ?></td>
                                            <td class='td_demandes_services'><?= $row->temps ?></td>
                                            <td class='td_demandes_services'><?= $row->prix ?></td>
                                            <td class='td_demandes_services'><?= $row->nombre_ticket ?></td>
                                            <td class='td_demandes_services'><?= $row->total_tarif_tickets ?></td>
                                            <td class='td_demandes_services'><?= $date ?></td>
                                            <td>
                                                <form action='#' method='POST' class='form'>
                                                    <?php wp_nonce_field('supprime_ticket', 'supprime_ticket-verif'); ?>
                                                    <input  name='id_demande_ticket' type='hidden' value= '<?= $row->id ?>'>
                        							<p>
                        								<button type='submit'  name="supprime_ticket_submit" class='btn btn-labeled btn-danger detail_utilisateur_btn'><span class='btn-label'><i class='glyphicon glyphicon-remove'></i></span>Supprimmer la demande</button>
                        							</p>
                        						</form>
                                            </td>
                                            
                                        </tr> 
                                
                                <?php } ?>
                                    
                            </table>
                        </div>
                        <div class="col-1">
                            
                        </div>
                    </div>
        
            </div><!-- .entry-content -->

<?php
get_footer(); // On affiche de pied de page du thème
?>