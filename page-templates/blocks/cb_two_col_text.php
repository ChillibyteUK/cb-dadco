<?php
$bg = get_field('background') == 'dark' ? 'bg--blue-300' : '';
?>
<section class="two_col_text py-5 <?=$bg?>">
    <div class="container-xl">
        <div class="row g-4">
            <div class="col-md-6">
                <?=apply_filters('the_content',get_field('content_left'))?>
            </div>
            <div class="col-md-6">
                <?=apply_filters('the_content',get_field('content_right'))?>
            </div>
        </div>
    </div>
</section>