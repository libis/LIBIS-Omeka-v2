<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'item show')); ?>
<?php $type = metadata('item','item_type_name');?>
<div class="content-wrapper simple-page-section ">
  <div class="container simple-page-container">
    <?php if (metadata('item', 'has files') && $type != 'News'): ?>
    <div class="row">
        <div class="col-md-12 col-sm-12 page">
            <div class='row breadcrumbs'>
              <div class="col-sm-12 col-xs-12">
                <p id="simple-pages-breadcrumbs"><span>
                   <a href="<?php echo url('/');?>">Home</a></span>
                   > <span><a href="<?php echo $type;?>"><?php echo $type;?></a></span>
                   > <?php echo metadata('item', array('Dublin Core', 'Title')); ?>
                </span></p>
              </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <section class="metadata-section general-section">
      <h1 class="section-title projecten-title"><span><?php echo metadata('item', array('Dublin Core', 'Title')); ?></span></h1>

        <div id="content" class='container' role="main" tabindex="-1">

            <div class="row content">
                  <?php if (metadata('item', 'has files')): ?>
                    <div class="col-sm-2 col-xs-12 page">
                      <div id="itemfiles" class="element">
                        <?php echo item_image_gallery(array(),'thumbnail'); ?>
                      </div>
                    </div>
                  <?php endif; ?>
                  <div class="col-sm-10 col-xs-12 page profile">
                        <?php if ($type != ''): ?>
                          <!--<h3 class="type-title"><?php echo $type;?></h3>-->
                        <?php endif; ?>

                        <?php if ($type != 'News'): ?>
                            <?php $texts =  all_element_texts('item',array('return_type'=>'array'));?>
                            <?php if (isset($texts['Profile Item Type Metadata']['Job title'])): ?>
                            <div class="element">
                                <h3><?php echo 'Job title'; ?></h3>
                                <div class="element-text"><?php echo implode(', ',$texts['Profile Item Type Metadata']['Job title']); ?></div>
                            </div>
                            <?php endif; ?>

                            <?php if (isset($texts['Profile Item Type Metadata']['Function/Expertise'])): ?>
                            <div class="element">
                                <h3><?php echo 'Function/Expertise'; ?></h3>
                                <div class="element-text"><?php echo implode(', ',$texts['Profile Item Type Metadata']['Function/Expertise']); ?></div>
                            </div>
                            <?php endif; ?>

                            <?php if (isset($texts['Profile Item Type Metadata']['Documentation'])): ?>
                            <div class="element">
                                <h3><?php echo 'Documentation'; ?></h3>
                                <div class="element-text"><?php echo implode(', ',$texts['Profile Item Type Metadata']['Documentation']); ?></div>
                            </div>
                            <?php endif; ?>

                            <?php if (isset($texts['Profile Item Type Metadata']['Bibliography'])): ?>
                            <div class="element">
                                <h3><?php echo 'Bibliography'; ?></h3>
                                <div class="element-text"><?php echo implode(', ',$texts['Profile Item Type Metadata']['Bibliography']); ?></div>
                            </div>
                            <?php endif; ?>

                            <?php if (isset($texts['Profile Item Type Metadata']['Other links'])): ?>
                            <div class="element">
                                <h3><?php echo 'Other links'; ?></h3>
                                <div class="element-text"><?php echo implode(', ',$texts['Profile Item Type Metadata']['Other links']); ?></div>
                            </div>
                            <?php endif; ?>

                            <!-- social -->
                            <div class="panel">
                              <?php if (isset($texts['Profile Item Type Metadata']['Telephone number'])): ?>
                              <div class="element">
                                  <h3><i class="fa fa-phone" aria-hidden="true"></i></h3>
                                  <div class="element-text"><?php echo implode(', ',$texts['Profile Item Type Metadata']['Telephone number']); ?></div>
                              </div>
                              <?php endif; ?>

                              <?php if (isset($texts['Profile Item Type Metadata']['Email'])): ?>
                              <div class="element">
                                  <h3><i class="fa fa-envelope-o" aria-hidden="true"></i></h3>
                                  <div class="element-text"><?php echo implode(', ',$texts['Profile Item Type Metadata']['Email']); ?></div>
                              </div>
                              <?php endif; ?>
                              <?php if (isset($texts['Profile Item Type Metadata']['LinkedIn'])): ?>
                                <div class="element">
                                    <h3><i class="fa fa-linkedin-square" aria-hidden="true"></i></h3>
                                    <div class="element-text"><?php echo $texts['Profile Item Type Metadata']['LinkedIn'][0]; ?></div>
                                </div>
                              <?php endif; ?>
                              <?php if (isset($texts['Profile Item Type Metadata']['Twitter'])): ?>
                                <div class="element">
                                    <h3><i class="fa fa-twitter" aria-hidden="true"></i></h3>
                                    <div class="element-text"><?php echo $texts['Profile Item Type Metadata']['Twitter'][0]; ?></div>
                                </div>
                              <?php endif; ?>
                              <?php if (isset($texts['Profile Item Type Metadata']['Facebook'])): ?>
                                <div class="element">
                                    <h3>  <i class="fa fa-facebook-official" aria-hidden="true"></i></h3>
                                    <div class="element-text"><?php echo $texts['Profile Item Type Metadata']['Facebook'][0]; ?></div>
                                </div>
                              <?php endif; ?>
                              <?php if (isset($texts['Profile Item Type Metadata']['SlideShare'])): ?>
                                <div class="element">
                                    <h3><i class="fa fa-slideshare" aria-hidden="true"></i></h3>
                                    <div class="element-text"><?php echo $texts['Profile Item Type Metadata']['SlideShare'][0]; ?></div>
                                </div>
                              <?php endif; ?>
                            </div>


                        <?php else:?>
                              <p class="date"><?php echo metadata('item', array('Dublin Core', 'Date')); ?></p>
                              <p class="description"><?php echo metadata('item', array('Dublin Core', 'Description')); ?></p>
                        <?php endif; ?>
                    </div>

                    <nav style="width:100%;">
                    <ul class="item-pagination navigation" style="width:100%;text-align:center;">
                        <li style="margin:5px;" id="previous-item" class="previous"><?php echo link_to_previous_item_show("&#8249; Previous"); ?></li>
                        <li style="margin:5px;" id="next-item" class="next"><?php echo link_to_next_item_show('Next &#8250;'); ?></li>
                    </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </div>
</div>
<?php echo foot(); ?>
