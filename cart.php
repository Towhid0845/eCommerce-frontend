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

  <!-- cart page part start -->
  <section class="wishlist cart">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wishlist-header text-center">
            <h1>Cart</h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="wishlist-body">
            <div class="product-remove-msg">
              <p>
                <i class="bi bi-check2-circle"></i>
                “Bar S - Classic Bun Length Franks” removed.
                <span class="undo">Undo?</span>
              </p>
            </div>

            <!-- <div class="mobile-product-list d-block d-lg-none">
              <div class="mobile-product-list-item d-flex">
                <div class="image">
                  <a href="#">
                    <img src="images/pr-1.png" alt="cart-product-image-1" class="img-fluid" width="70">
                  </a>
                </div>
                <div class="text ms-4">
                  <a href="#">Häagen-Dazs Salted Caramel</a>
                  <ul>
                    <li class="cart-product-info">1.5kg</li>
                    <li class="cart-product-info">
                      Vendor:
                      <span>Farmart</span>
                    </li>
                  </ul>
                  <h6>
                    Price:
                    <span>$11.57</span>
                  </h6>
                  <div class="quantitys d-flex justify-content-between">
                    <div>
                      <i class="bi bi-dash-lg"></i>
                    </div>
                    <div>0</div>
                    <div>
                      <i class="bi bi-plus-lg"></i>
                    </div>
                  </div>
                  <h5>
                    Total: <span>$13.80</span>
                  </h5>
                </div>
                <div class="delete-btn text-end">
                  <i class="bi bi-trash3"></i>
                </div>
              </div>
              <div class="mobile-product-list-item d-flex">
                <div class="image">
                  <a href="#">
                    <img src="images/pr-2.png" alt="cart-product-image-2" class="img-fluid" width="70">
                  </a>
                </div>
                <div class="text ms-4">
                  <a href="#">Häagen-Dazs Salted Caramel</a>
                  <ul>
                    <li class="cart-product-info">1.5kg</li>
                    <li class="cart-product-info">
                      Vendor:
                      <span>Farmart</span>
                    </li>
                  </ul>
                  <h6>
                    Price:
                    <span>$11.57</span>
                  </h6>
                  <div class="quantitys d-flex justify-content-between">
                    <div>
                      <i class="bi bi-dash-lg"></i>
                    </div>
                    <div>0</div>
                    <div>
                      <i class="bi bi-plus-lg"></i>
                    </div>
                  </div>
                  <h5>
                    Total: <span>$13.80</span>
                  </h5>
                </div>
                <div class="delete-btn text-end">
                  <i class="bi bi-trash3"></i>
                </div>
              </div>
              <div class="mobile-product-list-item d-flex">
                <div class="image">
                  <a href="#">
                    <img src="images/pr-3.png" alt="cart-product-image-3" class="img-fluid" width="70">
                  </a>
                </div>
                <div class="text ms-4">
                  <a href="#">Häagen-Dazs Salted Caramel</a>
                  <ul>
                    <li class="cart-product-info">1.5kg</li>
                    <li class="cart-product-info">
                      Vendor:
                      <span>Farmart</span>
                    </li>
                  </ul>
                  <h6>
                    Price:
                    <span>$11.57</span>
                  </h6>
                  <div class="quantitys d-flex justify-content-between">
                    <div>
                      <i class="bi bi-dash-lg"></i>
                    </div>
                    <div>0</div>
                    <div>
                      <i class="bi bi-plus-lg"></i>
                    </div>
                  </div>
                  <h5>
                    Total: <span>$13.80</span>
                  </h5>
                </div>
                <div class="delete-btn text-end">
                  <i class="bi bi-trash3"></i>
                </div>
              </div>
            </div> -->


            <div class="product-table-list table-responsive d-none d-lg-block">
              <table class="table">
                <thead>
                  <tr>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th class="quantity-heading">Quantity</th>
                    <th>Total</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody style="border-top: none;">
                  <tr>
                    <td class="image">
                      <a href="#">
                        <img src="images/pr-4.png" alt="cart-product-image-1" class="img-fluid" width="70">
                      </a>
                    </td>
                    <td class="prd-name">
                      <a href="#">Häagen-Dazs Salted Caramel</a>
                      <ul>
                        <li class="cart-product-info">1.5kg</li>
                        <li class="cart-product-info">
                          Vendor:
                          <span>Farmart</span>
                        </li>
                      </ul>
                    </td>
                    <td class="unite-price">$11.57</td>
                    <td class="quantity d-flex justify-content-between">
                      <div>
                        <i class="bi bi-dash-lg"></i>
                      </div>
                      <div>0</div>
                      <div>
                        <i class="bi bi-plus-lg"></i>
                      </div>
                    </td>
                    <td class="unite-price">$11.57</td>
                    <td class="delete-prd">
                      <a href="#"><i class="bi bi-trash3"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td class="image">
                      <a href="#">
                        <img src="images/pr-5.png" alt="cart-product-image-2" class="img-fluid" width="70">
                      </a>
                    </td>
                    <td class="prd-name">
                      <a href="#">Häagen-Dazs Salted Caramel</a>
                      <ul>
                        <li class="cart-product-info">1.5kg</li>
                        <li class="cart-product-info">
                          Vendor:
                          <span>Farmart</span>
                        </li>
                      </ul>
                    </td>
                    <td class="unite-price">$11.57</td>
                    <td class="quantity d-flex justify-content-between">
                      <div>
                        <i class="bi bi-dash-lg"></i>
                      </div>
                      <div>0</div>
                      <div>
                        <i class="bi bi-plus-lg"></i>
                      </div>
                    </td>
                    <td class="unite-price">$11.57</td>
                    <td class="delete-prd">
                      <a href="#"><i class="bi bi-trash3"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td class="image">
                      <a href="#">
                        <img src="images/pr-1.png" alt="cart-product-image-3" class="img-fluid" width="70">
                      </a>
                    </td>
                    <td class="prd-name">
                      <a href="#">Häagen-Dazs Salted Caramel</a>
                      <ul>
                        <li class="cart-product-info">1.5kg</li>
                        <li class="cart-product-info">
                          Vendor:
                          <span>Farmart</span>
                        </li>
                      </ul>
                    </td>
                    <td class="unite-price">$11.57</td>
                    <td class="quantity d-flex justify-content-between">
                      <div>
                        <i class="bi bi-dash-lg"></i>
                      </div>
                      <div>0</div>
                      <div>
                        <i class="bi bi-plus-lg"></i>
                      </div>
                    </td>
                    <td class="unite-price">$11.57</td>
                    <td class="delete-prd">
                      <a href="#"><i class="bi bi-trash3"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="cart-actions mt-4 d-flex justify-content-between">
            <div class="action-left">
              <a href="shop.html" class="me-2">
                <i class="bi bi-arrow-left"></i>
                Continue Shopping
              </a>
              <a href="index.html">
                <i class="bi bi-house"></i>
                Back to Home
              </a>
            </div>
            <div class="action-right">
              <a class="call-btn" href="contact.php"><i class="bi bi-arrow-repeat"></i>Update Cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="cart-bottom-info">
        <div class="row">
          <div class="col-lg-4">
            <div class="promo-code">
              <div class="title">
                <h3>Using A Promo Code?</h3>
                <form action="#">
                  <div class="input-groups position-relative">
                    <input type="text" placeholder="Coupon code" class="form-control shadow-none">
                    <button type="submit" class="btn shadow-none position-absolute top-0 end-0">Apply</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="shipping">
              <div class="title">
                <h3>Calculate shipping</h3>
              </div>
              <form action="#">
                <div class="input-groups">
                  <select class="nice-select mb-3">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="input-groups">
                  <select class="nice-select mb-3" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="input-groups mb-3">
                  <input type="text" placeholder="Town / City" class="form-control shadow-none">
                </div>
                <div class="input-groups mb-3">
                  <input type="text" placeholder="Zip Code" class="form-control shadow-none">
                </div>
                <button type="submit" class="call-btn">Update</button>
              </form>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="subtotal">
              <table class="table table-borderless">
                <tbody>
                  <tr>
                    <th>Subtotal</th>
                    <th class="text-end">$15.89</th>
                  </tr>
                  <tr>
                    <td>
                      <span>Shipping</span>
                      <ul>
                        <li>Flat rate</li>
                      </ul>
                      <p>Shipping to <strong>NY.</strong></p>
                    </td>
                  </tr>
                  <tr>
                    <th>Total</th>
                    <th class="text-end total-price">$15.89</th>
                  </tr>
                </tbody>
              </table>
              <button type="submit" class="btn w-100 shadow-none">Proceed to checkout
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- cart page part end -->

  <!-- service part start -->
  <div class="serviceFooter">
    <?php
    include("layout/service.php");
    ?>
  </div>
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