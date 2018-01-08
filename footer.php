 <?php 
$mail = get_field('mail', 'options');
$mail_support = get_field('mail_support', 'options');
$mail_title = get_field('mail_title', 'options');
$mail_support_title = get_field('mail_support_title', 'options');
$work = get_field('work_list', 'options');
 ?>
 <!-----------------------------START FOOTER----------------------------->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php if( has_custom_logo() ){ echo get_custom_logo(); }?>
                        <div class="left-block">
                            <ul>
                                <?php wp_nav_menu( array(
                                    'container' => false,
                                    'items_wrap' => '%3$s',
                                    'depth'      => 1, 
                                ) ); ?>
                            </ul>
                        </div>
                        <div class="center-block">
                            <ul>
                                <li><a href="tel:<?php the_field('phone_call', 'options'); ?>" class="<?php the_field('phone_icon', 'options'); ?>"><?php the_field('phone_visib', 'options'); ?></a> <?php the_field('time_work', 'options'); ?></li>

                                <li><?php echo $mail_title; ?> <a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a></li>
                                <li><?php echo $mail_support_title; ?> <a href="mailto:<?php echo $mail_support; ?>"><?php echo $mail_support; ?></a></li>
                            </ul>
                        </div>
                        <div class="right-block">
                            <?php if( get_field('social_list', 'options') ): ?>
                            <p>Подпишись на нас:</p>
                                <ul class="soc">
                                    <?php while( has_sub_field('social_list', 'options') ): ?>
                                        <li>
                                            <a href="<?php the_sub_field('link'); ?>" class="<?php the_sub_field('social'); ?>"></a>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>

                            
                            <?php if ( $work ): ?>
                                <p><?php _e('Время работы:', 'lanarm'); ?></p>
                                <?php foreach ($work as $item): ?>
                                    <p><?php echo $item['item']; ?></p>
                                <?php endforeach ?>
                            <?php endif ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copiright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p><?php the_field('adress', 'options'); ?></p> <a target="_blank" href="http://alscon-web.com/">Разработано веб-студией:<i class="icon-Partners"></i></a> </div>
                </div>
            </div>
        </div>
    </footer>
    <!-----------------------------END FOOTER----------------------------->

    <!-----------------------------START MODAL----------------------------->

    <div class="modal fade images-open">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <img src="#" alt="">
            </div>
        </div>
    </div>
    <!-----------------------------END MODAL----------------------------->

<?php wp_footer(); ?>

</body>
</html>
