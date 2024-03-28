<?php
include "includes/navbar.php";
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6 ">
            <div class="panel panel-info">
                <div class="panel-heading">Signup</div>
                <div class="panel-body">
                    <form action="signup_submit.php" method="POST">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="ufname" class="form-control" />
                        </div>
                        
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="ulname" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="uemail" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label>Birth Date</label>
                            <input type="date" name="bdate" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="uname" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pword" class="form-control"/>
                        </div>

                        <input type="submit" name="btnsub" class="btn btn-info"/>

                        <a href="login.php">Already have account? Log in here</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3 ">
            
        </div>
    </div>
    
</div>

<?php
include "includes/footer.php";
?>