<?php
/*
   Template Name: Formulaire demande service
*/

get_header(); // On affiche l'en-tête du thème WordPress
$url = site_url();
?>
            
            
            <?php if(!isset($_COOKIE['id_session'])){	?>
                        <h1 class="form_demande_service">Fomulaire de demande de service</h1>
 					  <div class="container-fluid justify-content form_services">
 				           <h1 class="connexion_demander_titre">retournez à <a href="<?= home_url();  ?>"><button >l'accueil</button></a> ou connectez-vous pour accéder au formulaire de demande de service</h1>
 				      </div>
            <?php }else{ ?>
            

            <div class="container-fluid justify-content form_services">
                
               
                 
                <div class="row formulaire_large">
                    <div class="col col-1">
                        
                    </div>
                    <div class="col col-10">
                        <?php 
                            print_r($_POST['id']);
                        ?>

                         <h1 class="form_demande_service">Fomulaire demande service</h1>
                         
                        <form method="POST" action="#" class="form">
                            
                         	<?php wp_nonce_field('formulaire_demande-service', 'demande_service-verif'); ?>
                            <div class="form-group">
                                <p>Diagnostic</p>
                                <img class="img-fluid services_logo" src="<?= $url?>/wp-content/themes/busiway-child/images/diag_logo.png"  alt="Diagnostique pc">
                                  <div class="form-check">
                                    <input type="checkbox" name="diag_pc_laptop_mac" class="form-check-input" id="exampleCheck1" value="true">
                                    <label class="form-check-label" for="exampleCheck1">Unité centrale ou pc portable ou Produit Apple:   </label>
                                    <div class="prix">39€</div>
                                  </div>
                                  <div class="form-check">
                                    <input type="checkbox" name="diag_autre" class="form-check-input" id="exampleCheck1" value="true">
                                    <label class="form-check-label" for="exampleCheck1">diagnostic smartphone, imprimante, composant(carte graphique, mémoire ram..) </label>
                                    <div class="prix">19€</div>
                                  </div>
                            </div>

                          	<div class="form-group">
                          	    <p>Atelier</p>
                          	    <img class="img-fluid services_logo" src="<?= $url?>/wp-content/themes/busiway-child/images/atelier_logo.png"  alt="Atelier pc">
                                <div class="form-check">
                                    <input type="checkbox" name="install_systeme" class="form-check-input" id="exampleCheck1" value="true">
                                    <label class="form-check-label"  for="exampleCheck1">Installation système d'exploitation(OS-driver-anti-virus) sur tout support (Mac-Windows-Linux) </label>
                                    <div class="prix">59€</div>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="install_suite_logiciel" class="form-check-input" id="exampleCheck1" value="true">
                                    <label class="form-check-label" for="exampleCheck1">Suite de logiciel "Pack pointcom" (Bureautique(traitement de texte, tableur...), lecteur multimédia(vlc,quicktime,...))</label>
                                    <div class="prix">29€</div>
                                </div>
                                <label for="exampleFormControlSelect1">Logiciel à l'unité</label>
                                <select class="form-control" name="install_logiciel_unite" id="exampleFormControlSelect1">
                                    <option selected>Nombre de logiciels à installer</option>
                                    <option>1: 15€</option>
                                    <option>2: 25€</option>
                                    <option>3: 35€</option>
                                    <option>4: 45€</option>
                                </select>
                                <div class="form-check">
                                    <input type="checkbox" name="montage_unite_centrale" class="form-check-input" id="exampleCheck1" value="true">
                                    <label class="form-check-label" for="exampleCheck1">Montage unité centrale (hors OS) </label>
                                    <div class="prix">49€</div>
                                </div> 
                                <label for="exampleFormControlSelect1">Ajout d'un composant sur toutes les unités centrales (+ installation logiciels pilotes)</label>
                                <label for="exampleFormControlSelect1">Les prix indiqués sont des prix de départ</label>
                                <select class="form-control" name="ajout_composant" id="exampleFormControlSelect1">
                                    <option selected>Nombre de composants à installer</option>    
                                    <option>1: 19€</option>
                                    <option>2: 38€</option>
                                    <option>3: 57€</option>
                                </select>
                            </div>
                            
      
                          	
                            <div class="form-group">
                                <p>Sauvegarde données</p>
                                <img class="img-fluid services_logo" src="<?= $url?>/wp-content/themes/busiway-child/images/backup.png"  alt="backup pc">
                                <div class="form-check">
                                    <input type="checkbox" name="sauveguarde_inferieur_5gigas" class="form-check-input" id="sauveguarde_inferieur_5gigas" value="true">
                                    <label class="form-check-label" for="exampleCheck1">Inférieur à 5 Go sans tri de données </label>
                                    <div class="prix">Gratuit</div>
                                </div> 
                                <div class="form-check">
                                    <input type="checkbox" name="sauveguarde_inferieur_20gigas" class="form-check-input" id="inferieur_20_gigas" value="true">
                                    <label class="form-check-label" for="exampleCheck1">Inférieur à 20 Go avec tri de données</label>
                                    <div class="prix">39€</div>
                                </div> 
                                <label for="exampleFormControlSelect1">Au dessus de 20 gigas, Le giga suplémentaire coûte 2€</label>
                                    <select class="form-control" name="sauveguarde_giga_additionnel" id="gigas_supplementaire">
                                        <option selected>Au dessus de 20 gigas</option>
                                        <option>21 Go: 41€</option>
                                        <option>22 Go: 43€</option>
                                        <option>23 Go: 45€</option>
                                        <option>24 Go: 47€</option>
                                        <option>25 Go: 49€</option>
                                        <option>26 Go: 51€</option>
                                        <option>27 Go: 53€</option>
                                        <option>28 Go: 55€</option>
                                        <option>29 Go: 57€</option>
                                        <option>30 Go: 59€</option>
                                        <option>31 Go: 61€</option>
                                        <option>32 Go: 63€</option>
                                        <option>33 Go: 65€</option>
                                        <option>34 Go: 67€</option>
                                        <option>35 Go: 69€</option>
                                        <option>36 Go: 71€</option>
                                        <option>37 Go: 73€</option>
                                        <option>38 Go: 75€</option>
                                        <option>39 Go: 77€</option>
                                        <option>40 Go: 79€</option>
                                        <option>41 Go: 81€</option>
                                        <option>42 Go: 83€</option>
                                        <option>43 Go: 85€</option>
                                        <option>44 Go: 87€</option>
                                        <option>45 Go: 89€</option>
                                        <option>46 Go: 91€</option>
                                        <option>47 Go: 93€</option>
                                        <option>48 Go: 95€</option>
                                        <option>49 Go: 97€</option>
                                        <option>50 Go: 99€</option>
                                    </select>
                                <div class="form-check">
                                    <input type="checkbox" name="sauveguarde_superieur_50giga" class="form-check-input" id="superieur_50_gigas" value="true">
                                    <label class="form-check-label" for="exampleCheck1">Au dessus de 50 gigas</label>
                                    <div class="prix">100€</div>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="recuperation_disque_dur" class="form-check-input" id="exampleCheck1" value="true">
                                    <label class="form-check-label" for="exampleCheck1">Récupération de données depuis disque dur déffectueux  </label>
                                    <div class="prix">39€ + tarifs sauvegarde</div>
                                    <label>(sans garantie de réussite)</label>
                                </div> 
                                <div class="form-check">
                                    <input type="checkbox" name="clone_disque_dur" class="form-check-input" id="exampleCheck1" value="true">
                                    <label class="form-check-label" for="exampleCheck1">Clone de disque dur/partition  </label>
                                    <div class="prix">à partir de 49€</div>
                                </div> 
                            </div>
                            
                            
                          	
                           	<div class="form-group">
                           	    <p>Nettoyage</p>
                           	    <img class="img-fluid services_logo" src="<?= $url?>/wp-content/themes/busiway-child/images/clean_pc.png"  alt="nettoyage pc">
                           	    <p class="physique_title"> physique (avec démontage pâte thermique)</p>
                                <div class="form-check">
                                    <input type="checkbox" name="nettoyage_physique_laptop" class="form-check-input" id="exampleCheck1" value="true">
                                    <label class="form-check-label" for="exampleCheck1">Laptop</label>
                                    <div class="prix">59€</div>
                                </div> 
                                <div class="form-check">
                                    <input type="checkbox" name="nettoyage_physique_uc" class="form-check-input" id="exampleCheck1" value="true">
                                    <label class="form-check-label" for="exampleCheck1">Unité centrale </label>
                                    <div class="prix">29€</div>
                                </div> 
                            	<p class="logiciel_title"> logiciel</p>
                                <div class="form-check">
                                    <input type="checkbox" name="entretien_logiciel_annuel" class="form-check-input" id="exampleCheck1" value="true">
                                    <label class="form-check-label" for="exampleCheck1">Entretien annuel</label>
                                    <label> (optimisation + nettoyage du systeme + mise à jour(Pilote + Windows))</label>
                                    <div class="prix">67€</div>
                                </div> 
                                <div class="form-check">
                                    <input type="checkbox" name="diag_desinfection_nettoyage" class="form-check-input" id="exampleCheck1" value="true">
                                    <label class="form-check-label" for="exampleCheck1">Diagnostique + désinfection + nettoyage du système  </label>
                                    <div class="prix">à partir de 59€</div>
                                </div>
                           	</div>
                            
                            <div class="form-group">
                              <p>Tarifs Horaires</p>
                              <img class="img-fluid services_logo" src="<?= $url?>/wp-content/themes/busiway-child/images/horaire.png"  alt="horaires/tarifs">
                              <table class="table">
                                  <thead>
                                     <tr>
                                        <td class="table_horaires_services" colspan="1" ></td> <td class="table_horaires_services" colspan="1" >Au Magasin</td><td class="table_horaires_services" colspan="1">en déplacement</td>
                                     </tr> 
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td class="table_horaires_services">Laptop</td><td class="table_horaires_services">49€/heure</td>
                                          <td class="table_horaires_services"></td>
                                      </tr>
                                      <tr>
                                          <td class="table_horaires_services">Unité Centrale</td><td class="table_horaires_services">39€/heure</td>
                                         <td class="table_horaires_services"></td>
                                      </tr>
                                      <tr>
                                          <td class="table_horaires_services">Prise en charge immédiate </td><td class="table_horaires_services">à partir de 80€/heure</td>
                                          <td class="table_horaires_services"></td>
                                      </tr>
                                      <tr>
                                          <td class="table_horaires_services">Diagnostique </td><td class="table_horaires_services"></td>
                                          <td class="table_horaires_services">59€/heure</td>
                                      </tr>
                                  </tbody>
                              </table>
                                <div class="form-check">
                                    <input type="checkbox" name="demande_urgence" class="form-check-input" id="exampleCheck1" value="true">
                                    <label class="form-check-label" for="exampleCheck1">Faire une demande en urgence</label>
                                    <div class="prix">à partir de 80€/h</div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <ul>
                    				<li><p>  1- Diagnostique inclus dans les réparations futures.</p></li>
                    				<li><p> 2- Le client doit fournir les licences et les supports d'installation</p></li>
                    				<li><p> 3- Le client doit fournir le nouveau support de sauvegarde, les sauvegardes de données ne sont pas garanties et dépendent de l'état du système e du matériel</p></li>
                    				<li><p> 4- Contactez l'équipe pour des demandes spécifiques </p> </li>
                    			</ul>
                            </div>
                            
                                              
                            <div class="form-group">
                               <label for="comment">Merci de préciser un maximum de détails (marque composants, nom logiciels, type d'OS ) concernant votre demande:</label>
                               <textarea class="form-control" name="commentaire" rows="6" id="comment"></textarea>
                            </div>

                          <button type="submit" name="demande-service_submit" class="btn btn-primary">Envoyer</button>
                        </form>
                    </div>
                    <div class="col col-1">
                        
                    </div>
                </div>
                
                <div class="row formulaire_medium">
                    
                    <div class="col col-12">
                        <?php 
                            print_r($_POST['id']);
                        ?>

                        <h1 class="form_demande_service">Fomulaire demande service</h1>
                         
                        <form method="POST" action="#" class="form">
                         	<?php wp_nonce_field('formulaire_demande-service', 'demande_service-verif'); ?>
                         	
                            <div class="form-group">
                                <p>Diagnostic</p>
                                <img class="img-fluid services_logo" src="<?= $url?>/wp-content/themes/busiway-child/images/diag_logo.png"  alt="Diagnostique pc">
                                  <div class="form-check">
                                    <input type="checkbox" name="diag_pc_laptop_mac" class="form-check-input" id="exampleCheck1" value="true">
                                    <label class="form-check-label" for="exampleCheck1">Unité centrale ou pc portable ou Produit Apple:   </label>
                                    <div class="prix">39€</div>
                                  </div>
                                  <div class="form-check">
                                    <input type="checkbox" name="diag_autre" class="form-check-input" id="exampleCheck1" value="true">
                                    <label class="form-check-label" for="exampleCheck1">diagnostic smartphone, imprimante, composant(carte graphique, mémoire ram..) </label>
                                    <div class="prix">19€</div>
                                  </div>
                            </div>

                          	<div class="form-group">
                          	    <p>Atelier</p>
                          	    <img class="img-fluid services_logo" src="<?= $url?>/wp-content/themes/busiway-child/images/atelier_logo.png"  alt="Atelier pc">
                                <div class="form-check">
                                    <input type="checkbox" name="install_systeme" class="form-check-input" id="exampleCheck1" value="true">
                                    <label class="form-check-label"  for="exampleCheck1">Installation système d'exploitation(OS-driver-anti-virus) sur tout support (Mac-Windows-Linux) </label>
                                    <div class="prix">59€</div>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="install_suite_logiciel" class="form-check-input" id="exampleCheck1" value="true">
                                    <label class="form-check-label" for="exampleCheck1">Suite de logiciel "Pack pointcom" (Bureautique(traitement de texte, tableur...), lecteur multimédia(vlc,quicktime,...))</label>
                                    <div class="prix">29€</div>
                                </div>
                                <label for="exampleFormControlSelect1">Logiciel à l'unité</label>
                                <select class="form-control" name="install_logiciel_unite" id="exampleFormControlSelect1">
                                    <option selected>Nombre de logiciels à installer</option>
                                    <option>1: 15€</option>
                                    <option>2: 25€</option>
                                    <option>3: 35€</option>
                                    <option>4: 45€</option>
                                </select>
                                <div class="form-check">
                                    <input type="checkbox" name="montage_unite_centrale" class="form-check-input" id="exampleCheck1" value="true">
                                    <label class="form-check-label" for="exampleCheck1">Montage unité centrale (hors OS) </label>
                                    <div class="prix">49€</div>
                                </div> 
                                <label for="exampleFormControlSelect1">Ajout d'un composant sur toutes les unités centrales (+ installation logiciels pilotes)</label>
                                <label for="exampleFormControlSelect1">Les prix indiqués sont des prix de départ</label>
                                <select class="form-control" name="ajout_composant" id="exampleFormControlSelect1">
                                    <option selected>Nombre de composants à installer</option>    
                                    <option>1: 19€</option>
                                    <option>2: 38€ </option>
                                    <option>3: 57€</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <p>Sauvegarde données</p>
                                <img class="img-fluid services_logo" src="<?= $url?>/wp-content/themes/busiway-child/images/backup.png"  alt="backup pc">
                                <div class="form-check">
                                    <input type="checkbox" name="sauveguarde_inferieur_5gigas" class="form-check-input" id="sauveguarde_inferieur_5gigas" value="true">
                                    <label class="form-check-label" for="exampleCheck1">Inférieur à 5 Go sans tri de données </label>
                                    <div class="prix">Gratuit</div>
                                </div> 
                                <div class="form-check">
                                    <input type="checkbox" name="sauveguarde_inferieur_20gigas" class="form-check-input" id="inferieur_20_gigas" value="true">
                                    <label class="form-check-label" for="exampleCheck1">Inférieur à 20 Go avec tri de données</label>
                                    <div class="prix">39€</div>
                                </div> 
                                <label for="exampleFormControlSelect1">Au dessus de 20 gigas, Le giga suplémentaire coûte 2€</label>
                                    <select class="form-control" name="sauveguarde_giga_additionnel" id="gigas_supplementaire">
                                        <option selected>Au dessus de 20 gigas</option>
                                        <option>21 Go: 41€</option>
                                        <option>22 Go: 43€</option>
                                        <option>23 Go: 45€</option>
                                        <option>24 Go: 47€</option>
                                        <option>25 Go: 49€</option>
                                        <option>26 Go: 51€</option>
                                        <option>27 Go: 53€</option>
                                        <option>28 Go: 55€</option>
                                        <option>29 Go: 57€</option>
                                        <option>30 Go: 59€</option>
                                        <option>31 Go: 61€</option>
                                        <option>32 Go: 63€</option>
                                        <option>33 Go: 65€</option>
                                        <option>34 Go: 67€</option>
                                        <option>35 Go: 69€</option>
                                        <option>36 Go: 71€</option>
                                        <option>37 Go: 73€</option>
                                        <option>38 Go: 75€</option>
                                        <option>39 Go: 77€</option>
                                        <option>40 Go: 79€</option>
                                        <option>41 Go: 81€</option>
                                        <option>42 Go: 83€</option>
                                        <option>43 Go: 85€</option>
                                        <option>44 Go: 87€</option>
                                        <option>45 Go: 89€</option>
                                        <option>46 Go: 91€</option>
                                        <option>47 Go: 93€</option>
                                        <option>48 Go: 95€</option>
                                        <option>49 Go: 97€</option>
                                        <option>50 Go: 99€</option>
                                    </select>
                                <div class="form-check">
                                    <input type="checkbox" name="sauveguarde_superieur_50giga" class="form-check-input" id="superieur_50_gigas" value="true">
                                    <label class="form-check-label" for="exampleCheck1">Au dessus de 50 gigas</label>
                                    <div class="prix">100€</div>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="recuperation_disque_dur" class="form-check-input" id="exampleCheck1" value="true">
                                    <label class="form-check-label" for="exampleCheck1">Récupération de données depuis disque dur déffectueux  </label>
                                    <div class="prix">39€ + tarifs sauvegarde</div>
                                    <label>(sans garantie de réussite)</label>
                                </div> 
                                <div class="form-check">
                                    <input type="checkbox" name="clone_disque_dur" class="form-check-input" id="exampleCheck1" value="true">
                                    <label class="form-check-label" for="exampleCheck1">Clone de disque dur/partition  </label>
                                    <div class="prix">à partir de 49€</div>
                                </div> 
                            </div>
                            
                            
                          	
                           	<div class="form-group">
                           	    <p>Nettoyage</p>
                           	    <img class="img-fluid services_logo" src="<?= $url?>/wp-content/themes/busiway-child/images/clean_pc.png"  alt="nettoyage pc">
                           	    <p class="physique_title"> physique (avec démontage pâte thermique)</p>
                                <div class="form-check">
                                    <input type="checkbox" name="nettoyage_physique_laptop" class="form-check-input" id="exampleCheck1" value="true">
                                    <label class="form-check-label" for="exampleCheck1">Laptop</label>
                                    <div class="prix">59€</div>
                                </div> 
                                <div class="form-check">
                                    <input type="checkbox" name="nettoyage_physique_uc" class="form-check-input" id="exampleCheck1" value="true">
                                    <label class="form-check-label" for="exampleCheck1">Unité centrale </label>
                                    <div class="prix">29€</div>
                                </div> 
                            	<p class="logiciel_title"> logiciel</p>
                                <div class="form-check">
                                    <input type="checkbox" name="entretien_logiciel_annuel" class="form-check-input" id="exampleCheck1" value="true">
                                    <label class="form-check-label" for="exampleCheck1">Entretien annuel</label>
                                    <label> (optimisation + nettoyage du systeme + mise à jour(Pilote + Windows))</label>
                                    <div class="prix">67€</div>
                                </div> 
                                <div class="form-check">
                                    <input type="checkbox" name="diag_desinfection_nettoyage" class="form-check-input" id="exampleCheck1" value="true">
                                    <label class="form-check-label" for="exampleCheck1">Diagnostique + désinfection + nettoyage du système  </label>
                                    <div class="prix">à partir de 59€</div>
                                </div>
                           	</div>
                            
                            <div class="form-group tarifs_horaires">
                              <p>Tarifs Horaires</p>
                              <img class="img-fluid services_logo" src="<?= $url?>/wp-content/themes/busiway-child/images/horaire.png"  alt="horaires/tarifs">
                              <table class="table">
                                  <thead>
                                     <tr>
                                         <td class="table_horaires_services" colspan="2" >Au Magasin</td>
                                     </tr> 
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td class="table_horaires_services">Laptop</td><td class="table_horaires_services">49€/heure</td>
                                          
                                      </tr>
                                      <tr>
                                          <td class="table_horaires_services">Unité Centrale</td><td class="table_horaires_services">39€/heure</td>
                                         
                                      </tr>
                                      <tr>
                                          <td class="table_horaires_services">Prise en charge immédiate </td><td class="table_horaires_services">à partir de 80€/heure</td>
                                          
                                      </tr>
                                  </tbody>
                              </table>
                              <table class="table">
                                  <thead>
                                     <tr>
                                        <td class="table_horaires_services" colspan="2">en déplacement</td>
                                     </tr> 
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td class="table_horaires_services">Diagnostique </td><td class="table_horaires_services">59€/heure</td>
                                      </tr>
                                  </tbody>
                              </table>
                              <div class="form-check">
                                    <input type="checkbox" name="demande_urgence" class="form-check-input" id="exampleCheck1" value="true">
                                    <label class="form-check-label" for="exampleCheck1">Faire une demande en urgence</label>
                                    <div class="prix">à partir de 80€/h</div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <ul>
                    				<li><p>  1- Diagnostique inclus dans les réparations futures.</p></li>
                    				<li><p> 2- Le client doit fournir les licences et les supports d'installation</p></li>
                    				<li><p> 3- Le client doit fournir le nouveau support de sauvegarde, les sauvegardes de données ne sont pas garanties et dépendent de l'état du système e du matériel</p></li>
                    				<li><p> 4- Contactez l'équipe pour des demandes spécifiques </p> </li>
                    			</ul>
                            </div>
                            
                                              
                            <div class="form-group">
                               <label for="comment">Merci de préciser un maximum de détails (marque composants, nom logiciels, type d'OS ) concernant votre demande:</label>
                               <textarea class="form-control" name="commentaire" rows="6" id="comment"></textarea>
                            </div>

                          <button type="submit" name="demande-service_submit" class="btn btn-primary">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div><!-- .entry-content -->
            <?php } ?>

<?php
get_footer(); // On affiche de pied de page du thème
?>