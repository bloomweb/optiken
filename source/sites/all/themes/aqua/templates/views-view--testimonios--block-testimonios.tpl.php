<h2 class="title"><span>Testimonios de clientes</span></h2>

<!-- Testimonials -->
<div class="testimonials">
	<div class='carousel_arrows_bgr'></div>
	<ul id="testimonials_carousel">
		<?php
			if(isset($view->args[0]) && $view->args[0] == 'front') {
				$extra_classes = 'eight columns';
			} else {
				$extra_classes = 'one-third column';
			}
		?>
		<?php foreach($view->result as $key => $result) : ?>
			<?php $uno = 1; ?>
			<li class="<?php print $extra_classes; ?> alpha">
				<div class="testimonial_quote">
					<div class="quote_content">
						<p><?php print $result->field_field_testimonio[0]['rendered']['#markup']; ?></p>
						<span class="quote_arrow"></span>
					</div>
					<div class="quote_author"><div class="icon_testimonial"><?php print $result->node_title; ?></div><span class="quote_author_description"><?php print $result->field_field_cargo[0]['rendered']['#markup']; ?>, <?php print $result->field_field_empresa[0]['rendered']['#markup']; ?></span>
					</div>
				</div>
			</li>
		<?php endforeach; ?>
	</ul>
</div>