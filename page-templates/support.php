<?php 
/*
* Template name: Support
*/
$services = get_field('support_list');
get_header(); ?>

<section class="internal-page ">
	<div class="banner-block">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="banner" style="background-image:url(<?php echo the_post_thumbnail_url('full'); ?>);"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="service-block">
		<h1 class="title">Удаленная техническая поддержка</h1>

		<?php if ( $services ): ?>
			<?php foreach ( $services as $servic ): ?>

			<div class="<?php echo $servic['support_location']; ?>"> 
				<?php if ( $servic['img'] ): ?>
					<img src="<?php echo $servic['img']['url']; ?>" alt="<?php echo $servic['img']['alt']; ?>">					
				<?php endif ?>

				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="text">
								<?php echo $servic['content']; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; endif ?>
	</div>
</section>


<?php get_footer(); ?>