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
                    >Clean air</a
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
                  background: url('./assets/images/nino-maghradze-buxdqh53eis-unsplash.jpg');
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
                  <h3>Special products for work style.Spring cleaning in the office</h3>
                  <p><strong></strong> The office cleaning market is very competitive, and the company that has the highest quality product in the office area is in a strong position. Therefore, the work of a cleaning company's specialists should be performed perfectly. In addition to standard cleaning services, the company offers specialties that are aimed at the work of a professional cleaning specialist. To the extent that the company can, in order to attract a new client, offers work that is carried out with the special characteristics. cleaning products. But, in general, specialists do not carry out cleaning on a regular basis, and only on preferential occasions. In this sense, the work of a cleaning specialist is: an individual approach. The cleaning company itself is not involved in the selection of works for cleaning services.The work of a cleaning specialist must be performed in the following areas: clean the office premises from dirt and dust; remove stains from surfaces.wash window sills and window frames from dust and dirt;curtail the use of equipment and fittings that are used for regular cleaning;clean windows and doors from dirt.clean upholstered furniture from stains.wash curtains and upholstered furniture from dust and dirt.clean upholstered carpets and carpet from dirt.clean upholstered tablecloths from dirt.clean upholstered lighting fixtures from dirt.wash and wash the floors in the office and in the guest house.clean upholstered window sills, window frames, and furniture from dirt.clean fixtures from dirt.wash and wash the interior of the office and guest house.Cleaning services offered by cleaning companies are always carried out in the shortest possible time.The work of specialists is carried out in the following areas: clean and wash the windows from dirt; clean and wash the surfaces of the office and guest house; clean and wash the floors in the office and in the guest house.Specialists clean office premises using specialized equipment and chemicals. special tools. Cuts and scrapes are performed using special brushes. special tools. The cleaning of offices and guest houses is carried out with the help of specialized equipment, which allows you to use special tools and not require special knowledge. special skills.Cleaning company services are carried out using a wide variety of tools and materials. Each of them requires special knowledge and skills.Cleaning companies use a variety of cleaning products. In particular, they are engaged in:special tools for cleaning office premises:brushes and sponges;removing grit from surfaces.removing dirt from upholstered furniture;removing stains from surfaces.cleaning of window sills and furniture using special cleaning agents.cleaning for cleaning purposes washing dishes and cleaning surfaces from dirt;removing stains from upholstered furniture.special tools for cleaning offices and guest houses:hand grenades, liquid detergents, and spray bottles</p>
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
