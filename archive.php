<?php /* Template Name: Advocacy Page Template */ get_header(); ?>

  <main role="main">
    <!-- section -->
    <div class="header-image-container">
      <?php if ( is_tax ( 'advocacy-categories' ) ): ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/header9.jpg" class="header-image">
      <?php elseif ( is_tax ( 'news-categories') ): ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/header2.jpg" class="header-image">
      <?php elseif ( is_tax ( 'member-categories' ) || is_post_type_archive ( 'member-items' ) ): ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/header10.jpg" class="header-image">
      <?php endif; ?>
    </div>
    
    <section class="page-content">

      <div class="page-heading-container">
        <div class="page-heading">
          <?php if(is_tax( 'news-categories' )) {
            echo 'News';
          } elseif(is_tax( 'advocacy-categories' )) {
            echo 'Advocacy';
          } else {
            echo 'Members';
          }
          ; ?>
        </div>
      </div>

      <div class="advocacy-news-page-content-container">

<?php if(is_tax( 'news-categories' )): ?>
              <aside class="categories-take-action-sidebar sidebar-advocacy">
              <?php get_template_part( 'news-sidebar' ); ?>
              </aside>
            <?php endif; ?>
            <?php if(is_tax( 'advocacy-categories' )): ?>
              <aside class="categories-take-action-sidebar sidebar-advocacy">
              <?php get_template_part( 'advocacy-sidebar' ); ?>
              </aside>
            <?php endif; ?>
            <?php if(is_tax( 'member-categories' ) || is_post_type_archive ( 'member-items' ) ): ?>
              <aside class="categories-take-action-sidebar members-categories sidebar-members">
              <?php get_template_part( 'members-sidebar' ); ?>
              </aside>
            <?php endif; ?>

<div class="advocacy-news-content">

<?php if(is_tax('news-categories') || is_post_type_archive ( 'news-items' )): ?>

        <div class="mobile-content-nav current-page">
                <label for="show-menu" class="show-menu"></label>
                <input type="checkbox" id="show-menu" role="button">
                <div class="down-arrow">
                  <span>&#9660;</span>
                </div>
                <div id="current-page">
                  Latest News
                </div>                
                <ul id="subpage-list">
                  <?php 
    $args = array(
  'show_option_all'    => '',
  'orderby'            => 'count',
  'order'              => 'ASC',
  'style'              => 'list',
  'show_count'         => 0,
  'hide_empty'         => 1,
  'use_desc_for_title' => 1,
  'child_of'           => 0,
  'feed'               => '',
  'feed_type'          => '',
  'feed_image'         => '',
  'exclude'            => '',
  'exclude_tree'       => '',
  'include'            => '',
  'hierarchical'       => 1,
  'title_li'           => '',
  'show_option_none'   => __( 'No categories' ),
  'number'             => null,
  'echo'               => 1,
  'depth'              => 0,
  'current_category'   => 0,
  'pad_counts'         => 0,
  'taxonomy'           => 'news-categories',
  'walker'             => null
    );
    wp_list_categories( $args ); 
?>
                <li><a href="<?php echo home_url(); ?>/news">Latest News</a></li>
                </ul>
              </div>

<?php elseif ( is_tax( 'advocacy-categories' )): ?>

  <div class="mobile-content-nav current-page">
                <label for="show-mobile-menu" class="show-menu"></label>
                <input type="checkbox" id="show-mobile-menu" role="button" class="mobile-menu">
                <div id="current-page">
                  Latest Initiatives
                </div>
                <div class="down-arrow">
                  <span>&#9660;</span>
                </div>
                <ul id="subpage-list">
                  <?php 
    $args = array(
  'show_option_all'    => '',
  'orderby'            => 'count',
  'order'              => 'ASC',
  'style'              => 'list',
  'show_count'         => 0,
  'hide_empty'         => 1,
  'use_desc_for_title' => 1,
  'child_of'           => 0,
  'feed'               => '',
  'feed_type'          => '',
  'feed_image'         => '',
  'exclude'            => '',
  'exclude_tree'       => '',
  'include'            => '',
  'hierarchical'       => 1,
  'title_li'           => '',
  'show_option_none'   => __( 'No categories' ),
  'number'             => null,
  'echo'               => 1,
  'depth'              => 0,
  'current_category'   => 0,
  'pad_counts'         => 0,
  'taxonomy'           => 'advocacy-categories',
  'walker'             => null
    );
    wp_list_categories( $args ); 
