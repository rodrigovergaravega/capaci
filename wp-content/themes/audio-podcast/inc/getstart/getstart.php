<?php
//about theme info
add_action( 'admin_menu', 'audio_podcast_gettingstarted' );
function audio_podcast_gettingstarted() {
	add_theme_page( esc_html__('About Audio Podcast', 'audio-podcast'), esc_html__('About Audio Podcast', 'audio-podcast'), 'edit_theme_options', 'audio_podcast_guide', 'audio_podcast_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function audio_podcast_admin_theme_style() {
	wp_enqueue_style('audio-podcast-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
	wp_enqueue_script('audio-podcast-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'audio_podcast_admin_theme_style');

//guidline for about theme
function audio_podcast_mostrar_guide() { 
	//custom function about theme customizer
	$audio_podcast_return = add_query_arg( array()) ;
	$audio_podcast_theme = wp_get_theme( 'audio-podcast' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to Audio Podcast', 'audio-podcast' ); ?> <span class="version"><?php esc_html_e( 'Version', 'audio-podcast' ); ?>: <?php echo esc_html($audio_podcast_theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','audio-podcast'); ?></p>
    </div>

    <div class="col-right">
    	<div class="logo">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/final-logo.png" alt="" />
		</div>
		<div class="update-now">
			<h4><?php esc_html_e('Buy Audio Podcast Pro at 20% Discount','audio-podcast'); ?></h4>
			<h4><?php esc_html_e('Use Coupon','audio-podcast'); ?> ( <span><?php esc_html_e('vwpro20','audio-podcast'); ?></span> ) </h4> 
			<div class="info-link">
				<a href="<?php echo esc_url( AUDIO_PODCAST_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'audio-podcast' ); ?></a>
			</div>
		</div>
   </div>

    <div class="tab-sec">
    	<div class="tab">
			<button class="tablinks" onclick="audio_podcast_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'audio-podcast' ); ?></button>
			<button class="tablinks" onclick="audio_podcast_open_tab(event, 'block_pattern')"><?php esc_html_e( 'Setup With Block Pattern', 'audio-podcast' ); ?></button>
			<button class="tablinks" onclick="audio_podcast_open_tab(event, 'gutenberg_editor')"><?php esc_html_e( 'Setup With Gutunberg Block', 'audio-podcast' ); ?></button>
			<button class="tablinks" onclick="audio_podcast_open_tab(event, 'product_addons_editor')"><?php esc_html_e( 'Woocommerce Product Addons', 'audio-podcast' ); ?></button>
			<button class="tablinks" onclick="audio_podcast_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'audio-podcast' ); ?></button>
		  	<button class="tablinks" onclick="audio_podcast_open_tab(event, 'free_pro')"><?php esc_html_e( 'Support', 'audio-podcast' ); ?></button>
		</div>

		<?php
			$audio_podcast_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$audio_podcast_plugin_custom_css ='display: block';
			}
		?>
		<div id="lite_theme" class="tabcontent open">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = Audio_Podcast_Plugin_Activation_Settings::get_instance();
				$audio_podcast_actions = $plugin_ins->recommended_actions;
				?>
				<div class="audio-podcast-recommended-plugins">
				    <div class="audio-podcast-action-list">
				        <?php if ($audio_podcast_actions): foreach ($audio_podcast_actions as $key => $audio_podcast_actionValue): ?>
				                <div class="audio-podcast-action" id="<?php echo esc_attr($audio_podcast_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($audio_podcast_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($audio_podcast_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($audio_podcast_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','audio-podcast'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($audio_podcast_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'audio-podcast' ); ?></h3>
				<hr class="h3hr">
				<p><?php esc_html_e('Audio Podcast is a stunningly crafted theme with a minimal design for representing audio, DJ music, and video as well as audio streaming platforms such as Spotify. Podcasters, radio players will find this theme extremely useful. This expert-level theme will serve as a multipurpose theme as modifying this theme is a breeze with the help of the personalization options given. To give your website a much-sophisticated look, it uses retina-ready pictures and imagery and its responsive design makes all the elements get perfectly resized according to the device’s screen. Being a free theme, no quality has been compromised as far as this theme’s coding and other things are concerned. The Banner looks wonderful on the screen and thanks to the codes that are optimized and SEO friendly, the website is going to work smoothly and can be spotted in top ranks in the search engines. Secure and clean codes are going to make the design lightweight giving faster page load time. Having an animated layout will result in more user engagement. And with more social media icons, reaching out to a huge audience base gets easier. This modern theme is made translation-ready and is developed using a powerful Bootstrap framework.','audio-podcast'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'audio-podcast' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'audio-podcast' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( AUDIO_PODCAST_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'audio-podcast' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'audio-podcast'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'audio-podcast'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'audio-podcast'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'audio-podcast'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'audio-podcast'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( AUDIO_PODCAST_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'audio-podcast'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'audio-podcast'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'audio-podcast'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( AUDIO_PODCAST_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'audio-podcast'); ?></a>
					</div>

					<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'audio-podcast' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','audio-podcast'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=audio_podcast_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','audio-podcast'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=audio_podcast_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','audio-podcast'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=audio_podcast_player_section') ); ?>" target="_blank"><?php esc_html_e('Player Section','audio-podcast'); ?></a>
								</div>
							</div>
						
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','audio-podcast'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','audio-podcast'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=audio_podcast_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','audio-podcast'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=audio_podcast_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','audio-podcast'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','audio-podcast'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','audio-podcast'); ?></p>
                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','audio-podcast'); ?></span><?php esc_html_e(' Go to ','audio-podcast'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','audio-podcast'); ?></b></p>
                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','audio-podcast'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','audio-podcast'); ?></span><?php esc_html_e(' Go to ','audio-podcast'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','audio-podcast'); ?></b></p>
				  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','audio-podcast'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with setup, then follow the','audio-podcast'); ?> <a class="doc-links" href="<?php echo esc_url( AUDIO_PODCAST_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','audio-podcast'); ?></a></p>
			  	</div>
			</div>
		</div>

		<div id="block_pattern" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = Audio_Podcast_Plugin_Activation_Settings::get_instance();
			$audio_podcast_actions = $plugin_ins->recommended_actions;
			?>
				<div class="audio-podcast-recommended-plugins">
				    <div class="audio-podcast-action-list">
				        <?php if ($audio_podcast_actions): foreach ($audio_podcast_actions as $key => $audio_podcast_actionValue): ?>
				                <div class="audio-podcast-action" id="<?php echo esc_attr($audio_podcast_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($audio_podcast_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($audio_podcast_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($audio_podcast_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" href="javascript:void(0);" get-start-tab-id="gutenberg-editor-tab"><?php esc_html_e('Skip','audio-podcast'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="gutenberg-editor-tab" style="<?php echo esc_attr($audio_podcast_plugin_custom_css); ?>">
				<div class="block-pattern-img">
				  	<h3><?php esc_html_e( 'Block Patterns', 'audio-podcast' ); ?></h3>
					<hr class="h3hr">
					<p><?php esc_html_e('Follow the below instructions to setup Home page with Block Patterns.','audio-podcast'); ?></p>
	              	<p><b><?php esc_html_e('Click on Below Add new page button >> Click on "+" Icon >> Click Pattern Tab >> Click on homepage sections >> Publish.','audio-podcast'); ?></span></b></p>
	              	<div class="audio-podcast-pattern-page">
				    	<a href="javascript:void(0)" class="vw-pattern-page-btn button-primary button"><?php esc_html_e('Add New Page','audio-podcast'); ?></a>
				    </div>
	              	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/block-pattern.png" alt="" />
	            </div>

              	<div class="block-pattern-link-customizer">
					<h3><?php esc_html_e( 'Link to customizer', 'audio-podcast' ); ?></h3>
					<hr class="h3hr">
					<div class="first-row">
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','audio-podcast'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=audio_podcast_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','audio-podcast'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','audio-podcast'); ?></a>
							</div>
							
							<div class="row-box2">
								<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=audio_podcast_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','audio-podcast'); ?></a>
							</div>
						</div>
						
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=audio_podcast_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','audio-podcast'); ?></a>
							</div>
							 <div class="row-box2">
								<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','audio-podcast'); ?></a>
							</div> 
						</div>
					</div>
				</div>
					
	        </div>
		</div>
		
		<div id="gutenberg_editor" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = Audio_Podcast_Plugin_Activation_Settings::get_instance();
			$audio_podcast_actions = $plugin_ins->recommended_actions;
			?>
				<div class="audio-podcast-recommended-plugins">
				    <div class="audio-podcast-action-list">
				        <?php if ($audio_podcast_actions): foreach ($audio_podcast_actions as $key => $audio_podcast_actionValue): ?>
				                <div class="audio-podcast-action" id="<?php echo esc_attr($audio_podcast_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($audio_podcast_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($audio_podcast_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($audio_podcast_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Gutunberg Blocks', 'audio-podcast' ); ?></h3>
				<hr class="h3hr">
				<div class="audio-podcast-pattern-page">
			    	<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-templates' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Ibtana Settings','audio-podcast'); ?></a>
			    </div>

			    <div class="link-customizer-with-guternberg-ibtana">
	              	<div class="link-customizer-with-block-pattern">
						<h3><?php esc_html_e( 'Link to customizer', 'audio-podcast' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','audio-podcast'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=audio_podcast_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','audio-podcast'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','audio-podcast'); ?></a>
								</div>
								
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=audio_podcast_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','audio-podcast'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=audio_podcast_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','audio-podcast'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','audio-podcast'); ?></a>
								</div> 
							</div>
						</div>
					</div>	
				</div>
			<?php } ?>
		</div>

		<div id="product_addons_editor" class="tabcontent">
			<?php if(!class_exists('IEPA_Loader')){
				$plugin_ins = Audio_Podcast_Plugin_Activation_Woo_Products::get_instance();
				$audio_podcast_actions = $plugin_ins->recommended_actions;
				?>
				<div class="audio-podcast-recommended-plugins">
					    <div class="audio-podcast-action-list">
					        <?php if ($audio_podcast_actions): foreach ($audio_podcast_actions as $key => $audio_podcast_actionValue): ?>
					                <div class="audio-podcast-action" id="<?php echo esc_attr($audio_podcast_actionValue['id']);?>">
				                        <div class="action-inner plugin-activation-redirect">
				                            <h3 class="action-title"><?php echo esc_html($audio_podcast_actionValue['title']); ?></h3>
				                            <div class="action-desc"><?php echo esc_html($audio_podcast_actionValue['desc']); ?></div>
				                            <?php echo wp_kses_post($audio_podcast_actionValue['link']); ?>
				                        </div>
					                </div>
					            <?php endforeach;
					        endif; ?>
					    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Woocommerce Products Blocks', 'audio-podcast' ); ?></h3>
				<hr class="h3hr">
				<div class="audio-podcast-pattern-page">
					<p><?php esc_html_e('Follow the below instructions to setup Products Templates.','audio-podcast'); ?></p>
					<p><b><?php esc_html_e('1. First you need to activate these plugins','audio-podcast'); ?></b></p>
						<p><?php esc_html_e('1. Ibtana - WordPress Website Builder ','audio-podcast'); ?></p>
						<p><?php esc_html_e('2. Ibtana - Ecommerce Product Addons.','audio-podcast'); ?></p>
						<p><?php esc_html_e('3. Woocommerce','audio-podcast'); ?></p>

					<p><b><?php esc_html_e('2. Go To Dashboard >> Ibtana Settings >> Woocommerce Templates','audio-podcast'); ?></span></b></p>
	              	<div class="audio-podcast-pattern-page">
			    		<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-woocommerce-templates&ive_wizard_view=parent' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Woocommerce Templates','audio-podcast'); ?></a>
			    	</div>
	              	<p><?php esc_html_e('You can create a template as you like.','audio-podcast'); ?></span></p>
			    </div>
			<?php } ?>
		</div>

		<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'audio-podcast' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('Audio Podcast WordPress Theme is an excellent theme crafted especially for podcasters, music brands, audio, and any other kind of multimedia website. An impressive and modern homepage puts your media in front and makes it become the center of attraction for your visitors. It offers a dark and light color scheme and plenty of color options to help you obtain the desired look. The visitors of your website can check your site while on the go and this is possible because of the theme’s mobile-friendly design. It supports multiple media formats and has all the necessary material to get started. WP Audio Podcast WordPress Theme comes with a translatable design supporting WPML and RTL languages making your website ready for an international audience as well. You cannot really miss the professional appeal that this theme brings making your website look as if it is crafted by an experienced web developer.','audio-podcast'); ?></p>
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( AUDIO_PODCAST_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'audio-podcast'); ?></a>
					<a href="<?php echo esc_url( AUDIO_PODCAST_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'audio-podcast'); ?></a>
					<a href="<?php echo esc_url( AUDIO_PODCAST_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'audio-podcast'); ?></a>
				</div>
		    </div>
		    <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		    <div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'audio-podcast' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'audio-podcast'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'audio-podcast'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'audio-podcast'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'audio-podcast'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'audio-podcast'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'audio-podcast'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'audio-podcast'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'audio-podcast'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'audio-podcast'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'audio-podcast'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'audio-podcast'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'audio-podcast'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'audio-podcast'); ?></td>
								<td class="table-img"><?php esc_html_e('10', 'audio-podcast'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'audio-podcast'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'audio-podcast'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'audio-podcast'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'audio-podcast'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'audio-podcast'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'audio-podcast'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gallery', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'audio-podcast'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( AUDIO_PODCAST_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'audio-podcast'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-star-filled"></span><?php esc_html_e('Pro Version', 'audio-podcast'); ?></h4>
				<p> <?php esc_html_e('To gain access to extra theme options and more interesting features, upgrade to pro version.', 'audio-podcast'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( AUDIO_PODCAST_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'audio-podcast'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-cart"></span><?php esc_html_e('Pre-purchase Queries', 'audio-podcast'); ?></h4>
				<p> <?php esc_html_e('If you have any pre-sale query, we are prepared to resolve it.', 'audio-podcast'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( AUDIO_PODCAST_CONTACT ); ?>" target="_blank"><?php esc_html_e('Question', 'audio-podcast'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">		  		
		  		<h4><span class="dashicons dashicons-admin-customizer"></span><?php esc_html_e('Child Theme', 'audio-podcast'); ?></h4>
				<p> <?php esc_html_e('For theme file customizations, make modifications in the child theme and not in the main theme file.', 'audio-podcast'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( AUDIO_PODCAST_CHILD_THEME ); ?>" target="_blank"><?php esc_html_e('About Child Theme', 'audio-podcast'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e('Frequently Asked Questions', 'audio-podcast'); ?></h4>
				<p> <?php esc_html_e('We have gathered top most, frequently asked questions and answered them for your easy understanding. We will list down more as we get new challenging queries. Check back often.', 'audio-podcast'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( AUDIO_PODCAST_FAQ ); ?>" target="_blank"><?php esc_html_e('View FAQ','audio-podcast'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-sos"></span><?php esc_html_e('Support Queries', 'audio-podcast'); ?></h4>
				<p> <?php esc_html_e('If you have any queries after purchase, you can contact us. We are eveready to help you out.', 'audio-podcast'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( AUDIO_PODCAST_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Contact Us', 'audio-podcast'); ?></a>
				</div>
		  	</div>
		</div>

	</div>
</div>

<?php } ?>