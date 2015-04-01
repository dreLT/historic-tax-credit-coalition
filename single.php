<!-- Template for displaying single posts -->

<?php get_header(); ?>

<main role="main">
  
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

      <!-- Layout for laptop/desktop size screens -->
      <div class="advocacy-news-content single-post-container">

        <!-- Loop to get post content -->
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
					
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h1>
							<?php the_title(); ?>
						</h1>
						<span class="date"><?php the_time('F j, Y'); ?></span>
            <!-- Only display author on News Posts -->
            <span class="author"><?php if (is_singular( 'news-items' )) { 
              echo 'Written by: '; the_field('article_author'); 
            }; ?>
            </span>

						<?php the_content(); ?>

            <!-- For Advocacy and Member Posts, get and display files for download if uploaded via dashboard -->
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

            <!-- Display post category -->
            <p><?php if (is_singular( 'advocacy-items' )) {
              the_terms( $post->ID, 'advocacy-categories', 'Category: ', ' / ' ); 
            } elseif (is_singular( 'news-items' )) {
              the_terms( $post->ID, 'news-categories', 'Category: ', ' / ' );
              echo '<br />';
              the_terms( $post->ID, 'news-tags', 'Tags: ', ' / ' );
            } ?></p>

            <!-- Link to previously browsed page -->
            <script>
              document.write('<a class="go-back-link" href="' + document.referrer + '"> « Go Back</a>');
            </script>
            <br />
						<?php edit_post_link(); ?>

					</article>

				<?php endwhile; ?>
				<?php else: ?>

					<article>
						<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
					</article>

				<?php endif; ?>

        </div>

        <!-- Layout for mobile size screens -->

        <div class="advocacy-news-content single-post-container mobile">

          <!-- Display appropriate mobile drop down nav -->
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

          <?php endif; ?>

          <?php if (have_posts()): while (have_posts()) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1>
              <?php the_title(); ?>
            </h1>
            <span class="date"><?php the_time('F j, Y'); ?></span>
            <span class="author"><?php if (is_singular( 'news-items' )) { 
              echo 'Written by: '; the_field('article_author'); 
            }; ?>
            </span>

            <?php the_content(); ?>

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
            <?php edit_post_link(); ?>

          </article>

        <?php endwhile; ?>
        <?php else: ?>

          <article>
            <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
          </article>

        <?php endif; ?>

        <div class="mobile-take-action-nav-container">
          <h1>Take action to help support and improve the federal Historic Tax Credit:</h1>
            <div class="mobile-take-action-nav current-page">
            <label for="show-mobile-take-action-menu-<?php get_post_ID(); ?>-s" class="show-menu"></label>
            <input class="show-mobile-take-action-menu" type="checkbox" id="show-mobile-take-action-menu-<?php get_post_ID(); ?>-s" role="button">
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
			
  </div>

</div>

</section>
  
</main>

<?php get_footer(); ?>