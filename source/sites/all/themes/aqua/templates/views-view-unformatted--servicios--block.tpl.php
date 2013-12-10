<?php
	/**
	 * @file
	 * Default simple view template to display a list of rows.
	 *
	 * @ingroup views_templates
	 */
?>
<?php if(!empty($title)): ?>
	<h3><?php print $title; ?></h3>
<?php endif; ?>
<div class="row section_featured_texts">
	<?php
		$alpha = true;
	?>
	<?php for($pos = 0; $pos < count($rows); $pos += 1) : ?>
		<?php $divisible = ($pos + 1) % 3; ?>
		<?php
		$extra_class = '';
		if($alpha) {
			$extra_class = 'alpha';
			$alpha = false;
		} elseif($divisible == 0) {
			$extra_class = 'omega';
			$alpha = true;
		}
		?>
		<div<?php if($classes_array[$pos]) { print ' class="' . $classes_array[$pos] . ' ' . $extra_class . '"'; } ?>>
			<?php print $rows[$pos]; ?>
		</div>
		<?php if($divisible == 0) { ?>
		<div class="h10 clear"></div>
		<?php } ?>
	<?php endfor; ?>
</div>