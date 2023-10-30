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

  <!-- login -->
  <section class="login-section py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-12 login-img" style="background-image: url(./images/signup.jpg);"></div>

        <div class="col-lg-5 col-12 bg-white d-flex p-0 shadow">
          <form class="login-form-wrap p-3 p-md-6 p-lg-6 w-100">
            <div class="text-center mb-4">
              <a href="index.php"><img src="./images/logo.png" alt="logo"></a>
            </div>
            <h4 class="mb-3">Hey there!<br>Welcome back <span>FoodPark</span>.</h4>
            <div class="row g-3">
              <div class="col-sm-12">
                <label class="fw-bold text-dark fs-sm mb-1">Email</label>
                <div class="input-field">
                  <input type="text" placeholder="First name" class="auth-input">
                </div>
              </div>
              <div class="col-sm-12">
                <label class="fw-bold text-dark fs-sm mb-1">Password</label>
                <div class="input-field check-password">
                  <input type="password" placeholder="Password" class="auth-input">
                  <span class="eye eye-icon"><i class="fa-solid fa-eye"></i></span>
                  <span class="eye eye-slash"><i class="fa-solid fa-eye-slash"></i></span>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-between mt-4">
                <div class="checkbox d-inline-flex align-items-center gap-2">
                  <div class="login-checkbox flex-shrink-0">
                    <input type="checkbox" id="save-password">
                    <!-- <span class="checkbox-field">
                      <i class="fa-solid fa-check"></i>
                    </span> -->
                  </div>
                  <label class="save-password fs-sm">Remember for 30 days</label>
                </div>
                <a href="forgot-password.php" class="fs-sm">Forgot Password</a>
              </div>
            </div>
            <div class="row g-4 mt-4">
              <div class="col-sm-6">
                <button type="submit" class="create-btn w-100">Sign In</button>
              </div>
              <div class="col-sm-6">
                <a href="#" class="google-btn w-100"><img src="./images/google.png" alt="google" class="me-2">Sign In with Google</a>
              </div>
            </div>
            <p class="mb-0 fs-xs mt-4">Don't have an Account? <a href="signup.php">Sign Up</a></p>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- login -->

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