<?php
/**
 * Description of DB_Connection
 *
 * @author schuerch
 */
class DB_Connection {
    
    function Register($Name, $Passwort){
       
        $host = "localhost";
        $user = "testblog";
        $passwort = "12345";
        $db = "patient0";

        $conn = new mysqli($host, $user, $passwort, $db);
        if($conn == false){
            die("ERROR: Could not connect. " . $mysqli->connect_error);
        }
        $sql = "INSERT INTO `benutzer`(`Name`, `Passwort`) VALUES ('$Name','$Passwort');";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            echo  '<script type="text/javascript" language="Javascript"> alert("Vielen Dank! Ihre Daten wurden uns zugesandt.") </script> '; 
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();      
    }    
    
    function Login($user, $passwort){
        $host = "localhost";
        $user = "testblog";
        $passwort = "12345";
        $db = "patient0";
        $conn = new mysqli($host, $user, $passwort, $db);
        if($conn == false){
            die("ERROR: Could not connect. " . $mysqli->connect_error);
        }
        $sql = "SELECT * FROM `benutzer` WHERE `Name` = 'test' && `$user` = '$passwort'";
        $result = $conn->query($sql);
        
        if ($result->num_rows == 1) {
            echo "loged in";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    function Delete(){
        
    }
    
    function logout(){
        
    }
    
    function getDBConnection(){
        $host = "localhost";
        $user = "patient0";
        $passwort = "12345";
        $db = "PATIENT0";
        
         $conn = mysqli_connect($host, $user, $passwort, $db);
         if($conn){
            if(!mysqli_select_db($db)){
                echo"<br>".mysql_error();
            }
         }else{
             echo"<br>".mysql_error();
         }
         $sql = "INSERT INTO `benutzer`(`Name`, `Passwort`) VALUES ('hallo','hallo');";
              $showFormular = true;
                    $host = "localhost";
                    $user = "patient0";
                    $passwort = "12345";
                    $db = "PATIENT0";
        
                    $conn = mysqli_connect($host, $user, $passwort, $db);
                    if($conn){
                       if(!mysqli_select_db($db)){
                           echo"<br>".mysql_error();
                       }
                    }else{
                        echo"<br>".mysql_error();
                    }
                    $sql = "INSERT INTO `benutzer`(`Name`, `Passwort`) VALUES ('hallo','hallo');";
                    if ($conn->query($sql) === TRUE) {
                        echo "New record created successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }

                $conn->close();
    }
}
