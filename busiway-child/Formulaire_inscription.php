<?php
/*
   Template Name: Formulaire inscription */

get_header(); // On affiche l'en-tête du thème WordPress
$url = site_url();

?>
            <div class="container-fluid justify-content form_area">
                
                
                
                <?php

                        if($_POST['statut_tel'] == 'error'){
                            $statut_tel = "";
                            $statut_tel = "<p>Le format n'est pas valide (10 chiffes)</p>";
                        }
                        if($_POST['statut_code_postale'] == 'error'){
                            $statut_cp = "";
                            $statut_cp = "<p>Le format n'est pas valide (5 chiffres)</p>";
                        }
                        if($_POST['statut_nom'] == 'error'){
                            $statut_nom = "";
                            $statut_nom = "<p>Le format n'est pas valide (Pas de chiffres, ni de characères spéciaux)</p>";
                        }
                        if($_POST['statut_prenom'] == 'error'){
                            $statut_prenom = "";
                            $statut_prenom = "<p>Le format n'est pas valide (Pas de chiffres, ni de characères spéciaux)</p>";
                        }
                        if($_POST['statut_ville'] == 'error'){
                            $statut_ville = "";
                            $statut_ville = "<p>Le format n'est pas valide (Pas de chiffres, ni de characères spéciaux)</p>";
                        }
                        if($_POST['statut_pseudo'] == 'error'){
                            $statut_pseudo = "";
                            $statut_pseudo = "<p>Le pseudo est déjà existant</p>";
                        }
                        if($_POST['statut_mail'] == 'error'){
                            $statut_mail = "";
                            $statut_mail = "<p>Entrez un mail valide</p>";
                        }
                         if($_POST['statut_pass'] == 'error'){
                            $statut_pass = "";
                            $statut_pass = "<p>Veuillez rentrez un mot de passe avec 8 caractères minimum, au moins une majuscule, un chiffre</p>";
                        }
                        if($_POST['statut_confirm_pass'] == 'error'){
                            $statut_confirm_pass = "";
                            $statut_confirm_pass = "<p>Les champs : mots de passe et confirmation mot de passe doivent être identiques</p>";
                        }
                        
                       
                        
                        
                        if($_POST['formulaire_success'] == 'success'){
                            $alert_form = "<div class='row alert_form'>
                                             <div class='col-lg-12'>
                                               <p>Vous êtes bien inscris, n'oubliez pas vos pseudo et mot de passe, afin de vous connecter</p>
                                             </div>
                                           </div>";
                        }
                        else if ($_POST['formulaire_success'] == 'error'){
                            $alert_form = "<p>Veuillez compléter tout les champs comme demandé</p>";
                        }

                ?>
                <h1 class="inscription_titre">Fomulaire inscription</h1>
                      <?php echo $alert_form; ?>
                <div class="row ">
                    <div class="col col-3">
                    
                    </div>
                    <div class="col col-6">
                        <form   method="POST" action="#" class="form formulaire"   >
                         	<?php wp_nonce_field('formulaire_inscription', 'inscription-verif'); ?>
                           <div class="form-row">
                                <div class="form-group form-inscription col-md-6">
                                  <label for="prenom">Nom</label>
                                  <input type="text"  name="nom" class="form-control" id="nom" placeholder="Nom" required>
                                  <div class='alert'><?= $statut_nom ?></div>
                                </div>
                                <div class="form-group form-inscription col-md-6">
                                  <label for="prenom">Prénom</label>
                                  <input type="text"  name="prenom" class="form-control" id="prenom" placeholder="Prénom" required>
                                  <div class='alert'><?= $statut_prenom ?></div>
                                </div>
                            </div>

                             <div class="form-row">
                                <div class="form-group form-inscription col-md-12">
                                  <label for="pseudo">Pseudo</label>
                                  <input type="text"   name="pseudo" class="form-control" id="Pseudo" placeholder="Pseudo" required>
                                </div>
                              </div>
                              
                              <div class='alert'><?= $statut_pseudo ?></div>
                              
                           <div class="form-row">
                                <div class="form-group form-inscription col-md-6">
                                  <label for="prenom">Mot de passe</label>
                                  <input type="password"  name="mot_de_passe" class="form-control" id="mot_de_passe" placeholder="Mot de passe" required>
                                  
                                </div>
                          
                         
                                <div class="form-group form-inscription col-md-6">
                                  <label for="prenom">Confirmation mot de passe</label>
                                  <input type="password"  name="confirmation_de_mot_de_passe" class="form-control" id="confirmation_de_mot_de_passe" placeholder="Confirmation " required>
                                </div>
                              </div>
                              <div class='alert_pass'></div>
                               <div class='alert'><?= $statut_pass ?></div>
                              <div class='alert'><?= $statut_confirm_pass ?></div>
                              
                               <div class="form-row">
                                <div class="form-group form-inscription col-md-12">
                                  <label for="Téléphone">Téléphone</label>
                                  <input type="tel"  name="telephone" class="form-control" id="Téléphone" placeholder="Téléphone" required>
                                </div>
                              </div>
                              <div class='alert'><?= $statut_tel ?></div>
                               <div class="form-row">
                                    <div class="form-group form-inscription col-md-12">
                                      <label for="Mail">Mail</label>
                                      <input type="email"   name="mail" class="form-control" id="Mail" placeholder="Mail"  required>
                                    </div>
                              </div>
                              <div class='alert'><?= $statut_mail ?></div>
                              <div class='form-row'>
                                   <div class="form-group form-inscription col-md-6">
                                    <label for="addresse">Adresse</label>
                                    <input type="text"   name="adresse" class="form-control" id="adresse" placeholder="Adresse" required>
                                  </div>
                                  <div class="form-group form-inscription col-md-6">
                                    <label for="complément d'adresse">complément d'adresse</label>
                                    <input type="text"  name="complement_adresse" class="form-control" id="complément_adresse" placeholder="Appartement,bâtiment, lieut-dit" required>
                                  </div>
                              </div>
                              <div class='alert'></div>
                              <div class="form-row">
                                    <div class="form-group form-inscription col-md-4">
                                      <label for="Code postal">Code postal</label>
                                      <input type="text"   name="code_postale" class="form-control" id="Code_postal" required>
                                      <div class='alert'><?= $statut_cp ?></div>
                                    </div>
                                    <div class="form-group form-inscription col-md-8">
                                      <label for="Ville">Ville</label>
                                      <input type="text"  name="ville" class="form-control" id="Ville" required>
                                      <div class='alert'><?= $statut_ville ?></div>
                                    </div>
                              </div>
                               
                               
                               <div class="form-check">
                                    <input type="checkbox" name="politique" class="form-check-input"  value="true" required>
                                    <label class="form-check-label" for="exampleCheck1"><a class="politique"  href="<?= site_url('/politique-de-confidentialite',  null); ?>"> J’ai lu et j’accepte <strong>la politique de confidentialité</strong></a></p> </label>
                                    
                                  </div>
                              <button type="submit" name="inscription_submit" class="btn btn-primary">Envoyer</button>
                        </form>
                    </div>
                    <div class="col col-3">
                        
                    </div>
                </div>
            </div><!-- .entry-content -->

<?php
get_footer(); // On affiche de pied de page du thème
?>