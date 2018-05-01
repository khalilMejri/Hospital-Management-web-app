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
    <link href="css/elegant-icons-style.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <!-- Custom styles -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet"/>
    <link href="DataTables/datatables.css" rel="stylesheet"/>


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
        <a href="index.html" class="logo">TEK <span class="lite">CARE</span></a>
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
                            <a href="login.html"><i class="icon_key_alt"></i> Déconnexion </a>
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
                    <a class="" href="index.html">
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
                        <li><a class="" href="form_patient.html">Enregistrer patient</a></li>
                        <li><a class="" href="form_medecin.html">Enregistrer médecin</a></li>
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
                        <li><a class="" href="patient_table.html">Listes patients</a></li>
                        <li><a class="" href="medecin_table.html">Listes médecins</a></li>
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

            <!-- all the page content goes here -->

        </section>
    </section>
    <!--main content end-->

    <section id="main-content">
        <section class="wrapper">

            <div class="container">
                <!-- all the page content goes here -->

                <table id="Patient" data-pagination="true" data-search="true" data-toggle="table"
                       class="table table-striped table-bordered table-hover  ">
                    <thead>
                    <tr >
                        <th style="text-align: center">FirstName</th>
                        <th style="text-align: center">LastName</th>
                        <th style="text-align: center">Gender</th>
                        <th style="text-align: center">Age</th>
                        <th style="text-align: center">CIN</th>
                        <th style="text-align: center">Presence</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        include "add_to_list_patient.php";
                    ?>
                    </tbody>

                </table>
            </div>
        </section>
    </section>
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


<script src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" charset="utf8" src="DataTables/datatables.js"></script>
<script>$(document).ready(function () {
        $('#Patient').DataTable(
		{
            columnDefs: [
                { type: 'title-string', targets: 5 }
            ]
        });
    });
</script>

<script src="js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="js/jquery-ui.js"></script>
<!-- custom script for this page-->
<script src="js/scripts.js"></script>

</html>
