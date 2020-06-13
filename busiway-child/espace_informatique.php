<?php
/*
   Template Name: Espace_informatique
*/

get_header(); // On affiche l'en-tête du thème WordPress
$url = site_url();
?>



<div class="container-fluid justify-content">
  <div class="row">
      <h1 class="bandeau_espace-informatique">Espace informatique</h1> 
  </div>
  <div class="row top_row">
      <div class="col col-4 ">
          <a href="#anchor_ticket">
              <img class="img-fluid top" src="<?= $url?>/wp-content/themes/busiway-child/images/ticket.jpg" alt="Card image cap">
          </a>
      </div>
      <div class="col col-4">
          <a href="#anchor_bureautique">
             <img class="img-fluid top" src="<?= $url?>/wp-content/themes/busiway-child/images/bureautique_.jpg" alt="Card image cap"> 
          </a>
      </div>
      <div class="col col-4">
          <a href="#anchor_gaming">
            <img class="img-fluid top" src="<?= $url?>/wp-content/themes/busiway-child/images/gaming-mouse.jpg" alt="Card image cap">  
          </a>
      </div>
  </div>
  <div class="row justify-content" id="anchor_ticket">
      <div class="col col-12">
          <h3 class="titres_espace_informatique">Ticketerie/Tarifs</h3>
      </div>
  </div>
  <div class="row justify-content">
        <div class="col col-12 detail_tarifs">
          <img class="img-fluid ticket"  src="<?= $url?>/wp-content/themes/busiway-child/images/ticket.png" alt="Card image cap">
          <a href="<?= site_url('/formulaire-achat-ticket',  null); ?>">
	        <button class="achat_ticket" >Acheter un ticket</button>
	      </a>
          <p>L'accès à l'espace informatique nécessite l'achat d'un ticket utilisable pendant 1 mois, vous créditez le nombre de minutes que vous souhaitez et les utilisez quand vous voulez pendant les horaires d'ouverture de notre établissement.</p>
          <br>
          <p>Le Tarifs Membre est reservé au possesseurs de la carte membre, elle est vendue au prix de ..€, lors de son achat 10heures vous sont offertes ! </p>
          <br>
          <p>Les Membre Premium sont selectionnés Par l'établissement </p>
      </div>
  </div>
  <!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingOne1">
      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
        aria-controls="collapseOne1">
        <h5 class="mb-0">
          Tarif Premium <img  id="arrow" src="<?= $url?>/wp-content/themes/busiway-child/images/arrow_down.png" alt="Card image cap">
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
      data-parent="#accordionEx">
      <div class="card-body">
          <h5 class="card-title">Un programme de sponsoring reservé aux membres Premium:</h5>
          <p class="card-text">-Les membres premium sont selectionnés par l'établissement.
          </p>
          <p class="card-text">-Si vous faites parti d'une team E-sports cette offre est faite pour vous !!
          </p>
          <p class="card-text">-des tarifs très attractifs vous sont proposés.
          </p>
          <p class="card-text">-prise en charge des transports de groupe pour se rendre aux évenements e-sport en partenariat avec le site <a href="https://www.epouce.fr/">www.epouce.fr</a>.
          </p>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo2">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
        aria-expanded="false" aria-controls="collapseTwo2">
        <h5 class="mb-0">
          Tarif Membre <img  id="arrow" src="<?= $url?>/wp-content/themes/busiway-child/images/arrow_down.png" alt="Card image cap">
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
      data-parent="#accordionEx">
      <div class="card-body">
        <p>Les membres on accès a des tarifs avantageux, pour profiter de la carte membre demandez la sur place.</p>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree3">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
        aria-expanded="false" aria-controls="collapseThree3">
        <h5 class="mb-0">
          Tarif Public (tickets) <img  id="arrow" src="<?= $url?>/wp-content/themes/busiway-child/images/arrow_down.png" alt="Card image cap">
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
      data-parent="#accordionEx">
      <div class="card-body">
        <p>Pour accéder à l'espace informatique, demandez un <span><a href="#anchor_ticket">ticket</a></span> sur place ou sur le site pour en réserver un à l'avance</p>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

