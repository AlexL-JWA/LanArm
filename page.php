<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
		
<?php endwhile; endif; ?>

<?php get_footer(); ?>