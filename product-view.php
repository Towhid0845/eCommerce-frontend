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


  <!--product details start-->
  <section class="product-details-page">
    <div class="product-details-bg">
      <div class="custom-container">
        <div class="product-information-main">
          <div class="row mx-0">
            <div class="col-lg-12">
              <div class="row prd-left-details">
                <!-- <div class="col-sm-12 col-md-2 col-xl-1">
                  <div class="mini-side-image">
                    <ul>
                      <li class="zoom-child-image active"><img src="images/pr-1.png" alt="product-details-image-1" class="img-fluid w-100"></li>
                      <li class="zoom-child-image"><img src="images/pr-2.png" alt="product-details-image-2" class="img-fluid w-100"></li>
                      <li class="zoom-child-image"><img src="images/pr-3.png" alt="product-details-image-3" class="img-fluid w-100"></li>
                    </ul>
                  </div>
                </div> -->
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
                    <!-- <div class="unit">
<span>200g</span>
</div> -->

                    <div class="quantity">
                      <div class="quantity-main d-flex flex-wrap">
                        <div class="qnt-number me-3 py-3">
                          <ul>
                            <li><i class="bi bi-dash"></i></li>
                            <li class="mid-number">1</li>
                            <li><i class="bi bi-plus"></i></li>
                          </ul>
                        </div>
                        <div class="py-3">
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


                    <!-- <div class="categories py-2">
<p>
<a href="#">Buitoni,</a>
<a href="#">Freshly,</a>
<a href="#">Frozen Seafoods,</a>
<a href="#">Hot Pockets,</a>
<a href="#">Stouffer</a>
</p>
</div> -->
                  </div>
                </div>
              </div>
            </div>

            <!-- <div class="col-lg-12 col-xl-3">
<div class="prd-right-details">
<div class="prd-right-info">
<div class="info-box">
<ul>
<li class="float-start me-4">
<img class="img-fluid" src="images/free-delivery.png" alt="footer-top-icon-1">
</li>
<li>
<div class="title3">
<h3>Free Shipping</h3>
</div>
<span>For all orders over $200</span>
</li>
</ul>
<ul>
<li class="float-start me-4">
<img class="img-fluid" src="images/gift.png" alt="footer-top-icon-2">
</li>
<li>
<div class="title3">
<h3>1 & 1 Returns</h3>
</div>
<span>Cancellation after 1 day</span>
</li>
</ul>
<ul>
<li class="float-start me-4">
<img class="img-fluid" src="images/save-money.png" alt="footer-top-icon-3">
</li>
<li>
<div class="title3">
<h3>Secure Payment</h3>
</div>
<span>100% secure payments</span>
</li>
</ul>
</div>
<div class="sidebar-widget banner-widget mt-4 p-0 border-0">
<div class="vertical-banner text-center bg-white rounded-2" style="background-image: url(./images/sidebg.jpg);">
<div class="title3">
<h3 class="mb-1">Fresh &amp; Organic Spice</h3>
</div>
<div class="d-flex align-items-center justify-content-center">
<span class="hot-badge bg-danger fs-xs position-relative text-white">HOT</span>
<span class="offer-title text-danger">30% Off</span>
</div>
<div class="hotline">
<h5 class="pt-3">Hotline Order:</h5>
<span>Mon - Fri: 7:00 am - 18:00PM</span>
<h4 class="pt-4">+970 978 - 6290</h4>
<a href="#" class="call-btn text-primary">Shop Now<span class="ms-2"><i class="fas fa-arrow-right"></i></span></a>
</div>
</div>
</div>
</div>
</div>
</div> -->
          </div>
        </div>
      </div>
    </div>
    <div class="product-summery">
      <div class="custom-container">
        <!-- <div class="row">
<div class="col-lg-12 col-md-8">
<div class="detail-descp">
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
<li class="nav-item" role="presentation">
<button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Additional information</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="pills-settings-tab" data-bs-toggle="pill" data-bs-target="#pills-messages" type="button" role="tab" aria-controls="pills-messages" aria-selected="false">Reviews (1)</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="pills-settings-tab" data-bs-toggle="pill" data-bs-target="#pills-settings" type="button" role="tab" aria-controls="pills-settings" aria-selected="false">Vendor Info</button>
</li>

