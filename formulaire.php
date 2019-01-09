<?php

      session_start();

      if (isset($_SESSION['code_error_lastname'])){

        if ($_SESSION['code_error_lastname'] == 1){
          $code_error_lastname = $_SESSION['code_error_lastname'];
          print($code_error_lastname);
          $_SESSION['code_error_lastname']=0;
        }

        if ($_SESSION['code_error_firstname'] == 2){
          $code_error_firstname = $_SESSION['code_error_firstname'];
          print($code_error_firstname);
          $_SESSION['code_error_firstname']=0;
        }

        if ($_SESSION['code_error_address'] == 3){
          $code_error_address = $_SESSION['code_error_address'];
          print($code_error_address);
          $_SESSION['code_error_address']=0;
        }

        if ($_SESSION['code_error_city'] == 4){
          $code_error_city = $_SESSION['code_error_city'];
          print($code_error_city);
          $_SESSION['code_error_city']=0;
        }

        if ($_SESSION['code_error_mail'] == 5){
          $code_error_mail = $_SESSION['code_error_mail'];
          print($code_error_mail);
          $_SESSION['code_error_mail']=0;
        }

        if ($_SESSION['code_error_password'] == 6){
          $code_error_password = $_SESSION['code_error_password'];
          print($code_error_password);
          $_SESSION['code_error_password']=0;
        }

        if ($_SESSION['code_error_password_confirm'] == 7){
          $code_error_password_confirm = $_SESSION['code_error_password_confirm'];
          print($code_error_password_confirm);
          $_SESSION['code_error_password_confirm']=0;
        }
      }


?>
<!DOCTYPE html>
<html>
<head>
	<title>FAGUO</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/stylefinal.css">
  <link rel="stylesheet" type="text/css" href="styles/style_form.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>

<body>

	<header>



    
		
		<div class="item">
			<img src="img/reseau.png" class="reseau">
			<p id="langue">FR/EN</p>
			<a href="formulaire.html"><img src="img/icon_user.png" class="user"></a>
      <a href="panier.html"><img src="img/panier.png" class="panier"></a>
		</div>

		<ul class="nav ">
			<div class="trait1"></div>
			
  			<li class="nav-item">
    			<a class="nav-link active" href="indexfinal.html">HOME</a>
  			</li>
  			<li class="nav-item">
    			<a class="nav-link" href="#">IDÉES CADEAUX</a>
 			</li>
  			<li class="nav-item">
    			<a class="nav-link" href="femme.html">FEMMES</a>
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
	
  <?php
      
      require_once 'config.php';
      try{
      $conn= new PDO("mysql:host=".$host.";dbname=".$dbname, $username, $password);
      echo "<p>Connected to ".$dbname." at ".$host." successfully.</p>";
      
      
      }

    catch(PDOException $pe){
      die("<p>Could not connect to the database $dbname : ".$pe->getMessage()."</p>");
    }

/*
<?php if ($code_error_lastname == 1){ print(" is-invalid") } ?>
                        */

    

    ?>

	<div id="formulaire">
		<div id="inscription">
			<form action="newUser.php" method="post">
				<h4 id="inscrire">Inscrivez-vous:</h4>
  				<div class="form-group">
    				<label for="nom">Nom:</label>
    				<input name="lastname" type="text" class="form-control <?php if ($code_error_lastname == 1){ print(" is-invalid"); } ?> " id="nom" placeholder="Entrez votre nom">
  				</div>
  				<div class="form-group">
    				<label for="prenom">Prénom:</label>
    				<input name="firstname" type="text" class="form-control <?php if ($code_error_firstname == 2){ print(" is-invalid"); } ?> " id="prenom" placeholder="Entrez votre prénom">
  				</div>
  				<div class="form-group">
    				<label for="adresse">Adresse:</label>
    				<input name="address" type="text" class="form-control <?php if ($code_error_address == 3){ print(" is-invalid"); } ?> " id="adresse" placeholder="Nom, n° de rue">
  				</div>
  				<div class="form-group">
    				<label for="ville">Ville:</label>
    				<input name="city" type="text" class="form-control <?php if ($code_error_city == 4){ print(" is-invalid"); } ?> " id="ville" placeholder="Ville">
  				</div>
  				<div class="form-group">
    				<label for="mail">E-mail:</label>
    				<input name ="mail" type="text" class="form-control <?php if ($code_error_mail == 5){ print(" is-invalid"); } ?> " id="mail" placeholder="exemple@exemple.fr">
  				</div>
  				<div class="form-group">
    				<label for="mdp">Mot de passe:</label>
    				<input name="password" type="password" class="form-control <?php if ($code_error_password == 6){ print(" is-invalid"); } ?> " id="mdp">
  				</div>
  				<div class="form-group">
    				<label for="confirmation">Confirmez votre mot de passe:</label>
    				<input name="password_confirm" type="password" class="form-control <?php if ($code_error_password_confirm == 7){ print(" is-invalid"); } ?> " id="confirmation">
  				</div>
  				<input type="submit" name="register">
			</form>
			<!-- <button id="creer" href="newuser.php">Créer mon compte</button> -->
		</div>

		<div id="connexion">

      <form action="login.php" method="post">
				<h4 id="connecter">Connectez-vous:</h4>
  				<div class="form-group">
    				<label for="mail">E-mail:</label>
    				<input type="text" class="form-control" id="mail" placeholder="exemple@exemple.fr">
  				</div>
  				<div class="form-group">
    				<label for="mdp">Mot de passe:</label>
    				<input type="password" class="form-control" id="mdp">
  				</div>

          <input type="submit" name="login">

			</form>
			<!-- <button id="submit">Connexion</button> -->

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