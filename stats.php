<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Hopital - gestion patients et maintenance des services d'un hopital">
  <meta name="author" content="GL2 Team">
  <meta name="keyword" content="Initiative, Hopital, moderne, clinic, patient, admin, tout domaine sanétaire">

  <title>Projet web GL2 ></title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  </head>

<body>
  <?php
  session_start();
  if((isset($_SESSION['user'])) && (isset($_SESSION['passwd']))){
    $photo=$_SESSION['Photo'];
$FirstName=$_SESSION['FirstName'];
$LastName=$_SESSION['LastName'];
	//echo $_SESSION['user']."+".$_SESSION['passwd'];
    }
    else{

        header("Location:session.php");
    }

  ?>
  <!-- container section start -->
  <section id="container" class="">

    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.php" class="logo">TEK <span class="lite">CARE</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                 <?php echo"<img alt=$photo.\" src=\"imgs/$photo\" width='45' height='45' class=\"img-circle img-responsive\">" ?>
                            </span>
                        <span class="username"><?php echo $FirstName." ".$LastName ?></span>
                            <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="receptionist_profile.php"><i class="icon_profile"></i> Mon Profil </a>
              </li>
              <li>
                <a href="#"><i class="icon_mail_alt"></i> Inbox </a>
              </li>
              <li>
                <a href="#"><i class="icon_clock_alt"></i> Planning </a>
              </li>
              <li>
                <a href="session.php"><i class="icon_key_alt"></i> Déconnexion </a>
              </li>
              <li>
                <a href="info.html"><i class="icon_key_alt"></i> Infoline </a>
              </li>
            </ul>
           </li>
           <!-- user login dropdown end -->
        </ul>
       <!-- top-panel dropdown end-->
      </div>


   </header>
    <!--header end-->

    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Accueil</span>
            </a>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Enregistrement</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="registration.php">Enregistrer patient</a></li>
              <li><a class="" href="registrationDoc.html">Enregistrer médecin</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Services</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="service.html">Service 1</a></li>
              <li><a class="" href="buttons.html">Service 2</a></li>
              <li><a class="" href="contact.html">Contact</a></li>
            </ul>
          </li>

          <li>
            <a class="" href="acces.html">
                          <i class="icon_genius"></i>
                          <span>Accés</span>
            </a>
          </li>

          <li>
            <a class="" href="stats.html">
                          <i class="icon_piechart"></i>
                          <span>Statistiques</span>

            </a>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Listes</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="patient_listing.php">Listes patients</a></li>
              <li><a class="" href="doctor_listing.php">Listes médecins</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Paramétres</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="profile.html">Profile</a></li>
              <li><a class="" href="historiques.html"><span>Historiques</span></a></li>
              <li><a class="" href="actualites.html">Actualités</a></li>
              <li><a class="" href="info.html">A propos</a></li>
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
     </aside>
     <!--sidebar end-->

     <!--main content start-->
     <section id="main-content">
       <section class="wrapper">
           <div class="row">
           <div class="col-lg-12">
               <h3 class="page-header"><i class="fa fa-files-o"></i> Statistiques </h3>
           </div>
           </div>
         <!-- all the page content goes here -->
           <?php
           require "php/CnxBD.php";
           $mDBConnection=CnxBD::getInstance();
           $req0 =$mDBConnection->prepare("SELECT count(Patient_ID) as NombrePatients FROM `patient`");
           $req0->execute();
           $Nombre0=$req0->fetch(PDO::FETCH_OBJ);

           $req1 =$mDBConnection->prepare("SELECT count(*) as NombrePatientsResidents FROM `patient` WHERE `isHere`=1 ");
           $req1->execute();
           $Nombre1=$req1->fetch(PDO::FETCH_OBJ);
           $req2 =$mDBConnection->prepare("SELECT count(*) as NombreMedecins FROM `doctor`");
           $req2->execute();
           $Nombre2=$req2->fetch(PDO::FETCH_OBJ);
           $req3 =$mDBConnection->prepare("SELECT count(*) as Nombre FROM `receptionist`");
           $req3->execute();
           $Nombre3=$req3->fetch(PDO::FETCH_OBJ);
           $req4 =$mDBConnection->prepare("SELECT count(*) as Nombre FROM `visit`");
           $req4->execute();
           $Nombre4=$req4->fetch(PDO::FETCH_OBJ);
           $req5 =$mDBConnection->prepare("SELECT count(*) as Nombre FROM `meeting`");
           $req5->execute();
           $Nombre5=$req5->fetch(PDO::FETCH_OBJ);
           ?>
           <div class="panel" >
               <div id="recep_panel" class="panel-heading " >
                   <h3 class="panel-title">Statistiques</h3>
               </div>
               <div class="panel-body">
                   <div class="row">
                       <div class=" col-md-9 col-lg-9 ">
                           <table class="table table-user-information">
                               <tbody>
                               <tr>
                                   <td>Nombre total des patients :</td>
                                   <td><?php echo $Nombre0->NombrePatients ?></td>
                               </tr>
                               <tr>
                                   <td>Nombre totale des patients résidents  :</td>
                                   <td><?php echo $Nombre1->NombrePatientsResidents ?></td>
                               </tr>
                               <tr>
                                   <td>Nombre totale des medecins :</td>
                                   <td><?php echo $Nombre2->NombreMedecins ?></td>
                               </tr>


                               <tr>
                                   <td>Nombre totale des receptionnistes</td>
                                   <td><?php echo $Nombre3->Nombre ?></td>
                               </tr>
                               <tr>
                                   <td>Nombre totale des visites : </td>
                                   <td><?php echo $Nombre4->Nombre ?></td>
                               </tr>
                               <tr>
                                   <td>Nombre totale des rendez-vous : </td>
                                   <td><?php echo $Nombre5->Nombre ?></td>
                               </tr>
                               
                               </tbody>
                           </table>
                       </div>

                   </div>
               </div>
           </div>

       </section>
     </section>
     <!--main content end-->


     <!-- page footer -->
         <footer class="copyright col-sm-3">
             <div class="container">
                 <div class="row">
                     <div class="col-sm-12 text-center">
                         &copy; 2018  INSAT TEK-CARE.. All rights Reserved
                     </div>
                 </div>
             </div>
         </footer>
         <?php

         ?>
  </section>


  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="js/jquery-ui.js"></script>
  <!-- custom script for this page-->
  <script src="js/scripts.js"></script>

</body>

</html>
