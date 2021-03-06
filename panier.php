<!DOCTYPE html>
<html>
<head>
	<title>FAGUO</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
  <link rel="stylesheet" type="text/css" href="styles/style_panier.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body>
	<header>
    <div class="items">
      <img src="img/reseau.png" class="icon">
      <p id="langue">FR/EN</p>
      <a href="formulaire.php"><img src="img/icon_user.png" class="user"></a>
      <a href="panier.php"><img src="img/panier.png" class="panier"></a>
    </div>

    <ul class="nav">
    <div class="trait1"></div>
      <li class="nav-item menuItem">
        <a class="nav-link active menu" href="indexfinal.php">HOME</a>
      </li>
      <li class="nav-item menuItem">
        <a class="nav-link menu" href="#">IDÉES CADEAUX</a>
      </li>
      <li class="nav-item menuItem">
        <a class="nav-link menu" href="femme.php">FEMMES</a>
      </li>
      <img src="img/logo.png" class="tailleLogo">
      <li class="nav-item menuItem">
        <a class="nav-link menu" href="#">HOMMES</a>
      </li>
      <li class="nav-item menuItem">
        <a class="nav-link menu" href="#">ENFANTS</a>
      </li>
      <li class="nav-item menuItem">
        <a class="nav-link menu" href="#">BAGAGERIE</a>
      </li>
    <div class="trait2"></div>
    </ul>
  </header>
	<h3 id="monP">MON PANIER</h3>
	<div class="monpanier">
		<div class="contentPanier">
			<img src="img/chaussure1.jpeg">
			<div class="info">
				<h6>IVY - SNEAKERS EN CUIR ET SUÈDE VANILLE & NUDE</h6>
				<p>Taille : 37<br>
					125.00€</p>
				<div id="quantite">
					<p class="quantite">-</p>
					<div class="nombre">1</div>
					<p class="quantite">+</p>
				</div>
			</div>
		</div>
		<div class="totalPanier">
			<p>Total produits : 125.00€<br>
				Frais de port: 4.9€<br>
			Arbre planté: 1</p>
			<p>Total 129.90€</p>
			<button type="button" class="btn btn-outline-secondary" id="commander">COMMANDER</button>
      <a href="indexfinal.php"><button type="button" class="btn btn-outline-secondary" id="continuer">CONTINUER MES ACHATS</button></a>
		</div>
		
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
</html>