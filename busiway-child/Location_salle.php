<?php
/*
   Template Name: Location salle
*/

get_header(); // On affiche l'en-tête du thème WordPress
$url = site_url();
?>


            <div class="container-fluid justify-content">
                
              
                 <h1 class="bandeau_location_salle">Location Salle</h1> 
            <div class="row">
                <div class=col-3 >
                    
                </div>
                <div class="col-6">
                    <p>L'établissement possède une salle de 18m2 pouvant accueilir jusqu'à 16 personnes.</p>
                    <p>Nos locaux sont adaptés,pour des animations en tout genre (jeux de rôles, jeux de société, etc.).</p>
                    <p> Prochainement, nous prévoyons d'aménager l'espace afin de pouvoir organiser des réunions (possibilitée d'utiliser un vidéo-projecteur). </p>
                    
                    <p>Pour toute demande d'information ou de réservation, n'hésitez pas à nous contacter:</p>
                    
                    <div id="location_icone">
                        <p class="fa fa-phone" id="fa_phone2"   aria-hidden="true">   02 22 21 30 37</p><br/>
               
                        <p class="fa fa-envelope"    aria-hidden="true">   <a href="mailto:pointcom.lorient@gmail.com">   pointcom.lorient@gmail.com</a> </p><br />
                 
                        <p  class="fa fa-address-card"    aria-hidden="true"> 5 Place de la Libération, 56100 Lorient</p>
                    </div>
                    
                </div>
                <div class=col-3 >
                    
                </div>
            </div>        


                    
           <div class="row">
               <div class="col-12">
                   <img  class="illustration_jeux" src="<?= $url?>/wp-content/themes/busiway-child/images/illustration_jeux_de_société.jpg"  alt="salle_de_reunion">
               </div>
           </div>
                
                
      
            </div><!-- .entry-content -->

<?php
get_footer(); // On affiche de pied de page du thème
?>