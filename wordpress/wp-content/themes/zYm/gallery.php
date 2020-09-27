<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0,maximum-scale=1"
    />

    <title>Gallery | Band Template</title>
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
              <li class="menu-item current-menu-item">
                <a href="gallery.html">Gallery</a>
              </li>
              <li class="menu-item"><a href="shop.html">Shop</a></li>
              <li class="menu-item"><a href="blog.html">Blog</a></li>
              <li class="menu-item"><a href="contact.html">Contact</a></li>
            </ul>
            <!-- .menu -->
          </nav>
          <!-- .main-navigation -->
          <div class="mobile-menu"></div>
        </div>
      </header>
      <!-- .site-header -->

      <main class="main-content">
        <div class="fullwidth-block gallery">
          <div class="container">
            <div class="content fullwidth">
              <h2 class="entry-title">Gallery</h2>
              <div class="filter-links filterable-nav">
                <select class="mobile-filter">
                  <option value="*">Show all</option>
                  <option value=".concert">Concert</option>
                  <option value=".band">Band</option>
                  <option value=".stuff">Stuff</option>
                </select>
                <a href="#" class="current" data-filter="*">Show all</a>
                <a href="#" data-filter=".concert">Concert</a>
                <a href="#" data-filter=".band">Band</a>
                <a href="#" data-filter=".stuff">Stuff</a>
              </div>
              <div class="filterable-items">
                <div class="filterable-item concert">
                  <a href="dummy/large-gallery/gallery-1.jpg">
                    <figure>
                      <img src="dummy/gallery-1.jpg" alt="gallery 1" />
                    </figure>
                  </a>
                </div>
                <div class="filterable-item concert">
                  <a href="dummy/large-gallery/gallery-2.jpg">
                    <figure>
                      <img src="dummy/gallery-2.jpg" alt="gallery 2" />
                    </figure>
                  </a>
                </div>
                <div class="filterable-item stuff">
                  <a href="dummy/large-gallery/gallery-3.jpg">
                    <figure>
                      <img src="dummy/gallery-3.jpg" alt="gallery 3" />
                    </figure>
                  </a>
                </div>
                <div class="filterable-item concert">
                  <a href="dummy/large-gallery/gallery-4.jpg">
                    <figure>
                      <img src="dummy/gallery-4.jpg" alt="gallery 4" />
                    </figure>
                  </a>
                </div>
                <div class="filterable-item band">
                  <a href="dummy/large-gallery/gallery-5.jpg">
                    <figure>
                      <img src="dummy/gallery-5.jpg" alt="gallery 5" />
                    </figure>
                  </a>
                </div>
                <div class="filterable-item stuff">
                  <a href="dummy/large-gallery/gallery-6.jpg">
                    <figure>
                      <img src="dummy/gallery-6.jpg" alt="gallery 6" />
                    </figure>
                  </a>
                </div>
                <div class="filterable-item concert">
                  <a href="dummy/large-gallery/gallery-7.jpg">
                    <figure>
                      <img src="dummy/gallery-7.jpg" alt="gallery 7" />
                    </figure>
                  </a>
                </div>
                <div class="filterable-item band">
                  <a href="dummy/large-gallery/gallery-8.jpg">
                    <figure>
                      <img src="dummy/gallery-8.jpg" alt="gallery 8" />
                    </figure>
                  </a>
                </div>
                <div class="filterable-item band">
                  <a href="dummy/large-gallery/gallery-9.jpg">
                    <figure>
                      <img src="dummy/gallery-9.jpg" alt="gallery 9" />
                    </figure>
                  </a>
                </div>
                <div class="filterable-item stuff">
                  <a href="dummy/large-gallery/gallery-10.jpg">
                    <figure>
                      <img src="dummy/gallery-10.jpg" alt="gallery 10" />
                    </figure>
                  </a>
                </div>
                <div class="filterable-item band">
                  <a href="dummy/large-gallery/gallery-11.jpg">
                    <figure>
                      <img src="dummy/gallery-11.jpg" alt="gallery 11" />
                    </figure>
                  </a>
                </div>
                <div class="filterable-item stuff">
                  <a href="dummy/large-gallery/gallery-12.jpg">
                    <figure>
                      <img src="dummy/gallery-12.jpg" alt="gallery 12" />
                    </figure>
                  </a>
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
    <script src="js/plugins.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
