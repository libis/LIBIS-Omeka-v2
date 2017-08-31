<?php echo head(array('bodyid'=>'home', 'bodyclass' =>'two-col')); ?>
<div class="jumbotron">
  <div class='container' role="main" tabindex="-1">
    <section class="jumbo-section">
      <div class="row">
        <div class="co-slogan offset-md-1 col-md-8">
          <div class="slogan">
            <?php if ( $description = option('description')): ?>
            <p><span><?php echo $description; ?></span></p>
            <?php endif; ?>
            <div class="about-button">
              <a href="<?php echo url("over-libis");?>">Lees meer</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
</section>
<section class="home">
    <div id="content" class='container' role="main" tabindex="-1">
      <div class="row">
        <?php $usecases = get_usecases();?>
        <?php if($usecases):?>
          <?php foreach($usecases as $usecase):?>
            <div class="co col-md-6 col-lg-4">
              <h2><?php echo metadata($usecase, array("Dublin Core", "Title"));?></h2>
              <div class="col-content">
                <?php echo item_image('square_thumbnail', array(), 0, $usecase);?>
              </div>
              <a class="block-link" href="<?php echo metadata($usecase, array("Item Type Metadata", "simple-page"));?>">
              <div class="col-overlay">
                  <p><?php echo metadata($usecase, array("Dublin Core", "Description"));?></p>
              </div>
              </a>
            </div>
          <?php endforeach;?>
        <?php endif;?>

        <div class="co col-md-6 col-lg-4 hidden-lg-up">
          <h2>Onze diensten</h2>
          <ul>
            <li><a href="http://www.libisnet.be/">
              <img src="<?php echo img("LIBISnet_LOGO.png");?>"  alt="LIBISnet" />
            </a></li>
            <li><a href="http://www.heron-net.be/">
              <img src="<?php echo img("heron_logo.png");?>"  alt="LIBISnet" />
            </a></li>
            <li><a href="http://www.lias.be/">
              <img src="<?php echo img("lias_logo.png");?>"  alt="LIBISnet" />
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
      <section class="diensten-section-inside">
      <div class="row">
          <div class="col-md-4 diensten">
            <div class="diensten-titel">
              <h2>Onze <span>diensten</span></h2>
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
                        <div class="deelsite_image"><img src="<?php echo img("heron_logo.png");?>" alt="Heron" /></div>
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
                        <div class="deelsite_image"><img src="<?php echo img("lias_logo.png");?>" alt="Lias" /></div>
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
      </section>
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
          <?php $lz = get_libiszine();?>
          <h2><?php echo metadata($lz, array("Dublin Core", "Title"));?></h2>
          <div class="col-content">
            <?php echo item_image('square_thumbnail', array(), 0, $lz);?>
          </div>
          <a class="block-link" href="<?php echo url("libiszine");?>">
          <div class="col-overlay">
              <p><?php echo metadata($lz, array("Dublin Core", "Description"));?></p>
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
