<ul class="categories-list">
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
            </li>
            </ul>

          <div class="members-sidebar-search">            
            <h2>Filter by Month:</h2>
              
                <select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
                  <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
                  <?php wp_get_archives_cpt( array( 'post_type' => 'member-items', 'type' => 'monthly', 'format' => 'option' ) ); ?>
                </select>
            
          
          </div>
              

            <?php get_template_part( 'take-action-list' ); ?>