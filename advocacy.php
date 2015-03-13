<?php /* Template Name: Advocacy Page */ get_header(); ?>

  <main role="main">
    <!-- section -->
    <div class="header-image-container">
      <img src="<?php echo get_template_directory_uri(); ?>/img/header9.jpg" class="header-image">
    </div>
    
    <section class="page-content">

      <div class="page-heading-container">
        <div class="page-heading">
          Advocacy
        </div>
      </div>

      <div class="advocacy-news-page-content-container">

          <aside class="categories-take-action-sidebar sidebar-advocacy">
            <ul class="categories-list">
              <li class="all-articles-tab"><a href="<?php echo get_site_url(); ?>/advocacy/">Latest Initiatives</a></li>
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
            </li>
            </ul>
            <div class="advocacy-search">
              <?php get_search_form(); ?>
              <!-- <input class="advocacy-search-input" type="text" placeholder="Search"> -->
            <!-- <div class="advocacy-date-range"> -->
              <!-- <span>Search by date:</span> <br />
              <label for="date-range-from">From:</label><input id="date-range-from" class="date-range-input"><br />
              <label for="date-range-to">To:</label><input id="date-range-to" class="date-range-input"> -->
            </div>

            <div class="take-action-list">
              <h2 class="take-action-list-heading">Take Action</h2>
              <ul class="take-action-list-items">
               <a href="<?php echo get_site_url(); ?>/take-action/write-your-representative-and-senators/"><li><span class="first">Write</span> Your Representative and Senators Today!</li></a>
                <a href="<?php echo get_site_url(); ?>/take-action/ask-your-representative-and-senators-to-visit-an-htc-project/"><li><span class="first">Ask</span> Your Representative and Senators to Visit an HTC Project</li></a>
                <a href="<?php echo get_site_url(); ?>/take-action/visit-your-congressional-delegation-in-washington-d-c/"><li><span class="first">Visit</span> Your Congressional Delegation in Washington, D.C.</li></a>
                <a href="<?php echo get_site_url(); ?>/take-action/write-an-op-ed-article-or-letter-to-the-editor/"><li><span class="first">Write</span> an<br />Op-ed Article or<br /> Letter to the Editor</li></a>
              </ul>
            </div>
          </aside>

<div class="advocacy-news-content">
          
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
                </ul>
              </div>

              <?php $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1; ?>
              <?php $args = array('post_type' => 'advocacy-items', 'posts_per_page' => 7, 'paged' => $paged,); ?>
              <?php $the_query = new WP_Query( $args ); ?>
              
              <?php if ($the_query->have_posts()): while ($the_query->have_posts()) : $the_query->the_post(); ?>

  <!-- article -->
  <article class="listed-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <!-- post title -->
    <h2>
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
    </h2>
    <!-- /post title -->

    <!-- post details -->
    <span class="date"><?php the_time('F j, Y'); ?></span><span class="category"><?php the_terms( $post->ID, 'advocacy-categories', 'Category: ', ' / ' ); ?></span>
    <!-- <span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span> -->
    
    <!-- <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span> -->
    <!-- /post details -->

    <p><?php the_excerpt(); ?><span class="read_more"><a href="<?php the_permalink(); ?>">&nbsp;Read More</a></span></p>

    <?php edit_post_link(); ?>

  </article>
  <!-- /article -->

  <div class="mobile-content-nav mobile-take-action-nav current-page">
                <label for="show-menu" class="show-menu"></label>
                <input type="checkbox" id="show-menu" role="button" class="mobile-menu">
                <div class="down-arrow">
                  <span>&#9660;</span>
                </div>
                <div id="current-page">
                  Ways you can take action&nbsp;...
                </div>                
                <ul id="subpage-list">
                  <?php take_action_nav(); ?>
                </ul>
              </div>

<?php endwhile; ?>
<?php endif; ?>


              <?php wp_reset_postdata(); ?>
<div class="pagination-links">
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
    
        </div>

<!-- Mobile arrangement -->
        <div class="advocacy-news-content mobile">
          
              <div class="mobile-content-nav current-page">
                <label for="show-mobile-menu" class="show-menu"></label>
                <input type="checkbox" id="show-mobile-menu" role="button" class="mobile-menu">
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
                </ul>
              </div>

              <?php $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1; ?>
              <?php $args = array('post_type' => 'advocacy-items', 'posts_per_page' => 7, 'paged' => $paged,); ?>
              <?php $the_query = new WP_Query( $args ); ?>
              
              <?php if ($the_query->have_posts()): while ($the_query->have_posts()) : $the_query->the_post(); ?>

  <!-- article -->
  <article class="listed-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <!-- post title -->
    <h2>
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
    </h2>
    <!-- /post title -->

    <!-- post details -->
    <span class="date"><?php the_time('F j, Y'); ?></span><span class="category"><?php the_terms( $post->ID, 'advocacy-categories', 'Category: ', ' / ' ); ?></span>
    <!-- <span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span> -->
    
    <!-- <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span> -->
    <!-- /post details -->

    <p><?php the_excerpt(); ?><span class="read_more"><a href="<?php the_permalink(); ?>">&nbsp;Read More</a></span></p>

    <?php edit_post_link(); ?>

  </article>
  <!-- /article -->


<?php endwhile; ?>
<?php endif; ?>


              <?php wp_reset_postdata(); ?>
<div class="pagination-links">
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

          <aside class="categories-take-action-sidebar sidebar-advocacy mobile">
            <ul class="categories-list">
              <li class="all-articles-tab"><a href="<?php echo get_site_url(); ?>/advocacy/">Latest Initiatives</a></li>
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
            </li>
            </ul>
            <div class="advocacy-search">
              <?php get_search_form(); ?>
              <!-- <input class="advocacy-search-input" type="text" placeholder="Search"> -->
            <!-- <div class="advocacy-date-range"> -->
              <!-- <span>Search by date:</span> <br />
              <label for="date-range-from">From:</label><input id="date-range-from" class="date-range-input"><br />
              <label for="date-range-to">To:</label><input id="date-range-to" class="date-range-input"> -->
            </div>

            <div class="take-action-list">
              <h2 class="take-action-list-heading">Take Action</h2>
              <ul class="take-action-list-items">
               <a href="<?php echo get_site_url(); ?>/take-action/write-your-representative-and-senators/"><li><span class="first">Write</span> Your Representative and Senators Today!</li></a>
                <a href="<?php echo get_site_url(); ?>/take-action/ask-your-representative-and-senators-to-visit-an-htc-project/"><li><span class="first">Ask</span> Your Representative and Senators to Visit an HTC Project</li></a>
                <a href="<?php echo get_site_url(); ?>/take-action/visit-your-congressional-delegation-in-washington-d-c/"><li><span class="first">Visit</span> Your Congressional Delegation in Washington, D.C.</li></a>
                <a href="<?php echo get_site_url(); ?>/take-action/write-an-op-ed-article-or-letter-to-the-editor/"><li><span class="first">Write</span> an<br />Op-ed Article or<br /> Letter to the Editor</li></a>
              </ul>
            </div>
          </aside>

      </div>

    </section>
    <!-- /section -->
  </main>

<?php get_footer(); ?>