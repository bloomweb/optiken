<?php
	/**
	 * @file
	 * Default simple view template to display a list of rows.
	 *
	 * @ingroup views_templates
	 */
?>
<?php if (!empty($title)): ?>
	<h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
	<?php
	if($classes_array[$id]) {
		$classes_array[$id] = str_replace('views-row-first', 'alpha', $classes_array[$id]);
		$classes_array[$id] = str_replace('views-row-last', 'omega', $classes_array[$id]);
	}
	?>
	<div<?php if($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
		<?php print $row; ?>
	</div>
<?php endforeach; ?>
