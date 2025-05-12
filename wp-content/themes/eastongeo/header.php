 <?php    $post_id = get_the_ID();
// echo $post_id;
$active = get_the_title($post_id);
// echo $active;
// echo '<pre>';
// echo 'Post ID: ' . $post_id . "\n";=
// echo 'Page Title: ' . get_the_title($post_id) . "\n";
// echo 'Template: ' . get_page_template_slug($post_id) . "\n";
// echo 'Fields: ';
// var_dump(get_fields($post_id));
// echo '</pre>';?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <?php wp_head(); ?>
  
  <script defer="" src="<?php echo get_template_directory_uri(); ?>/js/menu.js"></script>
  <title>Easton Geology – Greg Easton Geologist</title>
</head>
<body>
  <header class="header">
    <a href="<?php echo get_permalink( get_page_by_path( 'home' ) ); ?>">
      <img class="logo" alt="Easton Geology logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" />
    </a>
    <nav class="main-nav">
      <ul class="main-nav-list">
       
      <li><a class="main-nav-link <?php echo $active === 'home' ? 'active-class' : 'inactive-class';
         ?>" href="<?php echo get_permalink( get_page_by_path( 'home' ) ); ?>">Home</a></li>
        <li><a class="main-nav-link <?php echo $active === 'about' ? 'active-class' : 'inactive-class';
         ?>" href="<?php echo get_permalink( get_page_by_path( 'about' ) ); ?>">About</a></li>
        <li><a class="main-nav-link <?php echo $active === 'services' ? 'active-class' : 'inactive-class';
         ?>" href="<?php echo get_permalink( get_page_by_path( 'services' ) ); ?>">Services</a></li>
        <li><a class="main-nav-link nav-cta <?php echo $active === 'contact' ? 'active-class' : 'inactive-class';
         ?>" href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>">Contact</a></li>
      </ul>
    </nav>
    <button class="btn-mobile-nav">
      <ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
      <ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
    </button>
  </header>