</div>
<!-- Accordion wrapper -->

  </div>
  <!-- Accordion card -->

</div>
<!-- Accordion wrapper -->
  </div>
  <div class="table-responsive">
    <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Temps</th>
        <th scope="col">Tarif Public (tickets)</th>
        <th scope="col">Tarif Membre</th>
        <th scope="col">Tarif Membre Premium</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">30 minutes</th>
        <td>2.00 €</td>
        <td>1.50 €</td>
        <td>/</td>
      </tr>
      <tr>
        <th scope="row">1 heure</th>
        <td>3.50 €</td>
        <td>2.50 €</td>
        <td>2.50 €</td>
      </tr>
      <tr>
        <th scope="row">1 heure 30 minutes</th>
        <td>5.00 €</td>
        <td>4.00 €</td>
        <td>/</td>
      </tr>
      <tr>
        <th scope="row">2 heures</th>
        <td>6.50 €</td>
        <td>5.00 €</td>
        <td>4.50 €</td>
      </tr>
      <tr>
        <th scope="row">3 heures</th>
        <td>9.00 €</td>
        <td>7.50 €</td>
        <td>5.00 €</td>
      </tr>
      <tr>
        <th scope="row">5 heures</th>
        <td>10.00 € (1 jour)</td>
        <td>10.00 €</td>
        <td>7.50€</td>
      </tr>
      <tr>
        <th scope="row">10 heures</th>
        <td>/</td>
        <td>/</td>
        <td>10.00 €</td>
      </tr>
      <tr>
        <th scope="row">11 heures</th>
        <td>/</td>
        <td>20.00 €</td>
        <td>/</td>
      </tr>
      <tr>
        <th scope="row">20 heures</th>
        <td>/</td>
        <td>/</td>
        <td>20.00 €</td>
      </tr>
      <tr>
        <th scope="row">30 heures</th>
        <td>/</td>
        <td>50.00 €</td>
        <td>/</td>
      </tr>
    </tbody>
  </table>
  </div>

    
    <div class="row justify-content" id="anchor_bureautique">
        <div class="col col-12">
            <h3 class="titres_espace_informatique">Bureautique</h3>
        </div>
    </div>

    
   <div class="row">
      <div class="col col-6">
          <img class="my_rounded justify-content" id="anchor_bureautique" src="<?= $url?>/wp-content/themes/busiway-child/images/arobase.png" alt="Card image cap">
          <h6>Connexion internet jusqu'à 100Mb/s</h6>
         <p class="texte1_espace_informatique">
            Si vous souhaitez travailler ou réaliser une tâche administrative, 
            une suite de logiciels bureautiques installés sur nos ordinateurs permettent l'edition de vos document audio, vidéos, textes.
            Si vous avez besoin d'un accompagnement pour réaliser une tâche notre équipe sera présente pour vous aider.
         </p>
      </div>
      <div class="col col-6">
          <img class="img-fluid" id="speed_test" src="<?= $url?>/wp-content/themes/busiway-child/images/speed-test.jpg" alt="Card image cap">
      </div>
  </div>
  <div class="row">
      <div class="col col-6">
          <img class="img-fluid" id="bureautique"  src="<?= $url?>/wp-content/themes/busiway-child/images/bureautique.jpg" alt="Card image cap">
      </div>
      <div class="col col-6">
          <img class="my_rounded justify-content" id="computeur" src="<?= $url?>/wp-content/themes/busiway-child/images/computeur.png" alt="Card image cap">
          <h6>Des ordinateurs performants</h6>
          <p>
            Si vous souhaitez travailler ou réaliser une tâche administrative, 
            une suite de logiciels bureautiques installés sur nos ordinateurs permettent l'edition de vos document audio, vidéos, textes.
            Si vous avez besoin d'un accompagnement pour réaliser une tâche notre équipe sera présente pour vous aider.
         </p>
      </div>
  </div>
  <div class="row justify-content" id="anchor_gaming">
        <div class="col col-12">
            <h3 class="titres_espace_informatique">Gaming/Vr</h3>
        </div>
    </div>
  <div class="row">
      <div class="col col-3">
          
      </div>
     <div class="col col-6">
         <img class="my_rounded"  src="<?= $url?>/wp-content/themes/busiway-child/images/controller.png" alt="Card image cap">
          
        <p>
          Des ordinateurs formatés pour faire fontionner tous les derniers jeux. 
          Nous disposons d'un large eventail de jeux installés sur nos pc (Fortnite,World of Tanks,Resident Evil) et de launchers (Steam, Origin,..).
          Vous pouvez également installer vos propres jeux !
        </p>
     </div>
     <div class="col col-3">
          
      </div>
    </div>
   
        <div class="row">
            <div class="col col-4"></div>
              <div class="col col-4">
               <img class="img-fluid" src="<?= $url?>/wp-content/themes/busiway-child/images/image_pc_vr.png" alt="Card image cap">
             </div>
           <div class="col col-4"></div>
        </div>
         <div class="row">
          <div class="col col-12">
           <p>
             Vous pouvez venir dès-à-présent tester vos jeux VR, nous avons un espace mis à disposition avec un casque,des manettes, 
              tous ce qu'il faut pour tester votre rythme en musique à travers Beat Saber, se faire peur avec Resident Evil 7: Biohazard,
             ou encore dégainer votre puissance dans Doom Vr.
          </p>
       </div>
       </div>
        <div class="row">
          <div class="col col-12"> 
             <img  class="image_vr_1" src="<?= $url?>/wp-content/themes/busiway-child/images/image_vr_1.jpg" alt="Card image cap">
              <img  class="image_vr_1" src="<?= $url?>/wp-content/themes/busiway-child/images/image_vr_2.jpg" alt="Card image cap">
              <img  class="image_vr_1" src="<?= $url?>/wp-content/themes/busiway-child/images/image_vr_3.jpg" alt="Card image cap">
                <img  class="image_vr_1" src="<?= $url?>/wp-content/themes/busiway-child/images/image_vr_4.jpg" alt="Card image cap">
         </div>  
      </div>
    
  </div>

  
