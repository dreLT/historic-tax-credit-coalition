<!-- Sidebar for the Advocacy page -->

<ul class="categories-list">
  <li class="all-articles-tab"><a href="<?php echo get_site_url(); ?>/advocacy/">Latest Initiatives</a></li>
  
  <!-- Get list of custom taxonomy: Advocacy Categories -->
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
    wp_list_categories( $args ); ?>
    </li>
</ul>

<div class="advocacy-search">
  <?php get_search_form(); ?>
</div>

<?php get_template_part( 'take-action-list' ); ?>