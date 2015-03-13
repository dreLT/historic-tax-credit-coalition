<?php /* Template Name: Advocacy Page Template */ get_header(); ?>
<?php $type = get_query_var('post_type'); ?>

  <main>
    <!-- section -->
    <div class="header-image-container">
      <?php if ( $type === 'advocacy-items' ): ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/header9.jpg" class="header-image">
      <?php elseif ( $type === 'news-items' ): ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/header2.jpg" class="header-image">
      <?php endif; ?>
    </div>
    
    <section class="page-content">

      <div class="page-heading-container">
        <div class="page-heading">
        
          <?php

            $type = get_query_var('post_type');
            
            if ( $type === 'advocacy-items' ) {
              echo 'Advocacy';
            } 
            elseif ( $type == 'news-items' ) {
              echo 'News';
            };
            
            ?>

        </div>
      </div>

      <div class="advocacy-news-page-content-container">

    <aside class="categories-take-action-sidebar sidebar-advocacy">

            <?php

            $type = get_query_var('post_type');
            
            if ( $type === 'advocacy-items' ) {
              get_template_part( 'advocacy-sidebar' );
            } 
            elseif ( $type == 'news-items' ) {
              get_template_part( 'news-sidebar' );
            };
            
            ?>


            <!-- 

            <?php if(is_tax( 'news-categories' )) {
              get_template_part( 'news-sidebar' );
            } elseif(is_tax( 'advocacy-categories' )) {
              get_template_part( 'advocacy-sidebar' );
            } ;?> -->

            
          </aside>

    <div class="advocacy-news-content search-results">
      
<?php if( $type == 'news-items' ): ?>

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

              <div class="mobile-take-action-button">
                <a href="<?php echo home_url(); ?>/take-action">Take Action <span>»</span></a>
              </div>

<?php elseif( $type == 'advocacy-items' ): ?>

  <div class="mobile-content-nav current-page">
                <label for="show-menu" class="show-menu"></label>
                <input type="checkbox" id="show-menu" role="button">
                <div class="down-arrow">
                  <span>&#9660;</span>
                </div>
                <div id="current-page">
                  Latest Initiatives
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
                <li><a href="<?php echo home_url(); ?>/advocacy">Latest Initiatives</a></li>
                </ul>
              </div>

              <div class="mobile-take-action-button">
                <a href="<?php echo home_url(); ?>/take-action">Take Action <span>»</span></a>
              </div>


<?php endif; ?>
            
              <!-- section -->
              
    



      <h1><?php echo sprintf( __( 'Search Results for: ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

      <?php get_template_part('loop'); ?>

      <div class="pagination-links">
        <?php get_template_part('pagination'); ?>
      </div>

    </div>


<!-- Mobile Layout -->

<div class="advocacy-news-content search-results mobile">
      
<?php if( $type == 'news-items' ): ?>

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

              <div class="mobile-take-action-button">
                <a href="<?php echo home_url(); ?>/take-action">Take Action <span>»</span></a>
              </div>

<?php elseif( $type == 'advocacy-items' ): ?>

  <div class="mobile-content-nav current-page">
                <label for="show-menu" class="show-menu"></label>
                <input type="checkbox" id="show-menu" role="button">
                <div class="down-arrow">
                  <span>&#9660;</span>
                </div>
                <div id="current-page">
                  Latest Initiatives
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
                <li><a href="<?php echo home_url(); ?>/advocacy">Latest Initiatives</a></li>
                </ul>
              </div>

              <div class="mobile-take-action-button">
                <a href="<?php echo home_url(); ?>/take-action">Take Action <span>»</span></a>
              </div>


<?php endif; ?>
            
              <!-- section -->
              
    



      <h1><?php echo sprintf( __( 'Search Results for: ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

      <?php get_template_part('loop'); ?>

      <div class="pagination-links">
        <?php get_template_part('pagination'); ?>
      </div>

    </div>

    <aside class="categories-take-action-sidebar sidebar-advocacy mobile">

            <?php

            $type = get_query_var('post_type');
            
            if ( $type === 'advocacy-items' ) {
              get_template_part( 'advocacy-sidebar' );
            } 
            elseif ( $type == 'news-items' ) {
              get_template_part( 'news-sidebar' );
            };
            
            ?>


            <!-- 

            <?php if(is_tax( 'news-categories' )) {
              get_template_part( 'news-sidebar' );
            } elseif(is_tax( 'advocacy-categories' )) {
              get_template_part( 'advocacy-sidebar' );
            } ;?> -->

            
          </aside>

        </div>

    </section>
    <!-- /section -->
  </main>

<?php get_footer(); ?>

<?php get_header(); ?>