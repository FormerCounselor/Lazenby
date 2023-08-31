<?php get_header();
?>

<!-- <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.jpg') ?>);"></div> -->
<!DOCTYPE html>
<html>

<head>
  <title>My Website</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <!-- <div class="navbarContainer">
    <div class="navbar">
      <div class="listItem">
        <p>Discussion Board</p>
      </div>
      <div class="listItem">
        <p>Magic: The Life of Earvin "Magic" Johnson</p>
      </div>
      <div class="listItem">
        <p>Michael Jordan: The Life</p>
      </div>
      <div class="listItem">
        <p>Buy Books By Roland</p>
        <ul class="listItem overlay" id="buyBooks">
          <li>
            <span class="ListItem">Book No Further</span>
            <br />
            <span class="subTitle">Three Recent Books</span>
          </li>

          <li>
            <span class="ListItem">Barnes & Noble</span>
            <br />
            <span class="subTitle">All Books</span>
          </li>

          <li>
            <span class="ListItem">Amazon</span>
            <br />
            <span class="subTitle">All Books</span>
          </li>
        </ul>
      </div>
      <div class="listItem">
        <p>About Roland</p>
      </div>
    </div>
  </div> -->
  <div class="socialMedia"></div>
  <!-- Your other content goes here -->
  <script src="style.js"></script>
</body>

</html>
<html>

</html>

<h2>Roland's latest thoughts</h2>
<?php
$homepagePosts = new WP_Query(array(
  'posts_per_page' => 2
));

while ($homepagePosts->have_posts()) {
  $homepagePosts->the_post(); ?>
  <div class="">
    <a class="" href="<?php the_permalink(); ?>">
      <span class=""><?php the_time('M'); ?></span>
      <span class=""><?php the_time('d'); ?></span>
    </a>
    <div class="">
      <h5 class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
      <p><?php echo wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
    </div>
  </div>
<?php }
wp_reset_postdata();
?>




<p class="t-center no-margin"><a href="<?php echo site_url('/blog') ?>" class="btn btn--yellow">View All Blog Posts</a></p>



<!-- <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/bus.jpg'); ?>);">

  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/apples.jpg'); ?>);">

    <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/bread.jpg'); ?>);"> -->


<!-- <?php get_footer();

      ?> -->