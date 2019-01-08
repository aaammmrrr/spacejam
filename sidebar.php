<?php
/**
 * Sidebar Template
 *
 * Please do not edit this file. This file is part of the CyberChimps Framework and all modifications
 * should be made in a child theme.
 *
 * @category CyberChimps Framework
 * @package  Framework
 * @since    1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v3.0 (or later)
 * @link     http://www.cyberchimps.com/
 */

?>

<div id="secondary" class="col-md-3">
	
	<?php do_action( 'cyberchimps_before_sidebar' ); ?>

	<div id="sidebar">
	<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'sidebar-right' ) ) : ?>
		
		<aside class="widget-container">    
			<h3 class="widget-title"><?php esc_html_e( 'Pages', 'compact-one' ); ?></h3>
			<ul>
					<?php wp_list_pages( 'title_li=' ); ?>
				</ul>
			</aside>

			<aside class="widget-container">    
				<h3 class="widget-title"><?php esc_html_e( 'Archives', 'compact-one' ); ?></h3>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			</aside>

				<aside class="widget-container">
			<h3 class="widget-title"><?php esc_html_e( 'Categories', 'compact-one' ); ?></h3>
			<ul>
				<?php wp_list_categories( 'show_count=1&title_li=' ); ?>
			</ul>
			</aside>

					<aside class="widget-container">
			<h3 class="widget-title"><?php esc_html_e( 'WordPress', 'compact-one' ); ?></h3>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<li><a href="<?php echo esc_url( 'http://wordpress.org/' ); ?>" target="_blank" title="<?php esc_attr_e( 'Powered by WordPress, state-of-the-art semantic personal publishing platform.', 'compact-one' ); ?>"> <?php esc_html_e( 'WordPress', 'compact-one' ); ?></a></li>
				<?php wp_meta(); ?>
				</ul>
		</aside>
		
		<aside class="widget-container">
			<h3 class="widget-title"><?php esc_html_e( 'Subscribe', 'compact-one' ); ?></h3>
			<ul>
				<li><a href="<?php bloginfo( 'rss2_url' ); ?>"><?php esc_html_e( 'Entries (RSS)', 'compact-one' ); ?></a></li>
				<li><a href="<?php bloginfo( 'comments_rss2_url' ); ?>"><?php esc_html_e( 'Comments (RSS)', 'compact-one' ); ?></a></li>
			</ul>
		</aside>
		
	<?php endif; ?>
	</div><!-- #sidebar -->
	
	<?php do_action( 'cyberchimps_after_sidebar' ); ?>
	
</div><!-- #secondary -->