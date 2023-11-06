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
            <div class="account-info shadow my-5 p-4 d-flex justify-content-center">
              <div class="image">
                <img src="./images/team-image-5.webp" class="img-fluid" alt="no-img">
              </div>
              <div class="profile-inf-right">
                <h4 class="mb-2 ms-5">Towhid Zaman</h4>
                <div class="info-meta d-flex align-items-center ms-5 gap-2 gap-md-4 fs-xs flex-wrap">
                  <span>
                    <i class="fa-solid fa-location-pin me-2"></i>
                    Rupnagar, Mirpur, Dhaka
                  </span>
                  <span>
                    <i class="fa-solid fa-phone me-2"></i>
                    +880 123456879
                  </span>
                  <span>
                    <i class="fa-solid fa-envelope me-2"></i>
                    towhid@foodpark.com
                  </span>
                </div>
                <div class="profile-achievements d-flex align-items-center flex-wrap mt-4">
                  <div class="achievement-box d-flex align-items-center gap-3">
                    <span class="icon d-inline-flex align-items-center justify-content-center flex-shrink-0 bg-color-1 rounded-3">
                      <img src="./images/shopping-bag.png" alt="no-img">
                    </span>
                    <div>
                      <h4 class="cmn-label mb-1">4k+</h4>
                      <span>Total Order</span>
                    </div>
                  </div>
                  <div class="achievement-box d-flex align-items-center gap-3">
                    <span class="icon bg-color-2 d-inline-flex align-items-center justify-content-center flex-shrink-0 bg-color-1 rounded-3">
                      <img src="./images/recycle.png" alt="no-img">
                    </span>
                    <div>
                      <h4 class="cmn-label mb-1">10+</h4>
                      <span>Order Processing</span>
                    </div>
                  </div>
                  <div class="achievement-box d-flex align-items-center gap-3">
                    <span class="icon bg-color-3 d-inline-flex align-items-center justify-content-center flex-shrink-0 bg-color-1 rounded-3">
                      <img src="./images/delivered.png" alt="no-img">
                    </span>
                    <div>
                      <h4 class="cmn-label mb-1">3.5k+</h4>
                      <span>Total Delivered</span>
                    </div>
                  </div>
                  <div class="achievement-box d-flex align-items-center gap-3">
                    <span class="icon bg-color-4 d-inline-flex align-items-center justify-content-center flex-shrink-0 bg-color-1 rounded-3">
                      <img src="./images/deadline.png" alt="no-img">
                    </span>
                    <div>
                      <h4 class="cmn-label mb-1">25+</h4>
                      <span>Pending Orders</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row pb-5">
          <div class="col-xl-3">
            <div class="account-nav bg-white rounded py-5">
              <h6 class="mb-4 px-4 cmn-label">Manage My Account</h6>
              <ul class="nav nav-tabs border-0 d-block account-nav-menu" role="tablist">
                <li>
                  <a href="#dashboard" data-bs-toggle="tab" class="active" aria-selected="true" role="tab">
                    <span class="me-2">
                      <img src="./images/menu (2).png" alt="no-img">
                    </span>
                    Dashboard
                  </a>
                </li>
                <li>
                  <a href="#order-history" data-bs-toggle="tab" aria-selected="false" role="tab" class="" tabindex="-1">
                    <span class="me-2">
                      <img src="./images/menu (1).png" alt="no-img">
                    </span>
                    Order History
                  </a>
                </li>
                <!-- <li>
                  <a href="#address-book" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
                    <span class="me-2">
                      <img src="./images/menu.png" alt="no-img">
                    </span>
                    Address Book
                  </a>
                </li> -->
                <li>
                  <a href="#payments" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
                    <span class="me-2">
                      <img src="./images/menu.png" alt="no-img">
                    </span>
                    Payment Methods
                  </a>
                </li>
                <li>
                  <a href="#update-profile" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
                    <span class="me-2">
                      <img src="./images/menu.png" alt="no-img">
                    </span>
                    Updated Profile
                  </a>
                </li>
                <li>
                  <a href="#order-tracking" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
                    <span class="me-2">
                      <img src="./images/menu.png" alt="no-img">
                    </span>
                    Order Tracking
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="me-2">
                      <img src="./images/menu.png" alt="no-img">
                    </span>
                    Log out
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-9">
            <div class="tab-content">
              <div class="tab-pane fade active show" id="dashboard" role="tabpanel">
                <div class="address-book bg-white rounded p-5">
                  <div class="row g-6">
                    <div class="col-md-6">
                      <div class="address-book-content pe-md-4 border-right position-relative">
                        <div class="d-flex align-items-center gap-5 mb-4">
                          <h6 class="mb-0 cmn-label">Address Book</h6>
                          <a href="#">Edit</a>
                        </div>
                        <p class="text-uppercase fw-medium mb-3">
                          Default Shipping Address
                        </p>
                        <div class="address">
                          <p class="text-dark cmn-label mb-1">Towhid Zaman</p>
                          <p class="mb-0">
                            Rupnagar, Mirpur, Dhaka.
                            <br>
                            (+880) 1633082302
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 align-self-end">
                      <div class="address-book-content ps-md-4">
                        <p class="text-uppercase fw-medium mb-3">
                          Default Billing Address
                        </p>
                        <div class="address">
                          <p class="text-dark cmn-label mb-1">Towhid Zaman</p>
                          <p class="mb-0">
                            Rupnagar, Mirpur, Dhaka.
                            <br>
                            (+880) 1633082302
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade " id="order-history" role="tabpanel">
                <div class="recent-orders bg-white rounded py-5">
                  <h6 class="mb-4 px-4 cmn-label">Recent Orders</h6>
                  <div class="table-responsive">
                    <table class="order-history-table table">
                      <tbody>
                        <tr>
                          <th>Order Number</th>
                          <th>Placed on</th>
                          <th>Method</th>
                          <th>Items</th>
                          <th>Total</th>
                          <th class="text-center">Action</th>
                        </tr>
                        <tr>
                          <td>635981586200289</td>
                          <td>03/12/2022</td>
                          <td>COD</td>
                          <td class="thumbnail">
                            <img src="./images/pr-3.png" alt="product">
                          </td>
                          <td class="text-secondary">$105.60</td>
                          <td class="text-center">
                            <a href="invoice.php" class="view-invoice fs-xs">
                              <i class="fas fa-eye"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>635981586200289</td>
                          <td>03/12/2022</td>
                          <td>COD</td>
                          <td class="thumbnail">
                            <img src="./images/pr-3.png" alt="product">
                          </td>
                          <td class="text-secondary">$105.60</td>
                          <td class="text-center">
                            <a href="invoice.php" class="view-invoice fs-xs">
                              <i class="fas fa-eye"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>635981586200289</td>
                          <td>03/12/2022</td>
                          <td>COD</td>
                          <td class="thumbnail">
                            <img src="./images/pr-3.png" alt="product">
                          </td>
                          <td class="text-secondary">$105.60</td>
                          <td class="text-center">
                            <a href="invoice.php" class="view-invoice fs-xs">
                              <i class="fas fa-eye"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>635981586200289</td>
                          <td>03/12/2022</td>
                          <td>COD</td>
                          <td class="thumbnail">
                            <img src="./images/pr-3.png" alt="product">
                          </td>
                          <td class="text-secondary">$105.60</td>
                          <td class="text-center">
                            <a href="invoice.php" class="view-invoice fs-xs">
                              <i class="fas fa-eye"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>635981586200289</td>
                          <td>03/12/2022</td>
                          <td>COD</td>
                          <td class="thumbnail">
                            <img src="./images/pr-3.png" alt="product">
                          </td>
                          <td class="text-secondary">$105.60</td>
                          <td class="text-center">
                            <a href="invoice.php" class="view-invoice fs-xs">
                              <i class="fas fa-eye"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>635981586200289</td>
                          <td>03/12/2022</td>
                          <td>COD</td>
                          <td class="thumbnail">
                            <img src="./images/pr-3.png" alt="product">
                          </td>
                          <td class="text-secondary">$105.60</td>
                          <td class="text-center">
                            <a href="invoice.php" class="view-invoice fs-xs">
                              <i class="fas fa-eye"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>635981586200289</td>
                          <td>03/12/2022</td>
                          <td>COD</td>
                          <td class="thumbnail">
                            <img src="./images/pr-3.png" alt="product">
                          </td>
                          <td class="text-secondary">$105.60</td>
                          <td class="text-center">
                            <a href="invoice.php" class="view-invoice fs-xs">
                              <i class="fas fa-eye"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>635981586200289</td>
                          <td>03/12/2022</td>
                          <td>COD</td>
                          <td class="thumbnail">
                            <img src="./images/pr-3.png" alt="product">
                          </td>
                          <td class="text-secondary">$105.60</td>
                          <td class="text-center">
                            <a href="invoice.php" class="view-invoice fs-xs">
                              <i class="fas fa-eye"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>635981586200289</td>
                          <td>03/12/2022</td>
                          <td>COD</td>
                          <td class="thumbnail">
                            <img src="./images/pr-3.png" alt="product">
                          </td>
                          <td class="text-secondary">$105.60</td>
                          <td class="text-center">
                            <a href="invoice.php" class="view-invoice fs-xs">
                              <i class="fas fa-eye"></i>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- <div class="tab-pane fade" id="address-book" role="tabpanel">
                <div class="address-book bg-white rounded p-5">
                  <div class="row g-6">
                    <div class="col-md-6">
                      <div class="address-book-content pe-md-4 border-right position-relative">
                        <div class="d-flex align-items-center gap-5 mb-4">
                          <h6 class="mb-0">Address Book</h6>
                          <a href="#">Edit</a>
                        </div>
                        <p class="text-uppercase fw-medium mb-3">
                          Default Shipping Address
                        </p>
                        <div class="address">
                          <p class="text-dark fw-bold mb-1">Saiful Talukdar</p>
                          <p class="mb-0">
                            Ghunshe, Muksudpur Dhaka - Gopalganj.
                            <br>
                            (+880) 1633082302
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 align-self-end">
                      <div class="address-book-content ps-md-4">
                        <p class="text-uppercase fw-medium mb-3">
                          Default Billing Address
                        </p>
                        <div class="address">
                          <p class="text-dark fw-bold mb-1">Saiful Talukdar</p>
                          <p class="mb-0">
                            Ghunshe, Muksudpur Dhaka - Gopalganj.
                            <br>
                            (+880) 1633082302
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <div class="tab-pane fade" id="payments" role="tabpanel">
                <div class="payment-methods bg-white rounded py-5 px-4">
                  <h6 class="mb-4 cmn-label">Default Payment Methods</h6>
                  <div class="table-responsive">
                    <table class="payments-list-table table">
                      <tbody>
                        <tr>
                          <th>Credit / Debit cards info</th>
                          <th>Name</th>
                          <th>Expires on</th>
                          <th class="text-center">Action</th>
                        </tr>
                        <tr>
                          <td class="d-flex align-items-center gap-3">
                            <span class="icon d-inline-flex align-items-center justify-content-center rounded-circle">
                              <img src="./images/banking.png" alt="icon">
                            </span>
                            <p class="d-inline-block mb-0">
                            <p class="cmn-label">Card</p>
                            youremail@domain.com
                            <span class="badge bg-secondary-light  fw-normal ms-1">
                              Active
                            </span>
                            </p>
                          </td>
                          <td>Talukdar</td>
                          <td>25/2024</td>
                          <td class="text-center">
                            <a href="#" class="view-more">
                              <i class="fas fa-eye"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td class="d-flex align-items-center gap-3">
                            <span class="icon d-inline-flex align-items-center justify-content-center rounded-circle">
                              <img src="./images/bKash.png" alt="icon">
                            </span>
                            <p class="d-inline-block mb-0">
                            <p class="cmn-label">bKash</p>
                            youremail@domain.com
                            </p>
                          </td>
                          <td>Talukdar</td>
                          <td>25/2024</td>
                          <td class="text-center">
                            <a href="#" class="view-more">
                              <i class="fas fa-eye"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td class="d-flex align-items-center gap-3">
                            <span class="icon d-inline-flex align-items-center justify-content-center rounded-circle">
                              <img src="./images/nagad.png" alt="icon">
                            </span>
                            <p class="d-inline-block mb-0">
                            <p class="cmn-label">Nagad</p>
                            youremail@domain.com
                            </p>
                          </td>
                          <td>Talukdar</td>
                          <td>25/2024</td>
                          <td class="text-center">
                            <a href="#" class="view-more">
                              <i class="fas fa-eye"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td class="d-flex align-items-center gap-3">
                            <span class="icon d-inline-flex align-items-center justify-content-center rounded-circle">
                              <img src="./images/rocket.PNG" alt="icon">
                            </span>
                            <p class="d-inline-block mb-0">
                            <p class="cmn-label">Rocket</p>
                            youremail@domain.com
                            </p>
                          </td>
                          <td>Talukdar</td>
                          <td>25/2024</td>
                          <td class="text-center">
                            <a href="#" class="view-more">
                              <i class="fas fa-eye"></i>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <a href="#" class="cmn-btn mt-4">
                    <i class="fas fa-plus"></i>
                    Add Payment
                  </a>
                </div>
              </div>
              <div class="tab-pane fade" id="update-profile" role="tabpanel">
                <div class="update-profile bg-white py-5 px-4">
                  <h6 class="mb-4 cmn-label">Update Profile</h6>
                  <form class="profile-form">
                    <div class="file-upload text-center rounded-3 mb-5">
                      <input type="file" name="dp">
                      <img src="./images/upload-icon.svg" alt="dp" class="img-fluid">
                      <p class="text-dark cmn-label mb-2 mt-3">
                        Drop your files here or
                        <a href="#" class="text-primary">browse</a>
                      </p>
                      <p class="mb-0 file-name">
                        (Only *.jpeg and *.png images will be accepted)
                      </p>
                    </div>
                    <div class="row g-4">
                      <div class="col-sm-6">
                        <div class="label-input-field">
                          <label>First Name</label>
                          <input type="text" placeholder="Gene J.">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="label-input-field">
                          <label>Last Name</label>
                          <input type="text" placeholder="Larose">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="label-input-field">
                          <label>Phone/Mobile</label>
                          <input type="tel">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="label-input-field">
                          <label>Email Address</label>
                          <input type="email" placeholder="themetags@gmail.com">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="label-input-field">
                          <label>Birthday</label>
                          <input type="date">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="label-input-field">
                          <label>User Name</label>
                          <input type="text" placeholder="Username">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="cmn-btn mt-3">
                      Update Profile
                    </button>
                  </form>
                </div>
                <div class="change-password bg-white py-5 px-4 mt-4 rounded">
                  <h6 class="mb-4 cmn-label">Change Password</h6>
                  <form class="password-reset-form">
                    <div class="row g-4">
                      <div class="col-sm-6">
                        <div class="label-input-field">
                          <label>Email Address</label>
                          <input type="email" placeholder="themetags@gmail.com">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="label-input-field">
                          <label>Current Password</label>
                          <input type="password" placeholder="Current password">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="label-input-field">
                          <label>New Password</label>
                          <input type="password" placeholder="New password">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="label-input-field">
                          <label>Re-type Password</label>
                          <input type="password" placeholder="Confirm password">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="cmn-btn mt-3">
                      Change Password
                    </button>
                  </form>
                </div>
              </div>
              <div class="tab-pane fade" id="order-tracking" role="tabpanel">
                <div class="order-tracking-wrap bg-white rounded py-5 px-4">
                  <h6 class="mb-4 cmn-label">Order Tracking</h6>
                  <ol id="progress-bar">
                    <li class="fs-xs tt-step tt-step-done">Pending</li>
                    <li class="fs-xs tt-step tt-step-done">Processing</li>
                    <li class="fs-xs tt-step active">On the Way</li>
                    <li class="fs-xs tt-step">Delivered</li>
                  </ol>
                  <div class="table-responsive-md mt-5">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th class="cmn-label" scope="col">Date &amp; Time</th>
                          <th class="cmn-label" scope="col">Status Info</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> 14 Feb 2023 - 13:19 </td>
                          <td>Your package has been delivered. Thank
                            you for shopping at Grostore!</td>
                        </tr>
                        <tr>
                          <td> 13 Feb 2023 - 13:39</td>
                          <td>Your package has been handed over to
                            Grostore Delivery.</td>
                        </tr>
                        <tr>
                          <td> 12 Feb 2023 - 14:50</td>
                          <td>Your package has been packed and is
                            being handed over to a logistics partner</td>
                        </tr>
                        <tr>
                          <td>12 Feb 2023 - 13:05</td>
                          <td>Your order has been successfully
                            verified.</td>
                        </tr>
                        <tr>
                          <td>12 Feb 2023 - 13:05</td>
                          <td>Thank you for shopping at GroStore! Your
                            order is being verified.</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
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