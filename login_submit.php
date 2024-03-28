<?php
// session_start();
// require "includes/dbconnection.php";

// if(isset($_POST['btnsub'])){

//     $username = $_POST['uname'];
//     $password = $_POST['pword'];
    //$query = $db->prepare("INSERT INTO users(username, passwd) VALUES(?,?)");
    //$query->bind_param('ss', $username, $password);
    //$query->execute();

    // if(validateCredentials($username, $password)){

    //     $_SESSION['logged in'] = TRUE;
    //     header("Location: home.php");
    //     exit();

    // } else{

    //     echo "Invalid username or password";
    // } 
    
    // } else{
    // header("Location: login.php");

    // function validateCredentials($username, $password){
    //     return TRUE;
    // }


// }

if (isset($_POST["btnsub"])) {
    $username = $_POST["uname"];
    $password = $_POST["pword"];
     require_once  "includes/dbconnection.php"; //insert database filename here
     $sql = "SELECT * FROM users WHERE username = '$username'";
     $result = mysqli_query($db, $sql);
     $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

     if ($user) {
         if (password_verify($password, $user["passwd"])) {
             session_start();
             $_SESSION["logged_in"] = TRUE;
             header("Location: home.php"); //insert index file here
             die();
         }else{
             echo "<div class='alert alert-danger'>Password does not match</div>";
         }
     }else{
         echo "<div class='alert alert-danger'>Username does not match</div>";
     }
 }

?>