<?php
$order_left = (get_field('order') == 'text') ? 'order-1 order-lg-2' : 'order-1 order-lg-1';
$fade_left = (get_field('order') == 'text') ? 'fade-left' : 'fade-right';
$order_right = (get_field('order') == 'text') ? 'order-2 order-lg-1' : 'order-2 order-lg-2';
$fade_right = (get_field('order') == 'text') ? 'fade-right' : 'fade-left';
$bg = get_field('background') == 'dark' ? 'bg--blue-300' : '';
$link = get_field('background') == 'dark' ? 'text--blue-600' : 'text--blue-600';
$title = get_field('background') == 'dark' ? 'text--blue-600' : 'text--blue-600';
$classes = $block['className'] ?? null;
?>
<!-- text_image_5050 -->
<section class="text_image_5050 py-5 <?=$bg?> <?=$classes?>">
    <div class="container animated wow fadeIn">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center text_image_5050__content <?=$order_left?>" data-aos="<?=$fade_left?>">
                <?php
                if (get_field('title')) {
                    echo '<h2 class="' . $title . '">' . get_field('title') . '</h2>';
                }
                if (get_field('subtitle')) {
                    echo '<h3 class="h4 mb-4">' . get_field('subtitle') . '</h3>';
                }
                echo get_field('content');
                if (get_field('cta')) {
                    $cta = get_field('cta');
                    echo '<a href="' . $cta['url'] . '" target="' . $cta['target'] .'" class="arrow-link ' . $link . '">' . $cta['title'] . '</a>';
                }
                ?>
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center text_image_5050__image <?=$order_right?>" data-aos="<?=$fade_right?>">
                <img class="img-fluid" src="<?=wp_get_attachment_image_url(get_field('image'), 'full')?>">
            </div>
        </div>
    </div>
</section>