<?php
include "includes/navbar.php";

session_start();

if (isset($_SESSION['logged_in'])) {
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
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
                            <input type="text" class="form-control" name="uname" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
                            <input type="text" class="form-control" name="pword" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>

                        <input type="submit" name="btnsub" class="btn btn-info" />

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