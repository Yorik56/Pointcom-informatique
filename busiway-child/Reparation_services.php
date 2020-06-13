<?php
/*
   Template Name: Reparation_services
*/

get_header(); // On affiche l'en-tête du thème WordPress
$url = site_url();
?>

<div class="container-fluid justify-content">
	<h1>Réparation Services</h1>
	
	<div class="row justify-content demande">
	    <div class="col col-12">
	        <a href="<?= site_url('/formulaire-demande-service',  null); ?>">
	            <button >Faire une demande de service</button>
	        </a>
	    </div>
	</div>
	
    <h2>Diagnostiques</h2>
    <div class="row reparation">
		
		<div class="col col-6 ">
		    <div class="text">
		        <p> >Tarif prise en charge / diagnostique Laptop ou Unités Centrales: 39€</p>
	            <p> >Prise en charge Mac supplement: 20€</p>
		    </div>	
		</div>
		<div class="col col-6 ">
            <img src="<?= $url?>/wp-content/themes/twentytwenty-child/images/diagnostique.png" class="d-inline-block reparation_diag" alt="image_diagnostique">
		</div>
	</div>

    <h2>Forfaits Ateliers</h2>
    <div class="row reparation">

		<div class="col col-6">
			<p><b></b>Installation systême d'exploitation (Mac/Windows/Linux)</b></p>
			<ul>
				<li>
					<p>De Base: (O, Driver, Antivirus): 59€</p>
				</li>
				<li>
					<p>Option "pack PointCOM" (suite de logiciel): supplément de 29€</p>
				</li>
				<li>
					<p>Option Logiciel: 15€ unitaire plus 10 € à partir du deuxième</p>
				</li>
			</ul>
			<p><b></b>Montage Unité Centrales (hors OS ): à partir de 49€</b></p>
			<p><b></b>Ajout composant sur n'importe que UC: à partir de 19€ / Composant </b></p>
		</div>
		<div class="col col-6 ">
		    <img src="<?= $url?>/wp-content/themes/twentytwenty-child/images/os.jpg" class="d-inline reparation_montage" alt="image_systeme_exploitation">
		    <img src="<?= $url?>/wp-content/themes/twentytwenty-child/images/fix.png" class="d-inline reparation_montage" alt="image_pieces">
		</div>

	</div>
    
    <h2>Forfaits disques durs</h2>
    <div class="row reparation">
		<div class="col col-6">
		    <p><b></b>Sauveguarde de données depuis le systême et support fonctionnel:</b></p>
            	<ul>
                	<li>Gratuit <5 Go sans tri des données a sauveguarder</li>
                	<li> <20Go : 39€ avec tri</li>
                	<li> 2€ le Go supplémentaire (Maximum 20Go supplémentaires)</li>
            	</ul>
        	<p><b></b>Récupération de données depuis disque dur déffectueux (sans garantie de réussite) : 39€ + tarif sauveguarde</b></p>
        	<p><b></b>Clone de disque dur/partition: à partir de 49€</b></p>	
		</div>
		<div class="col col-6">
            <img src="<?= $url?>/wp-content/themes/twentytwenty-child/images/ssd.png" class="d-inline reparation_sauveguarde" alt="image_ssd">
		</div>

	</div>

    <h2>Nettoyage</h2>
    <div class="row reparation">

		<div class="col col-6">
			<p><b></b>> Physique ( avec démontage changement pâte thermique et dépossiérage)</b></p>
			<ul>
				<li>
					<p> Laptop : 59 €</p>
				</li>
				<li>
					<p> UC : 29 €</p>
				</li>
			</ul>
			<p><b></b>> Logiciel :</b></p>
			<ul>
				<li> 
					<p> Entretien annuel (optimisation + nettoyage du systeme + mise à jour(Pilote + Windows))) : 67 €</p>
				</li>
				<li> 
					<p>-Diagnostic + désinfection + nettoyage du système : à partir de 59 € </p>
				</li>
			</ul>
		</div>
		<div class="col col-6">
	
			<img src="<?= $url?>/wp-content/themes/twentytwenty-child/images/clean.png" class="d-inline reparation_nettoyage" alt="image_nettoyage">
		</div>

	</div>
	
	<h2>Divers</h2>
	<div class="row reparation">

		<div class="col col-6">
			<p> >Tarif Horaire</p>
			<ul>
				<li><p> Laptop : 49 € </p> </li>
				<li><p> UC : 39 € </p> </li>
				<li><p> > Supplément urgence (sous détails raisonnable) : à partir de 40 € </p></li>
			</ul>
		</div>
		<div class="col col-6">
			<img src="<?= $url?>/wp-content/themes/twentytwenty-child/images/laptop.png" class="d-inline reparation_divers" alt="image_pc_portable">
			<img src="<?= $url?>/wp-content/themes/twentytwenty-child/images/tour_pc.png" class="d-inline reparation_divers" alt="image_unité_centrale">
		</div>

	</div>
    
    <div class="row dernier_encart_parent">

		<div class="col col-12 dernier_encart">
			<ul>
				<li><p>  1- Diagnostique inclus dans les réparations futures.</p></li>
				<li><p> 2- Le client doit fournir les licences et les supports d'installation</p></li>
				<li><p> 3- Le client doit fournir le nouveau support de sauvegarde, les sauvegardes de données ne sont pas garanties et dépendent de l'état du système e du matériel</p></li>
				<li><p> 4- Contactez l'équipe pour des demandes spécifiques </p> </li>
			</ul>
		</div>
	

	</div>
</div><!-- .entry-content -->

<?php
get_footer(); // On affiche de pied de page du thème
?>