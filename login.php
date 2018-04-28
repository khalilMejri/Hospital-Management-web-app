

<<!DOCTYPE html>
 <html lang="en" class="no-js ie6 lt8">
 <html lang="en" class="no-js ie7 lt8">
 <html lang="en" class="no-js ie8 lt8">
  <html lang="en" class="no-js ie9">
 <html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />

    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="app2.css" />

</head>
<body>
  <?php
  session_start();
  if((isset($_SESSION['user'])) && (isset($_SESSION['passwd']))){
    echo $_SESSION['user']."+".$_SESSION['passwd'];
    header("Location:index.php");
    }
   ?>
<div class="container">

    <header>
        <h1>TEK CARE</h1>

    </header>
    <section>
        <div id="container_demo" >

            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
                <div id="login" class="animate form">
                    <form   method="post" enctype="multipart/form-data"  >
                        <h1>Log in</h1>
                        <p>
                            <label for="username" class="uname" > Your email or username </label>
                            <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                        </p>
                        <p>
                            <label for="password" class="youpasswd"> Your password </label>
                            <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
                        </p>
                        <p class="keeplogin">
                            <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
                            <label for="loginkeeping">Keep me logged in</label>
                        </p>

                        </p>
                        <p class="change_link">
                            Not a member yet ?
                            <a href="#toregister" class="to_register">Join us</a>
                        </p>
                        <div >
                            <div class="col-md-offset-4 col-md-8"><input  class="btn btn-success " type="submit" name="Connexion" value="Connexion"/></div>
                        </div>
                    </form>
                    <?php

                    if(isset($_POST['Connexion'])){

                        try {
                          $db_connexion = new PDO('mysql:host=localhost;dbname=hospital_db', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

                        }
                        catch (PDOException $e)
                        {
                            print "Erreur : " . $e->getMessage();
                            die();
                        }


                    $req = $db_connexion->prepare('SELECT Username,Password FROM receptionist WHERE Username = :Username AND Password= :Password');

                    $user_name=$_POST['username'];
                    $mdp=$_POST['password'];

                    $req->execute(array('Username'=>$user_name,'Password'=>$mdp));

                    $reponse = $req->fetchAll(PDO::FETCH_OBJ);

                    if(count($reponse)==0)
                    {
                      echo "
                      <style>
                      .ErrorClass{
                        background-color: pink;
                      }
                      </style>



                      <script>

                      var champs_1=document.getElementById('username');
                      var champs_2=document.getElementById('password');

                      champs_1.classList.toggle('ErrorClass');
                      champs_2.classList.toggle('ErrorClass');
                      </script>";

                    }
                    elseif(count($reponse)==1){
                      echo "welcome";
                      session_start();
                      $_SESSION['user']=$user_name;
                      $_SESSION['passwd']=$mdp;
                      
                      header("Location:index.php");

                    }


}
                    ?>
                </div>



            </div>
        </div>
    </section>
</div>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>
