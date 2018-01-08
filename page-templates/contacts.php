<?php 
/*
* Template name: Contact page
*/
$top_background = get_field('c_banner');
$top_title = get_field('c_title');
$mail = get_field('mail', 'options');
$mail_support = get_field('mail_support', 'options');
$phone = get_field('phone_call', 'options');
$phone_visib = get_field('phone_visib', 'options');
$work = get_field('work_list', 'options');
$title_mail = get_field('c_mail_title');
$title_mail_sup = get_field('c_mail_title_support');
$help_mail = get_field('c_mail_help_support');
$title_work = get_field('c_work_title');
$title_adress = get_field('c_adress_titile');
$title_phone = get_field('c_phone_title');

$location = get_field('c_map', 'option');

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
        <div class="contacts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php if ( $top_title ): ?>
                            <h1 class="title"><?php echo $top_title; ?></h1>                            
                        <?php endif; ?>

                        <div class="left-block">
                            <p><?php echo $title_mail; ?> <a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a></p>
                            <p><?php echo $title_mail_sup; ?> <a href="mailto:<?php echo $mail_support; ?>"><?php echo $mail_support; ?></a><span><?php echo $help_mail; ?></span></p>
                            <p><?php echo $title_adress; ?> <?php the_field('adress', 'options'); ?></p>
                            <p><?php echo $title_work; ?> 
                                <?php if ( $work ): ?>
                                    <?php foreach ($work as $item): ?>
                                        <br><?php echo $item['item']; ?>
                                    <?php endforeach ?>
                                <?php endif ?>
                            </p>
                            <p><?php echo $title_phone; ?> <br><a href="tel:<?php echo $phone; ?>"><?php echo $phone_visib; ?> </a><?php the_field('time_work', 'options'); ?></p>
                        </div>                        
                    </div>
                </div>
            </div>
            
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABobK7bUAVN9h278wGKW9bEYz1p1xdwIU"></script>
            <?php if( !empty($location) ): ?>
                <div id="map" class="acf-map">
                    <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <!-----------------------------END CONTENT----------------------------->
<?php get_footer(); ?>