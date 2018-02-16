<?php
include '../Controll/DB_Connection.php';
class Validierung {
    
    function validateRegisterData($user, $password, $passwortRepeat){
        
        if($password == $passwortRepeat){
            $Insert = new DB_Connection;
            $Insert->Register($user, $password);
        }
    }     
}
