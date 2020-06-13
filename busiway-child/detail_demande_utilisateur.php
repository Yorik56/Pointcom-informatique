<?php
/*
   Template Name: Detail demande utilisateur
*/

get_header(); // On affiche l'en-tête du thème WordPress
$url = site_url();
$id_utilisateur = $_POST['id_utilisateur'];
$detail_demande = detail_demande($id_utilisateur);
$tarifs_services = tarifs_services();
$montant = "tarif_";
$dateMySQL = $detail_demande[0]->date_demande;
$date = date("d/m/Y H:i:s", strtotime($dateMySQL));
?>


            <div class="container-fluid justify-content">

                <h2>Detail demande utilisateur</h2>

                    <div class="row">
                        <div class="col-1">
                            <?php
                            
                            if(($detail_demande[0]->montage_unite_centrale) == 0){
                                    echo "ok";
                                }
                            ?>
                        </div>
                        <div class="col-10">
                            <table class="table">
                                    <tr>
                                        <th>N° Demande</th>
                                        <th>N° Utilisateur</th>
                                        <th>nom</th>
                                        <th>prenom</th>
                                        <th>Date de demande</th>
                                        <th>Tarif total</th>
                                    </tr>
                                    <tr>
                                        <td class="detail_demande"><?= $detail_demande[0]->id ?></td>
                                        <td class="detail_demande"><?= $detail_demande[0]->utilisateur ?></td>
                                        <td class="detail_demande"><?= $detail_demande[0]->nom ?></td>
                                        <td class="detail_demande"><?= $detail_demande[0]->prenom ?></td>
                                        <td class="detail_demande"><?= $date ?></td>
                                        <td class="detail_demande"><?= $detail_demande[0]->total_tarif_services ?> €</td>
                                    </tr>
                            </table>
                            <table class="table table_detail-demande-utilisateur">
                            <tr>
                                <th>
                                    Service
                                </th> 
                                <th>
                                    Quantité
                                </th> 
                                <th>
                                    Montant
                                </th> 
                            </tr>
                                

                                    <?php 
                                        if(($detail_demande[0]->diag_pc_laptop_mac) == 1){
                                            echo "<tr><td class='detail_demande'>Diagnostic pc laptop ou mac </td><td class='detail_demande'>1</td><td class='detail_demande'>".$tarifs_services[0]->tarif_diag_pc_laptop_mac." €</td></tr>";
                                        }
                                        if(($detail_demande[0]->diag_smartphone_composant) == 1){
                                            echo "<tr><td class='detail_demande'>Diagnostic smartphone ou composant </td><td class='detail_demande'>1</td><td class='detail_demande'>".$tarifs_services[0]->tarif_diag_smartphone_composant." €</td></tr>";
                                        }
                                        if(($detail_demande[0]->install_systeme) == 1){
                                            echo "<tr><td class='detail_demande'>Installation Système </td><td class='detail_demande'>1</td><td class='detail_demande'>".$tarifs_services[0]->tarif_install_systeme." €</td></tr>";
                                        }
                                        if(($detail_demande[0]->install_suite_logiciel) == 1){
                                            echo "<tr><td class='detail_demande'>Installation Suite logiciel </td><td class='detail_demande'>1</td><td class='detail_demande'>".$tarifs_services[0]->tarif_install_suite_logiciel." €</td></tr>";
                                        }
                                        if(($detail_demande[0]->install_logiciel_unitaire) == 1){
                                            
                                            if($detail_demande[0]->nombre_install_logiciel == 1){
                                                echo "<tr><td class='detail_demande'>Installation Logiciel Unitaire</td><td class='detail_demande'>1</td><td class='detail_demande'>".$tarifs_services[0]->tarif_install_logiciel_unitaire." €</td></tr>";
                                            }
                                            if($detail_demande[0]->nombre_install_logiciel == 2){
                                                echo "<tr><td class='detail_demande'>Installation Logiciel Unitaire</td><td class='detail_demande'>2</td><td class='detail_demande'>".$tarifs_services[1]->tarif_install_logiciel_unitaire." €</td></tr>";
                                            }
                                            if($detail_demande[0]->nombre_install_logiciel == 3){
                                                echo "<tr><td class='detail_demande'>Installation Logiciel Unitaire</td><td class='detail_demande'>3</td><td class='detail_demande'>".$tarifs_services[2]->tarif_install_logiciel_unitaire." €</td></tr>";
                                            }
                                            if($detail_demande[0]->nombre_install_logiciel == 4){
                                                echo "<tr><td class='detail_demande'>Installation Logiciel Unitaire</td><td class='detail_demande'>4</td><td class='detail_demande'>".$tarifs_services[3]->tarif_install_logiciel_unitaire." €</td></tr>";
                                            }
                                        }
                                        if(($detail_demande[0]->montage_unite_centrale) == 1){
                                            echo "<tr><td class='detail_demande'>Montage Unite Centrale </td><td class='detail_demande'>1</td><td class='detail_demande'>".$tarifs_services[0]->tarif_montage_unite_centrale." €</td></tr>";
                                        }
                                        if(($detail_demande[0]->ajout_composant) == 1){
                                            $nombre_ajout_composant = $detail_demande[0]->nombre_ajout_composant; 
                                            if($nombre_ajout_composant == 1){
                                                echo "<tr><td class='detail_demande'>Ajout Composant </td><td class='detail_demande'>".$nombre_ajout_composant."</td><td class='detail_demande'>".$tarifs_services[0]->tarif_ajout_composant." €</td></tr>";
                                            
                                            }
                                            if($nombre_ajout_composant == 2){
                                                echo "<tr><td class='detail_demande'>Ajout Composant </td><td class='detail_demande'>".$nombre_ajout_composant."</td><td class='detail_demande'>".$tarifs_services[1]->tarif_ajout_composant." €</td></tr>";
                                            
                                            }
                                            if($nombre_ajout_composant == 3){
                                                echo "<tr><td class='detail_demande'>Ajout Composant </td><td class='detail_demande'>".$nombre_ajout_composant."</td><td class='detail_demande'>".$tarifs_services[2]->tarif_ajout_composant." €</td></tr>";
                                            
                                            }
                                        }
                                        if(($detail_demande[0]->sauveguarde_inferieur_5gigas) == 1){
                                            echo "<tr><td class='detail_demande'>Sauveguarde inférieure à 5 gigas </td><td class='detail_demande'>1</td><td class='detail_demande'>".$tarifs_services[0]->tarif_sauveguarde_inferieur_5gigas." €</td></tr>";
                                        }
                                        if(($detail_demande[0]->sauveguarde_inferieur_20gigas) == 1){
                                            echo "<tr><td class='detail_demande'>Sauveguarde inférieure à 20 gigas </td><td class='detail_demande'>1</td><td class='detail_demande'>".$tarifs_services[0]->tarif_sauveguarde_inferieur_20gigas." €</td></tr>";
                                        }
                                        if(($detail_demande[0]->sauveguarde_giga_additionnel) != 0){
                                            echo "<tr><td class='detail_demande'>Sauveguarde supérieure à 20 gigas </td><td class='detail_demande'>". ($detail_demande[0]->sauveguarde_giga_additionnel + 20)." Gigas</td><td class='detail_demande'>".(($tarifs_services[0]->tarif_sauveguarde_giga_additionnel * $detail_demande[0]->sauveguarde_giga_additionnel) + 39)." €</td></tr>";
                                        }
                                        if(($detail_demande[0]->sauveguarde_superieur_50gigas) == 1){
                                            echo "<tr><td class='detail_demande'>Sauveguarde supérieure à 50 gigas </td><td class='detail_demande'>1</td><td class='detail_demande'>".$tarifs_services[0]->tarif_sauveguarde_superieur_50gigas." €</td></tr>";
                                        }
                                        if(($detail_demande[0]->recuperation_disque_dur) == 1){
                                            echo "<tr><td class='detail_demande'>Récupération disque dur</td><td class='detail_demande'>1</td><td class='detail_demande'>".$tarifs_services[0]->tarif_recuperation_disque_dur." €</td></tr>";
                                        }
                                        if(($detail_demande[0]->clone_disque_dur) == 1){
                                            echo "<tr><td class='detail_demande'>Clone disque dur</td><td class='detail_demande'>1</td><td class='detail_demande'>".$tarifs_services[0]->tarif_clone_disque_dur." €</td></tr>";
                                        }
                                        if(($detail_demande[0]->nettoyage_physique_laptop) == 1){
                                            echo "<tr><td class='detail_demande'>Nettoyage Physique Laptop</td><td class='detail_demande'>1</td><td class='detail_demande'>".$tarifs_services[0]->tarif_nettoyage_physique_laptop." €</td></tr>";
                                        }
                                        if(($detail_demande[0]->nettoyage_physique_uc) == 1){
                                            echo "<tr><td class='detail_demande'>Nettoyage Physique Unite Centrale</td><td class='detail_demande'>1</td><td class='detail_demande'>".$tarifs_services[0]->tarif_nettoyage_physique_uc." €</td></tr>";
                                        }
                                        if(($detail_demande[0]->entretien_logiciel_annuel) == 1){
                                            echo "<tr><td class='detail_demande'>Entretien logiciel annuel</td><td class='detail_demande'>1</td><td class='detail_demande'>".$tarifs_services[0]->tarif_entretien_logiciel_annuel." €</td></tr>";
                                        }
                                        if(($detail_demande[0]->diag_desinfection_nettoyage) == 1){
                                            echo "<tr><td class='detail_demande'>Diagnostic désinfection nettoyage</td><td class='detail_demande'>1</td><td class='detail_demande'>".$tarifs_services[0]->tarif_diag_desinfection_nettoyage." €</td></tr>";
                                        }
                                        if(($detail_demande[0]->demande_urgence) == 1){
                                            echo "<tr><td class='detail_demande'>Demande Urgence</td><td class='detail_demande'>1</td><td class='detail_demande'>".$tarifs_services[0]->tarif_demande_urgence." €</td></tr>";
                                        }
                                        
                                    ?>
                                        
                                        <tr>
                                            <th>Tarif total</th><td class='detail_demande' colspan='2'><?= $detail_demande[0]->total_tarif_services ?> €</td>
                                        </tr>
                                
                            </table>
                        </div>
                        <div class="col-1">
                            
                        </div>
                    </div>
        
            </div><!-- .entry-content -->

<?php
get_footer(); // On affiche de pied de page du thème
?>