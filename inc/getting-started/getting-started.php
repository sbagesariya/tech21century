<?php
//about theme info
add_action( 'admin_menu', 'professional_software_company_gettingstarted' );
function professional_software_company_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'professional-software-company'), esc_html__('About Theme', 'professional-software-company'), 'edit_theme_options', 'professional_software_company_guide', 'professional_software_company_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function professional_software_company_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'professional_software_company_admin_theme_style');

//guidline for about theme
function professional_software_company_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'professional-software-company' );

?>

<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Software Company WordPress Theme', 'professional-software-company' ); ?> <span>Version: <?php echo esc_html($theme['Version']);?></span></h3>
		</div>
		<div class="started">
			<hr>
			<div class="free-doc">
				<div class="lz-4">
					<h4><?php esc_html_e( 'Start Customizing', 'professional-software-company' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Go to', 'professional-software-company' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'professional-software-company' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'professional-software-company' ); ?></span>
					</ul>
				</div>
				<div class="lz-4">
					<h4><?php esc_html_e( 'Support', 'professional-software-company' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Send your query to our', 'professional-software-company' ); ?> <a href="<?php echo esc_url( PROFESSIONAL_SOFTWARE_COMPANY_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support', 'professional-software-company' ); ?></a></span>
					</ul>
				</div>
			</div>
			<p><?php esc_html_e( 'Professional Software Company is a top-class free WordPress theme created using the Bootstrap framework. It works well for IT companies, software companies, web agencies, software businesses, electronics, and digital stores, IT consulting firms and business solutions, digital marketing agencies, online marketing agencies, and more. With its minimal style impressively putting your business forward, the elegance that it brings to your website is simply unmatched. You will not only get a sophisticated web presence but also get a clean and user-friendly interface. Through the personalization options, you will be able to get the desired look and make your website appear just the way you want. There is a retina-ready design along with a responsive layout that can make things look great on any screen. You will get a beautiful banner and other sections including Testimonial, Team, etc. for your content. Call to Action Button (CTA) will act as a guide and also work for better conversion. SEO-friendly codes will fetch traffic and these optimized codes will also deliver faster page load time. With a lot of social media options, you will be able to reach out to the audience. The entire design is mobile-friendly and includes WPML as well as RTL compatibility in order to make your website translation ready.', 'professional-software-company')?></p>
			<hr>
			<div class="col-left-inner">
				<h3><?php esc_html_e( 'Get started with Free Professional Software Company Theme', 'professional-software-company' ); ?></h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png" alt="" />
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'professional-software-company'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<a href="<?php echo esc_url( PROFESSIONAL_SOFTWARE_COMPANY_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'professional-software-company'); ?></a>
			<a href="<?php echo esc_url( PROFESSIONAL_SOFTWARE_COMPANY_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'professional-software-company'); ?></a>
			<a href="<?php echo esc_url( PROFESSIONAL_SOFTWARE_COMPANY_PRO_DOCS ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'professional-software-company'); ?></a>
			<hr class="secondhr">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/professional-software-company.jpg" alt="" />
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'professional-software-company'); ?></h3>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon01.png" alt="" />
			<h4><?php esc_html_e( 'Banner Slider', 'professional-software-company'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon02.png" alt="" />
			<h4><?php esc_html_e( 'Theme Options', 'professional-software-company'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon03.png" alt="" />
			<h4><?php esc_html_e( 'Custom Innerpage Banner', 'professional-software-company'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon04.png" alt="" />
			<h4><?php esc_html_e( 'Custom Colors and Images', 'professional-software-company'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon05.png" alt="" />
			<h4><?php esc_html_e( 'Fully Responsive', 'professional-software-company'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon06.png" alt="" />
			<h4><?php esc_html_e( 'Hide/Show Sections', 'professional-software-company'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon07.png" alt="" />
			<h4><?php esc_html_e( 'Woocommerce Support', 'professional-software-company'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon08.png" alt="" />
			<h4><?php esc_html_e( 'Limit to display number of Posts', 'professional-software-company'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon09.png" alt="" />
			<h4><?php esc_html_e( 'Multiple Page Templates', 'professional-software-company'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon10.png" alt="" />
			<h4><?php esc_html_e( 'Custom Read More link', 'professional-software-company'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon11.png" alt="" />
			<h4><?php esc_html_e( 'Code written with WordPress standard', 'professional-software-company'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon12.png" alt="" />
			<h4><?php esc_html_e( '100% Multi language', 'professional-software-company'); ?></h4>
		</div>
	</div>
</div>
<?php } ?>