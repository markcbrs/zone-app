<?php
  include "includes/header.php";
  require "includes/dbconnection.php";
  session_start();

  if(!isset($_SESSION['logged_in'])){
    header('Location: home.php');
  }
?>

<div class="container">
<div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 ">
            <div class="panel panel-success">
                <div class="panel-heading">FRUIT STAND</div>
                <div class="panel-body">
                  <form action="insert.php" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                      <label>NAME</label>
                      <input type="text" name="name" class="form-control" required/>
                    </div>

                    <div class="form-group">
                      <label>DESCRIPTION</label>
                      <textarea name="desc" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                      <label>PRICE</label>
                      <input type="number" step="any" name="price" class="form-control" required/>
                    </div>

                    <div class="form-group">
                      <label>IMAGE</label>
                      <input type="file" name="f_image" class="form-control" required/>
                    </div>

                    <input type="submit" class="btn btn-success"/>
                  </form>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 ">
            <div class="panel panel-info">
                <div class="panel-heading">FRUIT STAND</div>
                <div class="panel-body">
                
                  <table class="table">
                    <thead>
                      <th>ID</th>
                      <th>Image</th>
                      <th>NAME</th>
                      <th>ACTION</th>
                    </thead>
                    <tbody>
                    <?php
                      $query = $db->query("SELECT * from fruits_tbl");
                      while($result = $query->fetch_assoc()):
                    ?>
                      <tr>
                          <td><?= $result['fruit_id']?> </td>
                          <td><img height="150" src="uploads/<?= $result['fruit_image']?>"/></td>
                          <td><?= $result['fruit_name']?></td>
                          <td>
                          <a href="uploads/<?= $result['fruit_image']?>" download="" class="btn btn-info">DOWNLOAD  IMAGE</a>  
                          <a href="view.php?id=<?= $result['fruit_id']?>" class="btn btn-info">VIEW</a>
                            <a href="edit.php?id=<?= $result['fruit_id']?>" class="btn btn-warning">EDIT</a>
                            <a href="delete.php?id=<?= $result['fruit_id']?>" class="btn btn-danger">DELETE</a>
                          </td>
                      </tr>
                    <?php
                      endwhile;
                    ?>

                    </tbody>
                  </table>
  




                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
<?php
  include "libraries/footer.php";
?>