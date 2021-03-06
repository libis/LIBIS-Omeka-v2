<?php
/**
 * @copyright   2012 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */
?>

<?php queue_css_file('results'); ?>
<?php echo head(array('title' => __('Solr Search'))); ?>

<div class="content-wrapper bs-docs-section solr-section-search">
  <div class="container-fluid solr-container">

    <div  class="row search-bar-solr">
    <!-- Search form. -->
      <div class="solr col-md-7 col-xs-12">
        <h1>Overview of Husserl’s lectures</h1>

        <form id="solr-search-form">
            <input type="text" title="<?php echo __('Search keywords') ?>" name="q" placeholder="<?php echo __('Search the Collection'); ?>" value="<?php
              echo array_key_exists('q', $_GET) ? $_GET['q'] : '';
              ?>"
            />
          <button type="submit" /><i class="material-icons">&#xE8B6;</i></button>
        </form>
      </div>
      <div class="col-xs-12 col-md-5 lecture-info">
          <?php echo libis_get_simple_page_content("lecture-info");?>
      </div>
    </div>
    <!--<div class="row">
        <div class="col-xs-12 col-md-7 offset-md-5 lecture-info">
            <?php echo libis_get_simple_page_content("lecture-info");?>
        </div>
    </div>-->
  </div>
</div>
<div class="content-wrapper bs-docs-section solr-section-applied">
  <div class="container-fluid solr-container">
    <!-- Applied facets. -->
    <div id="solr-applied-facets">
      <ul>
        <!-- Get the applied facets. -->
        <?php foreach (SolrSearch_Helpers_Facet::parseFacets() as $f) : ?>
          <li>

            <!-- Facet label. -->
            <?php $label = SolrSearch_Helpers_Facet::keyToLabel($f[0]); ?>
            <span class="applied-facet-label"><?php echo $label; ?></span> >
            <span class="applied-facet-value"><?php echo $f[1]; ?></span>

            <!-- Remove link. -->
            <?php $url = SolrSearch_Helpers_Facet::removeFacet($f[0], $f[1]); ?>
            <a href="<?php echo $url; ?>"><i class="material-icons">&#xE14C;</i></a>

          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>
<div class="content-wrapper bs-docs-section solr-section-results">
    <div class="container-fluid solr-container">
    <div class="row">
      <div id="solr-facets" class="col-md-3 col-xs-12">
          <!-- Facets. -->
          <h2><?php echo __('Limit your search'); ?></h2>

            <?php foreach ($results->facet_counts->facet_fields as $name => $facets) : ?>

            <!-- Does the facet have any hits? -->
            <?php if (count(get_object_vars($facets))) : ?>

                <!-- Facet label. -->
                <?php $label = SolrSearch_Helpers_Facet::keyToLabel($name); ?>
                <strong><?php echo $label; ?></strong>

              <ul>
              <!-- Facets. -->
                <?php foreach ($facets as $value => $count) : ?>
                  <li class="<?php echo $value; ?>">

                    <!-- Facet URL. -->
                    <?php $url = SolrSearch_Helpers_Facet::addFacet($name, $value); ?>

                    <!-- Facet link. -->
                    <a href="<?php echo $url; ?>" class="facet-value">
                        <?php echo $value; ?>
                    </a>

                    <!-- Facet count. -->
                    (<span class="facet-count"><?php echo $count; ?></span>)

                  </li>
                <?php endforeach; ?>
              </ul>

            <?php endif; ?>

            <?php endforeach; ?>

          </div>
          <div class="solr-results col-md-9 col-xs-12">
            <!-- Results. -->

            <!-- Number found. -->
            <h2 id="num-found">
                <?php echo $results->response->numFound; ?> results
            </h2>

            <?php foreach ($results->response->docs as $doc) : ?>

              <!-- Document. -->
              <div class="row result">
                <div class="col-xs-12 col-md-3 img-column">
                    <?php
                    if ($doc->resulttype == 'Item') :
                        $item = get_db()->getTable($doc->model)->find($doc->modelid);
                        echo link_to_item(
                            item_image('thumbnail', array('alt' => $doc->title), 0, $item),
                            array(),
                            'show',
                            $item
                        );
                    endif;
                    ?>
                </div>
                <!-- Header. -->
                <div class="col-xs-12 col-md-9">

                    <!-- Record URL. -->
                    <?php $url = SolrSearch_Helpers_View::getDocumentUrl($doc); ?>

                    <!-- Title. -->
                    <h2><a href="<?php echo $url; ?>" class="result-title">
                    <?php
                    $title = is_array($doc->title) ? $doc->title[0] : $doc->title;
                    if (empty($title)) {
                        $title = '<i>'.__('Untitled').'</i>';
                    }
                    echo $title;
                    ?>
                    </a></h2>

                    <?php
                        if ($doc->resulttype == 'Item') :
                          $item = get_db()->getTable($doc->model)->find($doc->modelid);
                          if($text = metadata($item, array('Dublin Core','Description'))):
                            echo $text;
                          endif;
                        endif;
                    ?>
                </div>
              </div>

            <?php endforeach; ?>
        </div>
    </div>

    <?php echo pagination_links(); ?>
  </div>
</div>
<?php echo foot();
