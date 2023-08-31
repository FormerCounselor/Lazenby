<?php
/* Template Name: Library */
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
    <div class="books-left-column">
      <?php the_post_thumbnail('full'); ?>
      <div class="book-links">
        <?php the_content(); ?>
      </div>
    </div>
    <div class="book_description">
      <?php esc_html(the_field('book_description')); ?>
    </div>

  </div>
</body>


</html>
<?php get_footer(); ?>