<?php
/**
 * Created by PhpStorm.
 * User: gtx46
 * Date: 4/29/2018
 * Time: 4:09 AM
 */
    try {
            include "php/CnxBD.php";
            $CIN=$_GET['id'];
            $docID=$_GET['docID'];
            $bd = CnxBD::getInstance();
            $verif=$bd->query("select Groupe_Sanguin,Allergie,Poids,Taille from hospital_db.patient where Patient_CIN=$CIN");

        $G_Sanguin=$_POST['Groupe_Sanguin'];
        echo $G_Sanguin;
        $Allergie=$_POST['Allergie'];
        $Poids=$_POST['Poids'];
        $Taille=$_POST['Taille'];
        $req= $bd->prepare(" update patient set Groupe_Sanguin=:Groupe_Sanguin, Allergie= :Allergie, Poids=:Poids, Taille=:Taille where Patient_CIN=:Patient_CIN");
        $req->execute(array(
        'Groupe_Sanguin'=>$G_Sanguin,
        'Allergie'=>$Allergie,
        'Poids'=>$Poids,
        'Taille'=>$Taille,
         'Patient_CIN'=>$CIN
        ));

            header("location:Dossier_Medical.php?id=$CIN & docID=$docID");
        }
    catch (PDOException $e)
        {
            $e->getMessage();
        }