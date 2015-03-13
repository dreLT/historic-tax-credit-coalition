<?php get_header(); ?>

  <main role="main">
    <!-- section -->
    
    <div class="header-image-container">
      <?php if ( is_singular ( 'advocacy-items' ) ): ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/header9.jpg" class="header-image">
      <?php elseif ( is_singular ( 'news-items') ): ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/header2.jpg" class="header-image">
      <?php elseif ( is_singular ( 'member-items') ): ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/header10.jpg" class="header-image">
      <?php endif; ?>
    </div>
    
    <section class="page-content">

      <div class="page-heading-container">
        <div class="page-heading">
          <?php if(is_singular( 'news-items' )) {
            echo 'News';
          } elseif(is_singular( 'advocacy-items' )) {
            echo 'Advocacy';
          } else {
            echo 'Members';
          }
          ; ?>
        </div>
      </div>

      <div class="advocacy-news-page-content-container">
        
        <?php if(is_singular( 'news-items' )): ?>
              <aside class="categories-take-action-sidebar sidebar-advocacy">
              <?php get_template_part( 'news-sidebar' ); ?>
              </aside>
            <?php endif; ?>
            <?php if(is_singular( 'advocacy-items' )): ?>
              <aside class="categories-take-action-sidebar sidebar-advocacy">
              <?php get_template_part( 'advocacy-sidebar' ); ?>
              </aside>
            <?php endif; ?>
            <?php if(is_singular( 'member-items' )): ?>
              <aside class="categories-take-action-sidebar members-categories sidebar-members">
              <?php get_template_part( 'members-sidebar' ); ?>
              </aside>
            <?php endif; ?>

          <div class="advocacy-news-content single-post-container">

            <?php if(is_singular( 'news-items' )): ?>

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

            <?php elseif(is_singular( 'advocacy-items' )): ?>

            <div class="mobile-content-nav current-page">
                <label for="show-mobile-menu-<?php get_post_ID(); ?>" class="show-menu"></label>
                <input type="checkbox" id="show-mobile-menu-<?php get_post_ID(); ?>" role="button" class="mobile-menu">
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
                </ul>
              </div>

               <?php elseif(is_singular( 'member-items' )): ?>

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
                <li><a href="<?php echo home_url(); ?>/advocacy">This Month's Materials</a></li>
                </ul>
              </div>

              <div class="mobile-take-action-button">
                <a href="<?php echo home_url(); ?>/take-action">Take Action <span>»</span></a>
              </div>

            <?php endif; ?>

          	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<!-- post thumbnail -->
							<!--<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail(); // Fullsize image for the single post ?>
								</a>
							<?php endif; ?>-->
							<!-- /post thumbnail -->

							<!-- post title -->
							<h1>
								<?php the_title(); ?>
							</h1>
							<!-- /post title -->

							<!-- post details -->
							<span class="date"><?php the_time('F j, Y'); ?></span>
							
                <!-- Not using WP author feature -->
                <!-- <span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span> -->

              <span class="author"><?php if (is_singular( 'news-items' )) { 
                echo 'Written by: '; the_field('article_author'); 
              }; ?>
              </span>

                <!-- Not using comments (for now) -->
                <!-- <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span> -->
							
              <!-- /post details -->

							<?php the_content(); // Dynamic Content ?>

              <?php if (get_field('advocacy_download1') || get_field('advocacy_download2') || get_field('advocacy_download3') ||
                get_field('members_download1') || get_field('members_download2') || get_field('members_download3')) {
                echo '<p class="downloads-heading">Downloads</p><div class="downloads-list">';
              }; ?>
              <?php
                $attachment_id = get_field('advocacy_download1');
                $url = wp_get_attachment_url( $attachment_id );
                $title = get_the_title( $attachment_id );


               if (get_field('advocacy_download1')): ?>
                
                <a class="download" href="<?php echo $url; ?>"><?php echo $title; ?></a>

              <?php endif; ?>

              <?php
                $attachment_id = get_field('advocacy_download2');
                $url = wp_get_attachment_url( $attachment_id );
                $title = get_the_title( $attachment_id );


               if (get_field('advocacy_download2')): ?>
                
                <a class="download" href="<?php echo $url; ?>"><?php echo $title; ?></a>

              <?php endif; ?>

              <?php
                $attachment_id = get_field('advocacy_download3');
                $url = wp_get_attachment_url( $attachment_id );
                $title = get_the_title( $attachment_id );


               if (get_field('advocacy_download3')): ?>
                
                <a class="download" href="<?php echo $url; ?>"><?php echo $title; ?></a>

              <?php endif; ?>

              <?php
                $attachment_id = get_field('members_download1');
                $url = wp_get_attachment_url( $attachment_id );
                $title = get_the_title( $attachment_id );


               if (get_field('members_download1')): ?>
                
                <a class="download" href="<?php echo $url; ?>"><?php echo $title; ?></a>

              <?php endif; ?>

              <?php
                $attachment_id = get_field('members_download2');
                $url = wp_get_attachment_url( $attachment_id );
                $title = get_the_title( $attachment_id );


               if (get_field('members_download2')): ?>
                
                <a class="download" href="<?php echo $url; ?>"><?php echo $title; ?></a>

              <?php endif; ?>

              <?php
                $attachment_id = get_field('members_download3');
                $url = wp_get_attachment_url( $attachment_id );
                $title = get_the_title( $attachment_id );


               if (get_field('members_download3')): ?>
                
                <a class="download" href="<?php echo $url; ?>"><?php echo $title; ?></a>

              <?php echo '</div>'; ?>
              <?php endif; ?>
              

              <p><?php if (is_singular( 'advocacy-items' )) {
                the_terms( $post->ID, 'advocacy-categories', 'Category: ', ' / ' ); 
              } elseif (is_singular( 'news-items' )) {
                the_terms( $post->ID, 'news-categories', 'Category: ', ' / ' );
                echo '<br />';
                the_terms( $post->ID, 'news-tags', 'Tags: ', ' / ' );
              } ?></p>

              <script>
                document.write('<a class="go-back-link" href="' + document.referrer + '"> « Go Back</a>');
              </script>
              <br />
							<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

						</article>
						<!-- /article -->

					<?php endwhile; ?>

					<?php else: ?>

						<!-- article -->
						<article>

							<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

						</article>
						<!-- /article -->

					<?php endif; ?>

              </div>

              

