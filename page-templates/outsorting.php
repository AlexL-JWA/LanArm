<?php 
/*
* Template name: Outsorting page
*/
$top_background = get_field('ou_banner');
$top_title = get_field('ou_title');
$ou_list = get_field('ou_list');
get_header(); ?>
	<!-----------------------------START CONTENT----------------------------->
    <section class="internal-page ">
        <div class="banner-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    	<?php if ( $top_background ): ?>
	                        <div class="banner" style="background-image:url(<?php echo $top_background; ?>);"></div>
	                       <?php endif ?>
                    </div>
                </div>
            </div>
        </div>        
        <div class="service-block">
        	<?php if ( $top_title ): ?>
	            <h1 class="title"><?php echo $top_title; ?></h1>
	        <?php endif; ?>
            <?php 
                $num = 0;
                $classOu;
            ?>
            <?php if ( $ou_list ): ?>
                <?php foreach ( $ou_list as $ou_item ): ?>
                    <?php $classOu = ( $num % 2 ) ? "item right" : "item left"; ?>
                    <div class="<?php echo $classOu; ?>"> 
                        <img src="<?php echo $ou_item['img']['url']; ?>" alt="<?php echo $ou_item['img']['alt']; ?>">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="text">
                                        <?php echo $ou_item['desc']; ?>
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
                                        <?php echo $ou_item['content']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $num++; ?>
                <?php endforeach; ?>
            <?php endif ?>            
        </div>
    </section>
    <!-----------------------------END CONTENT----------------------------->
<?php get_footer(); ?>