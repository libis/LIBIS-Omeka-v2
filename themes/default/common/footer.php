    <footer role="contentinfo">
        <div class="container footer-container">
            <div id="footer-text">
                <?php echo get_theme_option('Footer Text'); ?>
                <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
                    <p><?php echo $copyright; ?></p>
                <?php endif; ?>
                <div class="row">
                    <div class="col-xs-12 col-xl-12">
                        <img src="<?php echo img("libis_gray.png");?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-xl-12">
                        <ul>
                            <li><a href="<?php echo url("/");?>">Home</a></li>
                            <li><a href="<?php echo url("ons-team");?>">Ons team</a></li>
                            <li><a href="<?php echo url("contact");?>">Contact</a></li>
                            <li><a href="https://extranet.libis.be/">Extranet</a></li>
                            <li><a href="<?php echo url("cookies");?>">Cookies</a> (<a href="javascript:cookieConsent.changeConsent();">intellingen</a>) </li>

                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-xl-12">
                        <div class="copyright">© LIBIS</div>
                    </div>
                </div>
            </div>


              <?php fire_plugin_hook('public_footer', array('view' => $this)); ?>
        </div>
    </footer><!-- end footer -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.js"></script>
    <script src="//www.eucookie.eu/public/gdpr-cookie-consent.js" type="text/javascript"></script>
    <script type="text/javascript">
        var cookieConsent = new cookieConsent({
            clientId: '28fa0980-2e6e-4d0d-865c-7f637bd4fc93',
            language: 'nl',
            buttonBackground: '#a8abb0',
        });
        cookieConsent.run();
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script type="text/plain" data-cookie-if="analytical" async src="https://www.googletagmanager.com/gtag/js?id=UA-24002921-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-24002921-1');
    </script>

    <script>


      jQuery('.navbar-toggler').click(function(e) {
        e.preventDefault();
        jQuery('.navbar-toggler').toggleClass('toggled');
        if(jQuery('.navbar-toggler').hasClass('toggled')){
          jQuery('.navbar-toggler').html("<i class='material-icons'>&#xE5CD;</i>");
        }else{
          jQuery('.navbar-toggler').html("<i class='material-icons'>&#xE5D2;</i>");
        }
      });

      jQuery(function () {
        jQuery('a[href="#search"]').on('click', function(event) {
            event.preventDefault();
            jQuery('#search').addClass('open');
            jQuery('#search > form > input[type="search"]').focus();
        });

        jQuery('#search, #search button.close').on('click keyup', function(event) {
            if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
                $(this).removeClass('open');
            }
        });

    });

    jQuery(document).ready(function(){
      jQuery('.usecases').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: false,
        arrows: true,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 770,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
    });

    </script>
</body>

</html>
