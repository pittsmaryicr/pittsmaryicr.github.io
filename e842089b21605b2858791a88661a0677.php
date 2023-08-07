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
                    >Service</a
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
                  background: url('./assets/images/allen-taylor-damvcgb8vog-unsplash.jpg');
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
                  <h3>Helpful tips for cleaning the bathroom</h3>
                  <p><strong></strong> As you know, cleaning the bathroom is a very time-consuming process. And although the amount of work put forth by cleaning specialists in this area is quite minimal, it is still a great responsibility. Therefore, we offer some helpful tips for cleaning the bathroom.1. Choose a cleaning brush. Cleaning brushes are a great option when you need to clean the bathroom debris, but not so useful when the bathroom is not fully cleaned. In either case, it is improbable that you will use the same brush twice. 2. Clean the toilet itself. "Classic" bathroom cleaners include bleach, ammonia and vinegar. This is a dangerous mixture that can cause serious burns if you don't act quickly. Therefore, use bleach with caution.3. Clean the tiles. If the tiles in the bathroom contain stains, treat them with bleach, ammonia and vinegar. Then wash the tiles with warm water and wash off the bleach. This is a safe and easy way to clean the tiles.4. Clean the mirrors. Get rid of the unpleasant smell that permeates the bathroom. This is a very simple and easy-to-clean procedure. use. As cleaning agents, you can use lemon juice and vinegar. Pour it into a spray bottle and spray the mirror surfaces, then wipe them dry.5. Clean the floor. If it is covered with a thick film, apply a thin layer of mineral oil. This is a very easy and inexpensive way to clean the floor, which is very soft. 6. Clean the mirrors. To clean the mirrors, spray a special spray with a cleaning agent. this is a stain remover. Soak the surfaces with a damp cloth and wipe with a clean, fresh cloth. As a result, the surface will be thoroughly cleaned, and the stains will be easily removed. 7. Clean the toilet. As you know, cleaning the toilet is a very complex task. And it is not at all surprising that the work put forth by cleaners is not always effective.Therefore, it is advisable to entrust the cleaning of bathrooms to a cleaning company. They will do the cleaning in the shortest possible time, using the lowest-cost, but reliable tools. They will surely carry out everything you want to do, and more.Naturally, you can ask for advice from your specialists about professional cleaning services. But if you contact them, you will only get useful tips from men. If you contact a woman, make sure that she knows about the contents of the container and does not use it as a dumping ground.Men, in general, are better at cleaning toilets than women. If you ask any man to clean the toilet for you, there is no doubt that the result will be better for him. And if you ask a woman to do this for you, then you should be sure that she understands the meaning of "you." In any case, you need to use</p>
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
