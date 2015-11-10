<?php
require_once '../model/login_class.php';

$username = trim($_REQUEST['txtUsername']);
$password = trim($_REQUEST['txtPassword']);
$action = trim($_REQUEST['action']);

$controller = new login_controller($username,$password);

if ($action == "login") {
    $controller->validalogin();
}elseif ($action == "logout") {
    $controller->logout();
}

class login_controller {
    private $username;
    private $password;
    private $login_class;
            
    function __construct($username,$password) {
        $this->username = $username;
        $this->password = $password;
        $this->login_class = new login_class();
    }

    public function validalogin() {
        $user_exist = $this->login_class->login($this->username,  $this->password);
        echo $user_exist;
    }

    public function logout() {
        session_destroy();
        header("Location: ../index.php");   
    }
}
