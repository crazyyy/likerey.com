<div class="info-block">
  <div class="cont">

    <?php $additional_info_box = get_field('additional_info_box', $mother_of_child); if( $additional_info_box ) { ?>
      <div class="info-cont">
        <span class="info-cont__title"><?php the_field('additional_info_box_title', $mother_of_child); ?></span>
        <?php if( have_rows('additional_info_box', $mother_of_child) ): ?>
          <div class="info-cont__shell">
            <?php while ( have_rows('additional_info_box', $mother_of_child) ) : the_row(); ?>
              <div class="info-box">
                <div class="info-box__container">
                  <?php $image = get_sub_field('image'); ?>
                  <div class="info-box__container-img"><img src="<?php echo $image['url']; ?>" alt="<?php the_sub_field('title'); ?>"></div>
                  <span class="info-box__container-text"><?php the_sub_field('title'); ?></span>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
    <?php } ?>

    <?php $main_info_box = get_field('info_box_title_items', 40); if( $main_info_box ) { ?>
    <div class="info-cont">
      <span class="info-cont__title"><?php the_field('info_box_title', 40); ?></span>
      <?php if( have_rows('info_box_title_items', 40) ): ?>
        <div class="info-cont__shell">
          <?php while ( have_rows('info_box_title_items', 40) ) : the_row(); ?>
            <div class="info-box">
              <div class="info-box__container">
                <?php $image = get_sub_field('image'); ?>
                <div class="info-box__container-img"><img src="<?php echo $image['url']; ?>" alt="<?php the_sub_field('title'); ?>"></div>
                <span class="info-box__container-text"><?php the_sub_field('title'); ?></span>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
    <?php } ?>

  </div>
</div>
