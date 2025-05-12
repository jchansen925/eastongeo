<footer class="footer">
    <div class="container grid grid--footer">
      <div class="logo-col">
        <a href="<?php echo get_permalink( get_page_by_path( 'home' ) ); ?>" class="footer-logo">
          <img class="logo" alt="Easton Geology logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" />
        </a>
        <ul class="social-links">
          <li>
            <a class="footer-link" href="https://www.instagram.com/eastongeology"><ion-icon class="social-icon"
                name="logo-instagram"></ion-icon></a>
          </li>
          <li>
            <a class="footer-link" href="https://www.facebook.com/EastonGeology/"><ion-icon class="social-icon"
                name="logo-facebook"></ion-icon></a>
          </li>
          <li>
            <a class="footer-link" href="https://x.com/eastongeology"><ion-icon class="social-icon"
                name="logo-twitter"></ion-icon></a>
          </li>
        </ul>
      </div>
      <div class="address-col">
        <p class="footer-heading">Contact us</p>
        <address class="contacts">
          <p class="address">PO Box 3533, Santa Cruz, CA 95063</p>
          <p>
            <a class="footer-link" href="tel:415-201-6370">831-247-4317</a><br />
            <a class="footer-link" href="mailto:info@eastongeology.com">info@eastongeology.com</a>
          </p>
        </address>
      </div>
      <nav class="nav-col">
        <p class="footer-heading">Company</p>
        <ul class="footer-nav">
          <li><a class="footer-link" href="<?php echo get_permalink( get_page_by_path( 'home' ) ); ?>">Home</a></li>
          <li><a class="footer-link" href="<?php echo get_permalink( get_page_by_path( 'about' ) ); ?>">About Easton Geology</a></li>
          <li><a class="footer-link" href="<?php echo get_permalink( get_page_by_path( 'services' ) ); ?>">Services</a></li>
          <li><a class="footer-link" href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>">Contact</a></li>
          <li><a class="footer-link" href="<?php echo get_permalink( get_page_by_path( 'privacy-policy' ) ); ?>">Privacy Policy</a></li>
      </nav>
    </div>
  </footer>