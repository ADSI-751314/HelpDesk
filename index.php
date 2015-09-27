<?php
session_start();
include_once 'view/frame/paths.php';
if(!isset($_SESSION['username'])){
    include_once 'view/forms/frm_login.php';
}else{
    include_once 'view/frame/layout.php';
}
?>
