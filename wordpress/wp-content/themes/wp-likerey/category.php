<?php get_header(); ?>
  <div class="total-container">

    <header class="header">
      <div class="cont">
        <a class="logo" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
        <?php wpeHeadNav(); ?>
      </div>
    </header>
    <!-- END .header -->

    <!-- .content -->
    <div class="content referral-content">
      <div class="cont">
        <h1 class="cat-title inner-title"><?php the_category(', '); ?></h1>
        <?php get_template_part('loop'); ?>
        <?php get_template_part('pagination'); ?>
      </div>
    </div><!-- END .content -->

  </div><!--total-container-->
<?php get_footer(); ?>
