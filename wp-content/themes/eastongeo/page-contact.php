<?php
/*
Template Name: Contact Page
*/
get_header();
?>
  <main>
    <section class="contact">
      <h1 class="heading-primary__services">
      <?php if( get_field('contact_header' ) ): 
             echo esc_html( get_field('contact_header') ); ?>
          <?php endif; ?>
      </h1>
      <div class="container">
        <div class="cta">
          <div class="cta-text-box">
            <h2 class="heading-secondary quote">
            <?php if( get_field('contact_secondary_header' ) ): 
             echo esc_html( get_field('contact_secondary_header') ); ?>
          <?php endif; ?>
            </h2>
            <p class="cta-text">
            <?php if( get_field('contact_form_instructions' ) ): 
             echo esc_html( get_field('contact_form_instructions') ); ?>
          <?php endif; ?>
          </p>
            <?php echo do_shortcode('[contact-form-7 id="3b9c760" title="Contact form 1"]'); ?>
          </div>
          <div class="cta-image-box"></div>
        </div>
      </div>
    </section>
  </main>
</body>
<?php get_footer(); ?>
</html>