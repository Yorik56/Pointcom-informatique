<?php
/*
   Template Name: Compte Perimé
*/

get_header(); // On affiche l'en-tête du thème WordPress
$url = site_url();
$id_session = $_COOKIE['id_session'];
$id_utilisateur = id_utilisateur_session($id_session);
$mon_espace = recap_mon_espace($id_utilisateur);

			
?>


    <div class="container-fluid justify-content">
            <h1>Compte perimé</h1>
        <div class="row">
            <div class=col-2>
                
            </div>
            <div class=col-8>
                <p>
                    Notre Politique de confidentialité implique que nous devons supprimer vos données personnelles au bout d'un an, votre compte a dépassé la date anniversaire d'inscription.
                </p>
                <p>
                    Souhaitez vous supprimer votre compte ou le conserver ?
                </p>
            </div>
            <div class=col-2>
                <?php
                    $date_inscription = strtotime(date_inscription($id_session));
                    $today = strtotime(date("Y-m-d"));
        			$timestampe_periode_inscription = $today - $date_inscription;
        			$nbr_jours_periode_inscription = $timestampe_periode_inscription/86400;
        			echo $_POST['date'];
    			?>
            </div>
        </div>
        <div class="row">
            <div class=col-6>
                <form action='#' method='POST' class='form-inline compte_perime'>
                    <input  name="id_utilisateur" type="hidden" value="<?= $mon_espace[0]->id ?>">
					<?php wp_nonce_field('suppression', 'suppression-verif'); ?>
					<p>
						<button type="submit" name="suppression_utilisateur_submit" class="btn btn-labeled btn-danger demande_btn"><span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>Suprimer vos données</button>
					</p>
				</form>
            </div>

            <div class=col-6>
                <form action='#' method='POST' class='form-inline compte_perime'>
                    <input  name="id_utilisateur" type="hidden" value="<?= $mon_espace[0]->id ?>">
					<?php wp_nonce_field('anniversaire_utilisateur', 'anniversaire_utilisateur-verif'); ?>
					<p>
						<button type="submit" name="anniversaire_utilisateur_submit" class="btn btn-labeled btn-success demande_btn"><span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>Conserver votre compte utilisateur</button>
					</p>
				</form>
            </div>
        </div>

    </div><!-- .entry-content -->

<?php
get_footer(); // On affiche de pied de page du thème
?>