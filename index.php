<?php

// se inicia las variables de session.
session_start();

// se valida si el usuario esta logeado
if (isset($_SESSION['username']) || @$_REQUEST ['action'] == "login" && @$_REQUEST['petition'] == "validalogin") {

// Controlador Frontal.
    // se valida si se realiza una peticion de no ser asi se carga el menu principal
    if (!isset($_REQUEST['action'])) {


        // nombre del controlador principal para ingresar al home
        $controller = 'main';

        // se incluye el controlador main
        require_once "controller/" . $controller . "_controller.php";
        $controller = ucwords($controller) . '_Controller';
        $controller = new $controller;
        $controller->home();
    } else {
        
        // Obtenemos el controlador que queremos cargar
        $controller = strtolower($_REQUEST['action']);
        $accion = isset($_REQUEST['petition']) ? $_REQUEST['petition'] : 'home';

        // Instanciamos el controlador
        require_once "controller/" . $controller . "_controller.php";
        $controller = ucwords($controller) . '_Controller'; // ucwords convierte la primera letra de la cadena en mayuscula.
        $controller = new $controller;
        // Llama la accion.
        call_user_func(array($controller, $accion));
    }
} else {

    // se carga el formulario de login 
    $controller = 'login';
    require_once "controller/" . $controller . "_controller.php";
    $controller = ucwords($controller) . '_Controller';
    $controller = new $controller;
    $controller->frm_login();
}
?>