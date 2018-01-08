<?php 
/*
* Template name: Partner Alscon
*/
$al_link = get_field('al_link');
$al_link_text = get_field('al_link_text');
$al_ser_title = get_field('al_servic');
$al_ser_list = get_field('al_servic_list');
$al_por_title = get_field('al_por_title');
$al_por_site_title = get_field('al_por_s_title');
$al_por_site_list = get_field('al_por_s_list');
$al_por_other_title = get_field('al_por_o_title');
$al_por_other_list = get_field('al_por_o_list');
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<!-----------------------------START CONTENT----------------------------->
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
        <div class="partners-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="title"><?php the_title(); ?></h1>
                        <?php the_content(); ?>

                        <?php if ( $al_link ): ?>
	                        <a target="_blank" href="<?php echo $al_link; ?>" class="button"><?php echo $al_link_text; ?></a>
                        <?php endif ?>

                        <?php if ( $al_ser_title ): ?>
	                        <h4><?php echo $al_ser_title; ?></h4>                        	
                        <?php endif ?>
						
						<?php if ( $al_ser_list ): ?>
                        <ul>
			                <?php foreach ( $al_ser_list as $al_item ): ?>
	                            <li><?php echo $al_item['item']; ?></li>
                           <?php endforeach; ?>
                        </ul>
                        <?php endif ?>

						<?php if ( $al_por_title ): ?>
	                        <h2 class="title"><?php echo $al_por_title; ?></h2>							
						<?php endif ?>

						<?php if ( $al_por_site_title ): ?>
	                        <h4><?php echo $al_por_site_title; ?></h4>							
						<?php endif ?>

						<?php if ( $al_por_site_list ): ?>
							<div class="items">
								<?php foreach ( $al_por_site_list as $al_item ): ?>
									<div class="item">
										<div class="img" style="background-image: url(<?php echo $al_item['img_pr']; ?>)" data-img-url="<?php echo $al_item['img']; ?>">
											<p><?php echo $al_item['title']; ?></p>
										</div>
										<a href="<?php echo $al_item['link']; ?>" class="button"><?php echo $al_item['link_text']; ?></a>
									</div>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>

                        <?php if ( $al_por_other_title ): ?>
	                        <h4><?php echo $al_por_other_title; ?></h4>							
						<?php endif ?>

						<?php if ( $al_por_other_list ): ?>
							<div class="items other">
								<?php foreach ( $al_por_other_list as $al_item ): ?>
									<div class="item">
										<div class="img" style="background-image: url(<?php echo $al_item['img_prev']; ?>)" data-img-url="<?php echo $al_item['img']; ?>">
											<p><?php echo $al_item['title']; ?></p>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-----------------------------END CONTENT----------------------------->
<?php endwhile; endif; ?>
    
<?php get_footer(); ?>