?>
                <li><a href="<?php echo home_url(); ?>/advocacy">All Articles</a></li>
                </ul>
              </div>

<?php elseif ( is_tax( 'member-categories' )): ?>

  <div class="mobile-content-nav current-page">
                <label for="show-menu" class="show-menu"></label>
                <input type="checkbox" id="show-menu" role="button">
                <div class="down-arrow">
                  <span>&#9660;</span>
                </div>
                <div id="current-page">
                  This Month's Materials
                </div>                
                <ul id="subpage-list">
                  <?php 
    $args = array(
  'show_option_all'    => '',
  'orderby'            => 'count',
  'order'              => 'ASC',
  'style'              => 'list',
  'show_count'         => 0,
  'hide_empty'         => 1,
  'use_desc_for_title' => 1,
  'child_of'           => 0,
  'feed'               => '',
  'feed_type'          => '',
  'feed_image'         => '',
  'exclude'            => '',
  'exclude_tree'       => '',
  'include'            => '',
  'hierarchical'       => 1,
  'title_li'           => '',
  'show_option_none'   => __( 'No categories' ),
  'number'             => null,
  'echo'               => 1,
  'depth'              => 0,
  'current_category'   => 0,
  'pad_counts'         => 0,
  'taxonomy'           => 'advocacy-categories',
  'walker'             => null
    );
    wp_list_categories( $args ); 
?>
                <li><a href="<?php echo home_url(); ?>/members">This Month's Materials</a></li>
                </ul>
              </div>

<?php endif; ?>          


<!--             <main role="main"> -->
              <!-- section -->
              <!-- <section> -->

                <!-- <h1><?php single_cat_title(); ?></h1> -->

                <?php get_template_part('loop'); ?>

                <div class="pagination-links">
                  <?php get_template_part('pagination'); ?>
                </div>

                <div class="mobile-content-nav mobile-take-action-nav current-page">
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

              <!-- </section> -->
              <!-- /section -->
            <!-- </main> -->
        </div>


      
<!-- Mobile layout -->
      <div class="advocacy-news-content mobile">

<?php if(is_tax('news-categories') || is_post_type_archive ( 'news-items' )): ?>

        <div class="mobile-content-nav current-page">
                <label for="show-mobile-menu-<?php get_post_ID(); ?>" class="show-menu"></label>
                <input type="checkbox" id="show-mobile-menu-<?php get_post_ID(); ?>" role="button" class="mobile-menu">
                <div id="current-page">
                  Browse Articles by Topic ...
                </div>
                <div class="down-arrow">
                  <span>&#9660;</span>
                </div>
                <ul id="subpage-list">
                  <?php 
    $args = array(
  'show_option_all'    => '',
  'orderby'            => 'count',
  'order'              => 'ASC',
  'style'              => 'list',
  'show_count'         => 0,
  'hide_empty'         => 1,
  'use_desc_for_title' => 1,
  'child_of'           => 0,
  'feed'               => '',
  'feed_type'          => '',
  'feed_image'         => '',
  'exclude'            => '',
  'exclude_tree'       => '',
  'include'            => '',
  'hierarchical'       => 1,
  'title_li'           => '',
  'show_option_none'   => __( 'No categories' ),
  'number'             => null,
  'echo'               => 1,
  'depth'              => 0,
  'current_category'   => 0,
  'pad_counts'         => 0,
  'taxonomy'           => 'news-categories',
  'walker'             => null
    );
    wp_list_categories( $args ); 
?>
                <li><a href="<?php echo home_url(); ?>/news">All Articles</a></li>
                </ul>
              </div>

