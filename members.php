<?php /* Template Name: Members Page Template */ get_header(); ?>

  <main role="main">
    <!-- section -->
    <div class="header-image-container">
      <img src="<?php echo get_template_directory_uri(); ?>/img/header10.jpg" class="header-image">
    </div>
    
    <section class="page-content">

      <div class="page-heading-container">
        <div class="page-heading">
          Members
        </div>
      </div>

      <div class="advocacy-news-page-content-container">

          <aside class="categories-take-action-sidebar members-categories sidebar-members">
            <?php get_template_part( 'members-sidebar'); ?>
          </aside>

          <div class="advocacy-news-content">

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
  'taxonomy'           => 'member-categories',
  'walker'             => null
    );
    wp_list_categories( $args ); 
?>
                </ul>
              </div>

              <div class="mobile-take-action-button">
                <a href="<?php echo home_url(); ?>/take-action">Take Action <span>»</span></a>
              </div>

            <?php $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1; ?>
              <?php $today = getdate(); ?>
              <?php $args = array('post_type' => 'member-items', 'posts_per_page' => 7, 'monthnum' => $today['mon'], 'paged' => $paged,); ?>
              <?php $the_query = new WP_Query( $args ); ?>
              
              <?php if ($the_query->have_posts()): while ($the_query->have_posts()) : $the_query->the_post(); ?>

  <!-- article -->
  <article id="post-<?php the_ID(); ?>" <?php post_class('listed-article'); ?>>

    <!-- post thumbnail -->
    
    <!-- /post thumbnail -->

    <!-- post title -->
    <h2>
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
    </h2>
    <!-- /post title -->

    <!-- post details -->
    <span class="date"><?php the_time('F Y'); ?></span><span class="category"><?php the_terms( $post->ID, 'member-categories', 'Category: ', ' / ' ); ?></span>
    
    <br />

    <?php if ( has_excerpt() ): ?>
      <p><?php the_excerpt(); ?><span class="read_more"><a href="<?php the_permalink(); ?>">&nbsp;Read More</a></span></p>
    <?php endif; ?>

    <?php edit_post_link(); ?>

  </article>
  <!-- /article -->

<?php endwhile; ?>
<?php endif; ?>


              <?php wp_reset_postdata(); ?>
              <?php
$big = 999999999; // need an unlikely integer

echo paginate_links( array(
  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
  'format' => '?paged=%#%',
  'current' => max( 1, get_query_var('paged') ),
  'total' => $the_query->max_num_pages,
  'prev_text' => __('« Newer Items'),
  'next_text' => __('Older Items»'),
) );
?>

        </div>

          <div class="advocacy-news-content mobile">
          
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

            <?php $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1; ?>
              <?php $today = getdate(); ?>
              <?php $args = array('post_type' => 'member-items', 'posts_per_page' => 7, 'monthnum' => $today['mon'], 'paged' => $paged,); ?>
              <?php $the_query = new WP_Query( $args ); ?>
              
              <?php if ($the_query->have_posts()): while ($the_query->have_posts()) : $the_query->the_post(); ?>

  <!-- article -->
  <article id="post-<?php the_ID(); ?>" <?php post_class('listed-article'); ?>>

    <!-- post thumbnail -->
    
    <!-- /post thumbnail -->

    <!-- post title -->
    <h2>
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
    </h2>
    <!-- /post title -->

    <!-- post details -->
    <span class="date"><?php the_time('F Y'); ?></span><span class="category"><?php the_terms( $post->ID, 'member-categories', 'Category: ', ' / ' ); ?></span>
    
    <br />

    <?php if ( has_excerpt() ): ?>
      <p><?php the_excerpt(); ?><span class="read_more"><a href="<?php the_permalink(); ?>">&nbsp;Read More</a></span></p>
    <?php endif; ?>

    <?php edit_post_link(); ?>

  </article>
  <!-- /article -->

<?php endwhile; ?>
<?php endif; ?>


              <?php wp_reset_postdata(); ?>
              <?php
$big = 999999999; // need an unlikely integer

echo paginate_links( array(
  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
  'format' => '?paged=%#%',
  'current' => max( 1, get_query_var('paged') ),
  'total' => $the_query->max_num_pages,
  'prev_text' => __('« Newer Items'),
  'next_text' => __('Older Items»'),
) );
?>
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

        <aside class="categories-take-action-sidebar members-categories sidebar-members mobile">
            <?php get_template_part( 'members-sidebar'); ?>
          </aside>

      </div>

    </section>
    <!-- /section -->
  </main>

<?php get_footer(); ?>