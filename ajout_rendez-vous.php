<?php

$MaConnection = CnxBD::getInstance();
$req1 = "select * FROM `department` ";
$result1 = $MaConnection->prepare($req1);
$result1->execute();
function parcourDepartement()
{
    $req1 = "select * FROM `department` ";
    $result1 = $GLOBALS['MaConnection']->prepare($req1);
    $result1->execute();
    while ($row = $result1->fetch()) {
        echo
       "<option value=". $row["Label"].">". $row["Label"]."</option>" ;
    }
}
$req2 = "SELECT * FROM `doctor`" ;
$result2= $MaConnection->prepare($req2);
$result2->execute() ;
function parcourMedecin()
{
    $req1 = "SELECT person.FirstName , person.LastName ,Doctor_CIN FROM `doctor` inner JOIN `person` WHERE doctor.Doctor_CIN = person.CIN ";
    $result1 = $GLOBALS['MaConnection']->prepare($req1);
    $result1->execute();
    while ($row = $result1->fetch()) {
        $cin= $row["Doctor_CIN"];
        echo
            "<option value=".$cin." >". $row["FirstName"]." ".$row["LastName"] ."</option>" ;
    }
}
?>