<!DOCTYPE html>
<html>
<head>
  <title>FAGUO</title>
  <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="styles/style_produit.css">
  

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body>
<header>
  <div class="item ite">
    <img src="img/reseau.png" class="reseau">
    <p id="langue">FR/EN</p>
    <a href="formulaire.php"><img src="img/icon_user.png" class="user"></a>
      <a href="panier.php"><img src="img/panier.png" class="panier"></a>
  </div>

    <ul class="nav ">
      <div class="trait1"></div>
      
        <li class="nav-item navIt">
          <a class="nav-link navLi" href="indexfinal.php">HOME</a>
        </li>
        <li class="nav-item navIt">
          <a class="nav-link navLi" href="#">IDÉES CADEAUX</a>
      </li>
        <li class="nav-item navIt">
          <a class="nav-link navLi" href="femme.php">FEMMES</a>
        </li>
        
        <img src="img/logo.png" class="tailleLogo">
        
        <li class="nav-item navIt">
          <a class="nav-link navLi" href="#">HOMMES</a>
        </li>
        <li class="nav-item navIt">
          <a class="nav-link navLi" href="#">ENFANTS</a>
        </li>
        <li class="nav-item navIt">
          <a class="nav-link navLi" href="#">BAGAGERIE</a>
        </li>

        <div class="trait2"></div>
    </ul>

    <div class="direction">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="indexfinal.php" class="home">HOME</a></li>
                <li class="breadcrumb-item"><a href="femme.php" class="home">FEMMES</a></li>
                <li class="breadcrumb-item active" aria-current="page">IVY</li>
            </ol>
        </nav>
      </div>
