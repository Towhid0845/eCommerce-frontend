<!DOCTYPE html>
<html lang="en">

<?php
include("layout/head.php");
?>

<body>
  <!-- preloader start -->
  <!-- <div class="preloader">
  <div class="lds-dual-ring"></div>
  </div> -->
  <!-- preloader end-->

  <!-- header and navbar part start -->
  <?php
  include("layout/header.php");
  ?>
  <!-- header and navbar part end -->


  <!-- deshboard section start -->
  <div class="wrapper">
    <section class="user-deshboard">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="account-info shadow my-5 p-4 d-flex">
              <div class="image">
                <img src="./images/team-image-5.webp" class="img-fluid" alt="no-img">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- deshboard section end -->



  <!-- footer part start -->
  <?php
  include("layout/footer.php");
  ?>
  <!-- footer part end -->

  <!-- all js file -->
  <script src="js/jquery-1.12.4.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/feather.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/script.js"></script>
  <!-- all js file -->
</body>

</html>