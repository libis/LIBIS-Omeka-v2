<?php
function public_nav_main_bootstrap() {
    $partial = array('common/menu-partial.phtml', 'default');
    $nav = public_nav_main();  // this looks like $this->navigation()->menu() from Zend
    $nav->setPartial($partial);
    return $nav->render();
}

function simple_nav(){
    $page = get_current_record('SimplePagesPage');

    $links = simple_pages_get_links_for_children_pages();
    if(!$links):
        $links = simple_pages_get_links_for_children_pages($page->parent_id);
    endif;

    $html="<ul class='simple-nav'>";
    foreach($links as $link):
        $html .= "<li><a href='".$link['uri']."'>".$link['label']."</a></li>";
    endforeach;
    $html .="</ul>";

    return $html;
}

function libis_get_simple_page_content($title) {
    $page = get_record('SimplePagesPage', array('title' => $title));
    if($page):
        return $page->text;
    else:
        return false;
    endif;
}

function get_dienst_metadata($tag,$metadata){
    $dienst = get_records("Item",array("tags" => $tag,"type" => "dienst"),1);

    if($dienst):
      $text = metadata($dienst[0], array("Dublin Core", $metadata));
    else:
      return false;
    endif;

    if($text):
      return $text;
    else:
      return false;
    endif;
}

function get_usecases(){
  $usecases = get_records("Item",array("recent" => true,"type" => "use case"),3);

  if(!$usecases):
    return false;
  endif;

  return $usecases;
}

function get_dienst_usecases($tag){
  $usecases = get_records("Item",array("tags" => $tag,"type" => "use case"),2);

  if(!$usecases):
    return false;
  endif;

  return $usecases;
}

function get_color()
{
    //colors: page id -> different css (production)
    $colors = array(
      "0" => array("naam" => "","kleur" => "grijs", "logo" => "libis_gray.png"),
      "10" => array("naam" => "Heron", "kleur" => "paars", "logo" => "heron_logo.jpg"),//default
      "13" => array("naam" => "Lias", "kleur" => "oranje", "logo" => "lias_logo.jpg"),
      "16" => array("naam" => "LIBISnet", "kleur" => "groen", "logo" => "LIBISnet_LOGO.png"),
      "19" => array("naam" => "LIBISplus", "kleur" => "blauw", "logo" => "LIBISplus_LOGO.png")
    );

    //get current page
    $current_page = get_current_record('simple_pages_page', false);
    if($current_page):
      if (array_key_exists($current_page->id, $colors)) :
          return $colors[$current_page->id];
      endif;

      //determine ancestor
      $pageAncestors = get_db()->getTable('SimplePagesPage')->findAncestorPages($current_page->id);
      foreach ($pageAncestors as $page) :
          if (array_key_exists($page->id, $colors)) :
              return $colors[$page->id];
          endif;
      endforeach;
    endif;

    return $colors['0'];
}
