<?php
session_start();
require "includes/dbconnection.php";

if(isset($_POST['btnsub'])){

    $fname = $_POST['ufname'];
    $lname = $_POST['ulname'];
    $email = $_POST['uemail'];
    $birthdate = $_POST['bdate'];
    $username = $_POST['uname'];
    $password = $_POST['pword'];
    $password = password_hash($password, NULL);

    $query = $db->prepare("INSERT INTO users(fname, lname, email, birth_date, username, passwd) VALUES (?,?,?,?,?,?)");

    $query->bind_param('ssssss', $fname, $lname, $email, $birthdate, $username, $password);
    

    $query->execute();
    header("Location: login.php");
    


    
}else{
    header("Location: login.php");
}
?>