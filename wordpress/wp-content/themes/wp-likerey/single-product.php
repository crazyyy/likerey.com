<?php get_header(); ?>
  <div class="total-container">

    <header class="header">
      <div class="cont">
        <a class="logo" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
        <?php wpeHeadNav(); ?>
      </div>
    </header>
    <!-- END .header -->

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <!-- .content -->
      <div class="content referral-content">
        <div class="cont">
          <?php the_title(); ?>
          <?php the_content(); ?>
          <?php the_field('price'); ?>
        </div>
      </div><!-- END .content -->
    <?php endwhile; endif; ?>

  </div><!--total-container-->
<?php get_footer(); ?>