<!-- Ecran Large -->
<div class="large_screen">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
        <div class="col col-2 padding_carousel">
          <img class="d-inline w-10" src="<?= $url?>/wp-content/themes/busiway-child/images/fortnite.jpg" alt="Card image cap">
        </div>
        <div class="col col-2 padding_carousel">
          <img class="d-inline w-10" src="<?= $url?>/wp-content/themes/busiway-child/images/Apex_legends.jpg" alt="Card image cap">
        </div>
        <div class="col col-2 padding_carousel">
          <img class="d-inline w-10" src="<?= $url?>/wp-content/themes/busiway-child/images/BF4.jpg" alt="Card image cap">
        </div>
        <div class="col col-2 padding_carousel">
          <img class="d-inline w-10" src="<?= $url?>/wp-content/themes/busiway-child/images/brawlhalla.jpg" alt="Card image cap">
        </div>
        <div class="col col-2 padding_carousel">
          <img class="d-inline w-10" src="<?= $url?>/wp-content/themes/busiway-child/images/Lego.jpg" alt="Card image cap">
        </div>
        <div class="col col-2 padding_carousel">
          <img class="d-inline w-10" src="<?= $url?>/wp-content/themes/busiway-child/images/lol.jpg" alt="Card image cap">
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col col-2 padding_carousel">
          <img class="d-inline w-10" src="<?= $url?>/wp-content/themes/busiway-child/images/metin2.jpeg" alt="Card image cap">
        </div>
        <div class="col col-2 padding_carousel">
          <img class="d-inline w-10" src="<?= $url?>/wp-content/themes/busiway-child/images/overwatch.jpeg" alt="Card image cap">
        </div>
        <div class="col col-2 padding_carousel">
          <img class="d-inline w-10" src="<?= $url?>/wp-content/themes/busiway-child/images/payday2.jpg" alt="Card image cap">
        </div>
        <div class="col col-2 padding_carousel">
          <img class="d-inline w-10" src="<?= $url?>/wp-content/themes/busiway-child/images/r6.png" alt="Card image cap">
        </div>
        <div class="col col-2 padding_carousel">
          <img class="d-inline w-10" src="<?= $url?>/wp-content/themes/busiway-child/images/Raft.jpg" alt="Card image cap">
        </div>
        <div class="col col-2 padding_carousel">
          <img class="d-inline w-10" src="<?= $url?>/wp-content/themes/busiway-child/images/RE.jpg" alt="Card image cap">
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col col-2 padding_carousel">
          <img class="d-inline w-10" src="<?= $url?>/wp-content/themes/busiway-child/images/ROBLOX.jpg" alt="Card image cap">
        </div>
        <div class="col col-2 padding_carousel">
          <img class="d-inline w-10" src="<?= $url?>/wp-content/themes/busiway-child/images/thebindingofisaacrebirth.jpg" alt="Card image cap">
        </div>
        <div class="col col-2 padding_carousel">
          <img class="d-inline w-10" src="<?= $url?>/wp-content/themes/busiway-child/images/WD2.jpg" alt="Card image cap">
        </div>
        <div class="col col-2 padding_carousel">
          <img class="d-inline w-10" src="<?= $url?>/wp-content/themes/busiway-child/images/WoT.jpg" alt="Card image cap">
        </div>
        <div class="col col-2 padding_carousel">
          <img class="d-inline w-10" src="<?= $url?>/wp-content/themes/busiway-child/images/wow.jpg" alt="Card image cap">
        </div>
        <div class="col col-2 padding_carousel">
          <img class="d-inline w-10" src="<?= $url?>/wp-content/themes/busiway-child/images/lol.jpg" alt="Card image cap">
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<!-- Ecran Moyen -->