<!-- Mobile Layout -->

<div class="advocacy-news-content single-post-container mobile">

            <?php if(is_singular( 'news-items' )): ?>

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

            <?php elseif(is_singular( 'advocacy-items' )): ?>

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

               <?php elseif(is_singular( 'member-items' )): ?>

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

                <li><a href="<?php echo home_url(); ?>/members">This Month's Materials</a></li>
                </ul>
              </div>

              <div class="mobile-take-action-button">
                <a href="<?php echo home_url(); ?>/take-action">Take Action <span>»</span></a>
              </div>

            <?php endif; ?>

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

              <!-- post thumbnail -->
              <!--<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                  <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                </a>
              <?php endif; ?>-->
              <!-- /post thumbnail -->

              <!-- post title -->
              <h1>
                <?php the_title(); ?>
              </h1>
              <!-- /post title -->

              <!-- post details -->
              <span class="date"><?php the_time('F j, Y'); ?></span>
              
                <!-- Not using WP author feature -->
                <!-- <span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span> -->

              <span class="author"><?php if (is_singular( 'news-items' )) { 
                echo 'Written by: '; the_field('article_author'); 
              }; ?>
              </span>

                <!-- Not using comments (for now) -->
                <!-- <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span> -->
              
              <!-- /post details -->

              <?php the_content(); // Dynamic Content ?>

              <?php if (get_field('advocacy_download1') || get_field('advocacy_download2') || get_field('advocacy_download3') ||
                get_field('members_download1') || get_field('members_download2') || get_field('members_download3')) {
                echo '<p class="downloads-heading">Downloads</p><div class="downloads-list">';
              }; ?>
              <?php
                $attachment_id = get_field('advocacy_download1');
                $url = wp_get_attachment_url( $attachment_id );
                $title = get_the_title( $attachment_id );


               if (get_field('advocacy_download1')): ?>
                
                <a class="download" href="<?php echo $url; ?>"><?php echo $title; ?></a>

              <?php endif; ?>

              <?php
                $attachment_id = get_field('advocacy_download2');
                $url = wp_get_attachment_url( $attachment_id );
                $title = get_the_title( $attachment_id );


               if (get_field('advocacy_download2')): ?>
                
                <a class="download" href="<?php echo $url; ?>"><?php echo $title; ?></a>

              <?php endif; ?>

              <?php
                $attachment_id = get_field('advocacy_download3');
                $url = wp_get_attachment_url( $attachment_id );
                $title = get_the_title( $attachment_id );


               if (get_field('advocacy_download3')): ?>
                
                <a class="download" href="<?php echo $url; ?>"><?php echo $title; ?></a>

              <?php endif; ?>

              <?php
                $attachment_id = get_field('members_download1');
                $url = wp_get_attachment_url( $attachment_id );
                $title = get_the_title( $attachment_id );


               if (get_field('members_download1')): ?>
                
                <a class="download" href="<?php echo $url; ?>"><?php echo $title; ?></a>

              <?php endif; ?>

              <?php
                $attachment_id = get_field('members_download2');
                $url = wp_get_attachment_url( $attachment_id );
                $title = get_the_title( $attachment_id );


               if (get_field('members_download2')): ?>
                
                <a class="download" href="<?php echo $url; ?>"><?php echo $title; ?></a>

              <?php endif; ?>

              <?php
                $attachment_id = get_field('members_download3');
                $url = wp_get_attachment_url( $attachment_id );
                $title = get_the_title( $attachment_id );


               if (get_field('members_download3')): ?>
                
                <a class="download" href="<?php echo $url; ?>"><?php echo $title; ?></a>

              <?php echo '</div>'; ?>
              <?php endif; ?>
              

              <p><?php if (is_singular( 'advocacy-items' )) {
                the_terms( $post->ID, 'advocacy-categories', 'Category: ', ' / ' ); 
              } elseif (is_singular( 'news-items' )) {
                the_terms( $post->ID, 'news-categories', 'Category: ', ' / ' );
                echo '<br />';
                the_terms( $post->ID, 'news-tags', 'Tags: ', ' / ' );
              } ?></p>

              <script>
                document.write('<a class="go-back-link" href="' + document.referrer + '"> « Go Back</a>');
              </script>
              <br />
              <?php edit_post_link(); // Always handy to have Edit Post Links available ?>

            </article>
            <!-- /article -->

          <?php endwhile; ?>

          <?php else: ?>

            <!-- article -->
            <article>

              <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

            </article>
            <!-- /article -->

          <?php endif; ?>

          <div class="mobile-take-action-nav-container">
            <h1>Take action to help support and improve the federal Historic Tax Credit:</h1>
                  <div class="mobile-take-action-nav current-page">
                  <label for="show-mobile-take-action-menu-<?php get_post_ID(); ?>-s" class="show-menu"></label>
                  <input class="show-mobile-take-action-menu" type="checkbox" id="show-mobile-take-action-menu-<?php get_post_ID(); ?>-s" role="button">
                  <!-- <div class="down-arrow">
                    <span>&#9660;</span>
                  </div> -->
                  <div id="current-page">
                    Ways you can take action&nbsp;...
                  </div>
                  <div class="down-arrow">
                    <span class="down-arrow">&#9660;</span>
                  </div>
                  <ul id="subpage-list">
                    <?php take_action_nav(); ?>
                  </ul>

                </div>
          </div>

        </div>

              <?php if(is_singular( 'news-items' )): ?>
              <aside class="categories-take-action-sidebar sidebar-advocacy mobile">
              <?php get_template_part( 'news-sidebar' ); ?>
              </aside>
            <?php endif; ?>
            <?php if(is_singular( 'advocacy-items' )): ?>
              <aside class="categories-take-action-sidebar sidebar-advocacy mobile">
              <?php get_template_part( 'advocacy-sidebar' ); ?>
              </aside>
            <?php endif; ?>
            <?php if(is_singular( 'member-items' )): ?>
              <aside class="categories-take-action-sidebar members-categories sidebar-members mobile">
              <?php get_template_part( 'members-sidebar' ); ?>
              </aside>
            <?php endif; ?>

					</section>
					<!-- /section -->

        </div>



      </div>

    </section>
    <!-- /section -->
  </main>

<?php get_footer(); ?>
