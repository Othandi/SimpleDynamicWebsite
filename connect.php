<?php
function connect_to_db(){
    $servername = "talsprddb02.int.its.rmit.edu.au:3306";
    $username = "s4034029";
    $passord = "jaatmplnv1941805";
    $dbname = "s4034029";

    $conn = new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        error_log("Connection failed: " . $conn->connect_error, 3, 'error_log.txt');
        die("Database connection failed. Please try again later.");
    }
    return $conn;
 }
?>