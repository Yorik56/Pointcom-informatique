<?php
/*
   Template Name: Mes informations
*/

get_header(); // On affiche l'en-tête du thème WordPress
$url = site_url();
$id_session = $_COOKIE['id_session'];
$id_utilisateur = id_utilisateur_session($id_session);
$mon_espace = recap_mon_espace($id_utilisateur);

?>


            <div class="container-fluid justify-content">
                <h1>Mon Espace</h1>
                <div class="row">
                    <div class="col-12">
                        <h2>Mes Informations</h2>
                  
                    </div>
                </div>
                  
                  
                  
                  
                  
                  <div class="row">
                    <div class="col-1">
                        
                    </div>
                    <div class="col-10">
                        <table class="table bg-primary" id="recap_demande">
                            
                            <tbody>
                                
                            <tr>
                                <th>
                                    <p><?php echo("N° client :"); ?></p>
                                </th>
                                <td>
                                    <p><?php echo($mon_espace[0]->id); ?></p>
                                </td>
                            </tr>
                            
                             <tr>
                                <th>
                                    <p><?php echo("pseudo :"); ?></p>
                                </th>
                                <td>
                                    <p><?php echo($mon_espace[0]->pseudo); ?></p>
                                </td>
                            </tr>
                            
                            <tr>
                                <th>
                                    <p><?php echo("nom :"); ?></p>
                                </th>
                                <td>
                                    <p><?php echo($mon_espace[0]->nom); ?></p>
                                </td>
                            </tr>
                            
                            <tr>
                                <th>
                                    <p><?php echo("prenom :"); ?></p>
                                </th>
                                <td>
                                    <p><?php echo($mon_espace[0]->prenom); ?></p>
                                </td>
                            </tr>
                            
                            <tr>
                                <th>
                                    <p><?php echo("téléphone :"); ?></p>
                                </th>
                                <td>
                                    <p><?php echo("0".$mon_espace[0]->tel); ?></p>
                                </td>
                            </tr>
                            
                            <tr>
                                <th>
                                    <p><?php echo("mail :"); ?></p>
                                </th>
                                <td>
                                    <p><?php echo($mon_espace[0]->mail); ?></p>
                                </td>
                            </tr>
                            
                            <tr>
                                <th>
                                    <p><?php echo("complement_adresse :"); ?></p>
                                </th>
                                <td>
                                    <p><?php echo($mon_espace[0]->complement_adresse); ?></p>
                                </td>
                            </tr>
                            
                            <tr>
                                <th>
                                    <p><?php echo("code postal :"); ?></p>
                                </th>
                                <td>
                                    <p><?php echo($mon_espace[0]->cp); ?></p>
                                </td>
                            </tr>
                            
                            <tr>
                                <th>
                                    <p><?php echo("ville :"); ?></p>
                                </th>
                                <td>
                                    <p><?php echo($mon_espace[0]->ville); ?></p>
                                </td>
                            </tr>
                        
                            </tbody>
                            
                        
        
                        </table>
                    </div>
                    <div class="col-1">
                        
                    </div>
                </div>
                
                
                <div class="row demande_area_btn">
                    <div class="col-1">
                        
                    </div>
                    <div class="col-5">
                        
                        <a href="<?= site_url('/formulaire-modification-mon-espace/',  null); ?>"><button type="button" class="btn btn-labeled btn-success demande_btn"><span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span>Modifier vos données</button></a>
                    </div>
                    <div class="col-5">
                        <form action='#' method='POST' class='navbar-form'>
                            <input  name="id_utilisateur" type="hidden" value="<?= $mon_espace[0]->id ?>">
							<?php wp_nonce_field('suppression', 'suppression-verif'); ?>
							<p>
								<button type="submit" name="suppression_utilisateur_submit" class="btn btn-labeled btn-danger demande_btn"><span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>Suprimer vos données</button>
							</p>
						</form>
                    </div>
                    <div class="col-1">
                            
                    </div>
                </div>
            </div><!-- .entry-content -->

<?php
get_footer(); // On affiche de pied de page du thème
?>