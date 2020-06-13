<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package consultup
 */
?>

<footer> 
 	<div class="container-fluid horaires_coordoonees">
 	    <div class="row footer">
            <div class="col-lg-6 col-sm-12">
                <h4>Horaires</h4>
                <table class="table" id="table_footer">
                    <tr>
                        <td class="jour">lundi</td><td class="heure"><p>12:00-20:00</p></td>
                    </tr>
                    <tr>
                        <td class="jour">mardi</td><td class="heure"><p>12:00–20:00</p></td>
                    </tr>
                    <tr>
                        <td class="jour">mercredi</td><td class="heure"><p>12:00–20:00</p></td>
                    </tr>
                    <tr>
                        <td class="jour">jeudi</td><td class="heure"><p>12:00–20:00</p></td>
                    </tr>
                    <tr>
                        <td class="jour">vendredi</td><td class="heure"><p>12:00–20:00</p></td>
                    </tr>
                    <tr>
                        <td class="jour">samedi</td><td class="heure"><p>12:00–20:00</p></td>
                    </tr>
                    <tr>
                        <td class="jour">dimanche</td><td class="heure"><p>fermé</p></td>
                    </tr>
                </table>
            </div>
            <div class="col-lg-6 col-sm-12  coordonnees">
                <img class='logo' src= '<?= $url?>/wp-content/themes/busiway-child/images/LOGO_SITE_POINTCOM.png' alt='Logo'>
    		<div class="Titre">
    		    <a class="text-center link_footer_header" href="<?= home_url();  ?>">Pointcom-informatique.fr</a>
    		</div><br />
                
                
               
                    <p class="fa fa-phone" aria-hidden="true">   02 22 21 30 37</p><br />
               
                    <p class="fa fa-envelope" aria-hidden="true">   <a class="link_footer_header" href="mailto:pointcom.lorient@gmail.com">   pointcom.lorient@gmail.com</a> </p><br />
             
                    <p  class="fa fa-address-card" aria-hidden="true"> 5 Place de la Libération, 56100 Lorient</p>
           </div>
        </div>
	    <div class="row">
	      
		    <div class="col-lg-12" >
		         <p class="text-center"><a  class="text-center link_footer_header"  href="<?= site_url('/mentions-legales',  null); ?>">Mentions légales -</a>
		         <a class="text-center link_footer_header"  href="<?= site_url('/politique-de-confidentialite',  null); ?>">Politique de confidentialité</a></p>
		    </div>
		   
	    </div>
	    <div class="row">
	         <div class="col-lg-12" >
	               <p class="text-center">&copy;Fièrement propulsé par WordPress | Thème : Busiway par Themeansar.</p>
	            </div>  
	    </div>
 	</div>
</footer>
</div>
<!-- Scroll To Top -->
<a href="#" class="page-scroll-up"><i class="fa fa-arrow-circle-up"></i></a>
<!-- /Scroll To Top -->
<?php wp_footer(); ?>
</body>
</html>