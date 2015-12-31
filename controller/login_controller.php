<?php
require_once '../model/login_class.php';

$action = trim($_REQUEST['action']);
$controller = new login_controller();
if ($action == "login") {
    $username = trim($_REQUEST['txtUsername']);
    $password = trim($_REQUEST['txtPassword']);
    $controller->validalogin($username, $password);
}elseif ($action == "logout") {
    $controller->logout();
}

class login_controller {
    private $login_class;
            
    function __construct() {
        $this->login_class = new login_class();
    }

    public function validalogin($username, $password) {
        $user_exist = $this->login_class->login($username,  $password);
        echo $user_exist;
    }

    public function logout() {
        $this->login_class->logout();
    }
}