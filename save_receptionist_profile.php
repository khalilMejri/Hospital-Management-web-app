<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 01/05/2018
 * Time: 01:00
 */

session_start();
if((!isset($_SESSION['user']))||(!isset($_SESSION['passwd'])))
    header("Location: login.php");

                        require "php/CnxBD.php";
                        $mDBConnection=CnxBD::getInstance();
                        echo ("bonjour  : ".$_FILES['fichier']['name']);
                        if ($_FILES["fichier"]['size'] == 0){
                            $req2 = $mDBConnection->prepare("UPDATE `receptionist` SET `RegistrationNumber`=?,`Email`=?,`Username`=?,`Password`=? WHERE `Receptionist_CIN`=?");
                            $results2 = $req2->execute(array($_POST['matricule'], $_POST['email'], $_POST['login'], $_POST['mdp'], $_POST['cartein']))  ;
                            if ($results2!=null) echo "file non remplis";
                            else echo "file non remplis";
                        }
                        else {
                            copy($_FILES['fichier']['tmp_name'],'imgs/'.$_FILES['fichier']['name']);
                            $req2 = $mDBConnection->prepare("UPDATE `receptionist` SET `RegistrationNumber`=?,`Email`=?,`Username`=?,`Password`=?,`Photo`=? WHERE `Receptionist_CIN`=?");
                            $results2 = $req2->execute(array($_POST['matricule'], $_POST['email'], $_POST['login'], $_POST['mdp'],$_FILES["fichier"]['name'], $_POST['cartein']))  ;
                            if ($results2!=null) echo "resultat receptionist trouvé";
                            else echo " .  resultat  receptionist non trouvé";
                            $_SESSION['Photo']=$_FILES["fichier"]['name'];
                        }
                        $req3 = $mDBConnection->prepare("UPDATE `person` SET `FirstName`=?,`LastName`=?,`Gender`=?,`Passport`=?,`Adress`=?,`PhoneNumber`=? WHERE `CIN`=?");
                        $results3 = $req3->execute(array($_POST['firstName'], $_POST['lastName'], $_POST['genre'],$_POST['passeport'], $_POST['adresse'], $_POST['num'],$_POST['cartein'] ))  ;
                        if ($results3!=null) echo "resultat person trouvé";
                        else echo ".  resultat person non trouvé" ;

                        $_SESSION['FirstName']=$_POST['firstName'];
                        $_SESSION['LastName']=$_POST['lastName'];
                        header("Location: receptionist_profile.php");
                        ?>