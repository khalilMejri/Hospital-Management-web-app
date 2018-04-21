<?php
    include_once ("php/Patient.php")  ;
    include_once ("php/MedicalDoc.php");

    $medDoc=new MedicalDoc($_POST['description']);
    $medDoc->addToDB();
    $patient=new Patient($_POST['prenom'],$_POST['nom'],$_POST['sexe'],$_POST['cin'],$_POST['adresse'],$_POST['numero'],$medDoc->getID());
    $patient->addToDB();
    header("Location:registration_success.php");



?>