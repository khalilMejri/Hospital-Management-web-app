<?php
/**
 * Created by PhpStorm.
 * User: gtx46
 * Date: 4/23/2018
 * Time: 5:45 PM
 */
                    include "php/CnxBD.php" ;
        try {
            $bd = CnxBD::getInstance();

            $req = $bd->prepare("select * from  `person` inner join `patient` WHERE person.CIN=? AND person.CIN=patient.Patient_CIN ");
            $req->execute(array($_GET['id']));
            $info = $req->fetch();
            $medid= $info['Medical_DOC_ID'];
            $req2= $bd->prepare("select * from `medical_doc` where medical_doc.ID ='$medid'");
            $req2->execute() ;
            $doc=$req2->fetch();
            echo"
                    <tr>
                        <td><b>Nom</b></td>
                        <td>".$info["FirstName"]."</td>
                      </tr>
                      <tr>
                        <td><b>Prénom</b></td>
                        <td>".$info["LastName"]."</td>
                      </tr>
                      <tr>
                        <td><b>Date de naissance</b> </td>
                        <td>".$info["Birthday"]."</td>
                      </tr>
                      <tr>
                        <td><b>Adresse</b></td>
                        <td>".$info["Adress"]."</td>
                      </tr>
                      <tr>
                        <td><b>Numéro</b></td>
                        <td>(+216) ".$info["PhoneNumber"]."</td>
                      </tr>
                      <tr>
                        <td><b>Numéro de carnet</b></td>
                        <td>156457 CNSS</td>
                      </tr>
                      <tr>
                        <td><b>Consultation</b></td>
                        <td>".$doc["Description"]."</td>
                      </tr>";
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
