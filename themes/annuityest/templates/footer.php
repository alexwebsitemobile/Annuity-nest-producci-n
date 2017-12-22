<?php
$name = get_option('theme_options_name');
$addr = get_option('theme_options_addr');
$city = get_option('theme_options_city');
$state = get_option('theme_options_state');
$zip = get_option('theme_options_zip');
$country = get_option('theme_options_country');
$tel = get_option('theme_options_tel');
$mail = get_option('theme_options_email');
$url = get_option('theme_options_url');
$facebook = get_option('theme_options_facebook');
$instagram = get_option('theme_options_instagram');
$twitter = get_option('theme_options_twitter');
$googleplus = get_option('theme_options_googleplus');
$youtube = get_option('theme_options_youtube');
$linkedin = get_option('theme_options_linkedin');
$pinterest = get_option('theme_options_pinterest');
$tumblr = get_option('theme_options_tumblr');
$rss = get_option('theme_options_rss');
$footer = get_option('theme_options_footer');
?>
<?php if (!is_page('home')) { ?>
    <div class="container-gray-footer pdtb40 subfooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center-xs">
                    <div class="brd-right">
                        <h3>Disclaimer</h3>
                        <div class="post-content-address pdr15">
                            <?php
                            $content_footer = apply_filters('the_content', $footer);
                            echo $content_footer;
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 tg-verticalmiddle text-center-xs">
                    <div class="brd-right">
                        <h3>Useful Links</h3>
                        <?php
                        wp_nav_menu(array(
                            'menu' => 'Useful Links',
                            'theme_location' => 'useful-links'
                        ));
                        ?>
                    </div>
                </div>
                <div class="col-sm-4 tg-verticalmiddle pdt30r text-center-xs">
                    <h3>Contact Us</h3>
                    <div class="post-content">
                        <div itemtype="http://schema.org/LocalBusiness">
                            <div class="col-md-1 no-padding text-center hidden-sm hidden-xs">
                                <i class="fa fa-map-marker" style="font-size: 20px;color: #d8d8d8;"></i>
                            </div>
                            <div class="col-md-11 no-padding">
                                <div  itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                    <p><i class="fa fa-map-marker visible-sm-inline-block" style="font-size: 20px;color: #d8d8d8;padding-right: 8px;"></i><span itemprop="streetAddress"><?php echo $addr; ?></span>, <span class="visible-sm-inline-block">
                                            <span itemprop="addressLocality"><?php echo $city; ?>,</span> -  <span itemprop="addressRegion"><?php echo $state; ?></span> - <span itemprop="postalCode"><?php echo $zip; ?></span>, <span itemprop="addressLocality"><?php echo $country; ?></span> 
                                        </span></p>
                                    <p class="hidden-sm">
                                        <span itemprop="addressLocality"><?php echo $city; ?>,</span> -  <span itemprop="addressRegion"><?php echo $state; ?></span> - <span itemprop="postalCode"><?php echo $zip; ?></span>, <span itemprop="addressLocality"><?php echo $country; ?></span> 
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-1 no-padding text-center hidden-sm hidden-xs">
                                <i class="fa fa-phone" style="font-size: 20px;color: #d8d8d8;"></i>
                            </div>
                            <div class="col-md-11 no-padding">
                                <p>
                                    <i class="fa fa-phone visible-sm-inline-block" style="font-size: 20px;color: #d8d8d8;padding-right: 8px;"></i> <a href="tel:<?php echo $tel; ?>" class="contact-icon" ><?php echo $tel; ?></a>
                                </p>
                            </div>
                            <div class="col-md-1 no-padding text-center hidden-sm hidden-xs">
                                <i class="fa fa-envelope" style="font-size: 20px;color: #d8d8d8;"></i>
                            </div>
                            <div class="col-md-11 no-padding">
                                <p>
                                    <i class="fa fa-envelope visible-sm-inline-block" style="font-size: 20px;color: #d8d8d8;padding-right: 8px;"></i><a href="mailto:<?php echo $mail; ?>" class="contact-icon" style="word-wrap: break-word;"> <?php echo $mail; ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>

<footer itemscope itemprop="http://schema.org/WPFooter" class="page-footer <?php
if (is_page('home')) {
    echo 'fixed-footer';
}
?>">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-5 verticalmiddle text-center-xs hidden-xs">
                <a href="<?php echo home_url('privacy-policy'); ?>">Privacy Policy</a> | <a href="<?php echo home_url('terms-and-conditions'); ?>">Terms</a> | © Copyright <?php echo the_date('Y'); ?>
            </div>
            <div class="col-md-6 col-sm-7 verticalmiddle text-right text-center-xs">
                <span class=" verticalmiddle clear hidden-xs">Connect with us </span>
                <span class="verticalmiddle clear mgt15r nomg767" style="margin-left: 10px;">
                    <ul class="menu-social">
                        <?php
                        if (!empty($linkedin)) {
                            ?>
                            <li>
                                <a target="_blank" href="<?php echo $linkedin; ?>">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        <?php } ?>
                        <?php
                        if (!empty($twitter)) {
                            ?>
                            <li>
                                <a target="_blank" href="<?php echo $twitter; ?>">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                        <?php } ?>
                        <?php
                        if (!empty($facebook)) {
                            ?>
                            <li>
                                <a target="_blank" href="<?php echo $facebook; ?>">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                        <?php } ?>
                        <?php
                        if (!empty($youtube)) {
                            ?>
                            <li>
                                <a target="_blank" href="<?php echo $youtube; ?>">
                                    <i class="fa fa-youtube-play"></i>
                                </a>
                            </li>
                        <?php } ?>
                        <?php
                        if (!empty($googleplus)) {
                            ?>
                            <li>
                                <a target="_blank" href="<?php echo $googleplus; ?>">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </span>
                <span class="block-xs verticalmiddle mgt15r nomg767 block-sm"><a href="<?php echo home_url('free-quote') ?>" class="btn-white">Free Quote</a></span>
            </div>
            <div class="col-md-6 verticalmiddle text-center-xs visible-xs" style="padding-top: 15px;">
                <a href="<?php echo home_url('privacy-policy'); ?>">Privacy Policy</a> | <a href="<?php echo home_url('terms-and-conditions'); ?>">Terms</a> | © Copyright <?php echo the_date('Y'); ?>
            </div>
        </div>
    </div>
</footer>
