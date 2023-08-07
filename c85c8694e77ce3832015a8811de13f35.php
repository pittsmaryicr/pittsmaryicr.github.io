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
                    >Neatness</a
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
                  background: url('./assets/images/john-cameron-_rkgdounzy0-unsplash.jpg');
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
                  <h3>Winter in the capital is not easy</h3>
                  <p><strong></strong> The country is freezing in the cold season. With this in mind, and with a heavy heart, I come to you today to tell you about the difficulties of working in the winter in the capital.Cold weather and snow cover the city-it is not easy to work without the help of special equipment and services. In order to continue to work efficiently, you need to carefully and correctly adjust your equipment, and in the cold, it is necessary to remove the windows. This is not always possible, so it is necessary to use the help of professional services or face the consequences of personal liability.While these services are convenient for us-summer and winter employees - at the very moment we are facing a full-blown winter. For us, this means that the need for work and for the first time for the winter is much greater. This is a real problem for business, because it is very difficult to work if you have to work with your back to the wall.Snow removal is also not an easy task. The snow is removed using special equipment, which is equipped with special equipment. equipment. It is very important to understand that the snow does not fall on the right side of the street, but on the street in the direction of a car. There are also special anti-ice tools that are used for this purpose. It is also necessary to understand that the snow is removed in the evening, before daylight, and that the width of the street and the amount of snowfall do not allow you to work at the same time. Do not forget that at the beginning of the season, the street is usually not open, so you need to work at night.The second reason is the problem of avoiding accidents. if a car loses control of a snow plow and drags the plow along with it, then the load will not be able to fully move. In addition, the snow plow must be unloaded at the end of the street, and then brought to the site. there will be no need to drive to the site.Snow removal specialists work in pairs. If there are two snow plows, they work on the same side of the street, and the other one works on the opposite site. Snow removal specialists have their own personal equipment, and it is necessary to use it in the snow, for example, by dragging heavy equipment.Snow removal specialists also work in groups, and so on. In each of these cases, a liaison officer is responsible for the area in which they work.This is not the first time that snowfall in the capital has forced the government to change its policies. Before the winter, they introduced a new policy that allows employees of the cold season to work from 11.00 to 16.00 at the request of employers who do not have employees who work from 12.00 to 17.00. The new policy allows the employees to</p>
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
