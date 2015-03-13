<?php /* Template Name: About */ get_header(); ?>
  <main role="main">
    <!-- section -->
    <div class="header-image-container">
      <img src="<?php echo get_template_directory_uri(); ?>/img/header1.jpg" class="header-image">
    </div>
    
    <section class="page-content">

      <div class="page-heading-container">
        <div class="page-heading">
          About Us
        </div>
      </div>

      <div class="about-page-content-container">
            

            <div class="about-content">

              <div class="mobile-content-nav current-page">
                <label for="show-mobile-menu-<?php get_post_ID(); ?>" class="show-menu"></label>
                <input type="checkbox" id="show-mobile-menu-<?php get_post_ID(); ?>" role="button" class="mobile-menu">
                <div class="down-arrow">
                  <span>&#9660;</span>
                </div>
                <div id="current-page">
                  <?php single_post_title(); ?>
                </div>
                <ul id="subpage-list">
                  <?php about_nav(); ?>
                </ul>
              </div>
                

              <aside class="about-content-images">
                <?php if (get_field('about_photo1')): ?>
                  <div>
                    <img src="<?php the_field('about_photo1'); ?>">
                  </div>
                <?php endif; ?>
                <?php if (get_field('about_photo2')): ?>
                  <div>
                    <img src="<?php the_field('about_photo2'); ?>">
                  </div>
                <?php endif; ?>
                <?php if (get_field('about_photo3')): ?>
                  <div>
                    <img src="<?php the_field('about_photo3'); ?>">
                  </div>
                <?php endif; ?>
                <?php if (get_field('about_photo4')): ?>
                  <div>
                    <img src="<?php the_field('about_photo4'); ?>">
                  </div>
                <?php endif; ?>
                <?php if (get_field('about_photo5')): ?>
                  <div>
                    <img src="<?php the_field('about_photo5'); ?>">
                  </div>
                <?php endif; ?>
                <?php if (get_field('about_photo6')): ?>
                  <div>
                    <img src="<?php the_field('about_photo6'); ?>">
                  </div>
                <?php endif; ?>
                <?php if (get_field('about_photo7')): ?>
                  <div>
                    <img src="<?php the_field('about_photo7'); ?>">
                  </div>
                <?php endif; ?>
                
              </aside>

              <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                  <h1 class="about-section-title"><?php the_title(); ?></h1>
                  <?php the_content(); ?>

                  <?php edit_post_link(); ?>

                  <div class="mobile-take-action-nav-container">
              <h1>Take action to help support and improve the federal Historic Tax Credit:</h1>
              <div class="mobile-take-action-nav current-page">
                <label for="show-mobile-take-action-menu-<?php get_post_ID(); ?>" class="show-menu"></label>
                <input class="show-mobile-take-action-menu" type="checkbox" id="show-mobile-take-action-menu-<?php get_post_ID(); ?>" role="button">
                <div id="current-page">
                  Ways you can take action&nbsp;...
                </div>
                <span class="down-arrow">&#9660;</span>
                <ul id="subpage-list">
                  <?php take_action_nav(); ?>
                </ul>
              </div>
            </div>

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
          
<aside class="categories-take-action-sidebar">
              <ul class="categories-list">
                <?php about_nav(); ?>
                <!-- <li><a href="<?php echo get_site_url(); ?>/about/coalition">The Coalition</a></li>
                <li><a href="<?php echo get_site_url(); ?>/about/historic-tax-credit">The Historic Tax Credit</a></li>
                <li><a href="<?php echo get_site_url(); ?>/about/board-of-directors">Board of Directors</a></li>
                <li><a href="<?php echo get_site_url(); ?>/about/members">Members</a></li> -->
              </ul>
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