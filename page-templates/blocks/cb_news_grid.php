<?php
$q = new WP_Query(array(
    'posts_per_page' => 4
))
?>
<section class="news_grid">
    <div class="container-xl">
        <h2><?=get_field('title')?></h2>
        <div class="news_grid__grid mb-4">
        <?php
while ($q->have_posts()) {
    $q->the_post();
    $img = get_the_post_thumbnail_url(get_the_ID(),'large');
    $cat = 'cat';
    ?>
<a href="<?=get_the_permalink()?>" class="news_grid__item" style="background-image:url(<?=$img?>)">
    <div class="overlay"></div>
    <div class="catflash"><?=$cat?></div>
    <h3><?=get_the_title()?></h3>
    <div class="news_meta">
        <div class="news_meta__name">Author Name</div>
        &nbsp;&#x2022;&nbsp;
        <div class="news_meta__date"><?=get_the_date('j F Y')?></div>
    </div>
</a>
    <?php
}
        ?>
        </div>
        <div class="text-center">
            <a href="/news/" class="btn btn-primary">All news</a>
        </div>
    </div>
</section>
