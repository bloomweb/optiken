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

			<div id="GetResponseWrapper" class="clearfix">
				<!--<h2 class="title"><span>&Uacute;nete a nuestra lista de subscripci&oacute;n</span></h2>-->
				<div id="WFItem620718" class="wf-formTpl">
					<form accept-charset="utf-8" action="https://app.getresponse.com/add_contact_webform.html"
					      method="post">
						<div class="box">
							<!--
							  <div id="WFIheader" class="wf-header el" style="height: 32px; display:  block !important;">
								  <div class="actTinyMceElBodyContent">
									  <p>
										  <span style="font-size: 24px;">Encabezamiento</span>
									  </p>
								  </div>
								  <em class="clearfix clearer"></em>
							  </div>
							  -->
							<div id="WFIcenter" class="wf-body">
								<ul class="wf-sortable" id="wf-sort-id">
									<li class="wf-name" rel="undefined" style="display:  block !important;">
										<div class="wf-contbox">
											<!--<div class="wf-labelpos">
												<label class="wf-label">Nombre</label>
											</div>-->
											<div class="wf-inputpos">
												<input class="wf-input form-text required" type="text" name="name" placeholder="Nombre">
											</div>
											<em class="clearfix clearer"></em>
										</div>
									</li>
									<li class="wf-email" rel="undefined" style="display:  block !important;">
										<div class="wf-contbox">
											<!--<div class="wf-labelpos">
												<label class="wf-label">Correo electr&oacute;nico</label>
										</div>-->
											<div class="wf-inputpos">
												<input class="wf-input wf-req wf-valid__email form-text required" type="text" name="email" placeholder="Correo electrónico">
											</div>
											<em class="clearfix clearer"></em>
										</div>
									</li>
									<li class="wf-submit" rel="undefined" style="display:  block !important;">
										<div class="wf-contbox">
											<div class="wf-inputpos">
												<input type="submit" class="wf-button" name="submit" value="Suscribirse" style="display:  inline !important; width: 147px !important;">
											</div>
											<em class="clearfix clearer"></em>
										</div>
									</li>
									<li class="wf-counter" rel="undefined" style="display:  none !important;">
										<div class="wf-contbox">
											<div>
                                <span style="padding: 4px 6px 8px 24px; background-image: url(https://app.getresponse.com/images/core/webforms/countertemplates.png); background-position: 0% 0px; background-repeat: no-repeat no-repeat;"
                                      class="wf-counterbox">
                                    <span class="wf-counterboxbg" style="padding: 4px 12px 8px 5px; background-image: url(https://app.getresponse.com/images/core/webforms/countertemplates.png); background-position: 100% -36px; background-repeat: no-repeat no-repeat;">
                                        <span class="wf-counterbox0" style="padding: 5px 0px;"></span>
                                        <span style="padding: 5px;" name="https://app.getresponse.com/display_subscribers_count.js?campaign_name=general_optiken&var=0"
                                              class="wf-counterbox1 wf-counterq">3465</span>
                                        <span style="padding: 5px 0px;" class="wf-counterbox2">subscribers</span>
                                    </span>
                                </span>
											</div>
										</div>
									</li>
									<li class="wf-captcha" rel="undefined" style="display:  none !important;">
										<div class="wf-contbox wf-captcha-1" id="wf-captcha-1" wf-captchaword="Enter the words above:"
										     wf-captchasound="Enter the numbers you hear:" wf-captchaerror="Incorrect please try again"></div>
									</li>
									<!--
									<li class="wf-privacy" rel="undefined" style="display:  block !important;">
										<div class="wf-contbox">
											<div>
												<a class="wf-privacy wf-privacyico" href="http://www.getresponse.es/permission-seal?lang=es"
												   target="_blank" style="height: 19px !important; display: inline !important;">Respetamos tu privacidad<em class="clearfix clearer"></em></a>
											</div>
											<em class="clearfix clearer"></em>
										</div>
									</li>
									-->
									<!--
									<li class="wf-poweredby" rel="undefined" style="display:  block !important;">
										<div class="wf-contbox">
											<div>
									<span class="wf-poweredby wf-poweredbyico">
										<a class="wf-poweredbylink wf-poweredby" href="http://www.getresponse.es/" style="display:  inline !important;" target="_blank">Mercadeo electr&oacute;nico</a> por GetResponse</span>
										</div>
									</div>
								</li>
								-->
								</ul>
							</div>
							<div id="WFIfooter" class="wf-footer el" style="height: 25px; display:  block !important;">
								<div class="actTinyMceElBodyContent"></div>
								<em class="clearfix clearer"></em>
							</div>
						</div>
						<input type="hidden" name="webform_id" value="620718" />
					</form>
				</div>
				<script type="text/javascript" src="http://app.getresponse.com/view_webform.js?wid=620718&mg_param1=1"></script>
			</div>

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
				<?php /* if(!empty($rss_url)): ?>
					<a href="<?php print $rss_url ?>" class="header_soc_rss" id="soc_rss"><?php print t('RSS'); ?></a>
				<?php endif; */ ?>
				<?php if (!empty($facebook)): ?>
					<a href="<?php print $facebook; ?>" class="header_soc_fb" id="soc_fb"><?php print t('Facebook'); ?></a>
				<?php endif; ?>
				<?php /* if(!empty($twitter)): ?>
					<a href="<?php print $twitter; ?>" class="header_soc_twitter" id="soc_twitter"><?php print t('Twitter'); ?></a>
				<?php endif; */ ?>


			</div>
		</div>

	</div>
</div>