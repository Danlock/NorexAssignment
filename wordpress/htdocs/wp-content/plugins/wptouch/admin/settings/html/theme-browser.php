<?php if ( !wptouch_can_cloud_install( true ) ) { ?>
	<div class="cloud-update-issue"><i class="icon-cloud"></i> <?php echo sprintf( __( 'Your server configuration is preventing WPtouch Pro from automatically installing and updating from the Cloud. %sPlease visit %sthis article%s for how to resolve it, or manually download and install into your wptouch-data/%s directory.', 'wptouch-pro' ), '<br />', '<a href="http://www.bravenewcode.com/support/knowledgebase/themes-or-extensions-cannot-be-downloaded/">', '</a>', 'themes' ); ?></div>
<?php } ?>
<ul class="cloud-browser">
	<?php while ( wptouch_has_themes( true ) ) { ?>
		<?php wptouch_the_theme(); ?>
			<?php if ( !wptouch_is_theme_in_cloud() ) { ?>
				<?php include( 'theme-browser-item.php' ); ?>
			<?php } ?>
	<?php } ?>

	<li id="wptouch-theme-browser-load-ajax">
		<div class="load">
			<span class="text"><?php _e( 'Loading Cloud Themes', 'wptouch-pro' ); ?>&hellip;</span>
		</div>
	</li>
</ul>
