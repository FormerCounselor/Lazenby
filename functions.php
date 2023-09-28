<?php
function roland_files()
{

  // Initialize variables

  $path = get_stylesheet_directory() . '/css/stylies-min.css';
  $uri = get_stylesheet_directory_uri() . '/css/stylies-min.css';

  var_dump(file_exists($path));  // Should print bool(true) if the file exists
  var_dump($path); // Should print the absolute path to your stylesheet
  var_dump($uri);  // Should print the URI to your stylesheet

  // ... rest of your code

  wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'));
  wp_enqueue_style('university_main_styles', get_theme_file_uri('/css/stylies-min.css'));
}


function get_book_links()
{
  return array(
    array('link' => 'https://www.amazon.com/Magic-Life-Earvin-Johnson-ebook/dp/B0BQGGXQQN', 'icon' => 'amazon.png'),
    array('link' => 'https://www.barnesandnoble.com/w/magic-roland-lazenby/1143416141?ean=9781250248039', 'icon' => 'bn.png'),
    array('link' => 'https://bookshop.org/p/books/magic-the-life-of-earvin-magic-johnson-roland-lazenby/19537913?ean=9781250248039', 'icon' => 'indiebound.png'),
    array('link' => 'https://www.audible.com/pd/Magic-The-Life-of-Earvin-Magic-Johnson-Audiobook/B0C31XMNHC?qid=1692327813&amp;sr=1-4&amp;ref=a_search_c3_lProduct_1_4&amp;pf_rd_p=83218cca-c308-412f-bfcf-90198b687a2f&amp;pf_rd_r=52DCXHNDFMM3E2YPB7S3&amp;pageLoadId=5b3E4fytvOWLNR2u&amp;creativeId=0d6f6720-f41c-457e-a42b-8c8dceb62f2c', 'icon' => 'audible.png'),
    array('link' => 'https://www.booksamillion.com/p/Magic/Roland-Lazenby/9781250248039?id=8923282972883', 'icon' => 'bam.png'),
    array('link' => 'https://www.kobo.com/us/en/audiobook/magic-the-life-of-earvin-magic-johnson', 'icon' => 'kobo.png'),
    array('link' => 'https://books.apple.com/us/book/magic-the-life-of-earvin-magic-johnson/id6447523213', 'icon' => 'ibooks.png'),
    array('link' => 'https://play.google.com/store/books/details/Roland_Lazenby_Magic_The_Life_of_Earvin_Magic_John?id=wMCiEAAAQBAJ&amp;hl=en_US&amp;gl=US', 'icon' => 'googleplay.png'),
    array('link' => 'https://www.indigo.ca/en-ca/magic-the-life-of-earvin-%E2%80%9Cmagic%E2%80%9D-johnson/9781250248039.html', 'icon' => 'indigo.png'),
    array('link' => 'https://www.target.com/p/magic-the-life-of-earvin-magic-johnson-by-roland-lazenby-hardcover/-/A-88290481#lnk=sametab', 'icon' => 'target.png'),
    array('link' => 'https://www.goodreads.com/book/show/65215082-magic?from_search=true&amp;from_srp=true&amp;qid=C9dbxxqWEG&amp;rank=2', 'icon' => 'goodreads.png'),
  );
}



function university_features()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

function display_featured_image($atts)
{
  $attributes = shortcode_atts(
    array(
      'size' => 'thumbnail', // Default size
      'class' => '',          // Default class
      'id'    => '',          // Default id
    ),
    $atts
  );

  if (has_post_thumbnail()) {
    return get_the_post_thumbnail(null, $attributes['size'], array(
      'class' => $attributes['class'],
      'id'    => $attributes['id']
    ));
  }
  return '';
}

add_shortcode('featured_image', 'display_featured_image');
add_action('after_setup_theme', 'university_features');
add_action('wp_enqueue_scripts', 'roland_files');

function add_custom_image_sizes()
{
  // Library nav page
  add_image_size('200x300', 200, 300, true);

  // Library main book pages
  add_image_size('350x529', 350, 529, true);

  // Landscape orientation
  add_image_size('500x350', 500, 350, true);

  // Mobile S Nav 
  add_image_size('100x150', 100, 150, true);
}

add_action('after_setup_theme', 'add_custom_image_sizes');
