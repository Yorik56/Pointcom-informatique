<?php
/*
   Template Name: Confirmation Demande Service
*/

get_header(); // On affiche l'en-tête du thème WordPress
$url = site_url();
$id_session = $_COOKIE['id_session'];
$id_utilisateur = id_utilisateur_session($id_session);
$date_demande = date_demande($id_session);
$recap_demande = recap_demande($date_demande);
$date = dateLongue($date_demande,'no');
$tarifs_services = tarifs_services();



?>

 <?php if(!isset($_COOKIE['id_session'])){	?>
 					<?php  wp_safe_redirect($url); ?>
            <?php }else{ ?>
            

            <div class="container-fluid justify-content form_services">

            <div class="container-fluid justify-content">
                <h1>Confirmation Demande Service</h1>
                <p>Les Tarifs indiqués ci dessous sont indicatifs, les demandes seront évaluées et validées par notre équipe dans les plus brefs délais </p>
                <p>N'hésitez pas à nous contacter pour plus d'informations</p>
                
                <div class="row">
                    <div class="col-1">

                    </div>
                    <div class="col-10">
                        <table class="table bg-primary" id="recap_demande">
                            <tbody>
                                <tr>
                                    <th>
                                        <p>Date de commande</p>
                                    </th>
                                    <td>
                                        <p><?php echo($date); ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <p><?php echo("N° de Commande:"); ?></p>
                                    </th>
                                    <td>
                                        <p><?php echo($recap_demande[0]->id); ?></p>
                                    </td>
                                </tr>
                                <?php
                                    foreach($recap_demande[0] as $key => $value){
                                        if($key == 'sauveguarde_giga_additionnel'){
                                            if($value != 0){
                                                echo ("<tr><th><p>Service :  </p></th><td><p>Sauveguarde de ".$value." gigas additionnels (".($value + 20 )." gigas): ".(($tarifs_services[0]->tarif_sauveguarde_giga_additionnel * $value) + 39)." €</p></td></tr>");
                                            }
                                        }
                                        
                                        if($value == 1){
                                            if($key == 'ajout_composant'){
                                                if($recap_demande[0]->nombre_ajout_composant == 1){
                                                    echo ("<tr><th><p>Service :  </p></th><td><p>Ajout de ".$recap_demande[0]->nombre_ajout_composant." composant(s) : ".$tarifs_services[0]->tarif_ajout_composant." €</p></td></tr>");
                                                }
                                                if($recap_demande[0]->nombre_ajout_composant == 2){
                                                    echo ("<tr><th><p>Service :  </p></th><td><p>Ajout de ".$recap_demande[0]->nombre_ajout_composant." composant(s) : ".$tarifs_services[1]->tarif_ajout_composant." €</p></td></tr>");
                                                }
                                                if($recap_demande[0]->nombre_ajout_composant == 3){
                                                    echo ("<tr><th><p>Service :  </p></th><td><p>Ajout de ".$recap_demande[0]->nombre_ajout_composant." composant(s) : ".$tarifs_services[2]->tarif_ajout_composant." €</p></td></tr>");
                                                }
                                                if($recap_demande[0]->nombre_ajout_composant == 4){
                                                    echo ("<tr><th><p>Service :  </p></th><td><p>Ajout de ".$recap_demande[0]->nombre_ajout_composant." composant(s) : ".$tarifs_services[3]->tarif_ajout_composant." €</p></td></tr>");
                                                }
                                            }
                                            if($key != 'sauveguarde_giga_additionnel' && $key != 'ajout_composant' ){
                                                $tarif = tarif_simple("tarif_".$key);
                                                echo ("<tr><th><p>Service :  </p></th><td><p>".$key." ".$tarif." €</p></td></tr>");
                                            }
                                            
                                        }
                                    }
                                ?>
                                <tr>
                                    <th>
                                        <p>Total de la demande</p>
                                    </th>
                                    <td>
                                        <p><?php echo($recap_demande[0]->total_tarif_services." €"); ?></p>
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
                        <a href="<?= home_url();  ?>"> <button type="button" class="btn btn-labeled btn-success demande_btn"><span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span>Confirmer Demande</button></a>
                    </div>
                    <div class="col-5">
                        <form action='#' method='POST' class='navbar-form'>
                            <input  name="id_commande" type="hidden" value="<?= $recap_demande[0]->id ?>">
							<?php wp_nonce_field('annulation', 'annulation-verif'); ?>
							<p>
								<button type="submit" name="annulation_submit" class="btn btn-labeled btn-danger demande_btn"><span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>Annuler Demande</button>
							</p>
						</form>
                    </div>
                    <div class="col-1">
                            
                    </div>
                </div>
            </div><!-- .entry-content -->
            
            <?php } ?>

<?php
get_footer(); // On affiche de pied de page du thème
?>