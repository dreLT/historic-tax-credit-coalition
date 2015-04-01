<!-- Template search form on left sidebar of Advocacy, News, and Member pages -->
<!-- search -->
<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
  <input class="search-input" type="search" name="s">

  <!-- Use <input> with appropriate value attribute based on the page we are on, so search is limited to that page's items -->  
  <?php if ( is_page( 'News') || is_tax( 'news-categories' ) || is_singular( 'news-items' ) ): ?>
    <input type="hidden" name="post_type" value="news-items" />
  <?php elseif ( is_page( 'Advocacy' ) || is_tax( 'advocacy-categories' ) || is_singular( 'advocacy-items' ) ): ?>
    <input type="hidden" name="post_type" value="advocacy-items" />
  <?php elseif ( is_page( 'Members' ) || is_singular( 'member-items' ) ): ?>
    <input type="hidden" name="post_type" value="member-items" />
  <?php endif; ?>

  <br />
  <button class="search-submit" type="submit" role="button"><?php _e( 'Search', 'html5blank' ); ?></button>
</form>
<!-- /search -->
