  <!-- .footer -->
  <footer class="footer">
    <div class="cont">
      <a class="footer-logo" href="/"><?php bloginfo('name'); ?></a>
      <?php wpeFootNav(); ?>
    </div>
  </footer>
  <!-- END .footer -->

  <!-- Instagram Followers -->
  <div id="popUp_1" class="popUp">
    <div class="popUp__block">
      <div class="popUp__window">
        <div class="popUp-close"></div>
        <form action="https://likerey.com/" method="post" onsubmit="send_form(this); return false;">
          <span class="popUp-title"><span id="kol_text"></span></span>
          <input type="hidden" name="kol" id="kol" value="0">
          <input type="hidden" id="api_type" name="api_type" value="1">
          <div class="popUp-cont">
            <div class="popUp-block">
              <div class="popUp-cont__box">
                <input class="inputPopup input-name" type="text" name="link" placeholder="Username">
              </div>
            </div>
            <div class="popUp-cont__box">
              <input class="inputPopup input-email" type="email" name="email" placeholder="Email">
            </div>
          </div>
          <input type="hidden" id="price1" value="">
          <input type="hidden" id="price2" value="">
          <div class="popUp-switching">
            <button class="popUp-switching__button active" type="button">Bots</button>
            <button class="popUp-switching__button" type="button">Fast &amp; Guaranteed</button>
          </div>
          <div class="popUp-butt">
            <input class="button button--average" type="submit" id="but_text" value="">
          </div>
        </form>
        <span class="popUp-info">By purchasing, you agree with rules</span>
      </div>
    </div>
  </div>
  <!-- Instagram Likes -->

  <?php wp_footer(); ?>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/libs.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>

</html>
