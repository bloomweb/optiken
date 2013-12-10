<?php
	/**
	 * @file
	 * Default simple view template to display a list of rows.
	 *
	 * @ingroup views_templates
	 */
?>
<?php /* ?>
<?php if (!empty($title)): ?>
	<h3><?php print $title; ?></h3>
<?php endif; ?>
<div class="row">
	<?php foreach ($rows as $id => $row): ?>
		<div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
			<?php print $row; ?>
		</div>
	<?php endforeach; ?>
</div>
<?php */ ?>
<div class="row">
	<div class="eight columns flexslider alpha">
		<!-- FlexSlider -->
		<ul class="slides services_list">
			<?php foreach($view->result[0]->field_field_imagenes_slider as $slider_image) : ?>
			<li><img src="<?php print file_create_url($slider_image['rendered']['#item']['uri']); ?>" /></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<div class="seven columns services_description omega">
		<?php $uno = 1; ?>
		<!--<h3>Our Fields of Expertise</h3>-->
		<h3><?php print $view->result[0]->field_field_texto[0]['rendered']['#markup']; ?></h3>
		<ul class="checked">
			<?php foreach($view->result[0]->field_field_beneficios as $beneficio) : ?>
				<li><?php print $beneficio['rendered']['#markup']; ?></li>
			<?php endforeach; ?>
		</ul>
		<div class="h20"></div>
	</div>
</div>