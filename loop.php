<!-- Loop for getting posts - used on Archive pages -->

<?php 
global $more;    // Declare global $more (before the loop).
?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>		
	
  <!-- If on the News page, output News articles in this way -->
  <?php if(is_tax('news-categories') || is_post_type_archive ( 'news-items' )): ?>
        
		<article class="news-items listed-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		    
    <!-- Post thumbnails -->
    <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
        
      <!-- Thumbnail for laptop/desktop size screens -->
      <figure class="news-thumb-container">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php the_post_thumbnail( 'thumbnails' ); ?>
        </a>
      </figure>
      <!-- Thumbnail for mobile size screens -->
      <figure class="news-thumb-container-mobile">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php the_post_thumbnail( 'thumbnails-mobile' ); ?>
        </a>
      </figure>
    
    <?php endif; ?>

  	  <section class="news-article-excerpt clearfix">
  	    <h2>
  	      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
  	    </h2>
  	    <span class="date"><?php the_time('F j, Y'); ?></span><span class="category"><?php the_terms( $post->ID, 'news-categories', 'Category: ', ' / ' ); ?></span>
        <p><?php the_excerpt(); ?><span class="read_more"><a href="<?php the_permalink(); ?>">&nbsp;Read More</a></span></p>
  	    <?php edit_post_link(); ?>
  	  </section>

		</article>

  <!-- If on the Advocacy page, output Advocacy articles in this way -->
	<?php elseif ( is_tax( 'advocacy-categories' )): ?>

		<article class="listed-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  		<h2>
  			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
  		</h2>
  		<span class="date"><?php the_time('F j, Y'); ?></span><span class="category"><?php the_terms( $post->ID, 'advocacy-categories', 'Category: ', ' / ' ); ?></span>
  		<p><?php the_excerpt(); ?><span class="read_more"><a href="<?php the_permalink(); ?>">&nbsp;Read More</a></span></p>
  		<?php edit_post_link(); ?>
	  </article>

  <!-- If on the Members page, output Member articles in this way -->
  <?php else: ?>
	  
    <article class="listed-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <h2>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
      </h2>
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

	<?php endif; ?>
  <?php endwhile; ?>

<?php endif; ?>
