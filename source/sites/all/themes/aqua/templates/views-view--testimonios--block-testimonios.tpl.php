<h2 class="title"><span>Testimonios de clientes</span></h2>

<!-- Testimonials -->
<div class="testimonials">
	<div class='carousel_arrows_bgr'></div>
	<ul id="testimonials_carousel">
		<?php foreach($view->result as $key => $result) : ?>
			<li class="eight columns alpha">
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
		<!--
		<li class="eight columns alpha">
			<div class="testimonial_quote">
				<div class="quote_content">
					<p>Wow, just the template we were looking for! Stunning clean design, element rich, clean code, browser friendly and easy to manage. Keep up the good work BlueOwlCreative!</p>
					<span class="quote_arrow"></span>
				</div>
				<div class="quote_author"><div class="icon_testimonial">Eric Rogers</div><span class="quote_author_description">Developer, COMODO</span>
				</div>
			</div>
		</li>
		<li class="eight columns alpha">
			<div class="testimonial_quote">
				<div class="quote_content">
					<p>On extremely short notice, BlueOwlCreative came up with the perfect design I previously envisioned for my company. Thank you for the personal touch, understanding and responsiveness to all our needs!</p>
					<span class="quote_arrow"></span>
				</div>
				<div class="quote_author"><div class="icon_testimonial">Rumiana Gigova</div><span class="quote_author_description">Managing Partner, LuxDresses</span></div>
			</div>
		</li>
		<li class="eight columns alpha">
			<div class="testimonial_quote">
				<div class="quote_content">
					<p>Awesome theme! Very intuitive to use, clean coded, and easy to customize. Just rated 5 stars! Will recommend to all our partners and friend! Thanks a lot again!</p>
					<span class="quote_arrow"></span>
				</div>
				<div class="quote_author"><div class="icon_testimonial">John Picket</div><span class="quote_author_description">Designer, BlueOwlCreative</span>
				</div>
			</div>
		</li>
		-->
	</ul>
</div>