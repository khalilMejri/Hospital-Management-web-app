<?php
/**
 * Created by PhpStorm.
 * User: benka
 * Date: 25/04/2018
 * Time: 23:34
 */

require "php/CnxBD.php";
session_start();
$doctor= $_POST["medecin"];
$MaConnection = CnxBD::getInstance();
$req = "select * FROM `meeting`where meeting.Doctor_CIN=$doctor ";
$result = $MaConnection->prepare($req);
$result->execute();
$patient=$_SESSION['last Patient'];
$hour=$_POST["hour"];
$minute=$_POST["minute"];
$date=$_POST["date"];
$description=$_POST["Description"];
$value=true ;
echo $date ;
$expl= explode(' ',$date);
$string ="$date $hour:$minute:00";
$date = date("Y-m-d H:i:s", strtotime($string));
$_SESSION["rendez_vous"]=1;
$_SESSION["ajout_vous"]=true ;
while ($row=$result->fetch()) {
    $vardate= $row["Date"];
    if($date==$vardate)
    {
        $_SESSION["ajout_vous"]=false ;
        $value=false ;
        break;
    }
}

if ($value==true ) {
    try{$req = $MaConnection->prepare('INSERT INTO `meeting`(`Doctor_CIN`, `Patient_CIN`, `Date`, `Description`) VALUES(:Doctor_CIN, :Patient_CIN, :Date, :Description )');
        $req->execute(array(

            'Doctor_CIN' => $doctor,

            'Patient_CIN' => $patient,

            'Date' => $date,

            'Description' => $description

        ));

    }catch (PDOException $e){}
}
header("Location: patient_profile.php");
exit;

?>

?>





