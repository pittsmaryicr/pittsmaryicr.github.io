<!DOCTYPE html>
<html lang="en">
  <!-- Basic -->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta
      name="viewport"
      content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
    <!-- Site Metas -->
     
    <title>Article</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />
  </head>
  <body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
    <!-- LOADER -->
    <div id="preloader">
      <div class="loader">
        <img src="images/loader.gif" alt="#" />
      </div>
    </div>
    <!-- END LOADER -->
    <div class="wrapper">
      <nav id="sidebar">
        <div class="menu_section">
          <ul>
            <li><a href="index.php">Main</a></li>
            <li><a href="blog.php">Articles</a></li>
            <li><a href="contact.php">Contacts</a></li>
            <li><a href="policy.php">Privacy policy</a></li>
            <li><a href="terms.php">Terms and conditions</a></li>
          </ul>
        </div>
      </nav>
      <div id="content">
        <!-- Start header -->
        <header class="top-header">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <div class="logo_main">
                  <a href="index.php" style="color: #fff; font-size: 24px"
                    >Freshness</a
                  >
                </div>
              </div>
              <div class="col-sm-6">
                <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                  <img src="images/menu_icon.png" />
                </button>
              </div>
            </div>
          </div>
        </header>
        <!-- End header -->
        <!-- Start Banner -->
        <div class="ulockd-home-slider">
          <div class="container-fluid">
            <div class="row">
              <div
                class="pogoSlider"
                id="js-main-slider"
                style="
                  background: url('./assets/images/cdc-vrpjdw3wqqi-unsplash.jpg');
                  background-repeat: no-repeat;
                  background-size: cover;
                "
              >
                <h3 style="color: #fff; font-size: 30px">Article</h3>
              </div>
              <!-- .pogoSlider -->
            </div>
          </div>
        </div>
        <!-- End Banner -->

        <!-- section -->
        <div class="section about_section layout_padding">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="work_blog margin-top_30">
                  <h3>How to clean the microwave from dirt</h3>
                  <p><strong></strong> Cleaning the microwave from dirt is a difficult task. This article will tell you everything you need to know about cleaning the microwave from dirt. . The microwave is an ideal place to start cleaning after a winter storm, because it is so small, but it has such a large area. This means that you can easily clean the microwave from dirt. It's like a big snow plow. dirt.No matter how hard we try, we always end up with the same result. And the dirtiest part is the water. there are a lot of microorganisms that thrive in hot water. This means that cleaning the microwave from dirt is a quick and easy task. However, if you have a large area and you don't want to clean the microwave from dirt, you should first clean the microwave from a cold source. If you have a refrigerator in your kitchen, keep in mind that this should be done within 5 minutes of the time you put the microwave in the refrigerator. This will help prevent freezer burn.We know that the microwave is a small thing, but we still need to clean it from dirt. Get out and take a look at the things you have. Wash them thoroughly. And if the toilet bowl in your microwave bag doesn't appear, use a different one. Otherwise, be careful and clean the microwave from dirt.If you find this article interesting , please subscribe to my Zen, like it, and leave your comments.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end section -->

        <div class="footer_bottom">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <p class="crp">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  Copyright
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

      <div class="cookie-banner">
        <p style="color: #000000">
          The site uses cookies. They allow us to recognize you and get information about your user experience.By continuing to browse the site, I agree to the use of cookies by the site owner in accordance with 
          <a target="_blank" href="https://en.wikipedia.org/wiki/HTTP_cookie"
            >Cookie policy</a
          >
        </p>

        <button class="close-cookie">×</button>
      </div>

      <script>
        window.onload = function () {
          $('.close-cookie').click(function () {
            $('.cookie-banner').fadeOut();
          });
        };
      </script>

      <script>
        let elems = document.querySelectorAll('.server-name');
        elems.forEach((elem) => {
          elem.innerHTML = window.location.hostname;
        });
      </script>
      <!-- ALL JS FILES -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- ALL PLUGINS -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/jquery.pogo-slider.min.js"></script>
      <script src="js/form-validator.min.js"></script>
      <script src="js/contact-form-script.js"></script>
      <script src="js/isotope.min.js"></script>
      <script src="js/images-loded.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- End Google Map -->
      <script>
        $(document).ready(function () {
          $('#sidebarCollapse').on('click', function () {
            $('#sidebar, #content').toggleClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
          });
        });
      </script>
    </div>
  </body>
</html>
