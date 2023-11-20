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
  <?php
  include("layout/breadcrump.php");
  ?>
  <!-- breadcrumb part end -->

  <!--product details start-->
  <section class="product-details-page">
    <div class="product-details-bg">
      <div class="custom-container">
        <div class="product-information-main">
          <div class="row mx-0">
            <div class="col-lg-12">
              <div class="row prd-left-details">
                <div class="col-sm-12 col-lg-10 col-xl-6 col-md-10">
                  <div class="big-side-image">
                    <img id="NZoomImg" data-NZoomscale="2" src="images/pr-2.png" alt="product-details-image-1" class="img-fluid w-100">
                  </div>
                  <p class="text-center pt-3"><i class="bi bi-zoom-in me-1"></i> Mouse over to zoom in</p>
                </div>
                <div class="col-sm-12 col-xl-6 col-md-12">
                  <div class="product-details-info">
                    <div class="prd-title">
                      <a href="#">MartFury</a>
                    </div>
                    <div class="prd-slug">
                      <h3>Soft Mochi & Galeto Ice Cream</h3>
                    </div>
                    <div class="prd-rating">
                      <ul>
                        <li>
                          <span><i class="bi bi-star-fill"></i></span>
                          <span><i class="bi bi-star-fill"></i></span>
                          <span><i class="bi bi-star-fill"></i></span>
                          <span><i class="bi bi-star-fill"></i></span>
                          <span class="no-rating"><i class="bi bi-star-fill"></i></span>
                        </li>
                        <li>(1 customer review)</li>
                      </ul>
                    </div>

                    <div class="price d-flex align-items-center">
                      <div class="new-price">
                        <p>$20.99</p>
                      </div>
                      <div class="old-price">
                        <p>$21.50</p>
                      </div>
                      <div class="stock-button">
                        <p>In stock</p>
                      </div>
                    </div>
                    <div class="title3">
                      <h3 class="fs-md mb-2 mt-3">Weight:</h3>
                    </div>
                    <ul class="product-radio-btn mb-4 d-flex align-items-center gap-2">
                      <li>
                        <input type="radio" name="weight" value="250g" checked>
                        <label>150g</label>
                      </li>
                      <li>
                        <input type="radio" name="weight" value="250g">
                        <label>500g</label>
                      </li>
                      <li>
                        <input type="radio" name="weight" value="250g">
                        <label>1kg</label>
                      </li>
                    </ul>
                    <div class="quantity">
                      <div class="quantity-main d-flex flex-wrap">
                        <div class="qnt-number me-3 py-3">
                          <ul>
                            <li><i class="bi bi-dash"></i></li>
                            <li class="mid-number">1</li>
                            <li><i class="bi bi-plus"></i></li>
                          </ul>
                        </div>
                        <div class="py-3 atoc">
                          <button class="call-btn">Add to cart</button>
                        </div>
                        <div class="order-now py-3">
                          <button class="call-btn">Order Now</button>
                        </div>
                      </div>
                    </div>
                    <div class="description">
                      <div class="title3 d-flex mt-4">
                        <h3 class="mb-1 flex-shrink-0">Description</h3>
                        <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                      </div>
                      <p class="mb-3">Clicks-and-mortar "outside the bethinking. Interactively disseminate innovative intellectual relationships. Clicks-and-mortar "outside the bethinking. Interactively disseminate innovative intellectual relationships.</p>
                      <p class="mb-3">Clicks-and-mortar "outside the bethinking. Interactively disseminate innovative intellectual relationships.</p>
                      <div class="title3 d-flex mt-4">
                        <h3 class="mb-1 flex-shrink-0">Detail Specification</h3>
                        <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                      </div>
                      <ul class="d-flex flex-column gap-2 mt-3">
                        <li><span class="me-2 text-primary"><i class="fa-solid fa-circle-check"></i></span>Natural ingredients</li>
                        <li><span class="me-2 text-primary"><i class="fa-solid fa-circle-check"></i></span>Tastes better with milk</li>
                        <li><span class="me-2 text-primary"><i class="fa-solid fa-circle-check"></i></span>Vitamins B2, B3, B5 and B6</li>
                        <li><span class="me-2 text-primary"><i class="fa-solid fa-circle-check"></i></span>Refrigerate for freshness</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="product-summery">
      <div class="custom-container">
        <div class="row">
          <div class="title pb-3">
            <h2 class="border-bottom border-secondary pb-2">You may also like</h2>
          </div>
          <div class="col-lg-12">
            <div class="row">
              <!-- previous desing start-->
              <!-- <div class="col-lg-4 col-xl-2 col-sm-6 mb-4">
                <div class="product-item text-center">
                  <div class="product-img">
                
                    <img class="img-fluid" src="./images/pr-1.png" alt="no-img">
                    
                    <div class="product-badge">
                      <ul>
                        <li class="sale-badge">-25%</li>
                      </ul>
                    </div>

                  </div>
                  <div class="product-info">
                    <div class="product-ratting">
                      <ul>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                        <li><a href="#"><i class="far fa-star"></i></a></li>
                      </ul>
                    </div>
                    <h2 class="product-title"><a href="#" tabindex="0">Orange Sliced Mix</a></h2>
                    <div class="product-price">
                      <span>$150.00</span>
                      <del>$180.00</del>
                    </div>
                    <div class="add-to-cart-1">
                      <div class="d-flex justify-content-center">
                        <button class="add-btn">
                          <span>Add</span>
                        </button>
                        <button class="plus-btn" style="margin-left: -3px;">
                          <i class="fa-solid fa-plus"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <!-- previous desing end-->

              <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
                <div class="product-item text-center">
                  <a href="product-view.php">
                    <div class="product-img">
                      <img class="img-fluid" src="./images/pr-1.png" alt="no-img">
                      <div class="product-badge">
                        <ul>
                          <li class="sale-badge">-25%</li>
                        </ul>
                      </div>
                    </div>
                  </a>
                  <div class="product-info">

                    <h2 class="product-title"><a href="#" tabindex="0">Orange Sliced Mix</a></h2>
                    <div class="product-price">
                      <span>$150.00</span>
                      <!-- <del>$180.00</del> -->
                    </div>
                    <div class="add-to-cart-1">
                      <div class="d-flex justify-content-center">
                        <button class="add-btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <span></i>View</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
                <div class="product-item text-center">
                  <a href="product-view.php">
                    <div class="product-img">
                      <img class="img-fluid" src="./images/pr-1.png" alt="no-img">
                      <div class="product-badge">
                        <ul>
                          <li class="sale-badge">-25%</li>
                        </ul>
                      </div>
                    </div>
                  </a>
                  <div class="product-info">

                    <h2 class="product-title"><a href="#" tabindex="0">Orange Sliced Mix</a></h2>
                    <div class="product-price">
                      <span>$150.00</span>
                      <!-- <del>$180.00</del> -->
                    </div>
                    <div class="add-to-cart-1">
                      <div class="d-flex justify-content-center">
                        <button class="add-btn">
                          <span></i>View</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
                <div class="product-item text-center">
                  <a href="product-view.php">
                    <div class="product-img">
                      <img class="img-fluid" src="./images/pr-1.png" alt="no-img">
                      <div class="product-badge">
                        <ul>
                          <li class="sale-badge">-25%</li>
                        </ul>
                      </div>
                    </div>
                  </a>
                  <div class="product-info">

                    <h2 class="product-title"><a href="#" tabindex="0">Orange Sliced Mix</a></h2>
                    <div class="product-price">
                      <span>$150.00</span>
                      <!-- <del>$180.00</del> -->
                    </div>
                    <div class="add-to-cart-1">
                      <div class="d-flex justify-content-center">
                        <button class="add-btn">
                          <span></i>View</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
                <div class="product-item text-center">
                  <a href="product-view.php">
                    <div class="product-img">
                      <img class="img-fluid" src="./images/pr-1.png" alt="no-img">
                      <div class="product-badge">
                        <ul>
                          <li class="sale-badge">-25%</li>
                        </ul>
                      </div>
                    </div>
                  </a>
                  <div class="product-info">

                    <h2 class="product-title"><a href="#" tabindex="0">Orange Sliced Mix</a></h2>
                    <div class="product-price">
                      <span>$150.00</span>
                      <!-- <del>$180.00</del> -->
                    </div>
                    <div class="add-to-cart-1">
                      <div class="d-flex justify-content-center">
                        <button class="add-btn">
                          <span></i>View</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
                <div class="product-item text-center">
                  <a href="product-view.php">
                    <div class="product-img">
                      <img class="img-fluid" src="./images/pr-1.png" alt="no-img">
                      <div class="product-badge">
                        <ul>
                          <li class="sale-badge">-25%</li>
                        </ul>
                      </div>
                    </div>
                  </a>
                  <div class="product-info">

                    <h2 class="product-title"><a href="#" tabindex="0">Orange Sliced Mix</a></h2>
                    <div class="product-price">
                      <span>$150.00</span>
                      <!-- <del>$180.00</del> -->
                    </div>
                    <div class="add-to-cart-1">
                      <div class="d-flex justify-content-center">
                        <button class="add-btn">
                          <span></i>View</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
                <div class="product-item text-center">
                  <a href="product-view.php">
                    <div class="product-img">
                      <img class="img-fluid" src="./images/pr-1.png" alt="no-img">
                      <div class="product-badge">
                        <ul>
                          <li class="sale-badge">-25%</li>
                        </ul>
                      </div>
                    </div>
                  </a>
                  <div class="product-info">

                    <h2 class="product-title"><a href="#" tabindex="0">Orange Sliced Mix</a></h2>
                    <div class="product-price">
                      <span>$150.00</span>
                      <!-- <del>$180.00</del> -->
                    </div>
                    <div class="add-to-cart-1">
                      <div class="d-flex justify-content-center">
                        <button class="add-btn">
                          <span></i>View</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
                <div class="product-item text-center">
                  <a href="product-view.php">
                    <div class="product-img">
                      <img class="img-fluid" src="./images/pr-1.png" alt="no-img">
                      <div class="product-badge">
                        <ul>
                          <li class="sale-badge">-25%</li>
                        </ul>
                      </div>
                    </div>
                  </a>
                  <div class="product-info">

                    <h2 class="product-title"><a href="#" tabindex="0">Orange Sliced Mix</a></h2>
                    <div class="product-price">
                      <span>$150.00</span>
                      <!-- <del>$180.00</del> -->
                    </div>
                    <div class="add-to-cart-1">
                      <div class="d-flex justify-content-center">
                        <button class="add-btn">
                          <span></i>View</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
                <div class="product-item text-center">
                  <a href="product-view.php">
                    <div class="product-img">
                      <img class="img-fluid" src="./images/pr-1.png" alt="no-img">
                      <div class="product-badge">
                        <ul>
                          <li class="sale-badge">-25%</li>
                        </ul>
                      </div>
                    </div>
                  </a>
                  <div class="product-info">

                    <h2 class="product-title"><a href="#" tabindex="0">Orange Sliced Mix</a></h2>
                    <div class="product-price">
                      <span>$150.00</span>
                      <!-- <del>$180.00</del> -->
                    </div>
                    <div class="add-to-cart-1">
                      <div class="d-flex justify-content-center">
                        <button class="add-btn">
                          <span></i>View</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
                <div class="product-item text-center">
                  <a href="product-view.php">
                    <div class="product-img">
                      <img class="img-fluid" src="./images/pr-1.png" alt="no-img">
                      <div class="product-badge">
                        <ul>
                          <li class="sale-badge">-25%</li>
                        </ul>
                      </div>
                    </div>
                  </a>
                  <div class="product-info">

                    <h2 class="product-title"><a href="#" tabindex="0">Orange Sliced Mix</a></h2>
                    <div class="product-price">
                      <span>$150.00</span>
                      <!-- <del>$180.00</del> -->
                    </div>
                    <div class="add-to-cart-1">
                      <div class="d-flex justify-content-center">
                        <button class="add-btn">
                          <span></i>View</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
                <div class="product-item text-center">
                  <a href="product-view.php">
                    <div class="product-img">
                      <img class="img-fluid" src="./images/pr-1.png" alt="no-img">
                      <div class="product-badge">
                        <ul>
                          <li class="sale-badge">-25%</li>
                        </ul>
                      </div>
                    </div>
                  </a>
                  <div class="product-info">

                    <h2 class="product-title"><a href="#" tabindex="0">Orange Sliced Mix</a></h2>
                    <div class="product-price">
                      <span>$150.00</span>
                      <!-- <del>$180.00</del> -->
                    </div>
                    <div class="add-to-cart-1">
                      <div class="d-flex justify-content-center">
                        <button class="add-btn">
                          <span></i>View</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
                <div class="product-item text-center">
                  <a href="product-view.php">
                    <div class="product-img">
                      <img class="img-fluid" src="./images/pr-1.png" alt="no-img">
                      <div class="product-badge">
                        <ul>
                          <li class="sale-badge">-25%</li>
                        </ul>
                      </div>
                    </div>
                  </a>
                  <div class="product-info">

                    <h2 class="product-title"><a href="#" tabindex="0">Orange Sliced Mix</a></h2>
                    <div class="product-price">
                      <span>$150.00</span>
                      <!-- <del>$180.00</del> -->
                    </div>
                    <div class="add-to-cart-1">
                      <div class="d-flex justify-content-center">
                        <button class="add-btn">
                          <span></i>View</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
                <div class="product-item text-center">
                  <a href="product-view.php">
                    <div class="product-img">
                      <img class="img-fluid" src="./images/pr-1.png" alt="no-img">
                      <div class="product-badge">
                        <ul>
                          <li class="sale-badge">-25%</li>
                        </ul>
                      </div>
                    </div>
                  </a>
                  <div class="product-info">

                    <h2 class="product-title"><a href="#" tabindex="0">Orange Sliced Mix</a></h2>
                    <div class="product-price">
                      <span>$150.00</span>
                      <!-- <del>$180.00</del> -->
                    </div>
                    <div class="add-to-cart-1">
                      <div class="d-flex justify-content-center">
                        <button class="add-btn">
                          <span></i>View</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade food-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Select</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body d-flex flex-wrap">
                    <div class="image">
                      <img src="./images/team-image-5.webp" alt="not found">
                    </div>
                    <div class="text">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <h3>Choose Size</h3>
                      <div class="choose d-flex flex-wrap">
                        <div class="ch-1">S</div>
                        <div class="ch-1">M</div>
                        <div class="ch-1 ch-selected">L</div>
                        <div class="ch-1">XL</div>
                        <div class="ch-1">XXL</div>
                      </div>
                      <h3>Choose Quantity</h3>
                      <div class="quantity">
                      <div class="quantity-main d-flex flex-wrap">
                        <div class="qnt-number">
                          <ul>
                            <li><i class="bi bi-dash"></i></li>
                            <li class="mid-number">1</li>
                            <li><i class="bi bi-plus"></i></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn cancel-btn me-auto" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn cart-btn"></i>View</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="col-lg-3"></div> -->
        </div>

        <div class="row mt-4">
          <div class="title pb-3">
            <h2 class="border-bottom border-secondary pb-2">People also purchased</h2>
          </div>
          <div class="col-lg-12">
            <div class="row">
              <!-- previous desing start-->
              <!-- <div class="col-lg-4 col-xl-2 col-sm-6 mb-4">
                <div class="product-item text-center">
                  <div class="product-img">
                
                    <img class="img-fluid" src="./images/pr-1.png" alt="no-img">
                    
                    <div class="product-badge">
                      <ul>
                        <li class="sale-badge">-25%</li>
                      </ul>
                    </div>

                  </div>
                  <div class="product-info">
                    <div class="product-ratting">
                      <ul>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                        <li><a href="#"><i class="far fa-star"></i></a></li>
                      </ul>
                    </div>
                    <h2 class="product-title"><a href="#" tabindex="0">Orange Sliced Mix</a></h2>
                    <div class="product-price">
                      <span>$150.00</span>
                      <del>$180.00</del>
                    </div>
                    <div class="add-to-cart-1">
                      <div class="d-flex justify-content-center">
                        <button class="add-btn">
                          <span>Add</span>
                        </button>
                        <button class="plus-btn" style="margin-left: -3px;">
                          <i class="fa-solid fa-plus"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <!-- previous desing end-->

              <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
                <div class="product-item text-center">
                  <a href="product-view.php">
                    <div class="product-img">
                      <img class="img-fluid" src="./images/pr-3.png" alt="no-img">
                      <div class="product-badge">
                        <ul>
                          <li class="sale-badge">-25%</li>
                        </ul>
                      </div>
                    </div>
                  </a>
                  <div class="product-info">

                    <h2 class="product-title"><a href="#" tabindex="0">Orange Sliced Mix</a></h2>
                    <div class="product-price">
                      <span>$150.00</span>
                      <del>$180.00</del>
                    </div>
                    <div class="add-to-cart-1">
                      <div class="d-flex justify-content-center">
                        <button class="add-btn">
                          <span></i>View</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
                <div class="product-item text-center">
                  <a href="product-view.php">
                    <div class="product-img">
                      <img class="img-fluid" src="./images/pr-3.png" alt="no-img">
                      <div class="product-badge">
                        <ul>
                          <li class="sale-badge">-25%</li>
                        </ul>
                      </div>
                    </div>
                  </a>
                  <div class="product-info">

                    <h2 class="product-title"><a href="#" tabindex="0">Orange Sliced Mix</a></h2>
                    <div class="product-price">
                      <span>$150.00</span>
                      <del>$180.00</del>
                    </div>
                    <div class="add-to-cart-1">
                      <div class="d-flex justify-content-center">
                        <button class="add-btn">
                          <span></i>View</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
                <div class="product-item text-center">
                  <a href="product-view.php">
                    <div class="product-img">
                      <img class="img-fluid" src="./images/pr-3.png" alt="no-img">
                      <div class="product-badge">
                        <ul>
                          <li class="sale-badge">-25%</li>
                        </ul>
                      </div>
                    </div>
                  </a>
                  <div class="product-info">

                    <h2 class="product-title"><a href="#" tabindex="0">Orange Sliced Mix</a></h2>
                    <div class="product-price">
                      <span>$150.00</span>
                      <del>$180.00</del>
                    </div>
                    <div class="add-to-cart-1">
                      <div class="d-flex justify-content-center">
                        <button class="add-btn">
                          <span></i>View</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
                <div class="product-item text-center">
                  <a href="product-view.php">
                    <div class="product-img">
                      <img class="img-fluid" src="./images/pr-3.png" alt="no-img">
                      <div class="product-badge">
                        <ul>
                          <li class="sale-badge">-25%</li>
                        </ul>
                      </div>
                    </div>
                  </a>
                  <div class="product-info">

                    <h2 class="product-title"><a href="#" tabindex="0">Orange Sliced Mix</a></h2>
                    <div class="product-price">
                      <span>$150.00</span>
                      <del>$180.00</del>
                    </div>
                    <div class="add-to-cart-1">
                      <div class="d-flex justify-content-center">
                        <button class="add-btn">
                          <span></i>View</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
                <div class="product-item text-center">
                  <a href="product-view.php">
                    <div class="product-img">
                      <img class="img-fluid" src="./images/pr-3.png" alt="no-img">
                      <div class="product-badge">
                        <ul>
                          <li class="sale-badge">-25%</li>
                        </ul>
                      </div>
                    </div>
                  </a>
                  <div class="product-info">

                    <h2 class="product-title"><a href="#" tabindex="0">Orange Sliced Mix</a></h2>
                    <div class="product-price">
                      <span>$150.00</span>
                      <del>$180.00</del>
                    </div>
                    <div class="add-to-cart-1">
                      <div class="d-flex justify-content-center">
                        <button class="add-btn">
                          <span></i>View</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
                <div class="product-item text-center">
                  <a href="product-view.php">
                    <div class="product-img">
                      <img class="img-fluid" src="./images/pr-3.png" alt="no-img">
                      <div class="product-badge">
                        <ul>
                          <li class="sale-badge">-25%</li>
                        </ul>
                      </div>
                    </div>
                  </a>
                  <div class="product-info">

                    <h2 class="product-title"><a href="#" tabindex="0">Orange Sliced Mix</a></h2>
                    <div class="product-price">
                      <span>$150.00</span>
                      <del>$180.00</del>
                    </div>
                    <div class="add-to-cart-1">
                      <div class="d-flex justify-content-center">
                        <button class="add-btn">
                          <span></i>View</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
                <div class="product-item text-center">
                  <a href="product-view.php">
                    <div class="product-img">
                      <img class="img-fluid" src="./images/pr-3.png" alt="no-img">
                      <div class="product-badge">
                        <ul>
                          <li class="sale-badge">-25%</li>
                        </ul>
                      </div>
                    </div>
                  </a>
                  <div class="product-info">

                    <h2 class="product-title"><a href="#" tabindex="0">Orange Sliced Mix</a></h2>
                    <div class="product-price">
                      <span>$150.00</span>
                      <del>$180.00</del>
                    </div>
                    <div class="add-to-cart-1">
                      <div class="d-flex justify-content-center">
                        <button class="add-btn">
                          <span></i>View</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
                <div class="product-item text-center">
                  <a href="product-view.php">
                    <div class="product-img">
                      <img class="img-fluid" src="./images/pr-3.png" alt="no-img">
                      <div class="product-badge">
                        <ul>
                          <li class="sale-badge">-25%</li>
                        </ul>
                      </div>
                    </div>
                  </a>
                  <div class="product-info">

                    <h2 class="product-title"><a href="#" tabindex="0">Orange Sliced Mix</a></h2>
                    <div class="product-price">
                      <span>$150.00</span>
                      <del>$180.00</del>
                    </div>
                    <div class="add-to-cart-1">
                      <div class="d-flex justify-content-center">
                        <button class="add-btn">
                          <span></i>View</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
                <div class="product-item text-center">
                  <a href="product-view.php">
                    <div class="product-img">
                      <img class="img-fluid" src="./images/pr-3.png" alt="no-img">
                      <div class="product-badge">
                        <ul>
                          <li class="sale-badge">-25%</li>
                        </ul>
                      </div>
                    </div>
                  </a>
                  <div class="product-info">

                    <h2 class="product-title"><a href="#" tabindex="0">Orange Sliced Mix</a></h2>
                    <div class="product-price">
                      <span>$150.00</span>
                      <del>$180.00</del>
                    </div>
                    <div class="add-to-cart-1">
                      <div class="d-flex justify-content-center">
                        <button class="add-btn">
                          <span></i>View</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
                <div class="product-item text-center">
                  <a href="product-view.php">
                    <div class="product-img">
                      <img class="img-fluid" src="./images/pr-3.png" alt="no-img">
                      <div class="product-badge">
                        <ul>
                          <li class="sale-badge">-25%</li>
                        </ul>
                      </div>
                    </div>
                  </a>
                  <div class="product-info">

                    <h2 class="product-title"><a href="#" tabindex="0">Orange Sliced Mix</a></h2>
                    <div class="product-price">
                      <span>$150.00</span>
                      <del>$180.00</del>
                    </div>
                    <div class="add-to-cart-1">
                      <div class="d-flex justify-content-center">
                        <button class="add-btn">
                          <span></i>View</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
                <div class="product-item text-center">
                  <a href="product-view.php">
                    <div class="product-img">
                      <img class="img-fluid" src="./images/pr-3.png" alt="no-img">
                      <div class="product-badge">
                        <ul>
                          <li class="sale-badge">-25%</li>
                        </ul>
                      </div>
                    </div>
                  </a>
                  <div class="product-info">

                    <h2 class="product-title"><a href="#" tabindex="0">Orange Sliced Mix</a></h2>
                    <div class="product-price">
                      <span>$150.00</span>
                      <del>$180.00</del>
                    </div>
                    <div class="add-to-cart-1">
                      <div class="d-flex justify-content-center">
                        <button class="add-btn">
                          <span></i>View</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
                <div class="product-item text-center">
                  <a href="product-view.php">
                    <div class="product-img">
                      <img class="img-fluid" src="./images/pr-3.png" alt="no-img">
                      <div class="product-badge">
                        <ul>
                          <li class="sale-badge">-25%</li>
                        </ul>
                      </div>
                    </div>
                  </a>
                  <div class="product-info">

                    <h2 class="product-title"><a href="#" tabindex="0">Orange Sliced Mix</a></h2>
                    <div class="product-price">
                      <span>$150.00</span>
                      <del>$180.00</del>
                    </div>
                    <div class="add-to-cart-1">
                      <div class="d-flex justify-content-center">
                        <button class="add-btn">
                          <span></i>View</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="col-lg-3"></div> -->
        </div>




      </div>
    </div>
  </section>
  <!--product details end-->


  <!-- service part start -->
  <!-- <div class="serviceFooter">

</div> -->
  <!-- service part end -->

  <!-- footer part start -->
  <?php
  include("layout/footer.php");
  ?>
  <!-- footer part end -->

  <!-- all js file -->
  <script src="js/jquery-1.12.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <!-- <script src="js/jquery-3.6.4.min.js"></script> -->
  <!-- <script src="https://unpkg.com/js-image-zoom/js-image-zoom.js"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/js-image-zoom/js-image-zoom.min.js"></script> -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/feather.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/Nzoom.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/script.js"></script>
  <!-- all js file -->
</body>

</html>