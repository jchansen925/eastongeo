
<?php
/*
Template Name: Home
*/
get_header();
?>
  <main>
    <section class="section-hero">
      <div class="hero">
        <div class="hero-shadow"></div>
        <div class="hero-text-box">
<?php
 if ( get_field('hero_title' ) ): ?>
    <h1 class="heading-primary"><?php echo esc_html( get_field('hero_title') ); ?></h1>
<?php endif; ?>
<p class="hero-description"
          <?php  if ( get_field('hero_subtitle' ) ): 
  echo esc_html( get_field('hero_subtitle') ); ?>
<?php endif; ?>

          </p>
        </div>
      </div>
    </section>
    <section class="section-geology">
      <div class="container">
        <h2 class="heading-secondary">
    
         <?php  if ( get_field('home_heading_secondary' ) ): 
          echo esc_html( get_field('home_heading_secondary') ); ?>
        <?php endif; ?>

        </h2>
        <p class="geology-description">
     
        <?php  if ( get_field('home_secondary_description' ) ): 
          echo esc_html( get_field('home_secondary_description') ); ?>
        <?php endif; ?>

        </p>
      </div>
    </section>
    <section class="section-specialties">
      <div class="speciaties-container">
        <div class="specialties-item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/imgbin_pickaxe-geologists-hammer-tool-hammer-and-pick-png.png" alt="" class="specialties-icon">
          <h3>
          <?php if ( get_field('specialization_headline' ) ): 
          echo esc_html( get_field('specialization_headline') ); ?>
        <?php endif; ?>
          </h3>
          <p>
          <?php if ( get_field('specialization_description' ) ): 
          echo esc_html( get_field('specialization_description') ); ?>
        <?php endif; ?>
          </p>
        </div>
        <div class="specialties-item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/slop.png" alt="" class="specialties-icon">
          <h3>
          <?php if ( get_field('specialization_headline_2' ) ): 
          echo esc_html( get_field('specialization_headline_2') ); ?>
        <?php endif; ?>
        </h3>
          <p>
          <?php  if ( get_field('specialization_description_2' ) ): 
          echo esc_html( get_field('specialization_description_2') ); ?>
        <?php endif; ?>
        </p>
        </div>
        <div class="specialties-item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/earthquake.png" alt="" class="specialties-icon">
          <h3>
          <?php  if ( get_field('specialization_headline_3' ) ): 
          echo esc_html( get_field('specialization_headline_3') ); ?>
        <?php endif; ?>
      
        </h3>
          <p>
          <?php  if ( get_field('specialization_description_3' ) ): 
          echo esc_html( get_field('specialization_description_3') ); ?>
        <?php endif; ?>
          </p>
        </div>
        <div class="specialties-item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/erosion.png" alt="" class="specialties-icon">
          <h3>
          <?php  if ( get_field('specialization_headline_4' ) ): 
          echo esc_html( get_field('specialization_headline_4') ); ?>
        <?php endif; ?>

        </h3>
          <p>
          <?php  if ( get_field('specialization_description_4' ) ): 
          echo esc_html( get_field('specialization_description_4') ); ?>
        <?php endif; ?>
          </p>
        </div>
        <div class="specialties-item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/timber.png" alt="" class="specialties-icon">
          <h3>
          <?php  if ( get_field('specialization_headline_5' ) ): 
          echo esc_html( get_field('specialization_headline_5') ); ?>
        <?php endif; ?>
      
        </h3>
          <p>
          <?php  if ( get_field('specialization_description_5' ) ): 
          echo esc_html( get_field('specialization_description_5') ); ?>
        <?php endif; ?>
          </p>
        </div>
        <div class="specialties-item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/septic-tank-icon.png" alt="" class="specialties-icon">
          <h3>
          <?php  if ( get_field('specialization_headline_6' ) ): 
          echo esc_html( get_field('specialization_headline_6') ); ?>
        <?php endif; ?>
        </h3>
          <p>
          <?php  if ( get_field('specialization_description_6' ) ): 
          echo esc_html( get_field('specialization_description_6') ); ?>
        <?php endif; ?>
          </p>
        </div>
      </div>
    </section>
    <section class="testimonials">
      <div class="container">
        <h2 class="heading-secondary">
        <?php  if ( get_field('testimonials_headline' ) ): 
          echo esc_html( get_field('testimonials_headline') ); ?>
        <?php endif; ?></h2>
        <div class="testimonies">
          <div>
            <blockquote class="testimony-text">
            <?php  if ( get_field('testimony_one' ) ): 
          echo esc_html( get_field('testimony_one') ); ?>
        <?php endif; ?>
            
            </blockquote>
            <p class="testimonial-name"> <?php  if ( get_field('testimony_one_name' ) ): 
          echo esc_html( get_field('testimony_one_name') ); ?>
        <?php endif; ?></p>
          </div>
          <div>
            <blockquote class="testimony-text">  <?php  if ( get_field('testimony_two' ) ): 
          echo esc_html( get_field('testimony_two') ); ?>
        <?php endif; ?></blockquote>
            <p class="testimonial-name"> <?php  if ( get_field('testimony_two_name' ) ): 
          echo esc_html( get_field('testimony_two_name') ); ?>
        <?php endif; ?></p>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- <?php var_dump( get_post_meta( get_the_ID() ) ); 
    echo 'Post ID: ' . get_the_ID();
  ?> -->

  <?php get_footer(); ?>
</body>
</html>