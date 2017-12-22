<?php
/* Template Name: Right Image */

get_header();
the_post();
$icon = rwmb_meta('icon_title', 'type=image&size=full');
$container_blue = rwmb_meta('content_blue');
$icons_container = rwmb_meta('icons_container');
?>
<div class="container">
    <div class="row pdtb40">
        <div class="col-md-6 col-sm-12 verticalmiddle">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <?php if (!empty($icon)) { ?>
                        <div class="verticalmiddle pdr20">
                            <?php
                            foreach ($icon as $image) {
                                echo '<img src="', esc_url($image['url']), '"  alt="', esc_attr($image['alt']), '">';
                            }
                            ?>
                        </div>
                    <?php } ?>
                    <div class="verticalmiddle">
                        <h1 class="title-page"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="col-md-6 verticalmiddle block hidden-sm hidden-xs">
            <div class="post-content text-center">
                <?php the_post_thumbnail('full', array('class' => 'img-responsives')); ?>
            </div>
        </div>
    </div>
</div>

<?php
if (!empty($container_blue)) {
    ?>
    <div class="container-blue">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 pdtb40">
                    <div class="post-content">
                        <?php echo $container_blue; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php
if (!empty($icons_container)) {
    ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 pdtb40">
                <div class="post-content">
                    <?php
                    if (!empty($icons_container)) {
                        foreach ($icons_container as $group_value) {
                            echo '<div class="col-md-3 col-sm-6 text-center">';
                            $image_ids = isset($group_value['image_icon']) ? $group_value['image_icon'] : array();
                            foreach ($image_ids as $image_id) {
                                $image = RWMB_Image_Field::file_info($image_id, array('size' == 'full'));
                                echo '<img src="' . $image['full_url'] . '" width="' . $image['width'] . '" height="' . $image['height'] . '">';
                            }
                            echo '<h2 class="title-box"><a href="' . $group_value['url_box'] . '">' . $group_value['title_icon'] . '</a></h2>';
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php
get_footer();
?>

