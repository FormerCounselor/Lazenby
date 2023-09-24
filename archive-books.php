<?php
/*
Template Name: Books Nav
*/
get_header();
?>
<div class="page-container">
  <div class="category-container">

    <!-- Biographies -->
    <h3 class="book-heading">Biographies</h3>
    <div class="bio-books last-row-span">
      <?php
      $bio_books = new WP_Query(['post_type' => 'books', 'category_name' => 'biographies']);
      while ($bio_books->have_posts()) : $bio_books->the_post();
      ?>
        <div class="book-container">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('200x300'); ?>
            <a class="nav-book-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </a>
        </div>
      <?php endwhile;
      wp_reset_postdata(); ?>
    </div>

    <!-- NFL Books -->
    <h3 class="book-heading">NFL Books</h3>
    <div class="nfl-books last-row-span">
      <?php
      $nfl_books = new WP_Query(['post_type' => 'books', 'category_name' => 'nfl']);
      while ($nfl_books->have_posts()) : $nfl_books->the_post();
      ?>
        <div class="book-container">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('200x300'); ?>
            <a class="nav-book-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </a>
        </div>
      <?php endwhile;
      wp_reset_postdata(); ?>
    </div>

    <!-- NBA Books -->
    <h3 class="book-heading">NBA Books</h3>
    <div class="nba-books last-row-span">
      <?php
      $nba_books = new WP_Query(['post_type' => 'books', 'category_name' => 'nba']);
      while ($nba_books->have_posts()) : $nba_books->the_post();
      ?>
        <div class="book-container">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('200x300'); ?>
          </a>
          <a class="nav-book-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </a>
        </div>
      <?php endwhile;
      wp_reset_postdata(); ?>
    </div>
    <!-- Foreign Language -->
    <h3 class="book-heading">Foreign Language</h3>
    <div class="foreign last-row-span">
      <?php
      $foreign = new WP_Query(['post_type' => 'books', 'category_name' => 'foreign']);
      while ($foreign->have_posts()) : $foreign->the_post();
      ?>
        <div class="book-container">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('200x300'); ?>
          </a>
          <a class="nav-book-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </a>
        </div>
      <?php endwhile;
      wp_reset_postdata(); ?>
    </div>

  </div>

</div>


<?php
get_footer();
