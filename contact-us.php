<!DOCTYPE html>
<html lang="en">

<?php
include("layout/head.php");
?>

<body>

  <!-- header & navbar part start -->
  <?php
  include("layout/header.php");
  ?>
  <!-- heade & navbar part end -->

  <!-- breadcrump part start -->
  <section class="breadcrumb pt-3 pt-md-5 pb-3">
    <div class="container">

    
    <div class="text">
      <ul class="list-unstyled">
        <li>
          <a href="index.php"><i class="fas fa-home"></i> Home</a>
        </li>
        <li>Current Page</li>
      </ul>
    </div>
    </div>
  </section>
  <!-- breadcrump part end -->

  <!-- contact us part start -->
  <section class="contact-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mx-auto">
          <div class="contact--title text-center">
            <span class="common--subtitle">Contact Info</span>
            <h2 class="common--title">Our Contact Information
            </h2>
          </div>
        </div>
      </div>
      <div class="contact-info">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
            <div class="contact-box">
              <div class="contact-box-icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div class="contact-box-content">
                <h4 class="contact-box-title">Our Location</h4>
                <p class="contact-box-description">xyz, Dhaka, Bangladesh</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
            <div class="contact-box">
              <div class="contact-box-icon">
                <i class="fas fa-headset"></i>
              </div>
              <div class="contact-box-content">
                <h4 class="contact-box-title">Our Contact</h4>
                <p class="contact-box-description">+ (88) 1234-567-8900</p>
                <p class="contact-box-description">+ (88) 1234-567-8901</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="contact-box">
              <div class="contact-box-icon">
                <i class="far fa-envelope"></i>
              </div>
              <div class="contact-box-content">
                <h4 class="contact-box-title">Mail Us</h4>
                <p class="contact-box-description">info@peacefulthemes.com</p>
                <p class="contact-box-description">info2@peacefulthemes.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="contact-form">
        <div class="row">
          <div class="col-12 col-lg-5">
            <div class="image">
              <img src="./images/signup.jpg" alt="not found">
            </div>
          </div>
          <div class="col-12 col-lg-7 ps-sm-0 ps-lg-5 pt-5 pt-lg-0">
            <div class="form-title">
              <span class="common--subtitle">let's talk</span>
              <h2 class="common--title">Get In Touch
              </h2>
              <p class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            </div>
            <form class="contact-us-form pt-4">
              <div class="row">
                <div class="col-lg-12">
                  <input type="text" placeholder="Full Name">
                </div>
                <div class="col-lg-6 col-md-6">
                  <input type="email" placeholder="Email Address">
                </div>
                <div class="col-lg-6 col-md-6">
                  <select class="nice-select">
                    <option>select one</option>
                    <option>News First</option>
                    <option>Best Selling</option>
                    <option>Best Rated</option>
                  </select>
                </div>
                <div class="col-lg-12">
                  <textarea cols="40" rows="10" placeholder="Message"></textarea>
                </div>
                <div class="col-lg-12">
                <button class="send-btn">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- contact us part end -->

  <!-- map part start -->
  <div class="map mb-5">
    <div class="pq-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116833.83187883983!2d90.33728804060513!3d23.780975728310533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1700124202563!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  <!-- map part end -->

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


  <!-- all js link -->
  <script src="js/jquery-1.12.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/feather.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/Nzoom.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/script.js"></script>
  <!-- all js file -->
</body>

</html>