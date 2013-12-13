<div id="footer" class="container">
	<?php if ($page['footer_firstcolumn'] || $page['footer_secondcolumn'] || $page['footer_thirdcolumn'] || $page['footer_fourthcolumn']): ?>
	<div class="row footer_inside">

		<div class="four columns">
			<?php print render($page['footer_firstcolumn']); ?>
		</div>

		<!--  1/4 Columns -->
		<div class="four columns">
			<?php print render($page['footer_secondcolumn']); ?>
		</div>

		<!-- 1/4 Columns -->
		<div class="four columns">
			<?php print render($page['footer_thirdcolumn']); ?>
			<div class="clearfix"></div>
		</div>

		<!-- 1/4 Columns -->
		<div class="four columns">
			<?php print render($page['footer_fourthcolumn']); ?>
		</div>

		<?php endif; ?>

	</div>
	<div class="clear"></div>

	<div class="footer_btm">
		<div class="footer_btm_inner">
			<?php /* if(!empty($pintrest)): ?>
				<a href='<?php print $pintrest; ?>' target='_blank' class='icon_pinterest' title='Pinterest'><?php print t('Pinterest'); ?></a>
			<?php endif; */ ?>
			<?php /* if(!empty($twitter)): ?>
				<a href='<?php print $twitter; ?>' target='_blank' class='icon_tweet' title='Twitter'><?php print t('Twitter'); ?></a>
			<?php endif; */ ?>
			<!--<a href="http://www.skype.com" class='icon_skype' title='Skype'>Skype</a>-->
			<?php if (!empty($gplus)): ?>
				<a href='<?php print $gplus; ?>' target='_blank' class='icon_google' title='Google+'><?php print t('Google'); ?>+</a>
			<?php endif; ?>

			<?php if (!empty($facebook)): ?>
				<a href='<?php print $facebook; ?>' target='_blank' class='icon_facebook' title='Facebook'><?php print t('Facebook'); ?></a>
			<?php endif; ?>

			<?php $footer_msg = theme_get_setting('footer_copyright_message', 'aqua'); ?>
			<?php if (!empty($footer_msg)): ?>
				<div id="powered"><?php print 'Optiken © ' . date('Y', time()); ?> | <a href="http://www.bloomweb.co" target="_blank"><img class="bloom-logo" src="/<?php print path_to_theme() . '/images/logos/bloom_naranja.png'; ?>" alt="Desarrollado por bloom" title="Desarrollado por bloom"></a></div>
			<?php endif; ?>
		</div>
	</div>
</div>
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
	window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
		d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
		_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
		$.src='//cdn.zopim.com/?1YXftvxADXK8wqf0Qw8LRoAO04m0BJF4';z.t=+new Date;$.
			type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->