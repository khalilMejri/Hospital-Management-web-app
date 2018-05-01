<?php
session_start();
if((!isset($_SESSION['user']))||(!isset($_SESSION['passwd'])))
    header("Location: login.php");
$login=$_SESSION['user'];
$passwd=$_SESSION['passwd'];
$photo=$_SESSION['Photo'];
$FirstName=$_SESSION['FirstName'];
$LastName=$_SESSION['LastName'];
?>
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

    <!-- Style of the profilePage -->
    <link href="css/profileReceptionist.css" />

</head>

<body>
<!-- container section start -->
<section id="container" class="">

    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
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
                        <li><a class="" href="profileReceptioniste.html">Profile</a></li>
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
            <?php
            require "php/CnxBD.php";
            $mDBConnection=CnxBD::getInstance();
            $req0 =$mDBConnection->prepare("SELECT `Receptionist_CIN` FROM `receptionist` WHERE `Username`=? AND `Password`=?");
            $req0->execute(array($login,$passwd));
            $id=$req0->fetch(PDO::FETCH_OBJ);
            $req1 =$mDBConnection->prepare("SELECT `FirstName`,`LastName`,`CIN`,`Passport`,`RegistrationNumber`,`Email`,`Username`,`Password`,`Gender`,`Adress`,`PhoneNumber`,`Photo` FROM `person`,`receptionist` WHERE `CIN`=? AND `Receptionist_CIN`=?");
            $req1->execute(array($id->Receptionist_CIN,$id->Receptionist_CIN));
            $receptionist=$req1->fetch(PDO::FETCH_OBJ);
            ?>

            <div class="panel" >
                <div id="recep_panel" class="panel-heading " >
                    <h3 class="panel-title" >Modifier votre profile</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class=" col-md-9 col-lg-9 ">
                            <form action="save_receptionist_profile.php" method="post" enctype="multipart/form-data">
                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                        <td>Nom:</td>
                                        <td><input class="form-control" name="lastName" required="required" value=<?php echo $receptionist->LastName ?>><input type="hidden" name="cartein" id="hiddenField" value="<?php echo $id->Receptionist_CIN ?>" /></td>
                                    </tr>
                                    <tr>

                                        <td>Prenom:</td>
                                        <td><input value=<?php echo $receptionist->FirstName ?> class="form-control" name="firstName" required="required"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Photo :
                                        </td>
                                        <td>
                                            <input type="file" name="fichier" />
                                        </td></tr>
                                    <tr>
                                        <td>Numero PASSEPORT:</td>
                                        <td><input class="form-control" name="passeport" type="number" value=<?php echo $receptionist->Passport ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Matricule</td>
                                        <td><input  class="form-control" name="matricule" required="required" value=<?php echo $receptionist->RegistrationNumber ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Genre</td>
                                        <?php if ($receptionist->Gender=="Homme")
                                            echo "<td><input  type=\"radio\" name=\"genre\" value=\"Homme\" ID=\"Homme\" checked=\"checked\">Homme   <input  type=\"radio\" name=\"genre\" value=\"Femme\">Femme</td>";
                                        else if ($receptionist->Gender!="Homme")
                                            echo "<td><input  type=\"radio\" name=\"genre\" value=\"Homme\" ID=\"Homme\" >Homme   <input  type=\"radio\" name=\"genre\" value=\"Femme\" checked=\"checked\">Femme</td>";

                                        ?>
                                    </tr>
                                    <tr>
                                        <td>Adresse: </td>
                                        <td><input class="form-control" name="adresse" required="required" value=<?php echo $receptionist->Adress ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Email: </td>
                                        <td><input class="form-control" name="email" type="email" value=<?php echo $receptionist->Email ?>></td>
                                    </tr>
                                    <tr>
                                        <td>Numéro Téléphone</td>
                                        <td><input class="form-control" type="number" name="num" required="required" value=<?php echo $receptionist->PhoneNumber ?>></td>
                                    </tr>
                                    <tr>
                                        <td>nom d'utilisateur:</td>
                                        <td><input class="form-control" name="login" required="required" value=<?php echo $receptionist->Username ?>></td>
                                    </tr>
                                    <tr>
                                        <td>mot de passe :</td>
                                        <td><input name="mdp" class="form-control"type="password" required="required" value=<?php echo $receptionist->Password ?>></td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center">
                                            <input class="btn btn-success" type="submit" name="valider" style="margin: 5px;">
                                            <input class="btn btn-danger" type="reset" name=Effacer>
                                        </td>

                                    </tr>
                                    </tbody>
                                </table>
                            </form>
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

</section>
<!-- container section start -->

<!-- javascripts -->
<script src="js/jquery.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="jas/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="js/jquery-ui.js"></script>
<!-- custom script for this page-->
<script src="js/scripts.js"></script>

</body>

</html>
