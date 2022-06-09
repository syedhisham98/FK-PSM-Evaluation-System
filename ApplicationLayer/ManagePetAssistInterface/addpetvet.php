<?php
require_once '../../BusinessServiceLayer/controller/petController.php';
session_start();

$petvet = new petvetController();
if (!isset($_SESSION['username'])) {
  $message = "You must log in first";
  header('refresh:5; url=login.php');
  echo "<script type='text/javascript'>alert('$message');
  window.location = '../view';</script>";
}

if(isset($_POST['add'])){
  $petvet->add();
}

?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<?php include"../../includes/head.php";?>
<style>
input {
  border-style: solid;
  border-color: grey;
}
</style>

<body>


  <div class="wrapper" id="wrapper">
    <?php 
    include "../../includes/header.php";
    ?>


  </div>
  <section class="type__category__area bg--white section-padding--lg">
    <div style="background-image: url('../../images/h2.jpg');">
    <div class="wrapper wrapper--w790">
      <div class="card card-5">
        <div class="card-heading">
          <h2 class="title">Add Pet Veterinary Service</h2>
        </div>
        <div class="card-body">
          <form action="" method="POST">
            <div class='form-row'>
              <div class='name'>Name: </div>
              <div class='value'>
                <div class='input-group'>
                  <input type="text" name="name" class="input--style-5" required>
                </div>
              </div>
            </div>
            <div class='form-row'>
              <div class='name'>Details: </div>
              <div class='value'>
                <div class='input-group'>
                  <input type="text" name="details" class="input--style-5" required>
                </div>
              </div>
            </div>
            <div class='form-row'>
              <div class='name'>Quantity: </div>
              <div class='value'>
                <div class='input-group'>
                  <input type="text" name="quantity" class="input--style-5" required>
                </div>
              </div>
            </div>
            <div class='form-row'>
              <div class='name'>Price: </div>
              <div class='value'>
                <div class='input-group'>
                  <input type="text" name="price" class="input--style-5" required>
                </div>
              </div>
            </div>
            <div class='form-row'>
              <div class='name'>Image: </div>
              <div class='value'>
                <div class='input-group'>
                  <input type="file" name="image" class="input--style-5" required>
                </div>
              </div>
            </div>
            <div>
              <center>
                <button class="btn btn--radius-2 btn--red" type="submit" name="add" value="ADD"> Add</button>
                <button class="btn btn--radius-2 btn--red" type="submit" name="reset" value="Reset"> Reset</button>
              </center>
            </div>
          </form>
      </center>
    </section>
<?php
include "../../includes/footer.php";
?>


</div><!-- //Main wrapper -->
<!-- JS Files -->
<script src="js/vendor/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/active.js"></script>


</body>
</html>
