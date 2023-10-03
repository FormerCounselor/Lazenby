<?php
get_header();
?>

<div class="blog-page-container">
  <h1 class="blog-title">Roland's Notepad</h1>

  <?php
  while (have_posts()) {
    the_post();
  ?>

    <div class="post-item">
      <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <div class="metabox">
        <p>Posted on <?php the_time('n.j.y'); ?></p>
      </div>
      <div class="blog-content">
        <?php if (has_post_thumbnail()) : ?>
          <?php
          $thumbnail_id = get_post_thumbnail_id();
          $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
          ?>
          <img class="blog-image" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>">
        <?php endif; ?>

        <?php the_content(); ?>
      </div>
    </div>

  <?php
  }
  echo paginate_links();
  ?>

</div> <!-- closing tag for .blog-page-container -->

<?php
get_footer();
?>