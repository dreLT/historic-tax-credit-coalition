<?php /* Template Name: Advocacy Page Template */ get_header(); ?>
<!-- Template for listing articles in Advocacy, News, and Member Categories -->

<main role="main">
  
  <div class="header-image-container">
    <!-- Display header image based on which category page we are on -->
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
        <!-- Display page title based on which category page we are on -->
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
    <!-- Display appropriate sidebar for the category page we are on -->
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

      <!-- Main content area: listing of articles -->
      <!-- Markup for desktop layout (roughly laptop and desktop size screens) -->
      <div class="advocacy-news-content">
        
        <!-- Get loop code from ./loop.php -->
        <?php get_template_part('loop'); ?>
        
        <div class="pagination-links">
          <!-- Get pagination code from ./pagination.php -->
          <?php get_template_part('pagination'); ?>
        </div>

      </div>
    
      <!-- Main content area: listing of articles -->
      <!-- Markup for mobile layout (roughly tablet-size screen and below) -->
      <div class="advocacy-news-content mobile">

      <!-- Display appropriate mobile dropdown navigation for the category page we are on -->
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
            <?php $args = array(
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
            <?php $args = array(
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
            <?php $args = array(
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

        <!-- Display notice stating the category page we are currently browsing -->
        <h1 class="current-category"><?php single_cat_title('Currently browsing '); ?>:</h1>

        <!-- Get loop code from ./loop.php -->
        <?php get_template_part('loop'); ?>

        <!-- Get pagination code from ./pagination.php -->
        <div class="pagination-links">
          <?php get_template_part('pagination'); ?>
        </div>

        <!-- Take Action mobile dropdown nav -->
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

      <!-- Display appropriate sidebar for the category page we are on -->
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
            
    </div>

  </section>
  
</main>

<!-- Get footer code from ./footer.php -->
<?php get_footer(); ?>