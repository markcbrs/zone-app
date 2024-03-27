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

    $query = $db->prepare("INSERT INTO users(fname, lname, email, birth_date, username, passwd ) VALUES ('?','?','?','?','?','?')");

    $query->$db->bind_param(1, $fname);
    $query->$db->bind_param(2, $lname);
    $query->$db->bind_param(3, $email);
    $query->$db->bind_param(4, $birthdate);
    $query->$db->bind_param(5, $username);
    $query->$db->bind_param(6, $password);

    $query->execute();


    
}else{
    header("Location: login.php");
}
?>