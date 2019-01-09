<?php

	require_once 'config.php';
      try{
      $conn= new PDO("mysql:host=".$host.";dbname=".$dbname, $username, $password);
      echo "<p>Connected to ".$dbname." at ".$host." successfully.</p>";
      
      
      }

    catch(PDOException $pe){
      die("<p>Could not connect to the database $dbname : ".$pe->getMessage()."</p>");
    }

    $lastname= $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password != $password_confirm){

    	header('Location: formulaire.php');
    	echo ('<script>alert("PASSWORD DOES NOT MATCH");</script>');
    }

?>