<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" id="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon_lanarm.ico" type="image/x-icon">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon_lanarm.png" type="image/x-icon">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

        <!-----------------------------START HEADER----------------------------->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="burger-menu"> <span></span> <span></span> <span></span> </div>
                    <ul class="menu">
                        <?php wp_nav_menu( array(
                            'container' => false,
                            'items_wrap' => '%3$s',
                            'walker'         => new lanarm_menu(),
                        ) ); ?>
                    </ul>
                    <?php if( has_custom_logo() ){ echo get_custom_logo(); }?>  
                </div>
            </div>
        </div>
    </header>
    <!-----------------------------END HEADER----------------------------->