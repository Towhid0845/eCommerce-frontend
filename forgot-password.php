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

  <!-- category -->
  <section class="login-section py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-12 login-img" style="background-image: url(./images/signup.jpg);"></div>

        <div class="col-lg-5 col-12 bg-white d-flex p-0 shadow">
          <form class="login-form-wrap p-3 p-md-6 p-lg-6 w-100">
            <div class="text-center mb-4">
              <a href="index.php"><img src="./images/logo.png" alt="logo"></a>
            </div>
            <h4 class="mb-3 text-center">Provide Your Mail</h4>
            <p class="py-3">We will send you a mail to reset your password</p>
            <div class="row g-3">
              <div class="col-sm-12">
                <div class="input-field">
                  <input type="email" placeholder="Email address" class="auth-input">
                </div>
              </div>
            </div>
            <div class="row g-4 mt-4 justify-content-center">
              <div class="col-sm-7">
                <button type="submit" class="create-btn w-100">Submit</button>
              </div>
              <div class="col-sm-7">
                <a href="#" class="google-btn w-100">Cancel</a>
              </div>
            </div>
            <p class="mb-0 fs-xs mt-4 text-center">If you remember your password, <a href="login.php" class="text-dark">Sing In here</a></p>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- category -->

  <!-- footer part start -->
  <?php
  include("layout/footer.php");
  ?>
  <!-- footer part end -->


  <!-- all js file -->
  <script src="js/jquery-1.12.4.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/price_range.js"></script>
  <script src="js/feather.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/script.js"></script>
  <!-- all js file -->
</body>

</html>