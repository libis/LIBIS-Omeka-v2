<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ($description = option('description')) :?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>
    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <!-- Determine color and logo -->
    <?php $style = get_color();?>

    <?php
    $smallheader = "";
    if($style["kleur"] != 'grijs'):
      $smallheader = "small-nav";
    endif;
    ?>
    <!-- Plugin Stuff -->
    <?php fire_plugin_hook('public_head', array('view' => $this)); ?>

    <!-- Stylesheets -->
    <?php
      queue_css_file(array('iconfonts', 'app'));
      queue_css_url('https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre:400,700,900|Open+Sans:300,400,700');
      echo head_css();
      echo theme_header_background();
    ?>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Quicksand" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!-- JavaScripts -->
    <?php echo head_js();?>
  

</head>
<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <header role="banner">
      <div class="container">
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded <?php echo $smallheader;?> <?php echo $style['kleur'];?>">
          <button class="navbar-toggler navbar-toggler-right justify-content-end" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class='material-icons'>&#xE5D2;</i>
          </button>
          <a class="navbar-brand" href="<?php echo WEB_ROOT;?>"><img src="<?php echo img('libis_gray.png');?>"></a>

          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <?php echo public_nav_main_bootstrap();?>
          </div>
          <a class="navbar-toggler-right search-toggle" href="#search"><i class="material-icons">search</i></a>
        </nav>
      </div>

      <div class="collapse" id="navbarToggler">
        <?php echo public_nav_main(array('role' => 'navigation')) -> setUlClass('mr-auto mt-2 mt-md-0 navbar-nav'); ?>
      </div>
    </header>
    <div id="search">
        <button type="button" class="close"><i class='material-icons'>&#xE5CD;</i></button>
        <form id="search-modal" action="<?php echo url('/search');?>">
          <div class="input-group">
            <input type="search" class="form-control" name="query" value="" placeholder="Zoek..." />
            <span class="input-group-btn">
              <button class="" type="submit"><i class="material-icons">search</i></button>
            </span>
          </div>
        </form>
    </div>
