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

  <!-- header & navbar part start -->
  <?php
  include("layout/header.php");
  ?>
  <!-- heade & navbar part end -->

  <!-- breadcrumb part start -->
  <!-- breadcrumb part end -->

  <!-- checkout part start -->
  <div class="wrapper">
    <section class="checkout pt-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="isCustomer">
              <h3>Running Customer? <a href="#">Click here to login</a></h3>
            </div>
            <div class="haveCoupon">
              <h3>Have a Coupon? <a href="#">Click here to enter your code</a></h3>
            </div>

            <div class="title2">
              <h2>Billing Information</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="billing-section">
              <form action="#">
                <h6>Personal Information</h6>
                <div class="row">
                  <div class="col-md-12">
                    <div class="input-item input-item-name">
                      <input type="text" name="fname" placeholder="your name">
                      <i class="fa-solid fa-user"></i>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="input-item input-item-email">
                      <input type="email" name="email" placeholder="email address">
                      <i class="fa-solid fa-envelope"></i>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="input-item input-item-phone">
                      <input type="text" name="phone" placeholder="phone number">
                      <i class="fa-solid fa-phone"></i>
                    </div>
                  </div>
                </div>
                <!-- <div class="row">
                  <div class="col-lg-4 col-md-6">
                    <h6>Country</h6>
                    <div class="input-item">
                      <select class="nice-select">
                        <option>Select Country</option>
                        <option>Australia</option>
                        <option>Canada</option>
                        <option>China</option>
                        <option>Morocco</option>
                        <option>Saudi Arabia</option>
                        <option>United Kingdom (UK)</option>
                        <option>United States (US)</option>
                      </select>
                    </div>
                  </div> -->
                <div class="col-lg-12 col-md-12">
                  <h6>Address</h6>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="input-item">
                        <input type="text" placeholder="House number and street name">
                      </div>
                    </div>
                    <!-- <div class="col-md-12">
                      <div class="input-item">
                        <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                      </div>
                    </div> -->
                  </div>
                </div>
                <!-- <div class="col-lg-4 col-md-6">
                  <h6>Town / City</h6>
                  <div class="input-item">
                    <input type="text" placeholder="City">
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <h6>State </h6>
                  <div class="input-item">
                    <input type="text" placeholder="State">
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <h6>Zip</h6>
                  <div class="input-item">
                    <input type="text" placeholder="Zip">
                  </div>
                </div> -->
                <p class="pb-4"><label class="input-info-save mb-0"><input type="checkbox" name="agree"> Create an account?</label></p>
                <h6>Order Notes (optional)</h6>
                <div class="input-item input-item-textarea">
                  <i class="fa-solid fa-pencil"></i>
                  <textarea name="message" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                </div>
              </form>
            </div>
            <div class="payment-note mt-5 mb-3">
              <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
            </div>
            <div class="checkout-bill">
              <a class="call-btn" href="invoice.php">Place Order</a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-12">
                <div class="title2">
                  <h2>Your order</h2>
                </div>
                <div class="order-table">
                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th>PRODUCT</th>
                        <th class="">TOTAL</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="prd-name">Broccoli Crowns <span>(×1)</span></td>
                        <th>$10.00</th>
                      </tr>
                      <tr>
                        <td class="prd-name">Crock Pot Slow Cooker <span>(×1)</span></td>
                        <th>$3.99</th>
                      </tr>
                      <tr>
                        <td class="prd-name">Saute Pan Silver <span>(×1)</span></td>
                        <th>$1.90</th>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Subtotal</th>
                        <th>$15.89</th>
                      </tr>
                      <tr>
                        <td>
                          <span>Shipping</span>
                          <ul>
                            <li>Flat rate</li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <th>Total</th>
                        <th class="total-price">$15.89</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="checkout-payment-method mt-50">
                  <div class="title2">
                    <h2>Payment Method</h2>
                  </div>
                  <div id="checkout_accordion_1">
                    <!-- card -->
                    <div class="card">
                      <h5 class="collapsed card-title d-flex align-items-center" data-bs-toggle="collapse" data-bs-target="#faq-item-2-4" aria-expanded="false">
                        <i data-feather="circle"></i>
                        <span>Bank</span>
                        <img src="images/banking.png" alt="#">
                      </h5>
                      <div id="faq-item-2-4" class="collapse" data-parent="#checkout_accordion_1">
                        <div class="card-body">
                          <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                        </div>
                      </div>
                    </div>
                    <!-- card -->
                    <div class="card">
                      <h5 class="card-title d-flex align-items-center" data-bs-toggle="collapse" data-bs-target="#faq-item-2-2" aria-expanded="true">
                        <i data-feather="circle"></i>
                        <i class="fa-solid fa-circle"></i>
                        <span>Cash on delivery</span> <img class="img-fluid" src="./images/taka.png" alt="#">
                      </h5>
                      <div id="faq-item-2-2" class="collapse show" data-parent="#checkout_accordion_1">
                        <div class="card-body">
                          <p>Pay with cash upon delivery.</p>
                        </div>
                      </div>
                    </div>
                    <!-- card -->
                    <div class="card">
                      <h5 class="collapsed card-title d-flex align-items-center" data-bs-toggle="collapse" data-bs-target="#faq-item-2-3" aria-expanded="false">
                        <i data-feather="circle"></i>
                        <span>Mobile Banking</span> <img src="images/bKash.png" alt="#"><img src="images/nagad.png" alt="#"><img src="images/rocket.PNG" alt="#">
                      </h5>
                      <div id="faq-item-2-3" class="collapse" data-parent="#checkout_accordion_1">
                        <div class="card-body">
                          <p>Apple Pay is the modern way to pay.</p>
                        </div>
                      </div>
                    </div>
                    <!-- card -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- checkout part end -->

  <!-- service part start -->
  <?php
  include("layout/service.php");
  ?>
  <!-- service part end -->

  <!-- footer part start -->
  <?php
  include("layout/footer.php");
  ?>
  <!-- footer part end -->

  <!-- all js file -->
  <script src="js/jquery-1.12.4.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/feather.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/script.js"></script>
  <!-- all js file -->
</body>

</html>