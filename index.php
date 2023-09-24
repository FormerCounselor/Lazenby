<?php

get_header(); ?>


<div class="blog-page-container">
  <h1 class="blog-title">Roland's Notepad</h1>

  <?php
  while (have_posts()) {
    the_post(); ?>
    <div class="post-item">
      <h2 class="post-title"><a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a></h2>

      <div class="metabox">
        <p>Posted
          <!-- by <?php the_author_posts_link(); ?>  -->
          on <?php the_time('n.j.y'); ?>
          <!-- in <?php echo get_the_category_list(', '); ?></p> -->
      </div>

      <div class="blog-content">
        <?php the_content(); ?>
      </div>

    </div>
  <?php }
  echo paginate_links();
  ?>
</div>

<?php get_footer();

?>