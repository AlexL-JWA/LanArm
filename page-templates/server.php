<?php 
/*
* Template name: Server
*/
$services = get_field('server_list');
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
		<h1 class="title"><?php the_title(); ?></h1>

		<?php 
			$num = 0;
			$classDiv;
		?>
		<?php if ( $services ): ?>
			<?php foreach ( $services as $servic ): ?>
				
				<?php $classDiv = ( $num % 2 ) ? "item right" : "item left"; ?>

				<div class="<?php echo $classDiv; ?>"> 
					<img src="<?php echo $servic['img']['url']; ?>" alt="<?php echo $servic['img']['alt']; ?>">

					<div class="container">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="text">
									<?php echo $servic['desc']; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="text-block">
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
		<?php $num++; endforeach; endif ?>
	</div>
</section>

<?php get_footer(); ?>