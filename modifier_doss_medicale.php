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
    <link rel="stylesheet" href="css/bootstrap-select.min.css" type="text/css"/>

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
       <?php
           $id = $_GET['id'];
           $docID = $_GET['docID'];
         echo"<form class='form-horizontal' action='modification_fich.php?id=$id & docID=$docID' method='post' >"
       ?>
        <section class="wrapper">

            <div class="container">
                <div class="col-lg-9">
                    <!--Project Activity start-->
                    <section class="panel panel-info">
                        <div class="panel-heading progress-panel" ">
                        <div class="row">
                            <h1 style="text-align: center">Fiche medicale <?php echo $_GET['docID'];?></h1>
                        </div>
                </div>
                <table class="table table-hover personal-task">
                    <tbody>
                    <form class="form-horizontal" action="modification_fich.php" method="post" >
                        <?php
                        include "php/CnxBD.php";
                        $cin=$_GET['id'];
                        $docID=$_GET['docID'];
                        $bd = CnxBD::getInstance();
                        $req = $bd->query("select * from hospital_db.patient,hospital_db.medical_doc WHERE patient.Patient_CIN=$cin AND patient.Medical_DOC_ID=$docID AND medical_doc.ID=$docID AND patient.Medical_DOC_ID=medical_doc.ID ");
                        //$req->execute(array($_GET['id'], $_GET['docID'], $_GET['docID']));
                        $infos= $req->fetchAll(PDO::FETCH_OBJ);
                        echo "
                        <tr>
                            <td><b>Groupe sanguin</b></td>
                            <td>
                            
                                
                                <select class=\"selectpicker\" data-width='50%' name='Groupe_Sanguin' required>";
                              foreach ($infos as $info):

                                if($info->Groupe_Sanguin=="A+") {
                                    echo "
                                    <option value='A+'>A+</option>
                                    <option value='A-'>A-</option>
                                    <option value='B+'>B+</option>
                                    <option value='B-'>B-</option>
                                    <option value='AB+'>AB+</option>
                                    <option value='AB-'>AB-</option>
                                    <option value='O+'>O+</option>
                                    <option value='O-'>O-</option>";

                                }
                              else if($info->Groupe_Sanguin=="A-") {
                                  echo "
                                    <option value='A-'>A-</option>
                                    <option value='A+'>A+</option>
                                    <option value='B+'>B+</option>
                                    <option value='B-'>B-</option>
                                    <option value='AB+'>AB+</option>
                                    <option value='AB-'>AB-</option>
                                    <option value='O+'>O+</option>
                                    <option value='O-'>O-</option>";

                              }
                              else if($info->Groupe_Sanguin=="B+") {
                                  echo "
                                    <option value='B+'>B+</option>
                                    <option value='A+'>A+</option>
                                    <option value='A-'>A-</option>
                                    <option value='B-'>B-</option>
                                    <option value='AB+'>AB+</option>
                                    <option value='AB-'>AB-</option>
                                    <option value='O+'>O+</option>
                                    <option value='O-'>O-</option>";

                              }
                              else if($info->Groupe_Sanguin=="B-") {
                                  echo "
                                    <option value='B-'>B-</option>
                                    <option value='A+'>A+</option>
                                    <option value='A-'>A-</option>
                                    <option value='B+'>B+</option>
                                    <option value='AB+'>AB+</option>
                                    <option value='AB-'>AB-</option>
                                    <option value='O+'>O+</option>
                                    <option value='O-'>O-</option>";

                              }
                              else if($info->Groupe_Sanguin=="AB+") {
                                  echo "
                                    <option value='AB+'>AB+</option>
                                    <option value='A+'>A+</option>
                                    <option value='A-'>A-</option>
                                    <option value='B+'>B+</option>
                                    <option value='B-'>B-</option>
                                    <option value='AB-'>AB-</option>
                                    <option value='O+'>O+</option>
                                    <option value='O-'>O-</option>";
                                  }
                              else if($info->Groupe_Sanguin=="AB-") {
                                  echo "
                                    <option value='AB-'>AB-</option>
                                    <option value='A+'>A+</option>
                                    <option value='A-'>A-</option>
                                    <option value='B+'>B+</option>
                                    <option value='B-'>B-</option>
                                    <option value='AB+'>AB+</option>
                                    <option value='O+'>O+</option>
                                    <option value='O-'>O-</option>";
                                  }
                              else if($info->Groupe_Sanguin=="O+") {
                                  echo "
                                    <option value='O-'>O+</option>
                                    <option value='A+'>A+</option>
                                    <option value='A-'>A-</option>
                                    <option value='B+'>B+</option>
                                    <option value='B-'>B-</option>
                                    <option value='AB+'>AB+</option>
                                    <option value='AB-'>AB-</option>
                                    <option value='O-'>O-</option>";
                                  }
                              else if($info->Groupe_Sanguin=="O-") {
                                  echo "
                                    <option value='O+'>O+</option>
                                    <option value='A+'>A+</option>
                                    <option value='A-'>A-</option>
                                    <option value='B+'>B+</option>
                                    <option value='B-'>B-</option>
                                    <option value='AB+'>AB+</option>
                                    <option value='AB-'>AB-</option>
                                    <option value='O+'>O+</option>";
                                  }
                              else if($info->Groupe_Sanguin=="O-") {
                                  echo "
                                    <option value='O+'>O+</option>
                                    <option value='A+'>A+</option>
                                    <option value='A-'>A-</option>
                                    <option value='B+'>B+</option>
                                    <option value='B-'>B-</option>
                                    <option value='AB+'>AB+</option>
                                    <option value='AB-'>AB-</option>
                                    <option value='O+'>O+</option>";
                                  }
                                  else {
                                      echo "
                                    <option disabled selected hidden>choisir Groupe sanguin:</option>
<<<<<<< HEAD
                                    <option value='A+-'>A+</option>
                                    <option value='A-'>A-</option>
                                    <option value='B+'>B+</option>
                                    <option value='B-'>B-</option>
                                    <option value='AB+'>AB+</option>
                                    <option value='AB-'>AB-</option>
                                    <option value='O+'>O+</option>
                                    <option value='O-'>O-</option>";

                                  }

                              echo"
