<?php
  session_start();

  if (isset($_POST['mail']) && $_POST['mail'] != "" && (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $_POST['mail']))){
        $mail = $_POST['mail'];
      $_SESSION['code_error_login_mail']=0;
    }
    else{
      $_SESSION['code_error_login_mail']=1;
      $local_error=1;
    }

    if (isset($_POST['password']) && $_POST['password'] != ""){
        $password = $_POST['password'];
    }
    else{
      $_SESSION['code_error_login_password']=2;
      $local_error=1;
    }



    if($local_error==1){

      header('Location: formulaire.php');
    }
    else{


      $hash = password_hash($password, PASSWORD_DEFAULT);
    
      require_once 'config.php';

      try{
      $bdd= new PDO("mysql:host=".$host.";dbname=".$dbname, $username, $password);
      echo "<p>Connected to ".$dbname." at ".$host." successfully.</p>";
      
            

            //Préparation de la requête
            $req= $bdd->prepare('SELECT )'
              .' VALUES (:mail, :lastname, :firstname, :password, :newsletter, :role_id)');

            



            //Requete SQL
            $req->execute(array(
                        'mail' =>$mail,
                       'lastname' =>$lastname,
                       'firstname' =>$firstname,
                       'password' =>$hash,
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