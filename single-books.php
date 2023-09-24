<?php

/* Template Name: Single Book Display



*/
?>
<?php get_header(); ?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Word</title>
</head>

<body>
  <h3 class="book-title">
    <?php the_title(); ?>
  </h3>
  <div class="books">
    <div class="book-media">
      <img class="book-cover" src="<?php the_post_thumbnail('350x529'); ?>
      <div class=" book-links">
      <?php the_content(); ?>
    </div>
  </div>
  <div class="book-description">
    <?php esc_html(the_field('book_description')); ?>
  </div>

  </div>
</body>


</html>
<?php get_footer(); ?>