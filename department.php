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
    <!-- font icon -->
    <!--external css-->
    <link href="css/elegant-icons-style.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/depart_style.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

</head>

<body>

  <?php

  require_once("php/CnxBD.php");
//
  $con = CnxBD::getInstance();
  $qry = 'SELECT department.Label ,department.Chief_ID ,room.Room_NUM, room.Capacity, room.isEmpty, bed.ID, bed.Patient_CIN FROM `department`, `room`, `bed` WHERE department.ID = room.Department_ID AND room.Room_NUM = bed.Room_ID AND room.Department_ID = bed.Departement_ID ORDER BY room.Room_NUM';
  $result = $con->query($qry);
  $result_set = $result->fetchAll(PDO::FETCH_ASSOC);
  $urgent_rows = array();
  $nutrition_rows = array();
  $psychology_rows = array();
  $cardiology_rows = array();
//
  foreach ($result_set as $key => $value) {
    if ($value['Label'] == "Urgence") {
        $ind = count($urgent_rows);

        $urgent_rows[$ind]['label'] = $value['Label'];
        $urgent_rows[$ind]['room_NUM'] = $value['Room_NUM'];
        $urgent_rows[$ind]['chief_ID'] = $value['Chief_ID'];
        $urgent_rows[$ind]['capacity'] = $value['Capacity'];
        $urgent_rows[$ind]['bed_ID'] = $value['ID'];
        $urgent_rows[$ind]['CIN'] = $value['Patient_CIN'];
        $urgent_rows[$ind]['isEmpty'] = $value['isEmpty'];
    }

    else if ($value['Label'] == "Nutrition"){
      $ind = count($nutrition_rows);

      $nutrition_rows[$ind]['label'] = $value['Label'];
      $nutrition_rows[$ind]['room_NUM'] = $value['Room_NUM'];
      $nutrition_rows[$ind]['chief_ID'] = $value['Chief_ID'];
      $nutrition_rows[$ind]['capacity'] = $value['Capacity'];
      $nutrition_rows[$ind]['bed_ID'] = $value['ID'];
      $nutrition_rows[$ind]['CIN'] = $value['Patient_CIN'];
      $nutrition_rows[$ind]['isEmpty'] = $value['isEmpty'];
    }
    else if ($value['Label'] == "Psychologie"){
      $ind = count($psychology_rows);

      $psychology_rows[$ind]['label'] = $value['Label'];
      $psychology_rows[$ind]['room_NUM'] = $value['Room_NUM'];
      $psychology_rows[$ind]['chief_ID'] = $value['Chief_ID'];
      $psychology_rows[$ind]['capacity'] = $value['Capacity'];
      $psychology_rows[$ind]['bed_ID'] = $value['ID'];
      $psychology_rows[$ind]['CIN'] = $value['Patient_CIN'];
      $psychology_rows[$ind]['isEmpty'] = $value['isEmpty'];
    }
    else if ($value['Label'] == "Cardiologie"){
      $ind = count($cardiology_rows);
      $cardiology_rows[$ind]['label'] = $value['Label'];
      $cardiology_rows[$ind]['room_NUM'] = $value['Room_NUM'];
      $cardiology_rows[$ind]['chief_ID'] = $value['Chief_ID'];
      $cardiology_rows[$ind]['capacity'] = $value['Capacity'];
      $cardiology_rows[$ind]['bed_ID'] = $value['ID'];
      $cardiology_rows[$ind]['CIN'] = $value['Patient_CIN'];
      $cardiology_rows[$ind]['isEmpty'] = $value['isEmpty'];
    }
}

  //var_dump($result_set);

  ?>

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
        <section class="wrapper">
            <div class="row">
              <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-files-o"></i> Départments</h3>
                <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="index.php">Accueil</a></li>
                  <li><i class="icon_document_alt"></i>Accés</li>
                  <li><i class="fa fa-files-o"></i>Départments</li>
                </ol>
              </div>
            </div>

            <div class="row">
              <!-- profile-widget -->
              <div class="col-lg-12">
                <div class="profile-widget profile-widget-info">
                  <div class="panel-body">
                    <div class="col-lg-2 col-sm-2">
                      <h4>TEK CARE CENTER</h4>
                      <div class="follow-ava">
                        <img src="imgs/widget.jpg" alt="">
                      </div>
                      <h6>Administration</h6>
                    </div>
                    <div class="col-lg-4 col-sm-4 follow-info">
                      <p>Ceci est confidentiel, vous n'êtes pas censé gérer ces données sans autorisation.</p>
                      <p>tekcare@u-carthage.com</p>
                      <p><i class="fa fa-bell"> Contact</i></p>
                      <h6>
                                        <span id="time"><i class="icon_clock_alt"></i>11:05 AM</span>
                                        <span id="calendar"><i class="icon_calendar"></i>25.10.13</span>
                                        <span><i class="icon_pin_alt"></i>Tunis</span>
                     </h6>
                    </div>

                    <div class="col-lg-2 col-sm-6 follow-info weather-category">
                      <ul>
                        <li class="active">
                          <i class="fa fa-home fa-2x"> </i><br> Issue d'un contrat qui souligne vos droits et vos devoirs
                        </li>
                      </ul>
                    </div>

                    <div class="col-lg-2 col-sm-6 follow-info weather-category">
                      <ul>
                        <li class="active">
                          <i class="fa fa-user-md fa-2x"> </i><br> Plus de 1000 de nos staff garantissent votre soin.
                        </li>
                      </ul>
                    </div>

                    <div class="col-lg-2 col-sm-6 follow-info weather-category">
                      <ul>
                        <li class="active">
                          <i class="fa fa-tachometer fa-2x"> </i><br> Nos services vous présentent des préventions.
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- page start-->
            <div class="row">
              <div class="col-lg-12">
                <section class="panel">
                  <header class="panel-heading tab-bg-info">
                    <ul class="nav nav-tabs">
                      <li class="active">
                        <a data-toggle="tab" href="#recent-activity">
                                              <i class="icon-home"></i>
                                               Cardiologie
                                          </a>
                      </li>
                      <li>
                        <a data-toggle="tab" href="#section_2">
                                              <i class="icon-user"></i>
                                              Psychologie
                                          </a>
                      </li>
                      <li>
                        <a data-toggle="tab" href="#profile">
                                              <i class="icon-user"></i>
                                              Nutrition & Hygiéne
                                          </a>
                      </li>
                      <li class="">
                        <a data-toggle="tab" href="#edit-profile">
                                              <i class="icon-envelope"></i>
                                              Urgence
                                          </a>
                      </li>
                    </ul>
                  </header>
                  <div class="panel-body">
                    <div class="tab-content">
                      <div id="recent-activity" class="tab-pane active">
                        <section class="panel">
                          <div class="bio-graph-heading">
                            Chef department: <u>Docteur Dalvi Jenner </u>, un expert reconnu dans le domaine des médicaments interactifs et puissants spécialisés dans le secteur de la cardiologie. Mon diplôme de l'Université Massey avec un baccalauréat en habitabilité spécialisé en traitements chirigucaux.</div>
                          <div class="panel-body bio-graph-info">
                            <h1>Secteur Cardiologie</h1>
