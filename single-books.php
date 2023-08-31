<?php
echo 'Single-books.php is working';
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
  <?php
  // Get the ACF field value
  $template_type = get_field('template_type');
  var_dump($template_type);


  // Use it to include different template parts
  if ($template_type == 'main-books-nav') {
    get_template_part('template-parts/main-books-nav');
  } elseif ($template_type == 'nba-nav') {
    get_template_part('template-parts/nba-nav');
  } else {
    get_template_part('template-parts/library');
  }
  ?>
</body>


</html>
<?php get_footer(); ?>