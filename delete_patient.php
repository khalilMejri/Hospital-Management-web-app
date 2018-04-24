<?php
/**
 * Created by PhpStorm.
 * User: gtx46
 * Date: 4/24/2018
 * Time: 12:30 AM
 */
    include "php/CnxBD.php";
    try
    {
    $bd=CnxBD::getInstance();

    $req2=$bd->prepare("delete from patient WHERE Patient_CIN=?") ;
    $req2->execute(array($_GET['id']));
    $req1=$bd->prepare("delete from person WHERE CIN=?") ;
    $req1->execute(array($_GET['id']));
    $req3=$bd->prepare("delete from medical_doc WHERE ID=?") ;
    $req3->execute(array($_GET['docID']));

        header('location:patient_listing.php');

    }
    catch(PDOException $e)
    {
      echo $e->getMessage();
    }
