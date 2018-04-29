<?php
    include("php/CnxBD.php");
    try
    {
        $bd = CnxBD::getInstance();
        $req = $bd->query("select * FROM person,patient WHERE person.CIN=patient.Patient_CIN");
        $infos = $req->fetchAll(PDO::FETCH_OBJ);


    }
    catch(PDOException $e)
        {
            echo $e->getMessage();
        }
$_SESSION["rendez_vous"]=0 ;
    foreach($infos as $info) :
        $age = date_diff(date_create($info->Birthday), date_create('now'))->y;
        echo
        "<tr>
            <td><a href='patient_profile.php?docID=$info->Medical_DOC_ID&id=$info->CIN' >$info->FirstName</a></td>
            <td>$info->LastName</td>
            <td>$info->Gender</td>
            <td>$info->Birthday</td>
            <td>$info->CIN</td>";
        if($info->isHere==1)
            echo
            "<td><img src='imgs/ishere.png' style='width: 32px;height: 32px;margin: auto;    display: block;'> </td></tr>";
        else
            echo
            "<td><img src='imgs/isnothere.png' style='width: 32px;height: 32px;margin: auto;    display: block;'></td></tr>";
        
       
    endforeach;


