<?php
$bodyclass = 'page simple-page';
$dienst = get_color();

if ($is_home_page):
    $bodyclass .= ' simple-page-home';
endif;

echo head(array(
    'title' => metadata('simple_pages_page', 'title'),
    'bodyclass' => $bodyclass,
    'bodyid' => metadata('simple_pages_page', 'slug')
));
?>
<div class="content-wrapper simple-page-section ">
  <div class="container simple-page-container">
    <!-- Content -->
    <div class="row">
        <div class="col-md-12 col-sm-12 page">
            <div class='row breadcrumbs'>
              <div class="col-sm-12 col-xs-12">
                <p id="simple-pages-breadcrumbs"><span><?php echo simple_pages_display_breadcrumbs(); ?></span></p>
              </div>
            </div>
            <div class='row top'>
              <div class="col-sm-12 col-xs-12">
                <h1><?php echo metadata('simple_pages_page', 'title'); ?></h1>
              </div>
            </div>
            <?php $text = get_dienst_metadata(metadata('simple_pages_page', 'title'),"Description");?>
            <?php if($text):?>
              <div class='row'>
                <div class="col-sm-9 col-xs-12">
                  <div class="intro">
                      <?php echo $text;?>
                  </div>
                </div>
              </div>
            <?php endif;?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <div class='row content'>
              <div class="col-sm-12 col-xs-12">
                <?php
                    $text = metadata('simple_pages_page', 'text', array('no_escape' => true));
                    echo $this->shortcodes($text);
                ?>
              </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 side">
          <div class="row">
            <div class="co col-md-12">
              <?php if($dienst["naam"]):?>
                <h2>Meer over <?php echo $dienst["naam"];?></h2>
              <?php endif;?>
              <div class="side-nav">
                <?php echo simple_nav();?>
              </div>
            </div>
          </div>
          <?php if($dienst["naam"]):?>
            <div class="row">
              <?php $usecases = get_dienst_usecases(metadata('simple_pages_page', 'title'));?>
              <?php if($usecases):?>
                <?php foreach($usecases as $usecase):?>
                  <div class="co col-md-12">
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
            </div>
          <?php endif;?>
        </div>
    </div>
  </div>
</div>

<?php echo foot(); ?>
