<?php
    require("php/CnxBD.php");

    try {
        $bd = CnxBD::getInstance();
        //Inserting Person attribute
        $req = $bd->prepare('INSERT INTO hospital_db.person (FirstName, LastName, Gender, CIN, Adress, PhoneNumber) VALUES(:FirstName, :LastName, :Gender, :CIN, :Adress, :PhoneNumber)');
        $req->execute(array(

            'FirstName' => $_POST['nom'],

            'LastName' => $_POST['prenom'],

            'Gender' => $_POST['sexe'],

            'CIN' => $_POST['cin'],

            'PhoneNumber' => $_POST['numero'],

            'Adress' => $_POST['adresse']

        ));

        //Creating a Medical Doc in The DataBase
        $req = $bd->prepare("INSERT INTO hospital_db.medical_doc (Description) VALUES (?)");
        $req->execute(array($_POST['description']));

        //Inserting Patient attribue
        $req = $bd->prepare('INSERT INTO hospital_db.patient (Patient_CIN,isHere,Medical_DOC_ID) VALUES(:Patient_CIN,:isHere,:medicalDoc)');
        $req->execute(array(
            'Patient_CIN' => $_POST['cin'],
            'isHere' => 1,
            'medicalDoc' => $bd->lastInsertId()
        ));

    }catch (PDOException $e){
        echo $e->getMessage();
    }
    header("Location:registration_success.php");

