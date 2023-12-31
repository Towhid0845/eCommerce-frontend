<!DOCTYPE html>
<html lang="en">
<?php $projectname = 'ecommerce-frontend'; ?>

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



  <!-- category -->
  <section class="category-page">
    <div class="custom-container">

      <!-- breadcrumb part start -->
      <section class="breadcrumb pt-3 pt-md-5 pb-3">
        <!-- <div class="container"> -->
          <div class="text">
            <ul class="list-unstyled">
              <li>
                <a href="index.php"><i class="fas fa-home"></i> Home</a>
              </li>
              <li>Current Page</li>
            </ul>
          </div>
        <!-- </div> -->
      </section>
      <!-- breadcrumb part end -->

      <div class="row">
        <!-- <div class="col-12 col-md-4 col-xl-3">
          <div class="gshop-sidebar rounded-2 overflow-hidden">
            <div class="sidebar-widget search-widget bg-white p-4 mb-1">
              <div class="title3 d-flex">
                <h3 class="mb-0 flex-shrink-0">Search Now</h3>
                <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
              </div>
              <form class="search-form d-flex align-items-center mt-4">
                <input type="text" placeholder="Search...">
                <button type="submit" class="submit-icon-btn-secondary"><i class="fa-solid fa-magnifying-glass"></i></button>
              </form>
            </div>
            <div class="sidebar-widget clear-all bg-white p-4 mb-1">
              <div class="title3 curpo d-flex">
                <h3 class="mb-0 flex-shrink-0">Filter</h3>
                <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
              </div>
              <p class="mt-4"><span>19</span> out of <span>20</span> product</p>
              <div class="total-filter d-block d-flex flex-wrap">
                <div class="filter">
                  <a href="#">
                    <span>
                      In Stock
                      <i class="fas fa-close"></i>
                    </span>
                  </a>
                </div>
                <div class="filter">
                  <a href="#">
                    <span>
                      Small
                      <i class="fas fa-close"></i>
                    </span>
                  </a>
                </div>
                <div class="filter">
                  <a href="#">
                    Clear All
                  </a>
                </div>
              </div>
            </div>
            <div class="sidebar-widget common-widget p-4 mb-1 bg-white">
              <div class="title3 curpo d-flex" data-bs-toggle="collapse" data-bs-target="#brand" aria-expanded="false" aria-controls="brand">
                <h3 class="mb-0 flex-shrink-0">Brand</h3>
                <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
              </div>
              <div class="collapse show" id="brand">
                <div class="reset-filter d-flex justify-content-between py-3">
                  <p><span>1</span> selected</p>
                  <a class="border-bottom border-dark" href="#">Reset</a>
                </div>
                <div class="form-check d-flex">
                  <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefaultOne">
                  <label class="form-check-label" for="flexCheckDefaultOne">
                    Brand1
                  </label>
                  <span class="total-count ms-auto">48</span>
                </div>
                <div class="form-check d-flex">
                  <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefaultOne">
                  <label class="form-check-label" for="flexCheckDefaultOne">
                    Brand2
                  </label>
                  <span class="total-count ms-auto">68</span>
                </div>
                <div class="form-check d-flex">
                  <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefaultOne">
                  <label class="form-check-label" for="flexCheckDefaultOne">
                    Brand3
                  </label>
                  <span class="total-count ms-auto">58</span>
                </div>
                <div class="form-check d-flex">
                  <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefaultOne">
                  <label class="form-check-label" for="flexCheckDefaultOne">
                    Brand4
                  </label>
                  <span class="total-count ms-auto">98</span>
                </div>
              </div>
            </div>
            <div class="sidebar-widget price-filter-widget bg-white p-4 mb-1">
              <div class="title3 curpo d-flex" data-bs-toggle="collapse" data-bs-target="#price" aria-expanded="false" aria-controls="price">
                <h3 class="mb-0 flex-shrink-0">Price</h3>
                <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
              </div>
              <div class="price-range-block collapse show" id="price">
                <div id="slider-range" class="price-filter-range" name="rangeInput"></div>
                <div class="d-flex justify-content-between align-items-center" style="margin:30px auto">
                  <input type="number" min=0 max="9900" oninput="validity.valid||(value='0');" id="min_price" class="price-range-field" />
                  <i class="fa-solid fa-minus"></i>
                  <input type="number" min=0 max="10000" oninput="validity.valid||(value='10000');" id="max_price" class="price-range-field" />
                </div>
                <button class="price-range-search" id="price-range-submit">Search</button>
              </div>
            </div>
            <div class="sidebar-widget common-widget p-4 mb-1 bg-white">
              <div class="title3 curpo d-flex" data-bs-toggle="collapse" data-bs-target="#stock" aria-expanded="false" aria-controls="stock">
                <h3 class="mb-0 flex-shrink-0">Availability</h3>
                <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
              </div>
              <div class="collapse show" id="stock">
                <div class="reset-filter d-flex justify-content-between py-3">
                  <p><span>1</span> selected</p>
                  <a class="border-bottom border-dark" href="#">Reset</a>
                </div>
                <div class="form-check d-flex">
                  <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefaultOne">
                  <label class="form-check-label" for="flexCheckDefaultOne">
                    In Stock
                  </label>
                  <span class="total-count ms-auto">48</span>
                </div>
                <div class="form-check d-flex">
                  <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefaultOne">
                  <label class="form-check-label" for="flexCheckDefaultOne">
                    Out of Stock
                  </label>
                  <span class="total-count ms-auto">48</span>
                </div>
              </div>
            </div>
            <div class="sidebar-widget rating-widget p-4 mb-1 bg-white">
              <div class="title3 curpo d-flex" data-bs-toggle="collapse" data-bs-target="#rating" aria-expanded="false" aria-controls="rating">
                <h3 class="mb-0 flex-shrink-0">Rating</h3>
                <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
              </div>
              <div class="check-rating collapse show" id="rating">
                <div class="reset-filter d-flex justify-content-between py-3">
                  <p><span>1</span> selected</p>
                  <a class="border-bottom border-dark" href="#">Reset</a>
                </div>
                <div class="form-check d-flex">
                  <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefaultOne">
                  <label class="form-check-label" for="flexCheckDefaultOne">
                    <ul>
                      <li>
                        <i class="fas fa-star fill-color"></i>
                        <i class="fas fa-star fill-color"></i>
                        <i class="fas fa-star fill-color"></i>
                        <i class="fas fa-star fill-color"></i>
                        <i class="fas fa-star fill-color"></i>
                      </li>
                    </ul>
                  </label>
                  <span class="total-count ms-auto">48</span>
                </div>
                <div class="form-check d-flex">
                  <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefaultOne">
                  <label class="form-check-label" for="flexCheckDefaultOne">
                    <ul>
                      <li>
                        <i class="fas fa-star fill-color"></i>
                        <i class="fas fa-star fill-color"></i>
                        <i class="fas fa-star fill-color"></i>
                        <i class="fas fa-star fill-color"></i>
                        <i class="fas fa-star-half-alt fill-color"></i>
                      </li>
                    </ul>
                  </label>
                  <span class="total-count ms-auto">15</span>
                </div>
                <div class="form-check d-flex">
                  <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefaultOne">
                  <label class="form-check-label" for="flexCheckDefaultOne">
                    <ul>
                      <li>
                        <i class="fas fa-star fill-color"></i>
                        <i class="fas fa-star fill-color"></i>
                        <i class="fas fa-star fill-color"></i>
                        <i class="fas fa-star fill-color"></i>
                        <i class="fas fa-star"></i>
                      </li>
                    </ul>
                  </label>
                  <span class="total-count ms-auto">15</span>
                </div>
                <div class="form-check d-flex">
                  <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefaultOne">
                  <label class="form-check-label" for="flexCheckDefaultOne">
                    <ul>
                      <li>
                        <i class="fas fa-star fill-color"></i>
                        <i class="fas fa-star fill-color"></i>
                        <i class="fas fa-star fill-color"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </li>
                    </ul>
                  </label>
                  <span class="total-count ms-auto">15</span>
                </div>
                <div class="form-check d-flex">
                  <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefaultOne">
                  <label class="form-check-label" for="flexCheckDefaultOne">
                    <ul>
                      <li>
                        <i class="fas fa-star fill-color"></i>
                        <i class="fas fa-star fill-color"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </li>
                    </ul>
                  </label>
                  <span class="total-count ms-auto">15</span>
                </div>
              </div>
            </div>
            <div class="sidebar-widget common-widget p-4 mb-1 bg-white">
              <div class="title3 curpo d-flex" data-bs-toggle="collapse" data-bs-target="#size" aria-expanded="false" aria-controls="size">
                <h3 class="mb-0 flex-shrink-0">Size</h3>
                <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
              </div>
              <div class="collapse show" id="size">
                <div class="reset-filter d-flex justify-content-between py-3">
                  <p><span>1</span> selected</p>
                  <a class="border-bottom border-dark" href="#">Reset</a>
                </div>
                <div class="form-check d-flex">
                  <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefaultOne">
                  <label class="form-check-label" for="flexCheckDefaultOne">
                    Small
                  </label>
                  <span class="total-count ms-auto">48</span>
                </div>
                <div class="form-check d-flex">
                  <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefaultOne">
                  <label class="form-check-label" for="flexCheckDefaultOne">
                    Medium
                  </label>
                  <span class="total-count ms-auto">48</span>
                </div>
                <div class="form-check d-flex">
                  <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefaultOne">
                  <label class="form-check-label" for="flexCheckDefaultOne">
                    Large
                  </label>
                  <span class="total-count ms-auto">48</span>
                </div>
                <div class="form-check d-flex">
                  <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefaultOne">
                  <label class="form-check-label" for="flexCheckDefaultOne">
                    XL
                  </label>
                  <span class="total-count ms-auto">48</span>
                </div>
              </div>
            </div>
            <div class="sidebar-widget tags-widget p-4 mb-1 bg-white">
              <div class="title3 d-flex">
                <h3 class="mb-0">Tags</h3>
                <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
              </div>
              <div class="mt-4 d-flex gap-2 flex-wrap">
                <a href="#" class="btn btn-outline btn-sm">Vegetable</a>
                <a href="#" class="btn btn-outline btn-sm">Healthy</a>
                <a href="#" class="btn btn-outline btn-sm">Meat</a>
                <a href="#" class="btn btn-outline btn-sm">Organic</a>
                <a href="#" class="btn btn-outline btn-sm">Nature</a>
                <a href="#" class="btn btn-outline btn-sm">food</a>
                <a href="#" class="btn btn-outline btn-sm">bd food</a>
                <a href="#" class="btn btn-outline btn-sm">fish</a>
                <a href="#" class="btn btn-outline btn-sm">vegetable</a>
              </div>
            </div>
          </div>
        </div> -->
        <div class="col-12 col-sm-12 col-md-12 col-xl-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="listing-top d-flex align-items-center justify-content-between bg-white rounded-2 px-4 py-3 mb-4">
                <p class="mb-0 d-none d-lg-block">Showing 1-12 of 45 results</p>
                <div class="listing-top-right text-end d-inline-flex align-items-center gap-3 gap-sm-5 gap-lg-3 flex-wrap">
                  <div class="number-count-filter d-flex align-items-center gap-2 gap-sm-3">
                    <label class="text-dark flex-shrink-0">Show :</label>
                    <input type="number" class="ps-2" value="16">
                  </div>
                  <div class="d-inline-flex align-items-center gap-2 gap-sm-3">
                    <label class="text-dark flex-shrink-0">Sort by :</label>
                    <select class="nice-select">
                      <option>News First</option>
                      <option>Best Selling</option>
                      <option>Best Rated</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-xl-3 col-xxl-2 pb-4 px-5 px-sm-3">
              <div class="product-item text-center">
                <a href="product-view.php" class="w-100">
                  <div class="product-img">
                    <img class="img-fluid" src="https://placehold.co/294x294" alt="no-img">
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
                      <a href="product-view.php" class="add-btn">
                        <span>View</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-xl-3 col-xxl-2 pb-4 px-5 px-sm-3">
              <div class="product-item text-center">
                <a href="product-view.php" class="w-100">
                  <div class="product-img">
                    <img class="img-fluid" src="./images/pr-2.png" alt="no-img">
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
                      <a href="product-view.php" class="add-btn">
                        <span>View</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-xl-3 col-xxl-2 pb-4 px-5 px-sm-3">
              <div class="product-item text-center">
                <a href="product-view.php" class="w-100">
                  <div class="product-img">
                    <img class="img-fluid" src="https://placehold.co/294x294" alt="no-img">
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
                      <a href="product-view.php" class="add-btn">
                        <span>View</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-xl-3 col-xxl-2 pb-4 px-5 px-sm-3">
              <div class="product-item text-center">
                <a href="product-view.php" class="w-100">
                  <div class="product-img">
                    <img class="img-fluid" src="./images/pr-4.png" alt="no-img">
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
                      <a href="product-view.php" class="add-btn">
                        <span>View</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-xl-3 col-xxl-2 pb-4 px-5 px-sm-3">
              <div class="product-item text-center">
                <a href="product-view.php" class="w-100">
                  <div class="product-img">
                    <img class="img-fluid" src="./images/pr-5.png" alt="no-img">
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
                      <a href="product-view.php" class="add-btn">
                        <span>View</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-xl-3 col-xxl-2 pb-4 px-5 px-sm-3">
              <div class="product-item text-center">
                <a href="product-view.php" class="w-100">
                  <div class="product-img">
                    <img class="img-fluid" src="https://placehold.co/294x294" alt="no-img">
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
                      <a href="product-view.php" class="add-btn">
                        <span>View</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-xl-3 col-xxl-2 pb-4 px-5 px-sm-3">
              <div class="product-item text-center">
                <a href="product-view.php" class="w-100">
                  <div class="product-img">
                    <img class="img-fluid" src="./images/pr-2.png" alt="no-img">
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
                      <a href="product-view.php" class="add-btn">
                        <span>View</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-xl-3 col-xxl-2 pb-4 px-5 px-sm-3">
              <div class="product-item text-center">
                <a href="product-view.php" class="w-100">
                  <div class="product-img">
                    <img class="img-fluid" src="https://placehold.co/294x294" alt="no-img">
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
                      <a href="product-view.php" class="add-btn">
                        <span>View</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-xl-3 col-xxl-2 pb-4 px-5 px-sm-3">
              <div class="product-item text-center">
                <a href="product-view.php" class="w-100">
                  <div class="product-img">
                    <img class="img-fluid" src="./images/pr-4.png" alt="no-img">
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
                      <a href="product-view.php" class="add-btn">
                        <span>View</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pagination py-4 d-flex justify-content-end">
        <ul class="list-unstyled">
          <li class="arrow">
            <a href="#"><i class="fas fa-chevron-left"></i></a>
          </li>
          <li class="mid-pagi">
            <a href="#"><span>2</span></a>
            <a href="#"><span>3</span></a>
            <a class="active" href="#"><span>4</span></a>
            <a href="#"><span>6</span></a>
            <a href="#"><span>7</span></a>
          </li>
          <li class="arrow">
            <a href="#"><i class="fas fa-chevron-right"></i></a>
          </li>
        </ul>
      </div>
  </section>
  <!-- category -->

  <!-- service part start -->

  <!-- service part end -->

    <!-- back to top part start -->
    <a id="button">
    <i class="bi bi-chevron-up"></i>
  </a>
  <!-- back to top part end -->

  <!-- footer part start -->
  <?php
  include("layout/footer.php");
  ?>
  <!-- footer part end -->

  <!-- all js file -->
  <script src="js/jquery-1.12.4.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script> -->
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/price_range.js"></script>
  <script src="js/feather.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/script.js"></script>
  <!-- all js file -->
</body>

</html>