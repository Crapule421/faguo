<?php
  session_start();

  if (isset($_POST['login_mail']) && $_POST['login_mail'] != "" && (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $_POST['login_mail']))){
        $login_mail = $_POST['login_mail'];
      $_SESSION['code_error_login_mail']=0;
    }
    else{
      $_SESSION['code_error_login_mail']=1;
      $local_error=1;
    }

    if (isset($_POST['login_password']) && $_POST['login_password'] != ""){
        $login_password = $_POST['login_password'];
    }
    else{
      $_SESSION['code_error_login_password']=2;
      $local_error=1;
    }



    if($local_error==1){

      // header('Location: formulaire.php');
    }
    else{


      $hash = password_hash($password, PASSWORD_DEFAULT);
    
      require_once 'config.php';

      try{
      $bdd= new PDO("mysql:host=".$host.";dbname=".$dbname, $username, $password);
      echo "<p>Connected to ".$dbname." at ".$host." successfully.</p>";
      
            

            //Préparation de la requête
            $req= $bdd->prepare('SELECT user_id, mail, password FROM user WHERE mail = $login_mail');

           $req->execute(array($login_mail,
                                'user_id' => $_SESSION['user_id']));

           while($donnees= $bdd->fetch()){
            // $donnees = ['login_mail'];
            if ($login_mail == $donnes && $login_password == password_hash()){
                echo"YEAH";

            }
           }



            ;} 

          /*Si erreur ou exception, interception du message*/


        catch(PDOException $pe){
          die("<p>Could not connect to the database $dbname : ".$pe->getMessage()."</p>");
        }








    }
?>