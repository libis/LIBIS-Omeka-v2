<?php echo head(array('bodyid'=>'home', 'bodyclass' =>'two-col')); ?>
<div class="jumbotron">
  <div class='container' role="main" tabindex="-1">
    <section class="jumbo-section">
      <div class="row">
        <div class="col-md-8">
          <div class="slogan">
            <p><span>Een korte slagzin</span></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="logo-bars">
            <img src="<?php echo img('libis_bars.png');?>">
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<section class="home">
    <div id="content" class='container' role="main" tabindex="-1">
      <div class="row">        
        <div class="co col-md-6 col-lg-4">
          <h2>Alma D</h2>
          <div class="col-content">
            <img src="<?php echo img("ph/Round.jpg");?>">
          </div>
          <a class="block-link" href="">
          <div class="col-overlay">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
          </a>
        </div>
        <div class="co col-md-6 col-lg-4">
          <h2>Digital participatie</h2>
          <div class="col-content">
            <img src="<?php echo img("placeholder2.jpg");?>">
          </div>
          <a class="block-link" href="">
          <div class="col-overlay">
            <p>Nullam accumsan, mauris faucibus tempus ornare, nunc eros feugiat magna.</p>
          </div>
          </a>
        </div>
        <div class="co col-md-6 col-lg-4">
          <h2>Usecase 3</h2>
          <div class="col-content">
            <img src="<?php echo img("libiszine.jpg");?>">
          </div>
          <a class="block-link" href="">
          <div class="col-overlay">
            <p>Aenean tristique consectetur nibh ut sollicitudin.</p>
          </div>
          </a>
        </div>
        <div class="co col-md-6 col-lg-4 hidden-lg-up">
          <h2>Onze diensten</h2>
          <ul>
            <li><a href="http://www.libisnet.be/">
              <img src="<?php echo img("LIBISnet_LOGO.png");?>"  alt="LIBISnet" />
            </a></li>
            <li><a href="http://www.heron-net.be/">
              <img src="<?php echo img("heron_logo.jpg");?>"  alt="LIBISnet" />
            </a></li>
            <li><a href="http://www.lias.be/">
              <img src="<?php echo img("lias_logo.jpg");?>"  alt="LIBISnet" />
            </a></li>
            <li><a href="http://www.libisplus.be/">
              <img src="<?php echo img("LIBISplus_LOGO.png");?>"  alt="LIBISnet" />
            </a></li>
          </ul>
        </div>
      </div>
  </div>
</section>
<section class="diensten-section hidden-md-down">
    <div class='container' role="main" tabindex="-1">
      <div class="row">
          <div class="col-md-4 diensten">
            <div class="diensten-titel">
              <h2><span>Onze diensten</span></h2>
              <hr align="right">
            </div>
          </div>
          <div class="col-md-8 diensten">
              <div class="row">
                <div class="col-md-6">
                    <a href="http://www.libisnet.be/">
                    <div class="deelsite groen">
                        <div class="deelsite_image"><img src="<?php echo img("LIBISnet_LOGO.png");?>"  alt="LIBISnet" /></div>
                        <p>
                          Integer a velit in ligula rutrum congue sit amet at justo.
                        </p>
                    </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="http://www.heron-net.be/">
                    <div class="deelsite paars">
                        <div class="deelsite_image"><img src="<?php echo img("heron_logo.jpg");?>" alt="Heron" /></div>
                        <p>
                          Nullam et neque felis. Suspendisse potenti.
                        </p>
                    </div>
                    </a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                    <a href="http://www.lias.be/">
                    <div class="deelsite oranje">
                        <div class="deelsite_image"><img src="<?php echo img("lias_logo.jpg");?>" alt="Lias" /></div>
                        <p>
                          Ut rhoncus porta lectus, ac placerat est auctor sed.
                        </p>
                    </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="http://www.libisplus.be/">
                    <div class="deelsite blauw">
                        <div class="deelsite_image"> <img src="<?php echo img("LIBISplus_LOGO.png");?>" alt="LIBIS&#43;" /></div>
                        <p>
                          Integer a velit in ligula rutrum congue sit amet at justo.</p>
                    </div>
                    </a>
                </div>
              </div>
          </div>
      </div>
  </div>
</section>
<section class="home">
  <div id="content" class='container' role="main" tabindex="-1">
      <div class="row">
        <div class="co col-md-6 col-lg-4">
          <h2>Nieuws</h2>
          <ul>
            <?php echo feedCollector_show(1);?>
          </ul>
          <div class="more">
            <a href="http://intoinfo.blogspot.com/">Meer nieuws op onze blog</a>
          </div>
        </div>

        <div class="co col-md-6 col-lg-4">
          <h2>LIBISzine</h2>
          <div class="col-content">
            <img src="<?php echo img("libiszine.jpg");?>">
          </div>
          <a class="block-link" href="">
          <div class="col-overlay">
            <p>Ut condimentum vulputate ultricies. Morbi varius ipsum enim.</p>
          </div>
          </a>
        </div>

        <div class="co col-md-6 col-lg-4">
          <h2>Contact</h2>
          <div class="col-content">
            <p>
              Willem de Croylaan 54 – bus 5592<br>
              3001 Heverlee<br>
              +32 16 32 22 66
            </p>
            <ul>
              <li><a href="<?php echo url("route");?>">Routebeschrijving</a></li>
              <li><a href="<?php echo url("contact");?>">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>

<?php echo foot(); ?>