=======
                                    <option name="Groupe_Sanguin" value=A+"">A+</option>
                                    <option name="Groupe_Sanguin" value="A-">A-</option>
                                    <option name="Groupe_Sanguin" value="B+">B+</option>
                                    <option name="Groupe_Sanguin" value="B-">B-</option>
                                    <option name="Groupe_Sanguin" value="AB+">AB+</option>
                                    <option name="Groupe_Sanguin" value="AB-">AB-</option>
                                    <option name="Groupe_Sanguin" value="O+">O+</option>
                                    <option name="Groupe_Sanguin" value="O-">O-</option>
>>>>>>> 54a0cfd30f40dabbeae6de20d07f58897f316c53
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Allergie et reaction</b></td>
                            <td><input  style='width: 50%' type='text' name='Allergie' placeholder='remplir' class='form-control' value='$info->Allergie' required></td>
                        </tr>
                        <tr>
                            <td><b>poids</b> </td>
                            <td><input style='width: 50%' type='text' name='Poids' placeholder='entrer le poids' class='form-control' value='$info->Poids' required></td>
                        </tr>
                        <tr>
                            <td><b>Taille</b></td>
                            <td><input  style='width: 50%' type='text' name='Taille' placeholder='entrer la taille'class='form-control' value='$info->Taille' required></td>
                        </tr>
                        <tr>
                            <td colspan='2' style='text-align: center'>
                                <a href='#demo' class='btn btn-basic' data-toggle='collapse' style='font-size: large'>Consultez les visites</a>

                                <div id='demo' class='collapse'>
                                    <table class='table table-hover personal-task'>
                                        <tbody>

                                                        
                                                    ";
                                  $b=0;
                                  break ;
                              endforeach;
                        $req = $bd->query("select * from hospital_db.patient,hospital_db.medical_doc,hospital_db.meeting WHERE patient.Patient_CIN=$cin AND patient.Medical_DOC_ID=$docID AND medical_doc.ID=$docID AND patient.Medical_DOC_ID=medical_doc.ID AND patient.Patient_CIN=meeting.Patient_CIN ");
                        $infos= $req->fetchAll(PDO::FETCH_OBJ);
                                                    foreach ($infos as $info):
                                                        if(isset($info->Date))
                                                        {
                                                            $b=1;
                                                                                echo "
                                                                    <tr>
                                                                        <td>
                                                                            <b>visite de $info->Date:</b><br>
                                                                            $info->Description
                                                                        </td>
                                                                        </tr>";
                                                        }
                                                    endforeach;
                                                    if($b==0)
                                                        echo
                                                        "
                                                         <tr>
                                                    <td>
                                                        il n'y a pas encore des visites 
                                                    </td>
                                                    </tr>
                                                         ";
                                                    ?>

                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>

        </section>
        <div class="container">
            <div class="col-lg-9">
        <button style="margin-left: 100%" type="submit" class="btn btn-success">Enregistrer modifications</button>
               </div>
        </div>
        </form>
    </section>
    </section>
    <!--main content end-->


    <!-- page footer -->
    <footer class="copyright col-sm-3" style="position: fixed">
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
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="js/jquery-ui.js"></script>
<!-- custom script for this page-->
<script src="js/scripts.js"></script>
<script src="js/bootstrap-select.min.js"></script>

</body>

