<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body>
  <!-- Modal -->
  <div class="modal" id="promoModal">
    <div class="modal-content">
      <span class="close-btn" id="closeBtn">&times;</span>
      <a href="https://www.amazon.com/Magic-Life-Earvin-Johnson-ebook/dp/B0BQGGXQQN">
        <img class="magic-promo" src="http://roland.lazenby.local/wp-content/uploads/2023/09/magic_modal_promo.png" />
      </a>
      <p>Pre-order now!</p>
      <div class="book-links">
        <?php $bookLinks = get_book_links(); ?>
        <div class="book-links">
          <?php foreach ($bookLinks as $book) : ?>
            <a href="<?php echo $book['link']; ?>">
              <img src="http://roland.lazenby.local/wp-content/themes/lazenby/images/vendor_icons/<?php echo $book['icon']; ?>" />
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>


  <!-- <body <?php body_class(); ?>> -->
  <!-- 5 books he wants -->
  <div class="header-books">
    <?php
    $header_books = new WP_Query(['post_type' => 'books', 'category_name' => 'header']);
    while ($header_books->have_posts()) : $header_books->the_post();
    ?>
      <div class="header-book-container">
        <a href="<?php the_permalink(); ?>">
          <?php $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
          echo '<img class="header-book-covers" src="' . esc_url($image_url[0]) . '" alt="Image">'; ?>

          <a class="nav-book-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </a>
      </div>
    <?php endwhile;
    wp_reset_postdata(); ?>
  </div>

  <nav class="header-nav">
    <ul class="header-ul">
      <li class="header-li"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>

      <li class="header-li"><a href="<?php echo esc_url(home_url('/blog')); ?>">Roland's Notepad</a></li>

      <li class="header-li"><a href="<?php echo esc_url(home_url('/buy-books-by-roland')); ?>">Other Books By Roland</a></li>

      <li class="header-li strikethrough"><a href="">Discussion Board</a></li>

      <li class="header-li"><a href="<?php echo esc_url(home_url('/about-roland')); ?>">About Roland</a></li>
      <li class="header-li best-sellers"><a href="">Best Sellers by Roland</a></li>
    </ul>
  </nav>

  <div class="db-overlay">
    <h1>Coming Soon</h1>
  </div>

  <div class="books-overlay">
    <ul>
      <?php
      $header_books = new WP_Query(['post_type' => 'books', 'category_name' => 'header']);
      while ($header_books->have_posts()) : $header_books->the_post();
      ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
      <?php endwhile;
      wp_reset_postdata(); ?>
    </ul>
  </div>




  <?php if (current_user_can('administrator')) : ?>
    <div style="position: fixed; bottom: 0; z-index: 9999; padding: 5px;">
      <?php global $template;
      echo basename($template); ?>
    </div>
  <?php endif; ?>






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