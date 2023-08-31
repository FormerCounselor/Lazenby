<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body>
  <!-- <body <?php body_class(); ?>> -->
  <nav class="header_nav">
    <ul>
      <?php if (get_post_field('post_name') !== 'home-2') : ?>
        <li class="header_li"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
      <?php endif; ?>

      <?php if (get_the_id() !== 29) : ?>
        <li class="header_li"><a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a></li>
      <?php endif; ?>

      <?php if (get_post_field('post_name') !== 'buy-books-by-roland') : ?>
        <li class="header_li"><a href="<?php echo esc_url(home_url('/buy-books-by-roland')); ?>">Buy Books By Roland</a></li>
      <?php endif; ?>

      <?php if (get_post_field('post_name') !== 'discussion-board') : ?>
        <li class="header_li"><a href="<?php echo esc_url(home_url('/discussion-board')); ?>">Discussion Board</a></li>
      <?php endif; ?>

      <?php if (get_post_field('post_name') !== 'social-media') : ?>
        <li class="header_li"><a href="<?php echo esc_url(home_url('/social-media')); ?>">Social Media</a></li>
      <?php endif; ?>

      <?php if (get_post_field('post_name') !== 'about-roland') : ?>
        <li class="header_li"><a href="<?php echo esc_url(home_url('/about-roland')); ?>">About Roland</a></li>
      <?php endif; ?>
    </ul>
  </nav>


  <!-- <ul>
    <li <?php if (is_page('about-us') or wp_get_post_parent_id(0) == 16) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
    <li><a href="#">Programs</a></li>
    <li><a href="#">Events</a></li>
    <li><a href="#">Campuses</a></li>
    <li <?php if (get_post_type() == 'post') echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/blog') ?>">Blog</a></li>
  </ul>
  </nav>
  <div class="site-header__util">
    <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
    <a href="#" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
    <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
  </div>
  </div>
  </div> -->
  </header>