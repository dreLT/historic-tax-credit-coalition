<!-- Template for the site's Homepage -->

<?php get_header(); ?>

  <main role="main">
    
    <div class="home-intro-slider-container">

      <!-- Slider for laptop/desktop-size views -->
      <div class="home-slider">
        <?php masterslider(12); ?>
      </div>

      <!-- Slider for tablet-size views -->
      <div class="home-slider-tablet">
        <?php masterslider(9); ?>
      </div>

      <!-- Slider for phone-size views -->
      <div class="home-slider-phone">
        <?php masterslider(11); ?>
      </div>
    
    </div>

    <div class="home-intro-call-to-action-container">

      <!-- Introduction -->
      <div class="home-intro">  
        <h1 class="home-section-heading">ABOUT THE COALITION</h1>
        <div class="home-intro-text">
          <?php the_field('intro_text'); ?>
        </div>
      </div>

      <!-- Call to action -->
      <div class="home-call-to-action-text">          
        <h1 class="home-section-heading">TAKE ACTION</h1>
        <?php the_field('call_to_action'); ?>
        <a class="home-call-to-action-button" href="<?php echo get_site_url(); ?>/take-action/">TAKE ACTION</a>
      </div>

    </div>

    <!-- Featured articles -->
    <section class="home-featured-articles">
      <div class="home-featured-articles-container">
      <h1 class="featured-articles-heading home-section-heading">RECENT NEWS</h1>

      <!-- Set arguments for WP_Query, which will be passed into Loop. We only want to query News and Advocacy Items that have been selected to be featured on Homepage -->
      <?php $args = array(
        'post_type' => array( 'advocacy-items', 'news-items' ),
        'meta_key' => 'feature_home',
        'meta_value' => 'Yes'
      );
      global $more;
      $the_query = new WP_Query( $args );
      ?>

      <!-- Loop to display articles based on the WP_Query -->
      <?php if( $the_query->have_posts() ): ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <!-- Thumbnail for larger screens -->
            <figure class="home-featured-article-img">
              <?php the_post_thumbnail( 'thumbnails' ); ?>
            </figure>
            <!-- Thumbnail for smaller screens -->
            <figure class="home-featured-article-img-mobile">
              <?php the_post_thumbnail( 'thumbnails-mobile' ); ?>
            </figure>
            <h1 class="feature-post-title"><a href="<?php the_permalink() ?>"><strong><?php the_title(); ?></strong></a></h1>
            <p class="feature-post-excerpt"><?php the_excerpt(); ?><span class="read_more"><a href="<?php the_permalink(); ?>">&nbsp;Read More »</a></span></p>
            <div class="feature-post-excerpt-desktop"><?php the_field('featured_excerpt'); ?></div>
            <span class="read_more feature-post-excerpt-desktop-read-more"><a href="<?php the_permalink(); ?>">&nbsp;Read More »</a></span>
          </article>
        <?php endwhile; ?>
      <?php endif; ?>

      <?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>

    </section>

  </main>

<?php get_footer(); ?>