<!DOCTYPE html>
<html>
<head>
	<title>FAGUO</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/stylefinal.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

</head>

<body>
	
<header>
		
		<div class="item">
			<img src="img/reseau.png" class="reseau">
			<p id="langue">FR/EN</p>
			<a href="formulaire.php"><img src="img/icon_user.png" class="user"></a>
			<a href="panier.php"><img src="img/panier.png" class="panier"></a>
		</div>

		<ul class="nav ">
			<div class="trait1"></div>
			
  			<li class="nav-item">
    			<a class="nav-link active" href="indexfinal.php">HOME</a>
  			</li>
  			<li class="nav-item">
    			<a class="nav-link" href="cadeau.php">IDÉES CADEAUX</a>
 			</li>
  			<li class="nav-item">
    			<a class="nav-link" href="femme.php">FEMMES</a>
  			</li>
  			
    		<img src="img/logo.png" class="tailleLogo">
  			
  			<li class="nav-item">
    			<a class="nav-link " href="#">HOMMES</a>
  			</li>
  			<li class="nav-item">
    			<a class="nav-link " href="#">ENFANTS</a>
  			</li>
  			<li class="nav-item">
    			<a class="nav-link " href="#">BAGAGERIE</a>
  			</li>

  			<div class="trait2"></div>
		</ul>
	</header>
	



	<div class="contenu">
			
		<div class="femme"> 
			<a href="femme.php"><button type="button" class="btn btn-light btn1">DÉCOUVRIR</button></a>
			<a href="femme.php"><img src="img/femme.jpg" class="imgEnAvant"></a>
		</div>


		<div class="homme">
			<button type="button" class="btn btn-light btn2">DÉCOUVRIR</button> 
			<img src="img/homme.jpg" class="imgEnAvant">	
		</div>


		<div class="enfant">
			<button type="button" class="btn btn-light btn3">DÉCOUVRIR</button>  
			<img src="img/enfant.jpg" class="imgEnAvant">			
		</div>


	</div>



	<div class="contenu2">
		
		<h1 id="contentTitle">Un arbre planté pour chaque Faguo acheté</h1>
    <div id="imageNouv">
  		<img src="img/nouveaute.jpg" class="nouveaute">
  		<img src="img/boutique.jpg" class="boutique">
    </div>
  		<button type="button" class="btn btn-light btn4">NOUVEAUTÉS</button>
  		<button type="button" class="btn btn-light btn5">TROUVE TA BOUTIQUE</button>

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
