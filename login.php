<?php 
include "includes/navbar.php";

session_start();

if(isset($_SESSION['logged_in'])){
    header('Location: home.php');
  }

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            
        </div>
        <div class="col-md-6 ">
            <div class="panel panel-info">
                <div class="panel-heading">LOGIN</div>
                <div class="panel-body">
                    <form action="login_submit.php" method="POST">
                        <div class="form-group">
                            <label>USERNAME</label>
                            <input type="text" name="uname" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label>PASSWORD</label>
                            <input type="password" name="pword" class="form-control"/>
                        </div>

                        <input type="submit" name="btnsub" class="btn btn-info"/>

                        <a href="signup.php">Don't have account yet? Register here</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3 ">
            
        </div>
    </div>
    
</div>
<?php include "includes/footer.php";

?>

