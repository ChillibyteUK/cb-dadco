<?php
function acf_blocks()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'				=> 'cb_hero',
            'title'				=> __('CB Hero'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_hero.php',
            'keywords'			=> array( 'hero' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_text_image',
            'title'				=> __('CB Text / Image'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_text_image.php',
            'keywords'			=> array( 'text', 'image' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_nav_cards',
            'title'				=> __('CB Nav Cards'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_nav_cards.php',
            'keywords'			=> array( 'nav', 'cards' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
        acf_register_block_type(array(
            'name'				=> 'cb_news_grid',
            'title'				=> __('CB News Grid'),
            'category'			=> 'layout',
            'icon'				=> 'cover-image',
            'render_template'	=> 'page-templates/blocks/cb_news_grid.php',
            'keywords'			=> array( 'news', 'grid' ),
            'mode'	=> 'edit',
            'supports' => array('mode' => false),
        ));
    }
}
add_action('acf/init', 'acf_blocks');
    
// Gutenburg core modifications
add_filter('register_block_type_args', 'core_image_block_type_args', 10, 3);
function core_image_block_type_args($args, $name)
{
    if ($name == 'core/paragraph') {
        $args['render_callback'] = 'modify_core_add_container';
    }

    return $args;
}

function modify_core_add_container($attributes, $content)
{
    ob_start();
    // $class = $block['className'];
    ?>
<div class="container-xl">
    <?=$content?>
</div>
<?php
    $content = ob_get_clean();
    return $content;
}