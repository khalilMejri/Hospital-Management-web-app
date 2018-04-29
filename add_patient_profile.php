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
            $req = $bd->prepare("select * from person,patient,medical_doc WHERE person.CIN=? AND patient.Patient_ID=? AND medical_doc.ID=?");
            $req->execute(array($_GET['id'], $_GET['docID'], $_GET['docID']));
            $info = $req->fetch(PDO::FETCH_OBJ);
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
                    echo"
                    <tr>
                        <td><b>Nom</b></td>
                        <td>$info->FirstName</td>
                      </tr>
                      <tr>
                        <td><b>Prénom</b></td>
                        <td>$info->LastName</td>
                      </tr>
                      <tr>
                        <td><b>Date de naissance</b> </td>
                        <td>$info->Birthday</td>
                      </tr>
                      <tr>
                        <td><b>Adresse</b></td>
                        <td>$info->Adress</td>
                      </tr>
                      <tr>
                        <td><b>Numéro</b></td>
                        <td>(+216) $info->PhoneNumber</td>
                      </tr>
                      <tr>
                        <td><b>Consultation</b></td>
                        <td>$info->Description_fich</td>
                      </tr>";