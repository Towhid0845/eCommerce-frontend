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

  <!-- signup -->
  <section class="login-section py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-12 login-img" style="background-image: url(./images/signup.jpg);"></div>

        <div class="col-lg-5 col-12 bg-white d-flex p-0 shadow">
          <form class="login-form-wrap px-3 py-5 w-100">
            <div class="text-center mb-4">
              <a href="index.php"><img src="./images/logo.png" alt="logo"></a>
            </div>
            <h4 class="mb-3 text-center">Get started absolutely free</h4>
            <p class="fs-xs">Already have an account? <a href="login.php" class="text-secondary">Sign in</a></p>
            <div class="row g-3">
              <div class="col-sm-6">
                <div class="input-field">
                  <input type="text" placeholder="First name" class="auth-input">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="input-field">
                  <input type="text" placeholder="Last name" class="auth-input">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="input-field">
                  <input type="email" placeholder="Email address" class="auth-input">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="input-field check-password">
                  <input type="password" placeholder="Password" class="auth-input">
                  <span class="eye eye-icon"><i class="fa-solid fa-eye"></i></span>
                  <span class="eye eye-slash"><i class="fa-solid fa-eye-slash"></i></span>
                </div>
              </div>
            </div>
            <div class="row g-4 mt-4">
              <div class="col-sm-6">
                <button type="submit" class="create-btn w-100">Sign Up</button>
              </div>
              <div class="col-sm-6">
                <a href="#" class="google-btn w-100"><img src="./images/google.png" alt="google" class="me-2">Sign Up with Google</a>
              </div>
            </div>
            <p class="mb-0 fs-xs mt-4 text-center">By signing up, I agree to <a href="#" class="text-dark">Terms of Use and Privacy Policy</a></p>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- signup -->

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