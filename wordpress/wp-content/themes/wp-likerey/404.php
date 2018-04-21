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
        <h1 class="ctitle"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
        <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>
      </div>
    </div><!-- END .content -->

  </div><!--total-container-->
<?php get_footer(); ?>
