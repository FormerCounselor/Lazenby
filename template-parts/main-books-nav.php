<?php
// Template Name: Main-books-nav.php
get_header();
?>
<h1 class="heading-one">Categories</h1>
<h4 class="heading-four">Foreign Language Section</h4>
<p></p>

<div class="category-container">

  <!-- NBA Books -->
  <div class="nba-books">
    <h3 class="heading-three">NBA Books</h3>
    <?php
    $nba_books = new WP_Query(['post_type' => 'books', 'category_name' => 'nba']);
    while ($nba_books->have_posts()) : $nba_books->the_post();
    ?>
      <div>
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('thumbnail'); ?>
          <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
        </a>
      </div>
    <?php endwhile;
    wp_reset_postdata(); ?>
  </div>

  <!-- NFL Books -->
  <div class="nfl-books">
    <h3 class="heading-three">NFL Books</h3>
    <?php
    $nfl_books = new WP_Query(['post_type' => 'books', 'category_name' => 'nfl']);
    while ($nfl_books->have_posts()) : $nfl_books->the_post();
    ?>
      <div>
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('thumbnail'); ?>
          <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
        </a>
      </div>
    <?php endwhile;
    wp_reset_postdata(); ?>
  </div>

  <!-- Biographies -->
  <div class="bio-books">
    <h3 class="heading-three">Biographies</h3>
    <?php
    $bio_books = new WP_Query(['post_type' => 'books', 'category_name' => 'biographies']);
    while ($bio_books->have_posts()) : $bio_books->the_post();
    ?>
      <div>
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('thumbnail'); ?>
          <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
        </a>
      </div>
    <?php endwhile;
    wp_reset_postdata(); ?>
  </div>

</div>

<?php
get_footer();
