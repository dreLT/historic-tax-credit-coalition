<?php /* Template Name: Take Action Template */ get_header(); ?>

  <main role="main">
    <!-- section -->
    <div class="header-image-container">
      <img src="<?php echo get_template_directory_uri(); ?>/img/header6.jpg" class="header-image">
    </div>
    
    <section class="page-content">

      <div class="page-heading-container">
        <div class="page-heading">
          Take Action
        </div>
      </div>

      <div class="advocacy-news-page-content-container">

        <aside class="categories-take-action-sidebar sidebar-advocacy">
              <?php get_template_part( 'take-action-list' ); ?>
            </aside>

        <div class="advocacy-news-content single-post-container">

          <div class="mobile-content-nav current-page">
                <label for="show-menu" class="show-menu"></label>
                <input type="checkbox" id="show-menu" role="button">
                <div class="down-arrow">
                  <span>&#9660;</span>
                </div>
                <div id="current-page">
                  <?php single_post_title(); ?>
                </div>                
                <ul id="subpage-list">
                  <?php take_action_nav(); ?>
                </ul>
              </div>

      <!-- <div class="take-action-page-container"> -->
            

              <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                  <h1 class="take-action-subpage-title"><?php the_title(); ?></h1>
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


<!-- Mobile Layout -->

<div class="advocacy-news-content single-post-container mobile">

            <div class="mobile-take-action-nav-container">
              <div class="mobile-take-action-nav current-page">
                <label for="show-mobile-take-action-menu-<?php get_post_ID(); ?>-s" class="show-menu"></label>
                <input class="show-mobile-take-action-menu" type="checkbox" id="show-mobile-take-action-menu-<?php get_post_ID(); ?>-s" role="button">
                <div id="current-page">
                  Ways you can take action&nbsp;...
                </div>
                <span class="down-arrow">&#9660;</span>
                <ul id="subpage-list">
                  <?php take_action_nav(); ?>
                </ul>
              </div>
            </div>

      <!-- <div class="take-action-page-container"> -->
            

              <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                  <h1 class="take-action-subpage-title"><?php the_title(); ?></h1>
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

            <aside class="categories-take-action-sidebar sidebar-advocacy mobile">
              <?php get_template_part( 'take-action-list' ); ?>
            </aside>

            

    </div>


    </section>
    <!-- /section -->
  </main>

<?php get_footer(); ?>