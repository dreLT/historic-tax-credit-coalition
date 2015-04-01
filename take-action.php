<?php /* Template Name: Take Action Template */ get_header(); ?>

  <main role="main">
    
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

        <!-- Layout for laptop/desktop size screens -->
        <div class="advocacy-news-content single-post-container">

        <!-- Loop to get page contents -->
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1 class="take-action-subpage-title"><?php the_title(); ?></h1>
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

        <!-- Layout for mobile size screens -->

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

          <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <h1 class="take-action-subpage-title"><?php the_title(); ?></h1>
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

        <!-- Get Take Action sidebar located ./take-action-list.php -->
        <aside class="categories-take-action-sidebar sidebar-advocacy mobile">
          <?php get_template_part( 'take-action-list' ); ?>
        </aside>

      </div>

    </section>
    
  </main>

<?php get_footer(); ?>