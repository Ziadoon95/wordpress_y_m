<?php get_header(); ?>
      <main class="main-content">
        <div class="fullwidth-block inner-content">
          <div class="container">
            <div class="row">
              <div class="col-md-7">
                <div class="content">
                  <h2 class="entry-title"><?=single_post_title(); ?></h2>
<?php while(have_posts()) : the_post();  ?> 
<?php get_template_part( 'template/content','single' ); ?>

<?php endwhile ; ?>
                  
        <!--           <div class="post">
                    <div class="entry-date">
                      <div class="date">23</div>
                      <span class="month">Jun</span>
                    </div>
                    <div class="featured-image">
                      <img src="dummy/featured-image-2.jpg" alt="" />
                    </div>
                    <h2 class="entry-title">
                      <a href="#">Consectetur adipisicing elit</a>
                    </h2>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Obcaecati officia quo dicta, similique, reiciendis beatae
                      enim adipisci voluptates molestiae iusto, totam harum
                      aliquid. Non officiis nobis, ut nesciunt eligendi
                      asperiores.
                    </p>
                    <a href="#">Read more</a>
                  </div>

                  <div class="post">
                    <div class="entry-date">
                      <div class="date">23</div>
                      <span class="month">Jun</span>
                    </div>
                    <div class="featured-image">
                      <img src="dummy/featured-image-3.jpg" alt="" />
                    </div>
                    <h2 class="entry-title">
                      <a href="#">Adipisci voluptates molestiae iusto</a>
                    </h2>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Obcaecati officia quo dicta, similique, reiciendis beatae
                      enim adipisci voluptates molestiae iusto, totam harum
                      aliquid. Non officiis nobis, ut nesciunt eligendi
                      asperiores.
                    </p>
                    <a href="#">Read more</a>
                  </div> -->

                <!--   <div class="post">
                    <div class="entry-date">
                      <div class="date">23</div>
                      <span class="month">Jun</span>
                    </div>
                    <div class="featured-image">
                      <img src="dummy/featured-image-4.jpg" alt="" />
                    </div>
                    <h2 class="entry-title">
                      <a href="#">Obcaecati officia quo dicta</a>
                    </h2>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Obcaecati officia quo dicta, similique, reiciendis beatae
                      enim adipisci voluptates molestiae iusto, totam harum
                      aliquid. Non officiis nobis, ut nesciunt eligendi
                      asperiores.
                    </p>
                    <a href="#">Read more</a>
                  </div>
 -->
                  <!-- <div class="post">
                    <div class="entry-date">
                      <div class="date">23</div>
                      <span class="month">Jun</span>
                    </div>
                    <div class="featured-image">
                      <img src="dummy/featured-image-5.jpg" alt="" />
                    </div>
                    <h2 class="entry-title">
                      <a href="#">Nesciunt eligendi asperiores</a>
                    </h2>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Obcaecati officia quo dicta, similique, reiciendis beatae
                      enim adipisci voluptates molestiae iusto, totam harum
                      aliquid. Non officiis nobis, ut nesciunt eligendi
                      asperiores.
                    </p>
                    <a href="#">Read more</a>
                  </div> -->
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
</html>
