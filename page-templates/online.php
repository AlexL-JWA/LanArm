<?php 
/*
* Template name: Online form
*/
$top_background = get_field('of_banner');
$top_title = get_field('of_title');
$desc_ditle = get_field('of_desc_title');
$desc01 = get_field('of_field01');
$desc02 = get_field('of_field02');
$desc_help = get_field('of_help');
get_header(); ?>

<!-----------------------------START CONTENT----------------------------->
<section class="internal-page online-form">
	<div class="banner-block">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="banner" style="background-image:url(<?php echo $top_background; ?>);"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="contact-us">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?php if ( $top_title ): ?>
                        <h1 class="title"><?php echo $top_title; ?></h1>                    		
                	<?php endif; ?>

					<?php if ( $desc_ditle ): ?>
						<h4><?php echo $desc_ditle; ?></h4>						
					<?php endif ?>

					<p><?php echo $desc01; ?></p>
					<p><?php echo $desc02; ?><span><?php echo $desc_help; ?></span></p>

					<div class="left-block">
						<?php echo do_shortcode('[contact-form-7 id="55" title="Форма на главной"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-----------------------------END CONTENT----------------------------->
    
<?php get_footer(); ?>