</header>
<div class="ficheContent">
  <div class="bloc1">   
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 slide" src="img/ivy.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 slide" src="img/ivyp2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 slide" src="img/ivyp.jpg" alt="Third slide">
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>



    <div class="description">
      <div class="title">
        <div class="reduc">
          <div class="offer">
            <div class="inner">
              <span class="offerte">LIVRAISON OFFERTE<br>À PARTIR DE 80 € D'ACHAT</span><br>
              <span id="ligne">aaaaaaaaaaaaaaaaaaa</span><br>
              <span class="code">-20%<br>AVEC LE CODE PROMO</span><br>
              <button type="button" class="btn btn-outline-secondary" id="promo">FAGUO20</button>
            </div>  
          </div>
        </div>  





        <h4 id="modeleTitle">IVY</h4>
          <p class="sneak">SNEAKERS EN CUIR ET SUÈDE<br>VANILLE & NUDE</p>
        <p id="prix"> 125.00 €</p>

        <div class="bulle">
        <button type="button" class="btn btn-outline-secondary" id="b"></button>
        <button type="button" class="btn btn-outline-secondary" id="b2"></button>
        </div>

        <div class="submenu">
          <button type="button" class="btn btn-outline-secondary a b" id="taille">36</button>
          <button type="button" class="btn btn-outline-secondary a" id="taille">37</button>
          <button type="button" class="btn btn-outline-secondary" id="taille">38</button>
          <button type="button" class="btn btn-outline-secondary a b" id="taille">39</button>
            <button type="button" class="btn btn-outline-secondary a" id="taille">40</button>
          <button type="button" class="btn btn-outline-secondary" id="taille">41</button>
          <button type="button" class="btn btn-outline-secondary a b" id="taille">42</button><br>
          <a href="#" class="guide">Guide des tailles</a>
        </div>
        
        <button href="user_panier.php" type="button" class="btn btn-outline-secondary" id="acheter" data-toggle="modal" data-target="#myModal">AJOUTER AU PANIER</button>

          <div class="modal" tabindex="-1" id="myModal"role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Votre article a bie été ajouté au panier.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                  <p>IVY - SNEAKERS EN CUIR ET SUÈDE VANILLE & NUDE</p>
                  <img src="img/ivy.jpg" class="modalImg">
                </div>
                <div class="modal-footer">
                  <a href="femme.php"><button type="button" class="btn btn-secondary" id="pop1">CONTINUER MES ACHATS</button></a>
                  <a href="panier.php"><button type="button" class="btn btn-primary" id="pop1">VOIR MON PANIER</button></a>
                </div>
              </div>
          </div>
        </div>



          <ul class="nav nav-tabs" id="myTab description" role="tablist">
            <li class="nav-item" id="description1">
              <a class="nav-link active" id="description-tab a" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">DESCRIPTION</a>
            </li>
            <li class="nav-item" id="description1">
              <a class="nav-link" id="entretien-tab a b" data-toggle="tab" href="#entretien" role="tab" aria-controls="entretien" aria-selected="false">ENTRETIEN</a>
            </li>
            <li class="nav-item" id="description1"> 
              <a class="nav-link" id="livraison-tab a" data-toggle="tab" href="#livraison" role="tab" aria-controls="livraison" aria-selected="false">LIVRAISON</a>
            </li>
            <li class="nav-item" id="description1">
              <a class="nav-link" id="concept-tab a b" data-toggle="tab" href="#concept" role="tab" aria-controls="concept" aria-selected="false">CONCEPT</a>
            </li>
          </ul>

        
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active bl1" id="description" role="tabpanel" aria-labelledby="description-tab">
            <p>La IVY est une running travaillée avec des multiples empiècements qui lui donnent une allure moderne<br> La IVY est ultra-légère grâce à sa semelle intermédiaire en EVA pour un confort optimal.<br> Elle est la touche ultra-tendance du vestiaire féminin.

              <ul id="coul">COMPOSITION :

              <li>Dessus : cuir</li>
              <li>Doublure : textile</li>
              <li>Semelle de propreté : cuir</li>
              <li>Semelle extérieure : autre matériau (EVA & caoutchouc)</li>
            </ul>

            <ul id="coul">DÉTAILS :
              <li>Cuir de vachette</li>
              <li>Empiècement en suède contrasté</li>
              <li>Lacets plats tons-sur-tons</li>
              <li>Marquage FAGUO embossé sur le côté</li>
              <li>Bouton coco sur le côté</li>
            </ul>

            Consulte l'onglet ENTRETIEN pour savoir comment prendre le plus grand soin de tes baskets</p>
            </div>
         
          <div class="tab-pane fade bl1" id="entretien" role="tabpanel" aria-labelledby="entretien-tab"><p>Entretenez votre toile de coton/polyester en frottant entièrement la toile en insistant sur les taches.<br>
            Vous pouvez utiliser une brosse à dents imbibée d'eau tiède / liquide vaisselle / bicarbonate de soude<br> (utilisez du jus de citron ou du vinaigre blanc si vous n'avez pas de bicarbonate de soude).

            <ul id="coul">
            <li>VOTRE PRODUIT CONTIENT UN EMPIECEMENT EN DAIM ?</li>
            </ul>

            Cette matière a un aspect pelucheux et doux au toucher mais aussi très souple au porter.<br>
            Avant la première utilisation, nous vous conseillons d’imperméabiliser vos chaussures à l’aide d’un<br> spray adapté, et de réitérer cette opération périodiquement.<br>
            Pour éliminer les tâches, brossez-les délicatement à l’aide d’une brosse douce ou d’une gomme à daim.<br>
            Ne pas laver à la machine. Cela peut endommager les matières, passer les couleurs et<br> provoquer des décollements.<br>
            <br>
            <ul id="coul">
            <li>VOUS AVEZ FAIT UNE TACHE DE GRAS ?</li><br>
            </ul>

            Saupoudrez l'intérieur de talc. Il absorbera la transpiration de vos pieds.</p>
          </div>
          <div class="tab-pane fade bl1" id="livraison" role="tabpanel" aria-labelledby="livraison-tab">
            <p>Livraison offerte à partir de 80€ (Colissimo)<br>
            Retour gratuit sous 30 jours</p><br>

            <ul id="coul">Vous avez le choix parmi 4 modes de livraison différents :
              <li> Livraison simple en point relais - Mondial relay - 2,9€ (3 à 5 jours ouvrés)</li>
              <li> Livraison simple à domicile - Colissimo - 4,9€ (2 à 5 jours ouvrés)</li>
              <li> Livraison express à domicile - TNT - 9,9€ (Livraison le lendemain si commande passée avant 10h)</li>
              <li> Livraison en boutique FAGUO - Click & Collect - 0€ (3 à 5 jours ouvrés.</li>
            </ul>
            </div>
            <div class="tab-pane fade bl1" id="concept" role="tabpanel" aria-labelledby="concept-tab">
              <p>Pour chaque FAGUO un arbre est planté en France. </p>
          </div>
        </div>
      </div>
    </div>
  <div class="d" >
  <p>VOUS AIMEREZ AUSSI:</p>
  <div class="cardX1">  
      <div class="card" style="width: 11rem;">
        <img class="card-img-top ivy img" src="img/cypress.jpg" alt="Card image cap">
        <button type="button" class="btn btn-outline-secondary middle">AJOUTER</button>
        <div class="card-body card">
          <a href="fiche-produit.php" class="card-link produit">IVY<br>BASKETS EN CUIR</a>
          <h5 class="card-title prix">125,00 €</h5> 
      </div>
      </div>
      <div class="card" style="width: 11rem;">
        <img class="card-img-top ivy2 img" src="img/hosta.jpg" alt="Card image cap">
        <button type="button" class="btn btn-outline-secondary middle">AJOUTER</button>
        <div class="card-body card">
          <a href="#" class="card-link produit">IVY<br>BASKETS EN CUIR</a>
            <h5 class="card-title prix">125,00 €</h5>
        </div>
      </div>
    <div class="card" style="width: 11rem;">
        <img class="card-img-top common img" src="img/aspenor.jpg" alt="Card image cap">
        <button type="button" class="btn btn-outline-secondary middle">AJOUTER</button>
        <div class="card-body card">
          <a href="#" class="card-link produit">COMMON<br>BASKETS EN CUIR ET SUÈDE</a>
            <h5 class="card-title prix">120,00 €</h5>
        </div>
      </div>
  </div>
  
  </div>

      
</div>





<footer>
    
    <div class="container">
        <div class="row ligne">
          <div class="col">
              <h6>LIENS UTILES</h6>
              <ul class="liens">
                <li>Chaussures Femmes</li>
                <li>Chaussures Hommes</li>
                <li>Chaussures Enfants</li>
                <li>Bagagerie</li>
                <li>Nouveautés</li>
              </ul>
          </div>
          <div class="col ">
              <button type="button" class="btn btn-outline-dark newsletter">INSCRIPTION À LA NEWSLETTER</button>
          </div>
          <div class="col">
              <h6>CONTACTS</h6>
              <ul class="contact">
                <li>0123456789</li>
                <li>faguo@gmail.fr</li>
                <li>52 Rue Marcadet</li>
                <li>75018, Paris</li>
              </ul>
          </div>
        </div>
        <div class="row">
          <div class="col">
              <p>MENTIONS LEGALES</p>
          </div>
          <div class="col">
              <img src="img/Facebook-icon1.png" class="fbt" id="fb">
              <img src="img/twitter.png" class="fbt" id="twitter">
              <!-- <img src="img/insta.png" class="fbt" id="insta"> -->
          </div>
          <div class="col">
              <p>Site réalisé par Mémé et Lisnou</p>
          </div>
        </div>
    </div>

  </footer>












<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
