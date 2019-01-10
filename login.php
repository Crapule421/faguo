<?php
  session_start();

  if (isset($_POST['login_mail']) && $_POST['login_mail'] != "" && (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $_POST['login_mail']))){
        $login_mail = $_POST['login_mail'];
        $_SESSION['code_error_login_mail']=0;
        $local_error=0;
    }

    else{
      $_SESSION['code_error_login_mail']=1;
      $local_error=1;
    }

    if (isset($_POST['login_password']) && $_POST['login_password'] != ""){
        $login_password = $_POST['login_password'];
        $local_error=0;
    }

    else{
      $_SESSION['code_error_login_password']=1;
      $local_error=2;
    }



    if($local_error!=0){
        //echo $local_error;
        header('Location: formulaire.php');
    }
    else{


    
    
      require_once 'config.php';

      try{
      $bdd= new PDO("mysql:host=".$host.";dbname=".$dbname, $username, $password);
      //echo "<p>Connected to ".$dbname." at ".$host." successfully.</p>";
      
            

            //Préparation de la requête
            $req= $bdd->prepare('SELECT user_id, mail, password FROM user WHERE mail = ?');
            $req->execute(array($login_mail));
            $data = $req->fetch();
            
                  
          if ($login_mail = $data['mail']){

                if ( password_verify($login_password, $data['password'])){
                    $_SESSION['user_id'] = $data['user_id'];
                    header('Location: index.php');

                    //print "YEAH";
                }
              
                else{
                    $_SESSION['code_error_login_password']=1;
                    $local_error=4;
                    //echo $local_error;
                    header('Location: formulaire.php');   
                }
          }

          else{
            $_SESSION['code_error_login_mail']=1;
            $local_error=3;
            // echo $local_error;
            header('Location: formulaire.php');
          }
      }

          /*Si erreur ou exception, interception du message*/


        catch(PDOException $pe){
          die("<p>Could not connect to the database (Error 404) $dbname : ".$pe->getMessage()."</p>");
        }
    }
?>
