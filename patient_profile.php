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
    <link href="css/elegant-icons-style.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <!-- Custom styles -->
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/bootstrap-select.min.css" type="text/css"/>

</head>

<body>


<!-- container section start -->
<section id="container" class="">

    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i
                        class="icon_menu"></i></div>
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
                                <img alt="" src="imgs/avatar1_small.jpg">
                            </span>
                        <span class="username">Foulen ben Foulen</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li class="eborder-top">
                            <a href="#"><i class="icon_profile"></i> Mon Profil </a>
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
    <?php session_start();
    if(isset($_GET['id']))
        $_SESSION["last Patient"]= $_GET['id'] ;
    else $_GET['id']=$_SESSION["last Patient"];
    ?>
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-files-o"></i> Profile</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.php">Accueil</a></li>
                        <li><i class="fa fa-files-o"></i>Profile</li>
                    </ol>
                </div>
            </div>
            <div class="container">
                <div class="col-lg-8">
                    <!--Project Activity start-->
                    <section class="panel">
                        <div class="panel-body progress-panel">
                            <div class="row">
                                <div class="col-lg-8 task-progress pull-left">
                                    <h1>Profile Patient</h1>
                                </div>
                            </div>
                        </div>
                        <table class="table table-hover personal-task">
                            <tbody>

                            <?php
                            include "add_patient_profile.php";
                            ?>


                            <td>
                                <span class="badge bg-success">Résident</span>
                                <span class="badge bg-warning">Non Résident</span>
                            </td>
                            <td>
                                <div class="btn-row">
                                    <div class="btn-group">
                                        <?php
                                            $id=$_GET['id'];
                                            $docID=$_GET['docID'];
                                             echo"<a href='Dossier_Medical.php?id=$id &docID=$docID'><button type='button' class='btn btn-info'>Dossier Medical</button></a>";
                                         ?>
                                        </div>
                                </div>
                            </td>
                            </tr>
                            </tbody>
                        </table>
                    </section>
                    <!--Project Activity end-->
                    <!-- all the page content goes here -->
                </div>

                <div class="col-lg-4">
                    <section class="panel">
                        <div class="panel-body progress-panel">
                            <div class="row">
                                <div class="col-lg-8 task-progress pull-left">
                                    <h1 style="padding-left:45%"><a href="#demo" class="btn btn-basic" data-toggle="collapse">Rendez-vous</a></h1>
                                    <?php if($_SESSION["rendez_vous"]!=0)
                                    {echo "<h6 style='padding-left:30%;color: red;'>";
                                       if($_SESSION["ajout_vous"])
                                                    echo "ajout du rendez vous avec succes" ;
                                       else echo "le Docteur n'est pas disponible a cette date";
                                       echo"</h6>";}?>
                                </div>
                            </div>
                        </div>
                        <div id="demo" >
                            <form name="rendez-vous"  action="gestion_ajout_rendez-vous.php" method="post">
                                <input name="id" style="visibility: hidden" value="<?php $_GET['id'] ?>" >
                            <table class="table table-hover personal-task">
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <label>Date</label><input type="date" class="form-control"
                                                                          min="<?php echo date("Y-m-d"); ?>" id="dater"
                                                                          placeholder="Date Rendez-vous" name="date">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">
                                        choisir docteur:

                                        <select class="selectpicker" name="medecin">
                                            <option disabled selected hidden>choisir medecin:</option>
                                            <?php
                                            require "ajout_rendez-vous.php";
                                            parcourMedecin();
                                            ?>
                                        </select>

                                    </td>
                                </tr>
                                <tr>

                                    <td style="text-align: center;">
                                    <input name="hour" type="number" min="8" , max="18" name="H">
                                    <select class="selectpicker" name="minute">
                                        <option>00</option>
                                        <option>30</option>
                                    </select>
                                    </td>
                                </tr>


                                <tr>
                                    <td style="text-align: center;">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="submit" class="btn btn-info" >Enregistrer</input>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </form>
                        </div>
                    </section>

                </div>
            </div>
            <div>
            </div>
        </section>
    </section>
    <!--main content end-->


    <!-- page footer -->
    <footer class="copyright col-sm-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    &copy; 2018 INSAT TEK-CARE.. All rights Reserved
                </div>
            </div>
        </div>
    </footer>

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
<script src="js/bootstrap-select.min.js"></script>

</body>

</html>
