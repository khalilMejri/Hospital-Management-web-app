<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 4/23/2018
 * Time: 4:03 PM
 */
    require("php/CnxBD.php");

    try {
        $bd = CnxBD::getInstance();
        //Inserting Person attribute
        $req = $bd->prepare('INSERT INTO hospital_db.person (FirstName, LastName, Gender, CIN, Adress, PhoneNumber,BirthDay) VALUES(:FirstName, :LastName, :Gender, :CIN, :Adress, :PhoneNumber,:BirthDay)');
        $req->execute(array(

            'FirstName' => htmlspecialchars(trim($_POST['nom'])),

            'LastName' => htmlspecialchars(trim($_POST['prenom'])),

            'Gender' => $_POST['sexe'],

            'CIN' => $_POST['cin'],

            'PhoneNumber' => $_POST['numero'],

            'Adress' => htmlspecialchars(trim($_POST['adresse'])),

            'BirthDay' => $_POST['date']

        ));


        //Inserting Docteur attribue
        $req = $bd->prepare('INSERT INTO hospital_db.doctor (Doctor_CIN,Grade,Speciality) VALUES(:Doctor_CIN,:Grade,:Speciality)');
        $req->execute(array(
            'Doctor_CIN' => $_POST['cin'],
            'Grade' => trim($_POST['grade']),
            'Speciality' => $_POST['specialite']
        ));
        header("Location:doctor_listing.php");
    }catch (PDOException $e){
        echo $e->getMessage();
    }





