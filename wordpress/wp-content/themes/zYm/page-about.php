<?php 
get_header();
?>
      <main class="main-content">
        <div class="fullwidth-block inner-content">
          <div class="container">
            <div class="row">
              <div class="col-md-7">
                <div class="content">
                  <h2 class="entry-title">Our History</h2>
                  <figure class="featured-image">
                  <?php 
                          $image_url = get_field("about_image")["url"] ;
                          ?>
                    <img src="<?=$image_url ?>" alt="post image" />
                     
                  </figure>
                  <p class="leading">
                    class leading
                  </p>
                  <p>
                    <?= the_field("about_description")?>
                  </p>

              
                </div>
              </div>
              <div class="col-md-4 col-md-push-1">
                <aside class="sidebar">
                  <div class="widget">
                    <h3 class="widget-title">Discography</h3>
                    <ul class="discography-list">
                      <li>
                        <figure class="cover">
                          <img src="dummy/thumbnail-1.jpg" alt="thumbnail 1" />
                        
                        </figure>
                        <div class="detail">
                      <?=  var_dump(single_post_title()); ?>

                          <h3><a href="#">Deserunt mollitia animi</a></h3>
                          <span class="year">2004</span>
                          <span class="track">17 tracks</span>
                        </div>
                      </li>
                      <li>
                        <figure class="cover">
                          <img src="dummy/thumbnail-2.jpg" alt="thumbnail 2" />
                        </figure>
                        <div class="detail">
                          <h3><a href="#">Deserunt mollitia animi</a></h3>
                          <span class="year">2004</span>
                          <span class="track">17 tracks</span>
                        </div>
                      </li>
                      <li>
                        <figure class="cover">
                          <img src="dummy/thumbnail-3.jpg" alt="thumbnail 3" />
                        </figure>
                        <div class="detail">
                          <h3><a href="#">Deserunt mollitia animi</a></h3>
                          <span class="year">2004</span>
                          <span class="track">17 tracks</span>
                        </div>
                      </li>
                      <li>
                        <figure class="cover">
                          <img src="dummy/thumbnail-4.jpg" alt="thumbnail 4" />
                        </figure>
                        <div class="detail">
                          <h3><a href="#">Deserunt mollitia animi</a></h3>
                          <span class="year">2004</span>
                          <span class="track">17 tracks</span>
                        </div>
                      </li>
                      <li>
                        <figure class="cover">
                          <img src="dummy/thumbnail-5.jpg" alt="thumbnail 5" />
                        </figure>
                        <div class="detail">
                          <h3><a href="#">Deserunt mollitia animi</a></h3>
                          <span class="year">2004</span>
                          <span class="track">17 tracks</span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </aside>
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