<?php
//href="?controller=user&action=index
//validar rutas con if 

//Acceder a la carpeta controladores con el archivo
include_once('controllers/controller_'.$controller.'.php');
//Utilizar la variable controlador y hacer mayuscula su primer letra
$objController="Controller".ucfirst($controller);
//Instanciar el metodo del archivo
$controller = new $objController();
$controller->$action();

?>