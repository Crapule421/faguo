<?php 

	session_start();

	if(isset($_SESSION['user_id']) && $_SESSION['user_id']!= ''){
		
		require_once 'config.php';

		try{
	        $bdd= new PDO("mysql:host=".$host.";dbname=".$dbname, $username, $password);
	        echo "<p>Connected to ".$dbname." at ".$host." successfully.</p>";
	      
	            

	            //Préparation de la requête
	            $req= $bdd->prepare('INSERT INTO cart(user_id, product_id)'.' VALUES(:user_id, :product_id)');
	            
	            $req->execute(array(
	            					'user_id' => $_SESSION['user_id'],
	            					'product_id' => 1 
	            				));
	        }

	          /*Si erreur ou exception, interception du message*/


	        catch(PDOException $pe){
	          die("<p>Could not connect to the database $dbname : ".$pe->getMessage()."</p>");
	        }
	}

	else{
		echo"ta fais de la merde";
	}
    