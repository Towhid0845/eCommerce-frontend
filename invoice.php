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


    <!-- invoice section start -->
    <section class="invoice-section py-5">
        <div class="container">
            <div class="invoice-box bg-white rounded p-4 p-sm-6">
                <div class="row g-5 justify-content-between">
                    <div class="col-lg-6">
                        <div class="common-title d-flex align-items-center">
                            <h2>Invoice</h2>
                            <span class="badge rounded-pill fw-medium ms-3">Delivered</span>
                        </div>
                        <table class="invoice-table-sm mt-4">
                            <tr>
                                <td><strong>Invoice No</strong></td>
                                <td>#INV-000414</td>
                            </tr>
                            <tr>
                                <td><strong>Shipment ID</strong></td>
                                <td>#INV-000414</td>
                            </tr>
                            <tr>
                                <td><strong>Date</strong></td>
                                <td>30 October, 2023</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-5 col-md-8">
                        <div class="text-end invoice-right">
                            <a href="#"><img src="images/logo.png" alt="logo" class="img-fluid"></a>
                            <h5 class="mb-0 mt-4">House-11, Road-8, Niketan, Gulshan 1, Dhaka 1212</h5>
                        </div>
                    </div>
                </div>
                <span class="my-4 w-100 d-block border-top"></span>
                <div class="row justify-content-between g-5">
                    <div class="col-xl-8 col-lg-7">
                        <div class="welcome-message">
                            <h4 class="mb-2 fw-bold">Dear Chris Gayle</h4>
                            <p class="mb-0">Here are your order details. We thank you for your purchase.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="shipping-address">
                            <h5 class="mb-2 fw-bold">Shipping Address</h5>
                            <p class="mb-0">Flat-A1, Floor-3, House 12, Road-5, Dhaka 1212, Bangladesh.</p>
                        </div>
                    </div>
                </div>
                <div class="table-responsive mt-4">
                    <table class="table invoice-table">
                        <tr>
                            <th>SR.</th>
                            <th>Products</th>
                            <th>SKU</th>
                            <th>QTY</th>
                            <th>Item Price</th>
                            <th>Amount</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="text-nowrap">
                                <img src="./images/pr-1.png" alt="product" class="img-fluid">
                                <span class="ms-2">Strawberry Green Magnetic </span>
                            </td>
                            <td>04928001</td>
                            <td>02</td>
                            <td>৳240.00</td>
                            <td>৳480.00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="text-nowrap">
                                <img src="./images/pr-2.png" alt="product" class="img-fluid">
                                <span class="ms-2">Strawberry Green Magnetic </span>
                            </td>
                            <td>04928001</td>
                            <td>02</td>
                            <td>৳240.00</td>
                            <td>৳480.00</td>
                        </tr>
                    </table>
                </div>
                <div class="mt-4 table-responsive">
                    <table class="table footer-table">
                        <tr>
                            <td>
                                <strong class="text-dark d-block text-nowrap">Payment Method</strong>
                                <span>bkash</span>
                            </td>
                            <td>
                                <strong class="text-dark d-block text-nowrap">Shipping Cost</strong>
                                <span>৳60.00</span>
                            </td>
                            <td>
                                <strong class="text-dark d-block text-nowrap">Discount</strong>
                                <span>00.00</span>
                            </td>
                            <td>
                                <strong class="text-dark d-block text-nowrap">Total Price</strong>
                                <span>৳580.00</span>
                            </td>
                            <td>
                                <strong class="text-dark d-block text-nowrap">Total Amount</strong>
                                <span class="fw-bold">৳580.00</span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="d-flex align-items-center justify-content-between pt-5">
                    <a href="#" class="cmn-btn fw-bold">Print Invoice</a>
                    <a href="#" class="cmn-btn fw-bold">Download Invoice</a>
                </div>
            </div>
        </div>
    </section>
    <!--invoice section end-->


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