</ul>
<div class="tab-content" id="pills-tabContent">
<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
<div class="adn-info">
<h3>Additional information</h3>
<table class="table table-bordered">
<tbody>
<tr>
<th>Weight</th>
<td>200g</td>
</tr>
</tbody>
</table>
</div>
<div class="summery-description">
<p class="top-des">Raised without antibiotics and full of flavor, this beef is the base of big, juicy
burgers, savory meat loaf and rich
Bolognese sauce. You can enjoy this delicious local ground beef for your meatloaf, burgers,
meatballs, shepherd’s pie,
spicy taco meat and so much more.</p>
<p class="top-des">As one of Farmart’s premium beef suppliers, Local Angus works with a coalition of
small family farms throughout the
Mid-Atlantic region* who feed their cattle a diet of primarily grass, supplemented by grain
throughout the finishing
months. Every farm in this program is independently audited for animal welfare practices to ensure
the best standards of
care.</p>
<div class="img">
<img src="images/product-details-image-1.webp" alt="summery-description-image" class="img-fluid w-100">
</div>
<div class="image-title">
<p class="text-center fst-italic py-3">
Every farm in this program is independently audited for animal.
</p>
</div>
<div class="summery-block-des">
<h5>Preparation and Usage</h5>
<p>For perfectly cooked beef, our head chef recommends:</p>
</div>
<div class="summery-block-des">
<h6>Storage</h6>
<p>Keep refrigerated 0-5oC. Consume within the use by date. Once pack is opened use on the same day.
Suitable for freezing
on day of purchase. Use within one month. Defrost fully before use. Do not re-freeze once
defrosted.</p>
</div>
<div class="summery-block-des">
<h6>Pan Fry</h6>
<p>Pour a little oil into a frying pan and cook for 4-6 minutes until browned. If preferred, drain
off excess fat. Add a
good beef stock, seasonal vegetables and a sprinkling of sea salt and freshly ground black pepper.
Bring to the boil and
reduce heat to simmer for 20 minutes until the meat is thoroughly cooked and your kitchen smells
delicious. Wash hands,
knives and surfaces thoroughly before and after preparing raw meat.</p>
</div>
<div class="summery-block-des">
<h6>Return To Address</h6>
<p>Daylesford near Kingham, Gloucestershire GL56 0YG</p>
</div>
<div class="summery-block-des">
<h6>Country of Origin</h6>
<p>UK</p>
</div>
<div class="summery-block-des">
<h6>Package Type</h6>
<p>Box & Sleeve</p>
</div>
<div class="summery-block-des">
<h6>Recycling Information</h6>
<p>You’ll never be given a plastic carrier bag in our farm shops, and for this packaging we’ve
chosen a tray that is 70%
post-consumer recycled material. Like this FSC-certified cardboard, it is fully recyclable &
rechangable.</p>
</div>
<div class="summery-block-des">
<h6>Other Information</h6>
<ul>
<li>
<p>GB-ORG-05, EU Agriculture</p>
</li>
<li>
<p>UK 4707 EC</p>
</li>
<li>
<p>Packaged in a protective atmosphere</p>
</li>
</ul>
</div>
<div class="summery-block-des">
<p>We’ve been farming organically for over 35 years, meaning our animals enjoy their natural grass
and forage-based diet,
growing into strong and healthy animals, free from unnecessary chemicals, antibiotics and GM feed.
</p>
</div>
<div class="summery-block-des">
<p>We choose British breeds who thrive in their native landscape and encourage healthy biodiversity
on our farm. We avoid
waste of any kind, so manure and kitchen waste compost are returned to the soil as rich natural
fertilisers. We have
built our own abattoir to ensure the highest animal welfare and reduced food miles, which results
in better tasting
meat, and we spread our message far beyond the boundaries of our own fields.
</p>
</div>
<div class="summery-block-des">
<p>Each step of our journey is made with a conscience, and a love for food.
</p>
</div>
</div>
</div>
<div class="tab-pane fade" id="pills-messages" role="tabpanel" aria-labelledby="pills-messages-tab">
<div class="row">
<div class="col-lg-12 col-xl-6 col-xxl-5 pe-xxl-0">
<div class="rating-box">
<h3>5.00</h3>
<div class="product-rating">
<ul>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
</ul>
<p>Avg. Star Rating: <span>(1 Review)</span></p>
</div>
<div class="bar-rating-main">
<div class="bar-rating mb-2 d-flex justify-content-between">
<div class="rating-title">
<h6>5 Stars</h6>
</div>
<div class="rating-bars align-self-center">
<div class="progress">
<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
<div class="rating-percent">
<h5>0%</h5>
</div>
</div>
<div class="bar-rating mb-2 d-flex justify-content-between">
<div class="rating-title">
<h6>4 Stars</h6>
</div>
<div class="rating-bars align-self-center">
<div class="progress">
<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
<div class="rating-percent">
<h5>100%</h5>
</div>
</div>
<div class="bar-rating mb-2 d-flex justify-content-between">
<div class="rating-title">
<h6>3 Stars</h6>
</div>
<div class="rating-bars align-self-center">
<div class="progress">
<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
<div class="rating-percent">
<h5>0%</h5>
</div>
</div>
<div class="bar-rating mb-2 d-flex justify-content-between">
<div class="rating-title">
<h6>2 Stars</h6>
</div>
<div class="rating-bars align-self-center">
<div class="progress">
<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
<div class="rating-percent">
<h5>0%</h5>
</div>
</div>
<div class="bar-rating mb-2 d-flex justify-content-between">
<div class="rating-title">
<h6>1 Stars</h6>
</div>
<div class="rating-bars align-self-center">
<div class="progress">
<div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
<div class="rating-percent">
<h5>0%</h5>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-12 col-xl-6 ps-xxl-0 col-xxl-6 ms-auto">
<div class="add-review-box">
<h3>Add your review</h3>
<p>Your email address will not be published. Required fields are marked <sup class="text-danger">*</sup></p>
<ul class="pb-3">
<li>Your rating:</li>
<li>
<span><i class="bi bi-star-fill"></i></span>
<span><i class="bi bi-star-fill"></i></span>
<span><i class="bi bi-star-fill"></i></span>
<span><i class="bi bi-star-fill"></i></span>
<span><i class="bi bi-star-fill"></i></span>
</li>
</ul>
<form>
<div class="row">
<div class="col-lg-12">
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Review: <sup class="text-danger">*</sup></label>
<textarea rows="5" class="form-control shadow-none"></textarea>
</div>
</div>
<div class="col-lg-6">
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Name: <sup class="text-danger">*</sup></label>
<input type="text" class="form-control shadow-none" id="exampleInputPassword1">
</div>
</div>
<div class="col-lg-6">
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Email: <sup class="text-danger">*</sup></label>
<input type="email" class="form-control shadow-none" id="exampleInputPassword1">
</div>
</div>
<div class="col-lg-12">
<div class="mb-3 form-check">
<input type="checkbox" class="form-check-input shadow-none rounded-0" id="exampleCheck1">
<label class="form-check-label" for="exampleCheck1">Save my name, email, and website in
this browser for the next time I comment.</label>
</div>
</div>
<div class="col-lg-12">
<div class="mt-3 button">
<button class="btn btn-warning shadow-none" type="submit">Submit Review</button>
</div>
</div>
</div>
</form>
</div>
</div>
<div class="col-lg-12">
<div class="review-post">
<div class="post-title">
<h3>1 Review For This Product</h3>
<div class="post-list d-flex">
<div class="image">
<img src="images/brand-image-2.jpg" alt="brand-image-1" class="img-fluid w-100">
</div>
<div class="text">
<h6>
admindokan112
<span>– May 27, 2021</span>
</h6>
<ul>
<li>
<span><i class="bi bi-star-fill"></i></span>
<span><i class="bi bi-star-fill"></i></span>
<span><i class="bi bi-star-fill"></i></span>
<span><i class="bi bi-star-fill"></i></span>
<span class="gray"><i class="bi bi-star-fill"></i></span>
</li>
</ul>
<p>Mangoes Mangoes is Review
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="pills-settings" role="tabpanel" aria-labelledby="pills-settings-tab">
<div class="vendor-info">
<div class="row">
<div class="col-lg-6 col-xl-4 col-xxl-3">
<div class="vendor-image">
<img src="images/vendor-info-image.webp" alt="vendor-info-image" class="img-fluid w-100">
</div>
</div>
<div class="col-lg-6 col-xl-8 col-xxl-9">
<div class="vendor-text">
<div class="mini-img">
<img src="images/brand-image-2.jpg" alt="brand-image-3" class="img-fluid w-100">
</div>
<h3>MartFury</h3>
<ul>
<li class="star">
<span><i class="bi bi-star-fill"></i></span>
<span><i class="bi bi-star-fill"></i></span>
<span><i class="bi bi-star-fill"></i></span>
<span><i class="bi bi-star-fill"></i></span>
<span class="gray"><i class="bi bi-star-fill"></i></span>
</li>
<li><span class="point-number">4.12</span> rating from 26 reviews</li>
</ul>
<p>Doherty Hall, Pittsburgh, PA 15213, USA, Pittsburgh, New York, United States (US)</p>
<p>(+053) 77-637-3300</p>
<div class="social">
<a href="#"><i class="bi bi-facebook"></i></a>
<a href="#"><i class="bi bi-twitter"></i></a>
<a href="#"><i class="bi bi-linkedin"></i></a>
<a href="#"><i class="bi bi-instagram"></i></a>
</div>
<div class="store-info">
<p>Started from: <span>May 19, 2021</span></p>
<ul>
<li>Store Closed</li>
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
<div class="col-lg-4 col-xl-3 col-md-4">
<div class="right-side-option">
</div>
</div>
</div> -->
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

              <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
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
                          <span><i class="fa-solid fa-plus me-2"></i>Add</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
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
                          <span><i class="fa-solid fa-plus me-2"></i>Add</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
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
                          <span><i class="fa-solid fa-plus me-2"></i>Add</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
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
                          <span><i class="fa-solid fa-plus me-2"></i>Add</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
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
                          <span><i class="fa-solid fa-plus me-2"></i>Add</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
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
                          <span><i class="fa-solid fa-plus me-2"></i>Add</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
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
                          <span><i class="fa-solid fa-plus me-2"></i>Add</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
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
                          <span><i class="fa-solid fa-plus me-2"></i>Add</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
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
                          <span><i class="fa-solid fa-plus me-2"></i>Add</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
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
                          <span><i class="fa-solid fa-plus me-2"></i>Add</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
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
                          <span><i class="fa-solid fa-plus me-2"></i>Add</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
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
                          <span><i class="fa-solid fa-plus me-2"></i>Add</span>
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

              <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
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
                          <span><i class="fa-solid fa-plus me-2"></i>Add</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
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
                          <span><i class="fa-solid fa-plus me-2"></i>Add</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
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
                          <span><i class="fa-solid fa-plus me-2"></i>Add</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
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
                          <span><i class="fa-solid fa-plus me-2"></i>Add</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
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
                          <span><i class="fa-solid fa-plus me-2"></i>Add</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
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
                          <span><i class="fa-solid fa-plus me-2"></i>Add</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
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
                          <span><i class="fa-solid fa-plus me-2"></i>Add</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
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
                          <span><i class="fa-solid fa-plus me-2"></i>Add</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
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
                          <span><i class="fa-solid fa-plus me-2"></i>Add</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
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
                          <span><i class="fa-solid fa-plus me-2"></i>Add</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
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
                          <span><i class="fa-solid fa-plus me-2"></i>Add</span>
                        </button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-4">
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
                          <span><i class="fa-solid fa-plus me-2"></i>Add</span>
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