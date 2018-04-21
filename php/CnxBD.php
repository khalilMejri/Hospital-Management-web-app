<?php

class CnxBD
{

    private static $_dbname = 'hospital_db';
    private static $_user = 'root';
    private static $_pwd = '';
    private static $_host = 'localhost';
    private static $_bdd = null;

    private function __construct()
    {
        try {
             self::$_bdd = new PDO('mysql:host='.self::$_host.';dbname='.self::$_dbname.';charset=utf8', self::$_user, self::$_pwd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch (PDOException $e) {
            die('Erreur : '.$e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (!self::$_bdd) {
             new CnxBD();
    }

        return (self::$_bdd);
    }
}
?>