<?php

//var_dump($cardiology_rows);
$display = "<div class='row'>";

//$display .= "<div>". $urgent_rows[0]['chief_ID'] ."</div>";
$display .= "<div class='bio-row'>
            <p><span><b> Etage </b></span>
            <span><b> Chambre </b></span>
            <span><b> Capacité </b></span>
            <span><b> Occupé </b></span>
            <span><b> Les bancs </b></span>";

$pagination = "<div class='text-center'>
                <ul class='pagination dark-bg' >
                  <li><a href='javascript:;'>«</a></li>";
$index =1;
for ($i=0; $i < count($cardiology_rows) ; $i++) {

    if (($i+1 <count($cardiology_rows)) && ($cardiology_rows[$i + 1]['room_NUM'] == $cardiology_rows[$i]['room_NUM'])) {
      if ($cardiology_rows[$i]['CIN'] != null) {
        $pagination .= "<li ><a style='background-color:#4cd964;color:white' href='javascript:;'>". $index++ ."</a></li>";
      }
      else {
        $pagination .= "<li><a href='javascript:;'>". $index++ ."</a></li>";
      }

    } else {

    $display .= "<div class='bio-row'><p><span>étage n°3 :</span>
                  <span>". $cardiology_rows[$i]['room_NUM'] ."</span>
                  <span>". $cardiology_rows[$i]['capacity'] ."</span>
                  <span>". $cardiology_rows[$i]['isEmpty'] ."</span></p></div>";

    if ($cardiology_rows[$i]['CIN'] != null) {
      $pagination .= "<li ><a style='background-color:#4cd964;color:white' href='javascript:;'>". $index ."</a></li>";
    } else {
      $pagination .= "<li ><a href='javascript:;'>". $index ."</a></li>";
    }
    $pagination .= "<li><a href='javascript:;'>»</a></li>
                  </ul>
                  </div>";
    $display .= $pagination;
    $pagination = "<div class='text-center'>
                    <ul class='pagination'>
                      <li><a href='javascript:;'>«</a></li>";
    $index =1;
  }
}

