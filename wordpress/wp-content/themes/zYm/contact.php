<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0,maximum-scale=1"
    />

    <title>About Us| Band Template</title>
    <!-- Loading third party fonts -->
    <link
      href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900"
      rel="stylesheet"
      type="text/css"
    />
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Loading main css file -->
    <link rel="stylesheet" href="style.css" />

    <!--[if lt IE 9]>
      <script src="js/ie-support/html5.js"></script>
      <script src="js/ie-support/respond.js"></script>
    <![endif]-->
  </head>

  <body>
    <div id="site-content">
      <header class="site-header">
        <div class="container">
          <a href="index.html" id="branding">
            <img src="dummy/logo.png" alt="Site Title" />
            <small class="site-description">Slogan goes here</small>
          </a>
          <!-- #branding -->

          <nav class="main-navigation">
            <button type="button" class="toggle-menu">
              <i class="fa fa-bars"></i>
            </button>
            <ul class="menu">
              <li class="menu-item"><a href="index.html">Home</a></li>
              <li class="menu-item"><a href="about.html">About</a></li>
              <li class="menu-item"><a href="gallery.html">Gallery</a></li>
              <li class="menu-item"><a href="shop.html">Shop</a></li>
              <li class="menu-item"><a href="blog.html">Blog</a></li>
              <li class="menu-item current-menu-item">
                <a href="contact.html">Contact</a>
              </li>
            </ul>
            <!-- .menu -->
          </nav>
          <!-- .main-navigation -->
          <div class="mobile-menu"></div>
        </div>
      </header>
      <!-- .site-header -->

      <main class="main-content">
        <div class="fullwidth-block inner-content">
          <div class="container">
            <h2 class="page-title">Contact Us</h2>
            <div class="row">
              <div class="col-md-6">
                <form action="#" class="contact-form">
                  <input type="text" placeholder="Your name" .. />
                  <input type="text" placeholder="Email Address.." />
                  <input type="text" placeholder="Website..." />
                  <textarea name="#" placeholder="Message..."></textarea>
                  <input type="submit" value="Send message" />
                </form>
              </div>
              <div class="col-md-6">
                <div class="map-wrapper">
                  <div class="map"></div>
                  <address>
                    <div class="row">
                      <div class="col-sm-6">
                        <strong>Company Name INC.</strong>
                        <span>40 Sibley St, Detroit</span>
                      </div>
                      <div class="col-sm-6">
                        <a href="mailto:office@companyname.com">
                          office@companyname.com
                        </a>
                        <br />
                        <a href="tel:532930098891">(532) 930 098 891</a>
                      </div>
                    </div>
                  </address>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- .testimonial-section -->
      </main>
      <!-- .main-content -->

      <footer class="site-footer">
        <div class="container">
          <img src="dummy/logo-footer.png" alt="Site Name" />

          <address>
            <p>
              495 Brainard St. Detroit, MI 48201
              <br />
              <a href="tel:354543543">(563) 429 234 890</a>
              <br />
              <a href="mailto:info@bandname.com">info@bandname.com</a>
            </p>
          </address>

          <form action="#" class="newsletter-form">
            <input
              type="email"
              placeholder="Enter your email to join newsletter..."
            />
            <input type="submit" class="button cut-corner" value="Subscribe" />
          </form>
          <!-- .newsletter-form -->

          <div class="social-links">
            <a href="#"><i class="fa fa-facebook-square"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </div>
          <!-- .social-links -->

          <p class="copy">
            Copyright 2014 Company Name. Designed by Themezy. All right reserved
          </p>
        </div>
      </footer>
      <!-- .site-footer -->
    </div>
    <!-- #site-content -->

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="js/plugins.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
