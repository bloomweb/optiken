<?php
$menu_style = theme_get_setting('menu_style', 'aqua');
$extra_class = 'not-home-page';
$page_alias = drupal_get_path_alias();
if (in_array($page_alias, array(
            'home/one',
            'home/two',
            'home/three'
        ))) {
  $extra_class = 'is_home_page';
}
$wrapper_style = theme_get_setting('wrapper_style', 'aqua');
if ($wrapper_style == 'full') {
  $extra_class .= ' full_wrapper';
}
?>
<div id="wrapper" class="<?php print $extra_class; ?>">

  <div class="container">

	  <?php include('elements/header.inc'); ?>

    <!-- Main Navigation -->
    <div class="row no_bm">
      <div class="<?php print $menu_style; ?>_menu sixteen columns">
        <div id="menu">
          <?php print $navigation; ?>
        </div>

      </div>
    </div>
    <!-- Main Navigation::END -->
    <?php $sidebar_content_margin_class = 'margin-top'; ?>
    <?php if ($breadcrumb || $title): ?>
      <?php $sidebar_content_margin_class = ''; ?>
      <div class="row">
        <div class="sixteen columns">

          <?php if ($breadcrumb): ?>
            <div class="breadcrumb">
              <?php print $breadcrumb; ?>
            </div>
          <?php endif; ?>

          <?php print render($title_prefix); ?>
          <?php if ($title): ?>
            <div class="page_heading">
              <h1><?php print $title; ?></h1>
            </div>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
        </div>		
      </div>
    <?php endif; ?>

    <?php if ($page['slider']): ?>
      <div class="h15 clear"></div>
      <div class="row no_bm">
        <div id="slider_holder" class="sixteen columns">
          <?php print render($page['slider']); ?>
        </div>
        <!-- Sequence Slider::END-->
      </div>
    <?php endif; ?>



    <!-- highlighted -->
    <?php if ($page['highlighted']): ?>
      <div class="row">
        <?php print render($page['highlighted']); ?>		
      </div>		
    <?php endif; ?>
    <!-- //highlighted -->


    <div class="row">

      <?php if ($page['sidebar_first']): ?>
        <!-- sidebar first -->
        <div class="four columns sidebar <?php print $sidebar_content_margin_class; ?>">
          <?php print render($page['sidebar_first']); ?>
        </div>
        <!-- // sidebar first -->
      <?php endif; ?>

      <?php if ($page['sidebar_first'] || $page['sidebar_second']) { ?>
        <div id="content" class="twelve columns <?php print $sidebar_content_margin_class; ?>">
        <?php } else { ?>
          <div id="content" class="sixteen columns <?php print $sidebar_content_margin_class; ?>">
          <?php } ?>




          <?php if ($messages): ?>
            <div id="messages">
              <?php print $messages; ?>
            </div><!-- /#messages -->
          <?php endif; ?>

          <?php if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])): ?>
            <div class="tabs">
              <?php print render($tabs); ?>
            </div>
          <?php endif; ?>

          <?php print render($page['help']); ?>
          <?php if ($action_links): ?>
            <ul class="action-links">
              <?php print render($action_links); ?>
            </ul>


          <?php endif; ?>

          <?php print render($page['content']); ?>

	          <?php print views_embed_view('servicios', 'block_servicios'); ?>

	          <div class="row">
		          <div class="two-thirds column alpha">
			          <h2 class="title"><span>Nuestra Misi&oacute;n</span></h2>
			          <?php print views_embed_view('mision', 'block_mision'); ?>
		          </div>
		          <div class="one-third column omega">
			          <?php print views_embed_view('testimonios', 'block_testimonios'); ?>
		          </div>
	          </div>

	          <!--<div class="row">
		          <h2 class="title"><span>Our Clients</span></h2>
		          <div class="clear"></div>
		          <div class="carousel_section clients_list">
			          <div class='carousel_arrows_bgr'></div>
			          <ul id="clients_carousel">
				          <li class="four columns"><img src="/sites/all/themes/aqua/images/client1.png"/></li>
				          <li class="four columns"><img src="/sites/all/themes/aqua/images/client2.png"/></li>
				          <li class="four columns"><img src="/sites/all/themes/aqua/images/client6.png"/></li>
				          <li class="four columns"><img src="/sites/all/themes/aqua/images/client3.png"/></li>
				          <li class="four columns"><img src="/sites/all/themes/aqua/images/client5.png"/></li>
				          <li class="four columns"><img src="/sites/all/themes/aqua/images/client4.png"/></li>
			          </ul>
		          </div>
	          </div>-->

          <?php print $feed_icons; ?>


        </div> <!-- // content -->


        <?php if ($page['sidebar_second']): ?>
          <!-- sidebar second -->
          <div class="four columns sidebar <?php print $sidebar_content_margin_class; ?>">
            <?php print render($page['sidebar_second']); ?>
          </div>
          <!-- // sidebar second -->
        <?php endif; ?>
      </div>
    </div>

    <!-- Footer -->
	<?php include('elements/footer.inc'); ?>
    <!-- Footer::END -->

  </div>