<?php 
/*
* Template name: WiFi
*/
$services = get_field('wifi_list');
$info = get_field('wifi_info');
$info_list = get_field('wifi_info_list');
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

	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h1 class="title"><?php the_title(); ?></h1>
					<?php echo $info; ?>

					<?php if ( $info_list ): ?>
						<ul>
							<?php foreach ( $info_list as $item ): ?>
								<li><?php echo $item['item']; ?></li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>

	<div class="service-block">

		<?php if ( $services ): ?>
			<?php foreach ( $services as $servic ): ?>

				<div class="<?php echo $servic['wifi_location']; ?>"> 
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