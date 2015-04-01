<?php /* Template Name: Contact Page Template */ get_header(); ?>

<main role="main">
    
  <div class="header-image-container">
    <img src="<?php echo get_template_directory_uri(); ?>/img/header8.jpg" class="header-image">
  </div>
    
  <section class="page-content">

    <div class="page-heading-container">
      <div class="page-heading">
        Contact Us
      </div>
    </div>

    <div class="contact-page-container">
      <div class="contact-page-content-container">
        <div class="contact-page-form">
          <h1 class="contact-page-heading">Contact the Coalition</h1>
          
          <!-- Get page content -->
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <?php the_content(); ?>
              <br class="clear">
              <?php edit_post_link(); ?>
            </article>

          <?php endwhile; ?>
          <?php else: ?>

            <article>
              <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
            </article>

          <?php endif; ?>
        </div>
      
        <img src="<?php echo get_template_directory_uri(); ?>/img/contact-image.jpg">  
      </div>

  </section>

</main>

<?php get_footer(); ?>