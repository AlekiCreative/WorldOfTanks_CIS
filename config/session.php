<?php 
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$_SESSION['loggedin'] = true; 


$id = isset($_GET['id']) ? $_GET['id'] : '';


?>