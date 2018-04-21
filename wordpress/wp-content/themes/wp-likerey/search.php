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
        <h1 class="search-title inner-title"><?php echo sprintf( __( '%s Search Results for ', 'wpeasy' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
        <?php get_template_part('loop'); ?>
        <?php get_template_part('pagination'); ?>
      </div>
    </div><!-- END .content -->

  </div><!--total-container-->
<?php get_footer(); ?>
