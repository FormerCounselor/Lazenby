<?php get_header();
?>

<!-- <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.jpg') ?>);"></div> -->
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Website</title>
</head>




<body>
  <div class="front-page-container">
    <div class="social-media-grid">
      <div class="twitter-timeline-div">

        <a class="twitter-timeline" data-lang="en" href="https://twitter.com/lazenby?ref_src=twsrc%5Etfw">Tweets by lazenby</a>
        <div class="twitter-button-container">
          <a href="https://twitter.com/lazenby?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @lazenby</a>
          <a href="https://twitter.com/intent/tweet?screen_name=lazenby&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="false">Tweet to @lazenby</a>
        </div>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>

      <div class="blog">
        <h1 class="blog-title">Roland's latest thoughts</h1>
        <?php
        $homepagePosts = new WP_Query(array(
          'posts_per_page' => 3
        ));

        while ($homepagePosts->have_posts()) {
          $homepagePosts->the_post(); ?>
          <div>

            <div>
              <h2 class="preview-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
              <a class="tiny-text" href="<?php the_permalink(); ?>">
                <span><?php the_time('M'); ?></span>
                <span><?php the_time('d'); ?></span>
              </a>
              <p><?php echo wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
            </div>
          </div>
        <?php }
        wp_reset_postdata();
        ?>
        <p><a href="<?php echo site_url('/blog') ?>">View All Blog Posts</a></p>

      </div>

      <div class="instagram-profile">
        <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/rllazenby/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14">
          <div class="instagram-media-content">
            <a href="https://www.instagram.com/rllazenby/?utm_source=ig_embed&amp;utm_campaign=loading" class="instagram-link" target="_blank">
              <div class="profile-header">
                <div class="profile-avatar"></div>
                <div class="profile-details">
                  <div class="profile-name"></div>
                  <div class="profile-username"></div>
                </div>
              </div>
              <div class="cta-padding"></div>
              <!-- SVG part and other content ... -->
            </a>
          </div>
        </blockquote>
      </div>
      <script async src="//www.instagram.com/embed.js"></script>

    </div>
  </div>
  </div>
  </div>

</body>

</html>

<?php get_footer();

?>