<?php
  include "includes/header.php";
  require "includes/dbconnection.php";
  session_start();

  if(!isset($_SESSION['logged_in'])){
    header('Location: home.php');
  }
?>

<div class="container-fluid mt-3 ">
  <div class="row gap-4 " style="height:100vh !important;">
    <div class="col-2 "> <!-- sidebar -->

    </div> <!-- sidebar -->


    <div class="col-8 "> <!-- body -->
      <div class="d-grid gap-4">

        <div class="card w-100" >
          <img src="https://i0.wp.com/sunrisedaycamp.org/wp-content/uploads/2020/10/placeholder.png?ssl=1" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        
        <div class="card w-100" >
          <img src="https://i0.wp.com/sunrisedaycamp.org/wp-content/uploads/2020/10/placeholder.png?ssl=1" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>


      </div>
    </div>  <!-- body -->
    <div class="col-2 "> <!-- left sidebar -->
      
    </div> <!-- left -->
  </div>
</div>






<?php
  include "includes/footer.php";
?>