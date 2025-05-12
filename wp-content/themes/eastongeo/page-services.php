<?php
/*
Template Name: Services
*/
get_header();
?>
  <main>
    <section class="services">
      <div style="max-width: 116rem; margin: 0 auto;">
      <h1 class="heading-primary__services">
      <?php  if ( get_field('services_headline' ) ): 
          echo esc_html( get_field('services_headline') ); ?>
        <?php endif; ?>
      </h1>
      <p class="about-description">
        <?php if ( get_field('services_sub_headline' ) ): 
          echo esc_html( get_field('services_sub_headline') ); ?>
        <?php endif; ?></p>
        </div>
      <div class="services-container" style="margin-top: 5rem;">
        <div class="services-item__info">
          <h3 class="services-title">
          <?php if( get_field('services_one_header' ) ): 
            echo esc_html( get_field('services_one_header') ); ?>
          <?php endif; ?></h3>
          <p class="services-text">
          <?php if( get_field('services_one_description' ) ): 
             echo esc_html( get_field('services_one_description') ); ?>
          <?php endif; ?>
        </p>
        </div>
        <div class="services-item__image hazards">
        <?php $image = get_field('services_one_image'); ?>
        <img src="<?php echo esc_url( $image ); ?>" width="100%" height="auto" alt=" <?php if( get_field('services_one_header' ) ): 
            echo esc_html( get_field('services_one_header') ); ?>  <?php endif; ?> image" />
        </div>
        <div class="services-item__image">
        <?php $image = get_field('services_two_image'); ?>
        <img src="<?php echo esc_url( $image ); ?>" width="100%" height="auto" alt=" <?php if( get_field('services_one_header' ) ): 
            echo esc_html( get_field('services_one_header') ); ?> <?php endif; ?> image" />
        </div>
        <div class="services-item__info">
          <h3 class="services-title">
          <?php if( get_field('services_two_header' ) ): 
             echo esc_html( get_field('services_two_header') ); ?>
          <?php endif; ?></h3>
          <p class="services-text">
          <?php if( get_field('services_two_description' ) ): 
             echo esc_html( get_field('services_two_description') ); ?>
          <?php endif; ?>
         </p>
        </div>
        <div class="services-item__info">
          <h3 class="services-title">
          <?php if( get_field('services_three_header' ) ): 
             echo esc_html( get_field('services_three_header') ); ?>
          <?php endif; ?></h3>
          <p class="services-text">
          <?php if( get_field('services_three_description' ) ): 
             echo esc_html( get_field('services_three_description') ); ?>
          <?php endif; ?></p>
        </div>
        <div class="services-item__image"> 
        <?php $image = get_field('services_three_image'); ?>
        <img src="<?php echo esc_url( $image ); ?>" alt=" <?php if( get_field('services_three_header' ) ): 
            echo esc_html( get_field('services_one_header') ); ?> <?php endif; ?> image" /></div>
        <div class="services-item__image">
        <?php $image = get_field('services_four_image'); ?>
        <img src="<?php echo esc_url( $image ); ?>" alt=" <?php if( get_field('services_four_header' ) ): 
            echo esc_html( get_field('services_one_header') ); ?> <?php endif; ?> image" /></div>
        <div class="services-item__info">
          <h3 class="services-title">
          <?php if( get_field('services_four_header' ) ): 
             echo esc_html( get_field('services_four_header') ); ?>
          <?php endif; ?></h3>
          <p class="services-text">
          <?php if( get_field('services_four_description' ) ): 
             echo esc_html( get_field('services_four_description') ); ?>
          <?php endif; ?></p>
        </div>
        <div class="services-item__info">
          <h3 class="services-title">
          <?php if( get_field('services_five_header' ) ): 
             echo esc_html( get_field('services_five_header') ); ?>
          <?php endif; ?></h3>
          <p class="services-text">
          <?php if( get_field('services_five_description' ) ): 
             echo esc_html( get_field('services_five_description') ); ?>
          <?php endif; ?></p>
        </div>
        <div class="services-item__image">
        <?php $image = get_field('services_five_image'); ?>
        <img src="<?php echo esc_url( $image ); ?>" alt=" <?php if( get_field('services_five_header' ) ): 
            echo esc_html( get_field('services_one_header') ); ?><?php endif; ?> image" /></div>
        <div class="services-item__image"> 
        <?php $image = get_field('services_six_image'); ?>
        <img src="<?php echo esc_url( $image ); ?>" alt=" <?php if( get_field('services_six_header' ) ): 
            echo esc_html( get_field('services_one_header') ); ?> <?php endif; ?> image" /></div>
        <div class="services-item__info">
          <h3 class="services-title">
          <?php if( get_field('services_six_header' ) ): 
             echo esc_html( get_field('services_six_header') ); ?>
          <?php endif; ?></h3>
          <p class="services-text">
          <?php if( get_field('services_six_description' ) ): 
             echo esc_html( get_field('services_six_description') ); ?>
          <?php endif; ?></p>
        </div>
      </div>
    </section>
  </main>

  <?php get_footer(); ?>
</body>
</html>