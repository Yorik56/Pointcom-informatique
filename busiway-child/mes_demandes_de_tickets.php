<?php
/*
   Template Name: Mes demandes de tickets
*/

get_header(); // On affiche l'en-tête du thème WordPress
$url = site_url();
$id_session = $_COOKIE['id_session'];
$id_utilisateur = id_utilisateur_session($id_session);
$mes_demandes_de_tickets = mes_demandes_de_tickets($id_utilisateur);
?>


            <div class="container-fluid justify-content">

                <h2>Mes demandes de tickets</h2>
                    <div class="row">
                        <div class="col-12">
                            <form action='#' method='POST' class='navbar-form'>
							<?php wp_nonce_field('vide_ticket_attente', 'vide_ticket_attente-verif'); ?>
							<p>
								<button type="submit" name="vide_ticket_attente_submit" class="btn btn-labeled btn-danger demande_btn"><span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>Supprimmer toutes les demandes en attente</button>
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
                                    <th>Valider_demande</th>
                                </tr>
                                <?php foreach($mes_demandes_de_tickets as $key => $row){ 
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
                                                    <?php wp_nonce_field('modifier_statut_ticket', 'modifier_statut_ticket-verif'); ?>
                                                    <input  name='id_demande_ticket' type='hidden' value= '<?= $row->id ?>'>
                        							<p>
                        								<button type='submit'  name="modifier_statut_ticket_submit" class='btn btn-labeled btn-success detail_utilisateur_btn'><span class='btn-label'><i class='glyphicon glyphicon-remove'></i></span>Valider demande de ticket</button>
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