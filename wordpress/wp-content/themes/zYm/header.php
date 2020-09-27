<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= get_template_directory_uri().'/style.css' ?>">
    <title>Document</title>
</head> 

<body <?php if(is_front_page()): body_class("header-collapse");endif; ?> >
<div id="site-content">
<header class="site-header">
        <div class="container">
          <a href="index.php" id="branding">
            <img src="dummy/logo.png" alt="Site Title" />
            <small class="site-description">Slogan goes here</small>
          </a>
          <!-- #branding -->

          <nav class="main-navigation">
            <button type="button" class="toggle-menu">
              <i class="fa fa-bars"></i>
            </button>
            <ul class="menu">
              <li class="menu-item"><a href="home">Home</a></li>
              <li class="menu-item current-menu-item">
                <a href="about">About</a>
              </li>
              <li class="menu-item"><a href="gallery">Gallery</a></li>
              <li class="menu-item"><a href="shop">Shop</a></li>
              <li class="menu-item"><a href="blog">Blog</a></li>
              <li class="menu-item"><a href="members">Members</a></li>
              <li class="menu-item"><a href="contact">Contact</a></li>
            </ul>
            <!-- .menu -->
          </nav>
          <!-- .main-navigation -->
          <div class="mobile-menu"></div>
        </div>
      </header>