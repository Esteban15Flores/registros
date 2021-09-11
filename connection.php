<?php 

class BD{

    private static $instance=NULL;

    public static function createConnection(){
        if(!isset(self::$instance)){
            $optionsPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO('mysql:host=localhost;dbname=bd_vr','root','',$optionsPDO);
        }
        return self::$instance;
    }
}

?>