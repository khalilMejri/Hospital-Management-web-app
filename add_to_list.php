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

    foreach($infos as $info) :
        echo
        "<tr>
            <td><a href='patient_profile.php?docID=$info->Medical_DOC_ID&id=$info->CIN'>$info->FirstName</a></td>
            <td>$info->LastName</td>
            <td>$info->Gender</td>
            <td>$info->BirthDay</td>
            <td>$info->CIN</td>";
        if($info->isHere==1)
            echo
            "<td><img src='imgs/ishere.png' style='width: 32px;height: 32px;margin: auto;    display: block;'> </td>";
        else
            echo
            "<td><img src='imgs/isnothere.png' style='width: 32px;height: 32px;margin: auto;    display: block;'></td>";
        echo
            "<td style='text-align: center'><a href='delete_patient.php?docID=$info->Medical_DOC_ID&id=$info->CIN'><button type=\"button\" class=\"btn btn-danger\">Delete!</button></a></td>
        </tr>";
    endforeach;


