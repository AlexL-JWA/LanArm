<?php 
/*
* Template name: Home page
*/
$top_background = get_field('top_background');
$top_title = get_field('top_title');
$services = get_field('service_list');
$services_full = get_field('service_list_full');
$form_title = get_field('f_title');
$form_desc = get_field('f_desc');
$form_field01 = get_field('f_gesc01');
$form_field02 = get_field('f_desc02');
$form_help = get_field('f_desc_help');
get_header(); ?>
<!-----------------------------START CONTENT----------------------------->
    <section>
        <div class="banner-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    	<?php if ( $top_background ): ?>
	                        <div class="banner" style="background-image:url(<?php echo $top_background; ?>);"></div>                    		
                    	<?php endif ?>
                    	<?php if ( $top_title ): ?>
	                        <h1 class="title"><?php echo $top_title; ?></h1>                    		
                    	<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="service">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    	<?php if ( $services ): ?> 
	                        <div class="items">
	                        	<?php foreach ( $services as $service ): ?>
		                            <div class="item">
		                                <div class="img" style="background-image:url(<?php echo $service['img']; ?>);"></div>
		                                <h3><?php echo $service['title']; ?><span><?php echo $service['price']; ?></span></h3>
		                                <p><?php echo $service['desc']; ?></p>
		                                <a href="<?php echo $service['link']; ?>" class="button"><?php echo esc_html__('Подробнее'); ?></a>
		                            </div>
	                            <?php endforeach; ?>
	                        </div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-block">
        	<?php 
        		$num = 0;
        		$classDiv;
        	?>
			<?php if ( $services_full ): ?>
				<?php foreach ( $services_full as $ser_full ): ?>
					
					<?php $classDiv = ( $num % 2 ) ? "item right" : "item left"; ?>
						<?php if ( $ser_full['title'] ): ?>
				            <h2 class="title"><?php echo $ser_full['title']; ?></h2>						
						<?php endif ?>
                        <?php ?>
			            <div class="<?php echo $classDiv; ?>"> <img src="<?php echo $ser_full['img']['url']; ?>" alt="<?php echo $ser_full['img']['alt']; ?>">
			                <div class="container">
			                    <div class="row">
			                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			                            <div class="text">
			                                <?php echo $ser_full['desc']; ?>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        
					<?php $num++; ?>
            	<?php endforeach; ?>
            <?php endif ?>
        </div>

        <div class="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    	<?php if ( $form_title ): ?>
	                        <h2 class="title"><?php echo $form_title; ?></h2>
	                    <?php endif; ?>
                        <div class="left-block">
                            <?php echo do_shortcode('[contact-form-7 id="55" title="Форма на главной"]'); ?>
                        </div>
                        <div class="right-block">
                        	<?php if ( $form_desc ): ?>
	                            <h4><?php echo $form_desc; ?></h4>
	                        <?php endif; ?>
                            <p><?php echo $form_field01; ?></p>
                            <p><?php echo $form_field02; ?><span><?php echo $form_help; ?></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-----------------------------END CONTENT----------------------------->
<?php get_footer(); ?>