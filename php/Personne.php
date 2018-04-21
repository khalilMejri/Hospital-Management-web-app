<?php

/**
 * Created by PhpStorm.
 * User: gtx46
 * Date: 4/19/2018
 * Time: 2:44 PM
 */
include 'CnxBD.php';

class Personne
{
    public $FirstName;
    public $LastName;
    public $Gender;
    public $CIN;
    public $Adress;
    private $PhoneNumber;
    private $Birthday ;

    /**
     * Personne constructor.
     * @param $firstName
     * @param $lastName
     * @param $gender
     * @param $CIN
     * @param $adress
     * @param $phoneNumber
     * @param $bd
     */
    public function __construct($FirstName, $LastName, $Gender, $CIN, $Adress, $PhoneNumber ,$Birthday)
    {
        $this->FirstName = $FirstName;
        $this->LastName = $LastName;
        $this->Gender = $Gender;
        $this->CIN = $CIN;
        $this->Adress = $Adress;
        $this->PhoneNumber = $PhoneNumber;
        $this->Birthday= $Birthday ;
    }

    /**
     * @return null|PDO
     */
    public function addToDB()
    {
        try {
            $bd = CnxBD::getInstance();
            $req = $bd->prepare('INSERT INTO hospital_db.person (FirstName, LastName, Gender, CIN, Adress, PhoneNumber) VALUES(:FirstName, :LastName, :Gender, :CIN, :Adress, :PhoneNumber)');
            $req->execute(array(

                'FirstName' => $this->FirstName,

                'LastName' => $this->LastName,

                'Gender' => $this->Gender,

                'CIN' => $this->CIN,

                'Adress' => $this->Adress,

                'PhoneNumber' => $this->PhoneNumber,

                'Birthday' => $this->Birthday

            ));
        }catch (PDOException $e){
            echo $e->getMessage();
        }

    }

}
?>