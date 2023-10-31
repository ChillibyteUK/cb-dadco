<?php
$classes = $block['className'] ?? null;
?>
<section class="hero <?=$classes?> X" data-parallax="scroll" data-image-src="<?=wp_get_attachment_image_url( get_field('background'), 'full' )?>">
    <div class="container-bg bg--left-blue-300">
        <div class="container-xl pe-0">
            <div class="hero__content">
                <h1 data-aos="fade-right"><?=get_field('title')?></h1>
                <?php
                $delay = 300;
                if (get_field('subtitle')) {
                    ?>
                <h2 data-aos="fade-right" data-aos-delay="<?=$delay?>"><?=get_field('subtitle')?></h2>
                    <?php
                    $delay += 300;
                }
                if (get_field('cta')) {
                    ?>
                <div class="mt-4" data-aos="fade-right" data-aos-delay="<?=$delay?>">
                    <a href="<?=get_field('cta')['url']?>" class="arrow-link text--blue-600"><?=get_field('cta')['title']?></a>
                </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>