$display .= "</div>";
echo $display;

?>

                          </div>
                        </section>
                      </div>

                      <!-- browse depatment  -->
                      <div id="section_2" class="tab-pane">
                        <section class="panel">
                          <div class="bio-graph-heading">
                            Chef department: <u>Docteur Claude Bernard </u>, un expert reconnu dans le domaine des médicaments interactifs et puissants spécialisés dans le secteur Psychologique. Mon diplôme de l'Université Massey avec un baccalauréat en habitabilité spécialisé en traitements chirigucaux.
                          </div>
                          <div class="panel-body bio-graph-info">
                            <h1>Secteur Psychologie </h1>
<?php

//var_dump($psychology_rows);
$display = "<div class='row'>";

//$display .= "<div>". $urgent_rows[0]['chief_ID'] ."</div>";
$display .= "<div class='bio-row'>
<p><span><b> Etage </b></span>
<span><b> Chambre </b></span>
<span><b> Capacité </b></span>
<span><b> Occupé </b></span>
<span><b> Les bancs </b></span>";

$pagination = "<div class='text-center'>
<ul class='pagination dark-bg' >
<li><a href='javascript:;'>«</a></li>";
$index =1;
for ($i=0; $i < count($psychology_rows) ; $i++) {

    if (($i+1 <count($psychology_rows)) && ($psychology_rows[$i + 1]['room_NUM'] == $psychology_rows[$i]['room_NUM'])) {
        if ($psychology_rows[$i]['CIN'] != null) {
        $pagination .= "<li ><a style='background-color:#4cd964;color:white' href='javascript:;'>". $index++ ."</a></li>";
        }
        else {
          $pagination .= "<li><a href='javascript:;'>". $index++ ."</a></li>";
        }
    // switch cases
    } else {

        $display .= "<div class='bio-row'><p><span>étage n°4 :</span>
        <span>". $psychology_rows[$i]['room_NUM'] ."</span>
        <span>". $psychology_rows[$i]['capacity'] ."</span>
        <span>". $psychology_rows[$i]['isEmpty'] ."</span></p></div>";

        if ($psychology_rows[$i]['CIN'] != null) {
          $pagination .= "<li ><a style='background-color:#4cd964;color:white' href='javascript:;'>". $index ."</a></li>";
        } else {
          $pagination .= "<li ><a href='javascript:;'>". $index ."</a></li>";
        }
        $pagination .= "<li><a href='javascript:;'>»</a></li>
                      </ul>
                      </div>";
        $display .= $pagination;
        $pagination = "<div class='text-center'>
        <ul class='pagination'>
        <li><a href='javascript:;'>«</a></li>";
        $index =1;
    }
}

$display .= "</div>";
echo $display;

?>

                          </div>
                        </section>
                      </div>

                      <!-- browse depatment  -->
                      <div id="profile" class="tab-pane">
                        <section class="panel">
                          <div class="bio-graph-heading">
                            Chef department: <u>Docteur Christian Barnard </u>, un expert reconnu dans le domaine des médicaments interactifs et puissants spécialisés dans le secteur de la Nutrition & Hygiéne. Mon diplôme de l'Université Massey avec un baccalauréat en habitabilité spécialisé en traitements chirigucaux.
                          </div>
                          <div class="panel-body bio-graph-info">
                            <h1>Nutrition & Hygiéne</h1>
<?php

//var_dump($nutrition_rows);
$display = "<div class='row'>";

//$display .= "<div>". $urgent_rows[0]['chief_ID'] ."</div>";
$display .= "<div class='bio-row'>
            <p><span><b> Etage </b></span>
            <span><b> Chambre </b></span>
            <span><b> Capacité </b></span>
            <span><b> Occupé </b></span>
            <span><b> Les bancs </b></span>";

$pagination = "<div class='text-center'>
                <ul class='pagination dark-bg' >
                  <li><a href='javascript:;'>«</a></li>";
