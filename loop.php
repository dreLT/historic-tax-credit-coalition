<?php 
global $more;    // Declare global $more (before the loop).
?>


<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	

		<!-- post thumbnail -->
		
		<!-- /post thumbnail -->

		<!-- post title -->
		
	<?php if(is_tax('news-categories') || is_post_type_archive ( 'news-items' )): ?>

        
				<article class="news-items listed-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		    <!-- post thumbnail -->
		    <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
      <figure class="news-thumb-container">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php the_post_thumbnail( 'thumbnails' ); ?>
        </a>
      </figure>
      <figure class="news-thumb-container-mobile">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php the_post_thumbnail( 'thumbnails-mobile' ); ?>
        </a>
      </figure>
    <?php endif; ?>
		    <!-- /post thumbnail -->

		    <!-- post title -->
		  <section class="news-article-excerpt clearfix">
		    <h2>
		      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		    </h2>
		    <!-- /post title -->

		    <!-- post details -->
		    <span class="date"><?php the_time('F j, Y'); ?></span><span class="category"><?php the_terms( $post->ID, 'news-categories', 'Category: ', ' / ' ); ?></span>
		    <!-- <span>Written by:<?php the_field('article_author'); ?></span> -->
		    <!-- <span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span> -->
		    
		    <!-- <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span> -->
		    <!-- /post details -->

        <p><?php the_excerpt(); ?><span class="read_more"><a href="<?php the_permalink(); ?>">&nbsp;Read More</a></span></p>

		    <?php edit_post_link(); ?>
		  </section>

		  </article>

	<?php elseif ( is_tax( 'advocacy-categories' )): ?>

		<article class="listed-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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

<?php else: ?>

	<article class="listed-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <!-- post thumbnail -->
    
    <!-- /post thumbnail -->

    <!-- post title -->
    <h2>
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
    </h2>
    <!-- /post title -->

    <!-- post details -->
    <span class="date">Posted on <?php the_time('F j, Y'); ?></span><span class="category"><?php the_terms( $post->ID, 'member-categories', 'Category: ', ' / ' ); ?></span>
    
    <br />

    <p><?php if ( ! has_excerpt() ) {
      echo '';
    } else { 
      echo the_excerpt();
    }; ?>
    </p>

    <?php edit_post_link(); ?>

  </article>
  <!-- /article -->

	<?php endif; ?>

<?php endwhile; ?>
<?php endif; ?>
