<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 4/20/2018
 * Time: 10:26 AM
 */

include_once "CnxBD.php";

class MedicalDoc
{
    public $ID;
    public $Description;

    /**
     * @return mixed
     */
    public function __construct($description)
    {
        $this->Description=$description;
    }
    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }



    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param mixed $Description
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
    }


    public function addToDB()
    {
        try {
            $bd = CnxBD::getInstance();
            $req = $bd->prepare("INSERT INTO hospital_db.medical_doc (Description) VALUES (?)");
            $req->execute(array($this->Description));
            $this->ID = $bd->lastInsertId();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

}