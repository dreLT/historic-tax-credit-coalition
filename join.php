<?php /* Template Name: Join Page Template */ get_header(); ?>

  <main role="main">
    <!-- section -->
    <div class="header-image-container">
      <img src="<?php echo get_template_directory_uri(); ?>/img/header7.jpg" class="header-image">
    </div>
    
    <section class="page-content">

      <div class="page-heading-container">
        <div class="page-heading">
          Join
        </div>
      </div>

      <div class="join-page-content">

        <!-- Desktop -->
        <div class="join-page-content-container">

          <aside class="join-testimonials-sidebar">
            <?php the_field('join_intro'); ?>
            <?php if ( get_field('testimonial_1') && get_field('testimonial_1_name') ): ?>
              <div class="join-testimonials">
                  <?php the_field('testimonial_1'); ?>
                  <span class="join-testimonials-signature">- <?php the_field('testimonial_1_name'); ?></span>
              </div>
            <?php endif; ?>
            <?php if ( get_field('testimonial_2') && get_field('testimonial_2_name') ): ?>
              <div class="join-testimonials">
                  <?php the_field('testimonial_2'); ?>
                  <span class="join-testimonials-signature">- <?php the_field('testimonial_2_name'); ?></span>
              </div>
            <?php endif; ?>
            <?php if ( get_field('testimonial_3') && get_field('testimonial_3_name') ): ?>
              <div class="join-testimonials">
                  <?php the_field('testimonial_3'); ?>
                  <span class="join-testimonials-signature">- <?php the_field('testimonial_1_name'); ?></span>
              </div>
            <?php endif; ?>
          </aside>

          <div class="join-form-container">

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

              <!-- article -->
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php the_content(); ?>

                <br class="clear">

                <?php edit_post_link(); ?>

              </article>
              <!-- /article -->

            <?php endwhile; ?>

            <?php else: ?>

            <!-- article -->
            <article>

              <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

            </article>
            <!-- /article -->

            <?php endif; ?>

          </div>

        </div>

    </section>
    <!-- /section -->
  </main>

<?php get_footer(); ?>