<?php
session_start();
require "includes/dbconnection.php";

if(isset($_POST['btnsub'])){

    $username = $_POST['uname'];
    $password = $_POST['pword'];
    $query = $db->prepare("INSERT INTO users(username, passwd) VALUES(?,?)");

    $query->bind_param(1, $username);
    $query->bind_param(2, $password);
    
    $query->execute();

}else{
    header("Location: login.php");
}
?>