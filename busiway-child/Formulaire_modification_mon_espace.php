<?php
/*
   Template Name: Formulaire modification mon espace */

get_header(); // On affiche l'en-tête du thème WordPress
$url = site_url();
$id_session = $_COOKIE['id_session'];
$id_utilisateur = id_utilisateur_session($id_session);
$recap_mon_espace = recap_mon_espace($id_utilisateur);


$nom = $recap_mon_espace[0]->nom;
$prenom = $recap_mon_espace[0]->prenom; 
$pseudo = $recap_mon_espace[0]->pseudo;
$telephone = $recap_mon_espace[0]->tel;
$mail = $recap_mon_espace[0]->mail;
$adresse = $recap_mon_espace[0]->adresse;
$complement_adresse = $recap_mon_espace[0]->complement_adresse;
$code_postal = $recap_mon_espace[0]->cp;
$ville = $recap_mon_espace[0]->ville;




?>

    <div class="container-fluid justify-content form_area">
                
                
                

                
                
                <h1>Fomulaire modification</h1>

                <div class="row ">
                    <div class="col col-3">

                    </div>
                    <div class="col col-6">
                        <div class='alert'><?= $statut_tel ?></div>
  
                        <form   method="POST" action="#" class="form formulaire"   >
                         	<?php wp_nonce_field('formulaire_inscription', 'inscription-verif'); ?>
                           <div class="form-row">
                                <div class="form-group form-inscription col-md-6">
                                  <label for="prenom">Nom</label>
                                  <input type="text"  name="nom" class="form-control" id="nom" placeholder="Nom" value="<?php echo($nom) ?>" >
                                  <div class='alert'><?= $statut_nom ?></div>
                                </div>
                                <div class="form-group form-inscription col-md-6">
                                  <label for="prenom">Prénom</label>
                                  <input type="text"  name="prenom" class="form-control" id="prenom" placeholder="Prénom" value="<?php echo($prenom) ?>" >
                                  <div class='alert'><?= $statut_prenom ?></div>
                                </div>
                            </div>

                             <div class="form-row">
                                <div class="form-group form-inscription col-md-12">
                                  <label for="pseudo">Pseudo</label>
                                  <input type="text"   name="pseudo" class="form-control" id="Pseudo" placeholder="Pseudo" value="<?php echo($pseudo) ?>" >
                                </div>
                              </div>
                              
                              <div class='alert'><?= $statut_pseudo ?></div>
                              
                           <div class="form-row">
                                <div class="form-group form-inscription col-md-6">
                                  <label for="prenom">Mot de passe</label>
                                  <input type="password"  name="mot_de_passe" class="form-control" id="mot_de_passe" placeholder="Mot de passe" >
                                  
                                </div>
                          
                         
                                <div class="form-group form-inscription col-md-6">
                                  <label for="prenom">Confirmation mot de passe</label>
                                  <input type="password"  name="confirmation_de_mot_de_passe" class="form-control" id="confirmation_de_mot_de_passe" placeholder="Confirmation " >
                                </div>
                              </div>
                              <div class='alert_pass'></div>
                              <div class='alert'><?= $statut_pass ?></div>
                              
                               <div class="form-row">
                                <div class="form-group form-inscription col-md-12">
                                  <label for="Téléphone">Téléphone</label>
                                  <input type="tel"  name="telephone" class="form-control" id="Téléphone" placeholder="Téléphone" value="<?php echo("0".$telephone) ?>" >
                                </div>
                              </div>
                              <div class='alert'><?= $statut_tel ?></div>
                               <div class="form-row">
                                    <div class="form-group form-inscription col-md-12">
                                      <label for="Mail">Mail</label>
                                      <input type="email"   name="mail" class="form-control" id="Mail" placeholder="Mail" value="<?php echo($mail) ?>"  >
                                    </div>
                              </div>
                              <div class='alert'><?= $statut_mail ?></div>
                              <div class='form-row'>
                                   <div class="form-group form-inscription col-md-6">
                                    <label for="addresse">Adresse</label>
                                    <input type="text"   name="adresse" class="form-control" id="adresse" placeholder="Adresse" value="<?php echo($adresse) ?>" >
                                  </div>
                                  <div class="form-group form-inscription col-md-6">
                                    <label for="complément d'adresse">complément d'adresse</label>
                                    <input type="text"  name="complement_adresse" class="form-control" id="complément_adresse" placeholder="Appartement,bâtiment, lieut-dit" value="<?php echo($complement_adresse) ?>" >
                                  </div>
                              </div>
                              <div class='alert'></div>
                              <div class="form-row">
                                    <div class="form-group form-inscription col-md-4">
                                      <label for="Code postal">Code postal</label>
                                      <input type="text"   name="code_postale" class="form-control" id="Code_postal" value="<?php echo($code_postal) ?>" >
                                      <div class='alert'><?= $statut_cp ?></div>
                                    </div>
                                    <div class="form-group form-inscription col-md-8">
                                      <label for="Ville">Ville</label>
                                      <input type="text"  name="ville" class="form-control" id="Ville" value="<?php echo($ville) ?>" >
                                      <div class='alert'><?= $statut_ville ?></div>
                                    </div>
                              </div>
                              <form action='#' method='POST' class='navbar-form'>
                                 <input  name="id_utilisateur" type="hidden" value="<?= $id_utilisateur ?>">
							     <?php wp_nonce_field('modification', 'modification-verif'); ?>
						    	<p>
                                  <button type="submit" name="modification_utilisateur_submit" class="btn btn-primary">Modification</button>
                                </p>
						      </form>
                        </form>
                    </div>
                    <div class="col col-3">
                        
                    </div>
                </div>
            </div><!-- .entry-content -->



<?php
get_footer(); // On affiche de pied de page du thème
?>