<div class="medium_screen">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?= $url?>/wp-content/themes/busiway-child/images/fortnite.jpg" alt="Card image cap">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= $url?>/wp-content/themes/busiway-child/images/Apex_legends.jpg" alt="Card image cap">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= $url?>/wp-content/themes/busiway-child/images/BF4.jpg" alt="Card image cap">
    </div>
    <div class="carousel-item ">
      <img class="d-block w-100" src="<?= $url?>/wp-content/themes/busiway-child/images/brawlhalla.jpg" alt="Card image cap">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= $url?>/wp-content/themes/busiway-child/images/Lego.jpg" alt="Card image cap">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= $url?>/wp-content/themes/busiway-child/images/lol.jpg" alt="Card image cap">
    </div>
    <div class="carousel-item ">
      <img class="d-block w-100" src="<?= $url?>/wp-content/themes/busiway-child/images/metin2.jpeg" alt="Card image cap">
    </div>
    <div class="carousel-item">
      <img class="d-block w-10" src="<?= $url?>/wp-content/themes/busiway-child/images/overwatch.jpeg" alt="Card image cap">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= $url?>/wp-content/themes/busiway-child/images/payday2.jpg" alt="Third slide">
    </div>
    <div class="carousel-item ">
      <img class="d-block w-100" src="<?= $url?>/wp-content/themes/busiway-child/images/r6.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= $url?>/wp-content/themes/busiway-child/images/Raft.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= $url?>/wp-content/themes/busiway-child/images/RE.jpg" alt="Third slide">
    </div>
    <div class="carousel-item ">
      <img class="d-block w-100" src="<?= $url?>/wp-content/themes/busiway-child/images/ROBLOX.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= $url?>/wp-content/themes/busiway-child/images/thebindingofisaacrebirth.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= $url?>/wp-content/themes/busiway-child/images/WD2.jpg" alt="Card image cap" alt="Third slide">
    </div>
    <div class="carousel-item ">
      <img class="d-block w-100" src="<?= $url?>/wp-content/themes/busiway-child/images/WoT.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= $url?>/wp-content/themes/busiway-child/images/wow.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= $url?>/wp-content/themes/busiway-child/images/lol.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
  
</div><!-- .entry-content -->

<?php
get_footer(); // On affiche de pied de page du thème
?>