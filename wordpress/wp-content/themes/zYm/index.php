<?php get_header();?>
<?php
/* while (have_posts()) :
the_post();
the_title();
the_content(); endwhile;

 */

?>

<?php if ( have_posts() ) : ?>
<?php
// Start the loop.
while ( have_posts() ) : the_post();
/*
* Include the Post-Format-specific template for
the content.
* If you want to override this in a child
theme, then include a file
* called content-___.php (where ___ is the Post
Format name) and that will be used instead.
*/
get_template_part( 'template/content',
get_post_format() );
// End the loop.
endwhile;
// Previous/next page navigation.
/* the_posts_pagination( array(
'prev_text' => __( 'Previous page',
'spritz' ),
'next_text' => __( 'Next page',
'spritz' ),
'before_page_number' => '<span class="meta-nav
screen-reader-text">' . __( 'Page', 'spritz' ) . ' </span>',
) ); */
// If no content, include the "No posts found" template.
else :
get_template_part( 'template/content', 'none' );
endif;

?>
  <body class="header-collapse">
 

    <!-- here -->
    <div id="site-content">
     <!--  <header class="site-header">
        <div class="container">
          <a href="index.php" id="branding">
            <img src="dummy/logo.png" alt="Site Title" />
            <small class="site-description">Slogan goes here</small>
          </a> -->
          <!-- #branding -->

        <!--   <nav class="main-navigation">
            <button type="button" class="toggle-menu">
              <i class="fa fa-bars"></i>
            </button>
            <ul class="menu">
              <li class="menu-item current-menu-item">
                <a href="index.php">Home</a>
              </li>
              <li class="menu-item"><a href="about.php">About</a></li>
              <li class="menu-item"><a href="gallery.php">Gallery</a></li>
              <li class="menu-item"><a href="shop.php">Shop</a></li>
              <li class="menu-item"><a href="blog.php">Blog</a></li>
              <li class="menu-item"><a href="contact.php">Contact</a></li>
            </ul> -->
            <!-- .menu -->
         <!--  </nav> -->
          <!-- .main-navigation -->
       <!--    <div class="mobile-menu"></div>
        </div>
      </header> -->
      <!-- .site-header -->

    
  </body>

<?php get_footer();?>