<?php
/**
 * Created by PhpStorm.
 * User: gtx46
 * Date: 4/29/2018
 * Time: 1:20 AM
 */
try
{
    include "php/CnxBD.php";
    $cin=$_GET['id'];
    $docID=$_GET['docID'];
    $bd = CnxBD::getInstance();
    $req = $bd->query("select * from hospital_db.patient,hospital_db.medical_doc WHERE patient.Patient_CIN=$cin AND patient.Medical_DOC_ID=$docID AND medical_doc.ID=$docID AND patient.Medical_DOC_ID=medical_doc.ID ");
    //$req->execute(array($_GET['id'], $_GET['docID'], $_GET['docID']));
    $infos= $req->fetchAll(PDO::FETCH_OBJ);
    foreach($infos as $info):

    echo
    "
                    <div class=\"panel-heading progress-panel\" \">
                            <div class=\"row\">
                                    <h1 style='text-align: center'>Fiche medicale $docID</h1>
                            </div>
                    </div>
                        <table class='table table-hover personal-task'>

                            <tbody>
                    <tr>
                        <td><b>Groupe sanguin</b></td>
         
                                <td>$info->Groupe_Sanguin</td>
                            </tr>
         
                            <tr>
                                <td><b>Allergie et reaction</b></td>
         
                                <td>$info->Allergie</td>
                            </tr>
         
                            <tr>
                                <td><b>poids</b> </td>
      
                                <td>$info->Poids</td>
                            </tr>
            
                            <tr>
                                <td><b>Taille</b></td>
     
                                <td>$info->Taille</td>
                            </tr>
     
                            <tr>
                                <td colspan=\"2\" style=\"text-align: center\">
                                    <a href=\"#demo\" class=\"btn btn-basic\" data-toggle=\"collapse\" style=\"font-size: large\">Consultez les visites</a>

                                        <div id=\"demo\" class=\"collapse\">
                                            <table class=\"table table-hover personal-task\">
                                                <tbody>
                                                ";
    break;
    endforeach;
    $req = $bd->query("select * from hospital_db.patient,hospital_db.medical_doc,hospital_db.meeting WHERE patient.Patient_CIN=$cin AND patient.Medical_DOC_ID=$docID AND medical_doc.ID=$docID AND patient.Medical_DOC_ID=medical_doc.ID AND patient.Patient_CIN=meeting.Patient_CIN ");
    //$req->execute(array($_GET['id'], $_GET['docID'], $_GET['docID']));
    $infos= $req->fetchAll(PDO::FETCH_OBJ);

    $b=0;
        foreach ($infos as $info):
            if(isset($info->Date)) {
            $b=1;
            echo "
                                                <tr>
                                                    <td>
                                                        <b>visite de $info->Date:</b><br>
                                                        $info->Description
                                                    </td>
                                                    </tr>";
    }
        endforeach;
    if($b==0)
        echo
        "
                                        <tr>
                                                    <td>
                                                        il n'y a pas encore des visites 
                                                    </td>
                                                    </tr>
        ";
    echo"
    
                                                </tbody>
                                            </table>
                                            </div>
                                </td>
                            </tr>";




}
catch(PDOException $e)
{
    echo $e->getMessage();
}