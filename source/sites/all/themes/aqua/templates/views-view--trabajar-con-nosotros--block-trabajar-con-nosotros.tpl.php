<!-- Tabs -->
<h2 class="title"><span>¿Porqué trabajar con nosotros?</span></h2>

<?php $uno = 1; ?>

<div id="tabs" class="htabs">
	<ul class="tabs-items">
		<?php if(!empty($view->result)) : ?>
			<?php foreach($view->result as $key => $result) : ?>
				<li><a href="#tab-<?php print $key; ?>" class="selected"><?php print $result->node_title; ?></a></li>
			<?php endforeach; ?>
		<?php endif; ?>
		<!--
		<li><a href="#tab-1" class="selected">Clean Design</a></li>
		<li><a href="#tab-2">Element Rich</a></li
		<li><a href="#tab-3">Simply Awesome</a></li>
		-->
	</ul>
</div>

<?php if(!empty($view->result)) : ?>
	<?php foreach($view->result as $key => $result) : ?>
		<div id="tab-<?php print $key; ?>" class="tab-content">
			<?php if($result->node_type == 'trabajar_con_nosotros_imagen') : ?>
				<?php $img_src = file_create_url($result->field_field_imagen[0]['rendered']['#item']['uri']); ?>
				<img src="<?php print $img_src; ?>" style="float: left; margin: 6px 5% 10px 0; width: 34%;"/>
				<div  style="float: left; width: 61%;">
					<h4><?php print $result->field_field_titulo_listado[0]['rendered']['#markup']; ?></h4>
					<ul class="checked">
						<?php foreach($result->field_field_listado as $list_key => $list_item) : ?>
							<li><?php print $list_item['rendered']['#markup']; ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
			<?php endif; ?>
			<?php if($result->node_type == 'trabajar_con_nosotros_listado') : ?>
				<h4><?php print $result->field_field_titulo_listado[0]['rendered']['#markup']; ?></h4>
				<ul class="arrowed">
					<?php foreach($result->field_field_listado as $list_key => $list_item) : ?>
						<li><?php print $list_item['rendered']['#markup']; ?></li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
			<?php if($result->node_type == 'trabajar_con_nosotros') : ?>
				<?php print $result->field_field_texto[0]['rendered']['#markup']; ?>
			<?php endif; ?>
		</div>
	<?php endforeach; ?>
<?php endif; ?>

<!--
<div id="tab-1" class="tab-content">
	<img src="/sites/all/themes/aqua/images/bird.jpg" style="float: left; margin: 6px 5% 10px 0; width: 34%;"/>
	<div  style="float: left; width: 61%;">
		<h4>Cleanest design out there</h4>
		<ul class="checked">
			<li>Visually aesthetic and easy on the eye</li>
			<li>Well balanced abd easy to navigate</li>
			<li>Intuitive and pleasant user experience</li>
		</ul>
	</div>
</div>

<div id="tab-2" class="tab-content">
	<h4>Our templates are very functional and Element-rich</h4>
	<ul class="arrowed">
		<li>Plenty of Shortcodes</li>
		<li>Premade and ready to use icons</li>
		<li>Sliders, carousels, tabbed data, testimonials and more</li>
	</ul>
</div>

<div id="tab-3" class="tab-content">
	Our templates are very functional and element rich, this way you have plenty of resources within a hand reach. They are also very easy to customized, clearly coded and documented.
</div>
-->