<?php
/*
   Template Name: Formulaire achat ticket
*/

get_header(); // On affiche l'en-tête du thème WordPress
$url = site_url();
$id_session = $_COOKIE['id_session'];
$statut_utilisateur = statut_utilisateur($id_session);
$tarifs_tickets = tarifs_tickets();
$test = $_POST['test'];
$id_utilisateur = id_utilisateur_session($id_session);
?>


            <div class="container-fluid justify-content">
                
                <h1>Fomulaire de réservation de Ticket</h1>
                
                 <?php if(!isset($_COOKIE['id_session'])){	?>
 					  <div class="container-fluid justify-content form_services">
 				           <h1 class="connexion_demander_titre">retournez à <a href="<?= home_url();  ?>"><button >l'accueil</button></a> ou connectez-vous pour accéder au formulaire de réservation de ticket</h1>
 				      </div>
                <?php }else{ ?>
                 
                <div class="row formulaire">
                    <div class="col col-1">
                        <?php print_r($test) ?>

                    </div>
                    <div class="col col-10">
                        <?php if($statut_utilisateur == "public"){ ?>
                            <form   method="POST" action="#" class="form formulaire">
                                <input name="statut" type="hidden"  value="<?= $statut_utilisateur ?>" >
                                <input name="id_utilisateur" type="hidden"  value="<?= $id_utilisateur ?>" >
                            	<?php wp_nonce_field('demande_ticket', 'demande_ticket-verif'); ?>
                                <label for="exampleFormControlSelect1">Tarif Public</label>
                                <select class="form-control" id="demande_de_ticket" name="select_ticket">
                                  <option selected>Choisissez votre ticket</option>
                                    <?php foreach($tarifs_tickets as $key => $value){ 
                                            if($value->tarif_public != "/"){
                                                echo "<option value='".$value->id."'>Ticket n° ".$value->id." : ".$value->temps." ".$value->tarif_public." €</option>";
                                            }
                                    } ?>
                                </select>
                             
                          <button type="submit" name="demande_ticket_submit" class="btn btn-primary form formulaire">Envoyer</button>
                        </form>
                        <?php } ?>
                        <?php if($statut_utilisateur == "membre"){ ?>
                            <form   method="POST" action="#" class="form formulaire">
                                <input name="statut" type="hidden"  value="<?= $statut_utilisateur ?>" >
                                <input name="id_utilisateur" type="hidden"  value="<?= $id_utilisateur ?>" >
                         	    <?php wp_nonce_field('demande_ticket', 'demande_ticket-verif'); ?>
                                <label for="exampleFormControlSelect1">Tarif Membre</label>
                                <select class="form-control" id="demande_de_ticket" name="select_ticket">
                                  <option selected>Choisissez votre ticket</option>
                                  <?php foreach($tarifs_tickets as $key => $value){ 
                                            
                                            if($value->tarif_membre != "/"){
                                                echo "<option value='".$value->id."'>Ticket n° ".$value->id." : ".$value->temps." ".$value->tarif_membre." €</option>";
                                            }
                                            
                                    } ?>
                                </select>
                          <button type="submit" name="demande_ticket_submit" class="btn btn-primary form formulaire">Envoyer</button>
                        </form>
                        <?php } ?>
                        <?php if($statut_utilisateur == "premium"){ ?>
                            <form   method="POST" action="#" class="form formulaire">
                                <input name="statut" type="hidden"  value="<?= $statut_utilisateur ?>" >
                                <input name="id_utilisateur" type="hidden"  value="<?= $id_utilisateur ?>" >
                         	    <?php wp_nonce_field('demande_ticket', 'demande_ticket-verif'); ?>
                                <label for="exampleFormControlSelect1">Tarif Premium</label>
                                <select class="form-control" id="demande_de_ticket" name="select_ticket">
                                  <option selected>Choisissez votre ticket</option>
                                  <?php foreach($tarifs_tickets as $key => $value){ 
                                            if($value->tarif_premium != "/"){
                                                echo "<option value='".$value->id."'>Ticket n° ".$value->id." : ".$value->temps." ".$value->tarif_premium." €</option>";
                                            }
                                    } ?>
                                </select>
                            
                          <button type="submit" name="demande_ticket_submit" class="btn btn-primary form formulaire">Envoyer</button>
                        </form>
                        <?php } ?>
                        <?php if($statut_utilisateur == "admin"){ ?>
                             <form   method="POST" action="#" class="form formulaire">
                                <input name="statut" type="hidden"  value="<?= $statut_utilisateur ?>" >
                                <input name="id_utilisateur" type="hidden"  value="<?= $id_utilisateur ?>" >
                         	    <?php wp_nonce_field('demande_ticket', 'demande_ticket-verif'); ?>
                                <label for="exampleFormControlSelect1">Tarif Public</label>
                                <select class="form-control" id="demande_de_ticket" name="select_ticket">
                                  <option selected>Choisissez votre ticket</option>
                                  <?php foreach($tarifs_tickets as $key => $value){ 
                                            
                                            if($value->tarif_public != "/"){
                                                echo "<option value='".$value->id."'>Ticket n° ".$value->id." : ".$value->temps." ".$value->tarif_public." €</option>";
                                            }
                                            
                                    } ?>
                                </select>
                          <button type="submit" name="demande_ticket_submit" class="btn btn-primary form formulaire">Envoyer</button>
                        </form>
                        <form   method="POST" action="#" class="form formulaire">
                            <input name="statut" type="hidden"  value="<?= $statut_utilisateur ?>" >
                            <input name="id_utilisateur" type="hidden"  value="<?= $id_utilisateur ?>" >
                         	<?php wp_nonce_field('demande_ticket', 'demande_ticket-verif'); ?>
                            <label for="exampleFormControlSelect1">Tarif Membre</label>
                            <select class="form-control" id="demande_de_ticket" name="select_ticket">
                              <option selected>Choisissez votre ticket</option>
                              <?php foreach($tarifs_tickets as $key => $value){ 
                                        
                                        if($value->tarif_membre != "/"){
                                            echo "<option value='".$value->id."'>Ticket n° ".$value->id." : ".$value->temps." ".$value->tarif_membre." €</option>";
                                        }
                                        
                                } ?>
                            </select>
                            <button type="submit" name="demande_ticket_submit" class="btn btn-primary form formulaire">Envoyer</button>
                        </form>
                        <form   method="POST" action="#" class="form formulaire">
                         	<?php wp_nonce_field('demande_ticket', 'demande_ticket-verif'); ?>
                                <label for="exampleFormControlSelect1">Tarif Premium</label>
                                <select class="form-control" id="demande_de_ticket" name="select_ticket">
                                  <option selected>Choisissez votre ticket</option>
                                  <?php foreach($tarifs_tickets as $key => $value){ 
                                            
                                            if($value->tarif_premium != "/"){
                                                echo "<option value='".$value->id."'>Ticket n° ".$value->id." : ".$value->temps." ".$value->tarif_premium." €</option>";
                                            }
                                            
                                    } ?>
                                </select>
                          <button type="submit" name="demande_ticket_submit" class="btn btn-primary form formulaire">Envoyer</button>
                        </form>
                        <?php } ?>
                    </div>
                    <div class="col col-1">
                        
                    </div>
                </div>
                <?php } ?>
            </div><!-- .entry-content -->

<?php
get_footer(); // On affiche de pied de page du thème
?>