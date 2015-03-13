<?php get_header(); ?>

  <main role="main">
    <!-- section -->
    
    <div class="home-intro-slider-container">

      <div class="home-slider">
        <?php masterslider(12); ?>
      </div>

      <!-- Tablet Slider -->
      <div class="home-slider-tablet">
        <?php masterslider(9); ?>
      </div>

      <!-- Phone slider -->
      <div class="home-slider-phone">
        <?php masterslider(11); ?>
      </div>
    
    </div>

    <div class="home-intro-call-to-action-container">

      <div class="home-intro">  
            <h1 class="home-section-heading">ABOUT THE COALITION</h1>
            <div class="home-intro-text">
              <?php the_field('intro_text'); ?>
            </div>
        </div>

      <div class="home-call-to-action-text">          
        <h1 class="home-section-heading">TAKE ACTION</h1>
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/capitol2.jpg"> -->
        <?php the_field('call_to_action'); ?>
        <a class="home-call-to-action-button" href="<?php echo get_site_url(); ?>/take-action/">TAKE ACTION</a>
      </div>

    </div>

    <section class="home-featured-articles">
      <div class="home-featured-articles-container">
      <h1 class="featured-articles-heading home-section-heading">RECENT NEWS</h1>

      <?php 

      // args
      $args = array(
        //'numberposts' => -1,
        'post_type' => array( 'advocacy-items', 'news-items' ),
        'meta_key' => 'feature_home',
        'meta_value' => 'Yes'
      );

      global $more;
      // get results
      $the_query = new WP_Query( $args );

      // The Loop
      ?>
      <?php if( $the_query->have_posts() ): ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <figure class="home-featured-article-img">
              <?php the_post_thumbnail( 'thumbnails' ); ?>
            </figure>
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


    <!--<?php $args = array(
                  'showposts' => '4',
                  'tag' => 'featured',
    ); ?>
    <?php $the_query = new WP_Query( $args ); ?>
    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <figure class="home-featured-article-img">
        <?php the_post_thumbnail(); ?>
      </figure>
      <a href="<?php the_permalink() ?>"><?php the_title(); ?></a><br />
      <p><?php the_excerpt(__('(more…)')); ?></p>
    </article>
    <?php endwhile;?>
    <?php wp_reset_postdata(); ?>-->

   <!--  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <figure class="home-featured-article-img">
        </figure>

        <?php the_content(); ?>

        <br class="clear">

        <?php edit_post_link(); ?>

      </article>

    <?php endwhile; ?>

    <?php else: ?>

      <article>

        <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

      </article>

    <?php endif; ?> -->

    </section>
    <!-- /section -->
  </main>

<?php get_footer(); ?>