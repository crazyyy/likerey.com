  <!-- .footer -->
  <footer class="footer">
    <div class="cont">
      <a class="footer-logo" href="/"><?php bloginfo('name'); ?></a>
      <?php wpeFootNav(); ?>
    </div>
  </footer>
  <!-- END .footer -->

  <div id="popUp_1" class="popUp">
    <div class="popUp__block">
      <div class="popUp__window">
        <div class="popUp-close"></div>
        <form action="<?php echo home_url(); ?>" method="post" class="form-submitt">
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
            <button class="popUp-switching__button active" type="button" onclick="$('#popUp_1 #api_type').val(1); $('#popUp_1 #but_text').val('Pay '+$('#popUp_1 #price1').val()+'$');">Bots</button>
            <button class="popUp-switching__button" type="button" onclick="$('#popUp_1 #api_type').val(2); $('#popUp_1 #but_text').val('Pay '+$('#popUp_1 #price2').val()+'$');">Fast &amp; Guaranteed</button>
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
  <div id="popUp_2" class="popUp">
    <div class="popUp__block">
      <div class="popUp__window">
        <div class="popUp-close"></div>
        <form action="<?php echo home_url(); ?>" method="post" class="form-submitt">
          <span class="popUp-title"><span id="kol_text"></span></span>
          <input type="hidden" name="kol" id="kol" value="0">
          <input type="hidden" id="api_type" name="api_type" value="2">
          <div class="popUp-cont">
            <div class="popUp-block">
              <div class="popUp-cont__box">
                <input class="inputPopup input-name" type="text" name="link[]" placeholder="Url to Instagram post">
                <div class="inputAdd"></div>
              </div>
            </div>
            <div class="popUp-cont__box">
              <input class="inputPopup input-email" type="email" name="email" placeholder="Email">
            </div>
          </div>
          <input type="hidden" id="price1" value="">
          <input type="hidden" id="price2" value="">
          <div class="popUp-switching">
            <button class="popUp-switching__button active" type="button" onclick="$('#popUp_2 #api_type').val(2); $('#popUp_2 #but_text').val('Pay '+$('#popUp_2 #price2').val()+'$');">Instant</button>
            <button class="popUp-switching__button" type="button" onclick="$('#popUp_2 #api_type').val(1); $('#popUp_2 #but_text').val('Pay '+$('#popUp_2 #price1').val()+'$');">Gradual</button>
          </div>
          <div class="popUp-butt">
            <input class="button button--average" type="submit" id="but_text" value="">
          </div>
        </form>
        <span class="popUp-info">By purchasing, you agree with rules</span>
      </div>
    </div>
  </div>
  <!-- Instagram Auto-Likes -->
  <div id="popUp_3" class="popUp">
    <div class="popUp__block">
      <div class="popUp__window">
        <div class="popUp-close"></div>
        <form action="<?php echo home_url(); ?>" method="post" class="form-submitt">
          <span class="popUp-title"><span id="kol_text"></span></span>
          <input type="hidden" name="kol" id="kol" value="0">
          <input type="hidden" id="api_type" name="api_type" value="2">
          <div class="popUp-cont">
            <div class="popUp-block">
              <div class="popUp-cont__box">
                <input class="inputPopup input-name" type="text" name="link" placeholder="Username">
              </div>
            </div>
            <div class="popUp-cont__box">
              <input class="inputPopup input-name" type="number" min="1" max="99" id="count" name="count" placeholder="For new posts" onchange="calc_autolikes_in_form($(this).val())">
            </div>
            <div class="popUp-cont__box">
              <input class="inputPopup input-email" type="email" name="email" placeholder="Email">
            </div>
          </div>
          <input type="hidden" id="price1" value="">
          <input type="hidden" id="price2" value="">
          <div class="popUp-switching">
            <button class="popUp-switching__button active" type="button" onclick="$('#popUp_3 #api_type').val(2); $('#popUp_3 #but_text').val('Pay '+$('#popUp_3 #price2').val()+'$');">Instant</button>
            <button class="popUp-switching__button" type="button" onclick="$('#popUp_3 #api_type').val(1); $('#popUp_3 #but_text').val('Pay '+$('#popUp_3 #price1').val()+'$');">Gradual</button>
          </div>
          <div class="popUp-butt">
            <input class="button button--average" type="submit" id="but_text" value="">
          </div>
        </form>
        <span class="popUp-info">By purchasing, you agree with rules</span>
      </div>
    </div>
  </div>
  <!-- Standart 10 fields -->
  <div id="popUp_4" class="popUp">
    <div class="popUp__block">
      <div class="popUp__window">
        <div class="popUp-close"></div>
        <form action="<?php echo home_url(); ?>" method="post" class="form-submitt">
          <span class="popUp-title"><span id="kol_text"></span></span>
          <input type="hidden" name="kol" id="kol" value="0">
          <div class="popUp-cont">
            <div class="popUp-block">
              <div class="popUp-cont__box">
                <input class="inputPopup input-name" type="text" name="link[]" placeholder="Url to post">
                <div class="inputAdd"></div>
              </div>
            </div>
            <div class="popUp-cont__box">
              <input class="inputPopup input-email" type="email" name="email" placeholder="Email">
            </div>
          </div>
          <div class="popUp-butt">
            <input class="button button--average" type="submit" id="but_text" value="">
          </div>
        </form>
        <span class="popUp-info">By purchasing, you agree with rules</span>
      </div>
    </div>
  </div>
  <!-- Standart -->
  <div id="popUp_5" class="popUp">
    <div class="popUp__block">
      <div class="popUp__window">
        <div class="popUp-close"></div>
        <form action="<?php echo home_url(); ?>" method="post" class="form-submitt">
          <span class="popUp-title"><span id="kol_text"></span></span>
          <input type="hidden" name="kol" id="kol" value="0">
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
          <div class="popUp-butt">
            <input class="button button--average" type="submit" id="but_text" value="">
          </div>
        </form>
        <span class="popUp-info">By purchasing, you agree with rules</span>
      </div>
    </div>
  </div>
  <!-- Facebook Followers -->
  <div id="popUp_6" class="popUp">
    <div class="popUp__block">
      <div class="popUp__window">
        <div class="popUp-close"></div>
        <form action="<?php echo home_url(); ?>" method="post" class="form-submitt">
          <span class="popUp-title"><span id="kol_text"></span></span>
          <input type="hidden" name="kol" id="kol" value="0">
          <input type="hidden" id="api_type" name="api_type" value="2">
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
            <button class="popUp-switching__button active" type="button" onclick="$('#popUp_6 #api_type').val(2); $('#popUp_6 #but_text').val('Pay '+$('#popUp_6 #price2').val()+'$');">Friends</button>
            <button class="popUp-switching__button" type="button" disabled="" onclick="$('#popUp_6 #api_type').val(1); $('#popUp_6 #but_text').val('Pay '+$('#popUp_6 #price1').val()+'$');">Followers</button>
          </div>
          <div class="popUp-butt">
            <input class="button button--average" type="submit" id="but_text" value="">
          </div>
        </form>
        <span class="popUp-info">By purchasing, you agree with rules</span>
      </div>
    </div>
  </div>
  <!-- Youtube Comment Likes/Dislikes -->
  <div id="popUp_7" class="popUp">
    <div class="popUp__block">
      <div class="popUp__window">
        <div class="popUp-close"></div>
        <form action="<?php echo home_url(); ?>" method="post" class="form-submitt">
          <span class="popUp-title"><span id="kol_text"></span></span>
          <input type="hidden" name="kol" id="kol" value="0">
          <input type="hidden" id="api_type" name="api_type" value="1">
          <div class="popUp-cont">
            <div class="popUp-block">
              <div class="popUp-cont__box">
                <input class="inputPopup input-name" type="text" name="link" placeholder="Url to Youtube comment not to video!">
              </div>
            </div>
            <div class="popUp-cont__box">
              <input class="inputPopup input-email" type="email" name="email" placeholder="Email">
            </div>
          </div>
          <div class="popUp-switching">
            <button class="popUp-switching__button active" type="button" onclick="$('#popUp_7 #api_type').val(1);">UpVotes</button>
            <button class="popUp-switching__button" type="button" onclick="$('#popUp_7 #api_type').val(2);">DownVotes</button>
          </div>
          <div class="popUp-butt">
            <input class="button button--average" type="submit" id="but_text" value="">
          </div>
        </form>
        <span class="popUp-info">By purchasing, you agree with rules</span>
      </div>
    </div>
  </div>
  <!-- Instagram Followers Test -->

  <div id="popUp_8" class="popUp">
    <div class="popUp__block">
      <div class="popUp__window">
        <div class="popUp-close"></div>
        <form action="<?php echo home_url(); ?>" method="post" class="form-submitt">
          <span class="popUp-title"><span id="kol_text"></span></span>
          <input type="hidden" name="kol" id="kol" value="0">
          <input type="hidden" name="api_type" value="1">
          <div class="popUp-cont">
            <div class="popUp-block">
              <div class="popUp-cont__box">
                <input class="inputPopup input-name" type="text" name="link" placeholder="Instagram Username">
              </div>
            </div>
            <div class="popUp-cont__box">
              <input class="inputPopup input-email" type="email" name="email" placeholder="Email">
            </div>
          </div>
          <div class="popUp-butt">
            <input class="button button--average" type="submit" id="but_text" value="Free test">
          </div>
        </form>
        <span class="popUp-info">By purchasing, you agree with rules</span>
      </div>
    </div>
  </div>

  <!-- Youtube Views -->
  <div id="popUp_9" class="popUp">
    <div class="popUp__block">
      <div class="popUp__window">
        <div class="popUp-close"></div>
        <form action="<?php echo home_url(); ?>" method="post" class="form-submitt">
          <span class="popUp-title"><span id="kol_text"></span></span>
          <input type="hidden" name="kol" id="kol" value="0">
          <input type="hidden" id="api_type" name="api_type" value="1">
          <div class="popUp-cont">
            <div class="popUp-block">
              <div class="popUp-cont__box">
                <input class="inputPopup input-name" type="text" name="link" placeholder="Url to Youtube video">
              </div>
            </div>
            <div class="popUp-cont__box">
              <input class="inputPopup input-email" type="email" name="email" placeholder="Email">
            </div>
          </div>
          <input type="hidden" id="price1" value="">
          <input type="hidden" id="price2" value="">
          <div class="popUp-switching">
            <button class="popUp-switching__button active" type="button" onclick="$('#popUp_9 #api_type').val(1); $('#popUp_9 #but_text').val('Pay '+$('#popUp_9 #price1').val()+'$');">Guaranteed</button>
            <button class="popUp-switching__button" type="button" onclick="$('#popUp_9 #api_type').val(2); $('#popUp_9 #but_text').val('Pay '+$('#popUp_9 #price2').val()+'$');">Permanent &amp; Slow</button>
          </div>
          <div class="popUp-butt">
            <input class="button button--average" type="submit" id="but_text" value="">
          </div>
        </form>
        <span class="popUp-info">By purchasing, you agree with rules</span>
      </div>
    </div>
  </div>
  <!-- Instagram Views -->
  <div id="popUp_10" class="popUp">
    <div class="popUp__block">
      <div class="popUp__window">
        <div class="popUp-close"></div>
        <form action="<?php echo home_url(); ?>" method="post" class="form-submitt">
          <span class="popUp-title"><span id="kol_text"></span></span>
          <input type="hidden" name="kol" id="kol" value="0">
          <input type="hidden" id="api_type" name="api_type" value="1">
          <div class="popUp-cont">
            <div class="popUp-block">
              <div class="popUp-cont__box">
                <input class="inputPopup input-name" type="text" name="link[]" placeholder="Url to post">
                <div class="inputAdd"></div>
              </div>
            </div>
            <div class="popUp-cont__box">
              <input class="inputPopup input-email" type="email" name="email" placeholder="Email">
            </div>
          </div>
          <input type="hidden" id="price1" value="">
          <input type="hidden" id="price2" value="">
          <div class="popUp-switching">
            <button class="popUp-switching__button active" type="button" onclick="$('#popUp_10 #api_type').val(1); $('#popUp_10 #but_text').val('Pay '+$('#popUp_10 #price1').val()+'$');">Instant</button>
            <button class="popUp-switching__button" type="button" onclick="$('#popUp_10 #api_type').val(2); $('#popUp_10 #but_text').val('Pay '+$('#popUp_10 #price2').val()+'$');">Gradual</button>
          </div>
          <div class="popUp-butt">
            <input class="button button--average" type="submit" id="but_text" value="">
          </div>
        </form>
        <span class="popUp-info">By purchasing, you agree with rules</span>
      </div>
    </div>
  </div>

<?php
  //Set useful variables for paypal form
  $paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
  $paypalID = 'psuyi@mail.ru'; //Business Email
?>
<form id="send_paypall" action="<?php echo $paypalURL; ?>" method="post">
    <!-- Identify your business so that you can collect the payments. -->
    <input type="hidden" name="business" value="<?php echo $paypalID; ?>">

    <!-- Specify a Buy Now button. -->
    <input type="hidden" name="cmd" value="_xclick">

    <!-- Specify details about the item that buyers will purchase. -->
    <input type="hidden" name="item_name" value="Content">
    <input type="hidden" name="item_number" value="55">
    <input type="hidden" name="amount" value="10">
    <input type="hidden" name="currency_code" value="USD">

    <!-- Specify URLs -->
    <input type='hidden' name='cancel_return' value='<?php echo home_url(); ?>'>
    <input type='hidden' name='return' value='<?php echo home_url(); ?>'>

    <!-- Display the payment button. -->
</form>



  <?php wp_footer(); ?>

</body>
</html>
