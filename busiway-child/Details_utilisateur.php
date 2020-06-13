<?php
/*
   Template Name: Details Utilisateur
*/

get_header(); // On affiche l'en-tête du thème WordPress
$url = site_url();
$id_utilisateur = $_POST['id_utilisateur'];

$details_utilisateur = details_utilisateur($id_utilisateur);
?>
    <div class="container-fluid justify-content">

        <h2>Details Utilisateur</h2>
            <div class="row">
                <div class="col-1">
                    <?php
                        
                    ?>
                </div>
                <div class="col-10">
                    <table class="table infos">
                        <?php
                        
                            foreach($details_utilisateur[0] as $key => $value){
                                $id_utilisateur = $details_utilisateur[0]->id;
                                if($key == "tel"){
                                    echo "<tr><td class='td_infos'>".$key."</td><td class='td_infos'>0".$value."</td></tr>";
                                }
                                else if($key == "statut"){
                                    echo '<tr><td class="td_infos">'.$key.'</td><td class="td_infos">'.
                                            '<form  method="POST" action="" class="form"><input  name="id_utilisateur" type="hidden" value="'.$id_utilisateur.'">'.
                                             	  wp_nonce_field('modifier_statut', 'modifier_statut-verif'). 
                                                '<select name="statut_select" class="form-control" id="formulaire_demande_ticket">';
                                                      if($details_utilisateur[0]->statut == "public"){
                                                        echo'<option>'.$details_utilisateur[0]->statut.'</option>
                                                              <option>membre</option>
                                                              <option>premium</option>
                                                              <option>admin</option>';  
                                                      }
                                                      elseif($details_utilisateur[0]->statut == "membre"){
                                                       echo'<option>'.$details_utilisateur[0]->statut.'</option>
                                                            <option>public</option>
                                                            <option>premium</option>
                                                            <option>admin</option>';   
                                                      }
                                                      elseif($details_utilisateur[0]->statut == "premium"){
                                                        echo'<option>'.$details_utilisateur[0]->statut.'</option>
                                                              <option>public</option>
                                                              <option>membre</option>
                                                              <option>admin</option>';  
                                                      }
                                                      elseif($details_utilisateur[0]->statut == "admin"){
                                                       echo'<option>'.$details_utilisateur[0]->statut.'</option>
                                                              <option>public</option>   
                                                              <option>membre</option>
                                                              <option>premium</option>';
                                                      }
                                                      
                                                echo '</select>
                                              <button name="modifier_statut_submit" type="submit" class="btn btn-primary">Modifier Statut</button>
                                            </form>'.
                                          '</td></tr>';
                                }
                                else if($key == "date_inscription"){
                                    $dateMySQL = $value;
                                    $date = date("d/m/Y", strtotime($dateMySQL));
                                    echo "<tr><td class='td_infos'>".$key."</td><td class='td_infos'>".$date."</td></tr>";
                                }
                                
                                
                                
                                else{
                                    echo '<tr><td class="td_infos">'.$key.'</td><td class="td_infos">'.$value.'</td></tr>';
                                }
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