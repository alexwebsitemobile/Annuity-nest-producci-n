<?php
/* Template Name: Annuity Types */

get_header();
the_post();
$icon = rwmb_meta('icon_title', 'type=image&size=full');
$icons_container = rwmb_meta('icons_container');
$show_button = rwmb_meta('show_button');
$containers = rwmb_meta('clone_container');
$show_button_container = rwmb_meta('show_button_container');
?>
<?php the_post_thumbnail('full', array('class' => 'img-responsives hidden-xs')); ?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 text-center mgt40">
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
    <div class="row">
        <div class="col-xs-12 ">
            <div class="post-content" style="padding-top:10px;">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>

<?php
if (!empty($icons_container)) {
    ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 pdtb40 icons">
                <div class="post-content">
                    <?php
                    foreach ($icons_container as $icons_value) {
                        $title = $icons_value['title_icon'];
                        $icon = $icons_value['icons_url_icon_container'];
                        $url = $icons_value['url_box'];
                        ?>
                        <div class="col-sm-3 text-center">
                            <a class="blue-link" href="<?php echo $url; ?>">
                                <span class="<?php echo $icon; ?>"></span>
                                <h3>
                                    <?php echo $title; ?>
                                </h3>
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>

<?php if ($show_button == 'yes') { ?>
    <div class="<?php echo $show_button_container; ?>">
        <div class="container pdb20">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-xs-12 mgt20 text-center mgb20" >
                    <a class="btn btn-blue form-control" href="<?php echo home_url('free-quote'); ?>">Free Quote</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php
get_footer();
?>

