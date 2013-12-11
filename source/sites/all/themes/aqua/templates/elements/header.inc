<div class="header clearfix row">
	<?php if ($logo): ?>
		<div class="eight columns header_left">
			<a href="<?php print $front_page; ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
		</div>
	<?php endif; ?>

	<div class="eight columns">
		<div class="header_right">
			<?php
				$header_contact_mail = theme_get_setting('header_contact_email', 'aqua');
				$header_contact_phone = theme_get_setting('header_contact_phone', 'aqua');
			?>
			<?php if (!empty($header_contact_mail) || !empty($header_contact_phone)): ?>
				<div class="header_contacts clearfix">
					<?php if (!empty($header_contact_phone)): ?>
						<div class="header_phone"><a href="tel:<?php print $header_contact_phone; ?>"><?php print $header_contact_phone; ?></a></div>
					<?php endif; ?>
					<?php if (!empty($header_contact_mail)): ?>
						<div class="header_mail"><a href="mailto:<?php print $header_contact_mail; ?>"><?php print $header_contact_mail; ?></a></div>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<div class="header_soc_search clearfix">
				<?php if (!empty($seach_block_form)): ?>
					<div class="header_search">
						<?php print $seach_block_form; ?>
					</div>
				<?php endif; ?>

				<?php
					$facebook = theme_get_setting('facebook_url', 'aqua');
					$twitter = theme_get_setting('twitter_url', 'aqua');
					$gplus = theme_get_setting('gplus_url', 'aqua');
					$pintrest = theme_get_setting('pintrest_url', 'aqua');
					$rss_url = theme_get_setting('rss_url', 'aqua');
				?>
				<?php if (!empty($rss_url)): ?>
					<a href="<?php print $rss_url ?>" class="header_soc_rss" id="soc_rss"><?php print t('RSS'); ?></a>
				<?php endif; ?>
				<?php if (!empty($facebook)): ?>
					<a href="<?php print $facebook; ?>" class="header_soc_fb" id="soc_fb"><?php print t('Facebook'); ?></a>
				<?php endif; ?>
				<?php if (!empty($twitter)): ?>
					<a href="<?php print $twitter; ?>" class="header_soc_twitter" id="soc_twitter"><?php print t('Twitter'); ?></a>
				<?php endif; ?>


			</div>
		</div>
	</div>
</div>