<?php elseif ( is_tax( 'advocacy-categories' )): ?>

  <div class="mobile-content-nav current-page">
                <label for="show-mobile-menu-<?php get_post_ID(); ?>-a" class="show-menu"></label>
                <input type="checkbox" id="show-mobile-menu-<?php get_post_ID(); ?>-a" role="button" class="mobile-menu">
                <div id="current-page">
                  Browse Articles by Topic ...
                </div>
                <div class="down-arrow">
                  <span>&#9660;</span>
                </div>
                <ul id="subpage-list">
                  <?php 
    $args = array(
  'show_option_all'    => '',
  'orderby'            => 'count',
  'order'              => 'ASC',
  'style'              => 'list',
  'show_count'         => 0,
  'hide_empty'         => 1,
  'use_desc_for_title' => 1,
  'child_of'           => 0,
  'feed'               => '',
  'feed_type'          => '',
  'feed_image'         => '',
  'exclude'            => '',
  'exclude_tree'       => '',
  'include'            => '',
  'hierarchical'       => 1,
  'title_li'           => '',
  'show_option_none'   => __( 'No categories' ),
  'number'             => null,
  'echo'               => 1,
  'depth'              => 0,
  'current_category'   => 0,
  'pad_counts'         => 0,
  'taxonomy'           => 'advocacy-categories',
  'walker'             => null
    );
    wp_list_categories( $args ); 
?>
                <li><a href="<?php echo home_url(); ?>/advocacy">All Articles</a></li>
                </ul>
              </div>

<?php elseif ( is_tax( 'member-categories' ) || is_post_type_archive( 'member-items') ): ?>

  <div class="mobile-content-nav current-page">
                <label for="show-mobile-menu" class="show-menu"></label>
                <input type="checkbox" id="show-mobile-menu" role="button" class="mobile-menu">
                <div id="current-page">
                  Browse Materials ...
                </div>
                <div class="down-arrow">
                  <span>&#9660;</span>
                </div>
                <ul id="subpage-list">
                  <?php 
    $args = array(
  'show_option_all'    => '',
  'orderby'            => 'count',
  'order'              => 'ASC',
  'style'              => 'list',
  'show_count'         => 0,
  'hide_empty'         => 1,
  'use_desc_for_title' => 1,
  'child_of'           => 0,
  'feed'               => '',
  'feed_type'          => '',
  'feed_image'         => '',
  'exclude'            => '',
  'exclude_tree'       => '',
  'include'            => '',
  'hierarchical'       => 1,
  'title_li'           => '',
  'show_option_none'   => __( 'No categories' ),
  'number'             => null,
  'echo'               => 1,
  'depth'              => 0,
  'current_category'   => 0,
  'pad_counts'         => 0,
  'taxonomy'           => 'member-categories',
  'walker'             => null
    );
    wp_list_categories( $args ); 
?>

                </ul>
              </div>

<?php endif; ?>          


<!--             <main role="main"> -->
              <!-- section -->
              <!-- <section> -->

                <!-- <h1><?php single_cat_title(); ?></h1> -->

<h1 class="current-category"><?php single_cat_title('Currently browsing '); ?>:</h1>


                <?php get_template_part('loop'); ?>

                <div class="pagination-links">
                  <?php get_template_part('pagination'); ?>
                </div>


            <div class="mobile-take-action-nav-container">
              <h1>Take action to help support and improve the federal Historic Tax Credit:</h1>
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
          
          </div>

          <?php if(is_tax( 'news-categories' )): ?>
              <aside class="categories-take-action-sidebar sidebar-advocacy mobile">
              <?php get_template_part( 'news-sidebar' ); ?>
              </aside>
            <?php endif; ?>
            <?php if(is_tax( 'advocacy-categories' )): ?>
              <aside class="categories-take-action-sidebar sidebar-advocacy mobile">
              <?php get_template_part( 'advocacy-sidebar' ); ?>
              </aside>
            <?php endif; ?>
            <?php if(is_tax( 'member-categories' ) || is_post_type_archive ( 'member-items' ) ): ?>
              <aside class="categories-take-action-sidebar members-categories sidebar-members mobile">
              <?php get_template_part( 'members-sidebar' ); ?>
              </aside>
            <?php endif; ?>
              <!-- </section> -->
              <!-- /section -->
            <!-- </main> -->
        </div>

        </div>

    </section>
    <!-- /section -->
  </main>

<?php get_footer(); ?>

<?php get_header(); ?>