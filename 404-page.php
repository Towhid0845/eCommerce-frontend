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

    <!-- 404 section start -->
    <section class="section-404 position-relative overflow-hidden z-1 py-5">
        <img src="images/apple.png" alt="frame circle" class="position-absolute z--1 frame-circle d-none d-sm-block">
        <img src="images/cabbage.png" alt="cauliflower" class="position-absolute cauliflower z--1 d-none d-sm-block">
        <img src="images/pineapple.png" alt="leaf" class="position-absolute leaf z--1 d-none d-sm-block">
        <img src="images/carrot.png" alt="pata" class="position-absolute pata z--1 d-none d-sm-block">
        <img src="images/cabbage.png" alt="tomato" class="position-absolute tomato-half z--1 d-none d-sm-block">
        <img src="images/mango.png" alt="garlic" class="position-absolute garlic-white z--1 d-none d-sm-block">
        <img src="images/cashew.png" alt="tomato" class="position-absolute tomato-slice z--1 d-none d-sm-block">
        <img src="images/almond.png" alt="tomato" class="position-absolute onion z--1 d-none d-sm-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="content-404 text-center">
                        <img src="images/404.png" alt="not found" class="img-fluid">
                        <h2 class="mt-4 fw-bold">Sorry, Something Went Wrong</h2>
                        <p class="mb-4">The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
                        <a href="index.php" class="cmn-btn">Back to Home Page</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 404 section end -->


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