$index =1;
for ($i=0; $i < count($nutrition_rows) ; $i++) {

    if (($i+1 <count($nutrition_rows)) && ($nutrition_rows[$i + 1]['room_NUM'] == $nutrition_rows[$i]['room_NUM'])) {
      if ($nutrition_rows[$i]['CIN'] != null) {
        $pagination .= "<li ><a style='background-color:#4cd964;color:white' href='javascript:;'>". $index++ ."</a></li>";
      }
      else {
        $pagination .= "<li><a href='javascript:;'>". $index++ ."</a></li>";
      }

    } else {

    $display .= "<div class='bio-row'><p><span>étage n°2 :</span>
                  <span>". $nutrition_rows[$i]['room_NUM'] ."</span>
                  <span>". $nutrition_rows[$i]['capacity'] ."</span>
                  <span>". $nutrition_rows[$i]['isEmpty'] ."</span></p></div>";

    if ($nutrition_rows[$i]['CIN'] != null) {
      $pagination .= "<li ><a style='background-color:#4cd964;color:white' href='javascript:;'>". $index ."</a></li>";
    } else {
      $pagination .= "<li ><a href='javascript:;'>". $index ."</a></li>";
    }
    $pagination .= "<li><a href='javascript:;'>»</a></li>
                  </ul>
                  </div>";
    $display .= $pagination;
    $pagination = "<div class='text-center'>
                    <ul class='pagination'>
                      <li><a href='javascript:;'>«</a></li>";
    $index =1;
  }
}

$display .= "</div>";
echo $display;

?>

                          </div>
                        </section>
                        <section>
                          <div class="row">
                          </div>
                        </section>
                      </div>


                      <!-- browse department -->
                      <div id="edit-profile" class="tab-pane">
                        <section class="panel">
                          <div class="bio-graph-heading">
                            Chef department: <u>Docteur René Laennec </u>, un expert reconnu dans le domaine des médicaments interactifs et puissants spécialisés dans le secteur de secourisme. Mon diplôme de l'Université Massey avec un baccalauréat en habitabilité spécialisé en traitements chirigucaux.
                          </div>
                          <div class="panel-body bio-graph-info">
                            <h1>Service Urgence</h1>
<?php

 //var_dump($urgent_rows);
$display = "<div class='row'>";

//$display .= "<div>". $urgent_rows[0]['chief_ID'] ."</div>";
$display .= "<div class='bio-row'>
            <p><span><b> Etage </b></span>
            <span><b> Chambre </b></span>
            <span><b> Capacité </b></span>
            <span><b> Occupé </b></span>
            <span><b> Les bancs </b></span>";

$pagination = "<div class='text-center'>
                <ul class='pagination dark-bg' >
                  <li><a href='javascript:;'>«</a></li>";
$index =1;
for ($i=0; $i < count($urgent_rows) ; $i++) {

    if (($i+1 <count($urgent_rows)) && ($urgent_rows[$i + 1]['room_NUM'] == $urgent_rows[$i]['room_NUM'])) {
      if ($urgent_rows[$i]['CIN'] != null) {
        $pagination .= "<li ><a style='background-color:#4cd964;color:white' href='javascript:;'>". $index++ ."</a></li>";
      }
      else {
        $pagination .= "<li><a href='javascript:;'>". $index++ ."</a></li>";
      }

    } else {

    $display .= "<div class='bio-row'><p><span>étage n°1 :</span>
                  <span>". $urgent_rows[$i]['room_NUM'] ."</span>
                  <span>". $urgent_rows[$i]['capacity'] ."</span>
                  <span>". $urgent_rows[$i]['isEmpty'] ."</span></p></div>";

    if ($urgent_rows[$i]['CIN'] != null) {
      $pagination .= "<li ><a style='background-color:#4cd964;color:white' href='javascript:;'>". $index ."</a></li>";
    } else {
      $pagination .= "<li ><a href='javascript:;'>". $index ."</a></li>";
    }
    $pagination .= "<li><a href='javascript:;'>»</a></li>
                  </ul>
                  </div>";
    $display .= $pagination;
    $pagination = "<div class='text-center'>
                    <ul class='pagination'>
                      <li><a href='javascript:;'>«</a></li>";
    $index =1;
  }
}

$display .= "</div>";
echo $display;

?>
                          </div>
                        </section>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>

            <!-- page end-->
        </section>
    </section>
    <!--main content end-->

</section>

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
<script src="js/scripts.js" type="text/javascript"></script>

<script type="text/javascript">

$(document).ready(function () {
  var currentdate = new Date();
  var date = "" + currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/"
                + currentdate.getFullYear();
  var time = "" + currentdate.getHours() + ":"
                + currentdate.getMinutes();
  if (currentdate.getHours()>11) {
    time += " PM";
  } else {
    time += " AM";
  }

  $('#time').html("<i class='icon_clock_alt'></i>" + time);
  $('#calendar').html("<i class='icon_calendar'></i>" + date);
});

</script>
</body>

</html>
