<?php
  session_start();

  $_SESSION['code_error']=0;

    $local_error=0;
    $_SESSION['code_error_password_confirm']=0;

    if (isset($_POST['lastname']) && $_POST['lastname'] != ""){
        $lastname= $_POST['lastname'];
      $_SESSION['code_error_lastname']=0;
    }
    else{
      $_SESSION['code_error_lastname']=1;
      $local_error=1;
    }

    if (isset($_POST['firstname']) && $_POST['firstname'] != ""){
        $firstname = $_POST['firstname'];
      $_SESSION['code_error_firstname']=0;
    }
    else{
      $_SESSION['code_error_firstname']=2;
      $local_error=1;
    }

    if (isset($_POST['address']) && $_POST['address'] != ""){
        $address = $_POST['address'];
      $_SESSION['code_error_address']=0;
    }
    else{
      $_SESSION['code_error_address']=3;
      $local_error=1;
    }

    if (isset($_POST['city']) && $_POST['city'] != ""){
        $city = $_POST['city'];
      $_SESSION['code_error_city']=0;
    }
    else{
      $_SESSION['code_error_city']=4;
      $local_error=1;
    }

    if (isset($_POST['mail']) && $_POST['mail'] != "" && (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $_POST['mail']))){
        $mail = $_POST['mail'];
      $_SESSION['code_error_mail']=0;
    }
    else{
      $_SESSION['code_error_mail']=5;
      $local_error=1;
    }

    if (isset($_POST['password']) && $_POST['password'] != ""){
        $password = $_POST['password'];
      $_SESSION['code_error_password']=0;
    }
    else{
      $_SESSION['code_error_password']=6;
      $local_error=1;
    }

    if ($_POST['password'] != $_POST['password_confirm']){
      $_SESSION['code_error_password_confirm']=7;
      $local_error=1;
      
    }
    if($local_error==1){

      header('Location: formulaire.php');
    }
    else{




      require_once 'config.php';

      try{
      $bdd= new PDO("mysql:host=".$host.";dbname=".$dbname, $username, $password);
      echo "<p>Connected to ".$dbname." at ".$host." successfully.</p>";
      
            

            //Préparation de la requête
            $req= $bdd->prepare('INSERT INTO user (user_id, mail, lastname, firstname, password, newsletter, role_id)'
              .' VALUES (:mail, :lastname, :firstname, :password, :newsletter, :role_id)');

            



            //Requete SQL
            $req->execute(array(
                        'user_id' =>"",
                        'mail' =>$mail,
                       'lastname' =>$lastname,
                       'firstname' =>$firstname,
                       'password' =>$password,
                       'newsletter' => 0,
                       'role_id' => 0
                     )
            


            
          );}

          /*Si erreur ou exception, interception du message*/


        catch(PDOException $pe){
          die("<p>Could not connect to the database $dbname : ".$pe->getMessage()."</p>");
        }








    }
?>