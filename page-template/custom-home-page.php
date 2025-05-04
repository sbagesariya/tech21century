<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<main id="skip-content" role="main">

	<?php do_action( 'professional_software_company_above_slider' ); ?>

	<?php if( get_theme_mod('professional_software_company_slider_hide_show') != ''){ ?>
		<section id="slider">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
				<div class="slidertdot">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/sliderCircle2.png" alt="<?php esc_attr_e('Slider Dots', 'professional-software-company'); ?>">
				</div>
				<div class="sliderbdot">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/sliderCircle2.png" alt="<?php esc_attr_e('Slider Dots', 'professional-software-company'); ?>">
				</div>
			    <?php $professional_software_company_slider_pages = array();
			    for ( $count = 1; $count <= 4; $count++ ) {
			        $mod = intval( get_theme_mod( 'professional_software_company_slider'. $count ));
			        if ( 'page-none-selected' != $mod ) {
			          $professional_software_company_slider_pages[] = $mod;
			        }
			    }
		      	if( !empty($professional_software_company_slider_pages) ) :
			        $args = array(
			          	'post_type' => 'page',
			          	'post__in' => $professional_software_company_slider_pages,
			          	'orderby' => 'post__in'
			        );
		        	$query = new WP_Query( $args );
		        if ( $query->have_posts() ) :
		          	$i = 1;
		    	?>     
				    <div class="carousel-inner" role="listbox">
				      	<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
					        <div <?php if($i == 1){echo 'class="carousel-item fade-in-image active"';} else{ echo 'class="carousel-item fade-in-image"';}?>>
			        			<div class="sliderimg">
		            				<?php if(has_post_thumbnail()) {?>
		            					<img src="<?php esc_url(the_post_thumbnail_url('full')); ?>" alt="<?php the_title_attribute(); ?> "/>
		            				<?php } else {?>
		            					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/slider.png" alt="<?php the_title_attribute(); ?> "/>
		            				<?php }?>
							    </div>
			        			<?php
									$professional_software_company_slider_effect = get_theme_mod('professional_software_company_slider_effect', '') 
								?>
		            			<div class="carousel-caption <?php echo ($professional_software_company_slider_effect); ?>">
						            <div class="inner-carousel">
									<p class="mb-2"><?php $professional_software_company_excerpt = get_the_excerpt(); echo esc_html( professional_software_company_string_limit_words( $professional_software_company_excerpt, esc_attr(get_theme_mod('professional_software_company_slider_excerpt_length','15') ) )); ?></p>
										<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						              	<a href="<?php the_permalink(); ?>" class="read-btn"><?php echo esc_html('Read More','professional-software-company'); ?><span class="screen-reader-text"><?php echo esc_html('Read More','professional-software-company'); ?></span></a>
				            		</div>
				            	</div>
					        </div>
				      	<?php $i++; endwhile; 
				      	wp_reset_postdata();?>
				    </div>
			    <?php else : ?>
			    	<div class="no-postfound"></div>
	      		<?php endif;
			    endif;?>
			    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			      	<span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left"></i></span>
			      	<span class="screen-reader-text"><?php esc_html_e( 'Prev','professional-software-company' );?></span>
			    </a>
			    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			      	<span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span>
			      	<span class="screen-reader-text"><?php esc_html_e( 'Next','professional-software-company' );?></span>
			    </a>
			</div>
		  	<div class="clearfix"></div>
		</section>
	<?php }?>
	
	<?php do_action('professional_software_company_below_slider'); ?>

	<?php if(get_theme_mod('professional_software_company_section_title') != '' || get_theme_mod('professional_software_company_small_title') != '' || get_theme_mod('professional_software_company_category_setting') != ''){ ?>
		<section id="service-section" class="py-5">
			<div class="container">
				<div class="service-head text-center mb-5">
					<?php if(get_theme_mod('professional_software_company_small_title') != ''){?>
						<strong class="small-title"><?php echo esc_html(get_theme_mod('professional_software_company_small_title')); ?></strong>
					<?php }?>
					<?php if(get_theme_mod('professional_software_company_section_title') != ''){?>
						<h3><?php echo esc_html(get_theme_mod('professional_software_company_section_title')); ?></h3>
					<?php }?>
				</div>
				<?php $professional_software_company_catData1 =  get_theme_mod('professional_software_company_category_setting');
				if($professional_software_company_catData1){ 
					$args = array(
						'post_type' => 'post',
						'category_name' => esc_html($professional_software_company_catData1 ,'professional-software-company'),
						'posts_per_page' => get_theme_mod('professional_software_company_service_number',3)
			        );
			        $i=1; ?>
			        <div class="row">
		        		<?php $query = new WP_Query( $args );
			          	if ( $query->have_posts() ) :
			        		while( $query->have_posts() ) : $query->the_post(); ?>
			          			<div class="col-lg-4 col-md-6">
			          				<div class="service-box text-center mt-5">
	          							<div class="service-icon">
	          								<i class="<?php echo esc_attr(get_theme_mod('professional_software_company_service_icon' . $i, 'fas fa-download')); ?> mb-2"></i>
	          							</div>
          								<div class="service-content">
				            				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							              	<p><?php $professional_software_company_excerpt = get_the_excerpt(); echo esc_html( professional_software_company_string_limit_words( $professional_software_company_excerpt,15 ) ); ?></p>
							              	<div class="read-btn">
							              		<a href="<?php the_permalink(); ?>"><i class="fas fa-arrow-right"></i><span class="screen-reader-text"><?php echo esc_html('Read More','professional-software-company'); ?></span></a>
							              	</div>
			            				</div>
			          				</div>
							    </div>
			          		<?php $i++; endwhile; 
			          		wp_reset_postdata(); ?>
			          	<?php else : ?>
			              	<div class="no-postfound"></div>
			            <?php endif; ?>
	          		</div>
	      		<?php }?>
			</div>
		</section>
	<?php }?>

	<?php do_action('professional_software_company_below_service_section'); ?>

	<div class="container">
	  	<?php while ( have_posts() ) : the_post(); ?>
	  		<div class="lz-content">
	        	<?php the_content(); ?>
	        </div>
	    <?php endwhile; // end of the loop. ?>
	</div>
</main>

<?php get_footer(); ?>