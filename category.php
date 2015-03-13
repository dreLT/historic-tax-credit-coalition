<?php get_header(); ?>

  <main role="main">
    <!-- section -->
    <div class="header-image-container">
      <img src="<?php echo get_template_directory_uri(); ?>/img/about-placeholder.jpg" class="header-image">
    </div>
    
    <section class="page-content">

      <div class="page-heading-container">
        <div class="page-heading">
          Advocacy
        </div>
      </div>

      <div class="advocacy-news-page-content-container">

          <aside class="categories-take-action-sidebar">
            <ul class="categories-list">
              <li><a href="<?php echo get_site_url(); ?>/about/coalition">Latest Initiatives</a></li>
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
              <input class="advocacy-search-input" type="text" placeholder="Search"><br />
            <!-- <div class="advocacy-date-range"> -->
              <span>Search by date:</span> <br />
              <label for="date-range-from">From:</label><input id="date-range-from" class="date-range-input"><br />
              <label for="date-range-to">To:</label><input id="date-range-to" class="date-range-input">
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

            <main role="main">
              <!-- section -->
              <section>

                <h1><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h1>

                <?php get_template_part('loop'); ?>

                <?php get_template_part('pagination'); ?>

              </section>
              <!-- /section -->
            </main>
        </div>

      </div>

    </section>
    <!-- /section -->
  </main>

<?php get_footer(); ?>

<?php get_header(); ?>

	

<?php get_sidebar(); ?>

<?php get_footer(); ?>
