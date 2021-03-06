<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CHAUSSURES - FEMMES</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="styles/style_femme.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
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

	<div class="direction">
		<nav aria-label="breadcrumb">
	  		<ol class="breadcrumb">
	   			<li class="breadcrumb-item"><a href="indexfinal.php" class="home">HOME</a></li>
	    		<li class="breadcrumb-item active" aria-current="page">FEMMES</li>
	  		</ol>
		</nav>
	</div>

	<div class="contenu">
		<div class="filtres">
			<h3 class="femme">FEMMES</h3>
			<button type="button" class="btn btn-outline-secondary btnFil">TOUT VOIR</button>
				<div class="dropdown">
						  <ul class="mainmenu">

						    <li class="menuDe"><a href="">TAILLE</a>
						      <div class="submenu">
						      	<button type="button" class="btn btn-outline-secondary menuTaille a b">36</button>
						      	<button type="button" class="btn btn-outline-secondary menuTaille a">37</button>
						      	<button type="button" class="btn btn-outline-secondary menuTaille">38</button><br>
						      	<button type="button" class="btn btn-outline-secondary menuTaille a b">39</button>
						      	<button type="button" class="btn btn-outline-secondary menuTaille a">40</button>
						      	<button type="button" class="btn btn-outline-secondary menuTaille">41</button><br>
						      	<button type="button" class="btn btn-outline-secondary menuTaille a b">42</button>
						      	<button type="button" class="btn btn-outline-secondary menuTaille a">43</button>
						      	<button type="button" class="btn btn-outline-secondary menuTaille">44</button><br>
						      	<button type="button" class="btn btn-outline-secondary menuTaille a b">45</button>
						      	<button type="button" class="btn btn-outline-secondary menuTaille a">46</button>
						      	<button type="button" class="btn btn-outline-secondary menuTaille">47</button>
						      </div>
						    </li>

						    <li class="menuDe"><a href="">POUR QUI</a>
						    	<div class="submenu">
							        <button type="button" class="btn btn-outline-secondary btnMenu" id="trait">FEMMES</button>
							        <button type="button" class="btn btn-outline-secondary btnMenu" id="trait2">HOMMES</button>
							        <button type="button" class="btn btn-outline-secondary btnMenu">ENFANTS</button>
						    	</div>
						    </li>

						     <li class="menuDe"><a href="">MODÈLE</a>
						    	<div class="submenu">
							        <button type="button" class="btn btn-outline-secondary btnMenu" id="trait">ASPEN</button>
							        <button type="button" class="btn btn-outline-secondary btnMenu" id="trait2">ASPENLOW</button>
							        <button type="button" class="btn btn-outline-secondary btnMenu">BIRCH</button>
							        <button type="button" class="btn btn-outline-secondary btnMenu" id="trait">COMMON</button>
							        <button type="button" class="btn btn-outline-secondary btnMenu" id="trait2">CYPRESS</button>
							        <button type="button" class="btn btn-outline-secondary btnMenu">HOSTA</button>
							        <button type="button" class="btn btn-outline-secondary btnMenu" id="trait">YVI</button>
							        <button type="button" class="btn btn-outline-secondary btnMenu" id="trait2">SLOE</button>
							        <button type="button" class="btn btn-outline-secondary btnMenu">WATTLE</button>
						    	</div>
						    </li>

						    <li class="couleur"><a href="">COLORIS</a>
						    	<div class="colo">
							        <button type="button" class="btn btn-outline-secondary coloris1"></button>
							        <button type="button" class="btn btn-outline-secondary coloris2"></button>
							        <button type="button" class="btn btn-outline-secondary coloris3"></button>
							        <button type="button" class="btn btn-outline-secondary coloris4"></button>
							        <button type="button" class="btn btn-outline-secondary coloris5"></button>
							        <button type="button" class="btn btn-outline-secondary coloris6"></button>
						    	</div>
						    </li>
						  </ul>
				</div>

		</div>

	<div class="d-flex flex-wrap cardX1">
		<?php

			require_once 'config.php';
					$conn= mysqli_connect($host,$username,$password,$dbname);
					if (mysqli_connect_errno())
					{
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

				$recup = "SELECT * FROM product INNER JOIN photo ON product.product_id = photo.product_id";
				$_SESSION['product_id'] = $product_id;
				$result = mysqli_query($conn, $recup) or die ("erreur de recuperation : ".mysqli_error($conn));
				while ( $record = mysqli_fetch_assoc($result)) {

				?>
  		<div class="card" style="width: 18rem;">
    		<img class="card-img-top ivy img" src="<?php echo $record['path'];?>" alt="Card image cap">
    		<button type="button" class="btn btn-outline-secondary middle">AJOUTER</button>
    		<div class="card-body">
    			<a href="fiche-produit.html" class="card-link produit"><?php echo$record['model'];?><br><?php echo$record['smalldesc'];?></a>
     			<h5 class="card-title"><?php echo $record['buying_price'];?> €</h5>
 				</div>
			</div>
			<?php
}?>
	</div>
	</div>



	<footer>

		<div class="container" id="footer">

  			<div class="row ligne">
    			<div class="col">
      				<h6>LIENS UTILES</h6>
      				<ul id="liens">
      					<li id="liens2">Chaussures Femmes</li>
      					<li id="liens2">Chaussures Hommes</li>
      					<li id="liens2">Chaussures Enfants</li>
      					<li id="liens2">Bagagerie</li>
      					<li id="liens2">Nouveautés</li>
      				</ul>
    			</div>
    			<div class="col">
      				<button type="button" class="btn btn-outline-dark " id="newsletter">INSCRIPTION À LA NEWSLETTER</button>
    			</div>
    			<div class="col">
      				<h6>CONTACTS</h6>
              <ul id="contact">
                <li id="liens3">0123456789</li>
                <li id="liens3">faguo@gmail.fr</li>
                <li id="liens3">52 Rue Marcadet</li>
                <li id="liens3">75018, Paris</li>
              </ul>
    			</div>
  			</div>
  			<div class="row">
    			<div class="col">
      				<p id="title1">MENTIONS LEGALES</p>
   				</div>
    			<div class="col">
     			 	  <img src="img/Facebook-icon1.png" class="fbt" id="fb">
              <img src="img/twitter.png" class="fbt" id="twitter">
              <!-- <img src="img/insta.png" class="fbt" id="insta"> -->
    			</div>
    			<div class="col">
     			 	  <p id="title2">Site réalisé par Mémé et Lisnou</p>
   				</div>
  			</div>
		</div>

	</footer>








<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
