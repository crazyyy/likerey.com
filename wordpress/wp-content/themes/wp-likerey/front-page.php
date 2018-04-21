<?php /* Template Name: Home Page */ get_header(); ?>

  <div class="total-container">
    <!-- .soc-net -->

    <header class="soc-net">
      <div class="cont">

        <?php $categories = get_terms('social', array( 'parent' => 0, 'hide_empty' => 1 )); $mother_of_child = $categories[1]; ?>
        <ul class="social-networks">
          <?php foreach( $categories as $category ) : ?>
            <?php $is_active_class = ''; if(($mother_of_child->term_id == $category->term_id)){ $is_active_class = 'active'; } ?>
            <?php $image = get_field('image', $category); ?>
            <li class="ic-fb <?php echo $is_active_class; ?>">
              <a style="background-image: url('<?php echo $image['url']; ?>');" title="<?php echo $category->name; ?>" href="<?php echo get_term_link( $category->slug, 'social' ); ?>"></a>
            </li>
          <?php endforeach ?>
        </ul>
      </div>
    </header>

    <!-- END .soc-net -->
    <div class="goods">
      <div class="rounded">
        <div class="cont">
          <ul class="rounded-menu rounded-menu--saitobaza">
            <?php $terms = get_terms( 'social', array( 'parent' => $mother_of_child->term_taxonomy_id, 'orderby' => 'slug', 'hide_empty' => false ) );
              $i = 0;
              foreach ( $terms as $term ) { ?>
              <?php $is_active_class = ''; if(($i == 0)){ $is_active_class = 'active'; } ?>
              <li class="<?php echo $is_active_class; ?>"><a href="<?php echo get_term_link( $term ); ?>" data-id="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></a></li>
            <?php $i++;  };  ?>
          </ul>
        </div>
      </div>

      <div class="goods__cont goods__cont_saitobaza">

        <?php $terms = get_terms( 'social', array( 'parent' => $mother_of_child->term_taxonomy_id, 'orderby' => 'slug', 'hide_empty' => false ) );
          $i = 0;
          foreach ( $terms as $term ) { ?>
          <?php $is_active_class = ''; if(($i == 0)){ $is_active_class = 'active'; } ?>
            <div class="goods__box goods__box_<?php echo $term->term_id; ?> <?php echo $is_active_class; ?>">
              <div class="price-block">
                <div class="cont">
                  <?php
                    $exec_query = new WP_Query( array(
                        'post_type' => 'product',
                        'orderby' => 'modified',
                        'order'   => 'ASC',
                          'tax_query' => array(
                              array(
                                  'taxonomy' => 'social', // taxonomy name
                                  'field' => 'term_id', // term_id, slug or name
                                  'terms' => $term->term_id, // term id, term slug or term name
                              )
                          )
                    ) );
                    if ( $exec_query->have_posts() ) { ?>

                    <?php while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>
                      <div class="price-cont">
                        <div class="price-box">
                          <span class="price-box__title"><?php the_title(); ?></span>
                          <span class="price-box__value">$<?php the_field('price'); ?></span>
                          <span class="button" onclick="open_popup('popUp_8', '10', '10 Followers', '0.00', 'Instagram Username');">Buy Now</span>
                        </div>
                      </div>
                     <?php endwhile; ?>
                  <?php wp_reset_postdata(); } ?>
                </div>
              </div>
            </div><!-- END .goods__box -->
        <?php $i++; }; ?>

        <?php include(TEMPLATEPATH.'/info-block.php'); ?>

      </div><!-- goods__cont goods__cont_saitobaza -->
    </div>

    <div class="hFooter"></div>
  </div>

<?php get_footer(); ?>
