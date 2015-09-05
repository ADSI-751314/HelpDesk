<?php

require_once 'model/login_class.php';

class login_controller {

    public function frm_login() {

        include_once 'view/forms/frm_login.php';
    }

    public function validalogin() {

        $login = new login_class();
        
       $validacion = $login->validacion($_REQUEST['username'], $_REQUEST['password']);
       

        if ($validacion == 0) {

            echo "<script>alert('El usuario y contrasena son incorrectas')</script>";
            echo '<meta http-equiv="refresh" content="0; url=?action=login&petition=frmlogin" />';
            
        } elseif ($validacion == 1) {

            @$_SESSION['username'] = $_REQUEST['username'];
            @$_SESSION['password'] = $_REQUEST['password'];

            echo "<script>alert('Bienvenido a Help Desk')</script>";

            echo '<meta http-equiv="refresh" content="0; url=?" />';
        }
    }
    
     public function unlog(){
        
        session_destroy();
        
        echo '<meta http-equiv="refresh" content="0; url=?" />';
    }

}
