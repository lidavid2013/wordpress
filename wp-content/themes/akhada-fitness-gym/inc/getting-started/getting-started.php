<?php
//about theme info
add_action( 'admin_menu', 'akhada_fitness_gym_gettingstarted' );
function akhada_fitness_gym_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'akhada-fitness-gym'), esc_html__('About Theme', 'akhada-fitness-gym'), 'edit_theme_options', 'akhada_fitness_gym_guide', 'akhada_fitness_gym_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function akhada_fitness_gym_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'akhada_fitness_gym_admin_theme_style');

//guidline for about theme
function akhada_fitness_gym_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'akhada-fitness-gym' );

?>

<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Akhada Fitness Gym WordPress Theme', 'akhada-fitness-gym' ); ?> <span>Version: <?php echo esc_html($theme['Version']);?></span></h3>
		</div>
		<div class="started">
			<hr>
			<div class="free-doc">
				<div class="lz-4">
					<h4><?php esc_html_e( 'Start Customizing', 'akhada-fitness-gym' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Go to', 'akhada-fitness-gym' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'akhada-fitness-gym' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'akhada-fitness-gym' ); ?></span>
					</ul>
				</div>
				<div class="lz-4">
					<h4><?php esc_html_e( 'Support', 'akhada-fitness-gym' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Send your query to our', 'akhada-fitness-gym' ); ?> <a href="<?php echo esc_url( AKHADA_FITNESS_GYM_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support', 'akhada-fitness-gym' ); ?></a></span>
					</ul>
				</div>
			</div>
			<p><?php esc_html_e( 'Akhada Fitness Gym is an impactful, modern and stylish WordPress theme dedicatedly designed for gyms, fitness centres, yoga classes, weight loss centres, personal trainers, aerobics and workout centres. Use it for spa, health and wellness centre, physiotherapy, health consultancy and other fitness related sites with perfect ease. The theme has clean design with user-friendly interface to help user find what they are looking for within few seconds of their landing. It is a responsive theme looking beautiful on all mobiles, tablets and desktops. This fitness theme is cross-browser compatible, translation ready and retina ready looking crisp on every device. It allows customization for almost every part of the theme. With banners and life-size sliders, make the site all the more attractive. Multiple page and blog layouts, template structure, slides, unlimited colours give the option to make your site personalize. The theme is search engine optimized giving higher rank to your site in Google search. Among various sections, testimonial section will speak for your work and services. Faster page loading is what makes the site compatible to todays speeding world. Videos, audios, columns, various file formats and other things and embedded using shortcodes to make coding clean and secure. Use this theme to make people go crazy for fitness. ', 'akhada-fitness-gym')?></p>
			<hr>			
			<div class="col-left-inner">
				<h3><?php esc_html_e( 'Get started with Free Akhada Fitness Gym Theme', 'akhada-fitness-gym' ); ?></h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png"  alt=""/>
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'akhada-fitness-gym'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<a href="<?php echo esc_url( AKHADA_FITNESS_GYM_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'akhada-fitness-gym'); ?></a>
			<a href="<?php echo esc_url( AKHADA_FITNESS_GYM_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'akhada-fitness-gym'); ?></a>
			<a href="<?php echo esc_url( AKHADA_FITNESS_GYM_PRO_DOCS ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'akhada-fitness-gym'); ?></a>
			<hr class="secondhr">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/akhada.jpg" alt="" />
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'akhada-fitness-gym'); ?></h3>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon01.png" alt="" />
			<h4><?php esc_html_e( 'Banner Slider', 'akhada-fitness-gym'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon02.png" alt="" />
			<h4><?php esc_html_e( 'Theme Options', 'akhada-fitness-gym'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon03.png" alt="" />
			<h4><?php esc_html_e( 'Custom Innerpage Banner', 'akhada-fitness-gym'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon04.png" alt="" />
			<h4><?php esc_html_e( 'Custom Colors and Images', 'akhada-fitness-gym'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon05.png" alt="" />
			<h4><?php esc_html_e( 'Fully Responsive', 'akhada-fitness-gym'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon06.png" alt="" />
			<h4><?php esc_html_e( 'Hide/Show Sections', 'akhada-fitness-gym'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon07.png" alt="" />
			<h4><?php esc_html_e( 'Woocommerce Support', 'akhada-fitness-gym'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon08.png" alt="" />
			<h4><?php esc_html_e( 'Limit to display number of Posts', 'akhada-fitness-gym'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon09.png" alt="" />
			<h4><?php esc_html_e( 'Multiple Page Templates', 'akhada-fitness-gym'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon10.png" alt="" />
			<h4><?php esc_html_e( 'Custom Read More link', 'akhada-fitness-gym'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon11.png" alt="" />
			<h4><?php esc_html_e( 'Code written with WordPress standard', 'akhada-fitness-gym'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon12.png" alt="" />
			<h4><?php esc_html_e( '100% Multi language', 'akhada-fitness-gym'); ?></h4>
		</div>
	</div>
</div>
<?php } ?>