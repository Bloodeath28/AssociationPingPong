<?php

defined( 'ABSPATH' ) || exit;

$core          = $args['core'];
$plugin_info   = $args['plugin_info'];
$template_page = $args['template_page'];
?>

<div class="container-fluid">
	<div class="container">
		<ul class="list-group">
			<!-- PHP Version -->
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-6 border-end">
						<span class="item-key"><?php esc_html_e( 'PHP Version', 'avif-support' ); ?></span>
					</div>
					<div class="col-md-6 text-end">
						<span class="item-value">
							<?php echo esc_html( phpversion() ); ?>
						</span>
					</div>
				</div>
			</li>
			<!-- GD Version -->
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-6 border-end">
						<span class="item-key"><?php esc_html_e( 'GD Version', 'avif-support' ); ?></span>
					</div>
					<div class="col-md-6 text-end">
						<span class="item-value text-w-bold">
							<?php
							$is_gd_enabled = $template_page::is_gd_enabled();
							if ( ! $is_gd_enabled ) {
								$template_page::install_and_version_icon( 'red' );
							} else {
								$template_page::install_and_version_icon( $template_page::is_type_supported( 'avif', 'gd' ) ? 'green' : 'red', $template_page->get_gd_version() );
							}
							?>
						</span>
					</div>
				</div>
			</li>
			<!-- Imagick Version -->
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-6 border-end">
						<span class="item-key"><?php esc_html_e( 'ImageMagick Version', 'avif-support' ); ?></span>
					</div>
					<div class="col-md-6 text-end">
						<span class="item-value text-w-bold">
							<?php
							$is_imagick_enabled = $template_page::is_imagick_enabled();
							if ( $is_imagick_enabled && $template_page->get_imagick_version() ) {
								$template_page::install_and_version_icon( $template_page::is_type_supported( 'avif', 'imagick' ) ? 'green' : 'red', $template_page->get_imagick_version() );

							} else {
								$template_page::install_and_version_icon( 'red' );
							}
							?>
						</span>
					</div>
				</div>
			</li>
			<!-- AVIF Support -->
			<li class="list-group-item">
				<div class="row">
					<div class="col-md-6 border-end">
						<span class="item-key"><?php esc_html_e( 'AVIF Support', 'avif-support' ); ?></span>
					</div>
					<div class="col-md-6 text-end">
						<span class="item-value">
							<?php
							$is_avif_supported = $template_page::is_type_supported( 'avif' );
							$template_page::install_and_version_icon( $is_avif_supported ? 'green' : 'red', ( ! $is_avif_supported ? 'Not ' : '' ) . 'Supported' );
							?>
						</span>
					</div>
				</div>
			</li>
		</ul>
		<?php
		if ( ! $template_page::is_type_supported( 'avif' ) ) :
			?>
			<div class="notice notice-error avif-reqs py-2 px-3">
				<span><?php printf( esc_html__( 'AVIF requires %s compiled with AVIF support OR %s at least. please contact your hosting support regarding that.', 'avif-support' ), '<strong>GD </strong>', '<strong>ImageMagick V 7.0.25</strong>' ); ?></span>
			</div>
			<div class="notice notice-error avif-reqs py-2 px-3">
				<span><?php esc_html_e( 'AVIF image will be uploaded, but sub-sizes will not be generated', 'avif-support' ); ?></span>
			</div>
		<?php endif; ?>
	</div>
	<div style="margin-top:200px;">
		<?php $core->plugins_sidebar(); ?>
	</div>
</div>
