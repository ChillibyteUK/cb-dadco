<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<div id="footer-top"></div>
<footer class="footer pt-5 pb-3">
    <div class="container-xl">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-xl-3 col-xxl-2 text--blue-400">
                <div class="footer__heading">About Us</div>
                <?=wp_nav_menu(array('theme_location' => 'footer_menu1'))?>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 col-xxl-2 text--blue-400">
                <div class="footer__heading">Bauxite &amp; Alumina</div>
                <?=wp_nav_menu(array('theme_location' => 'footer_menu2'))?>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 col-xxl-2 text--blue-400">
                <div class="footer__heading">Our Operations</div>
                <?=wp_nav_menu(array('theme_location' => 'footer_menu3'))?>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 col-xxl-2 text--green-400">
                <div class="footer__heading">Sustainability</div>
                <?=wp_nav_menu(array('theme_location' => 'footer_menu4'))?>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 col-xxl-2 d-flex flex-column gap-4 justify-content-between pe-0 footer__address">
                <div>
                    <div class="footer__heading">Head Office</div>
                    <?=get_field('head_office_address', 'options')?>
                </div>
                <ul class="fa-ul">
                    <li>
                        <span class="fa-li"><i class="fa-solid fa-phone"></i></span>
                        <a href="tel:<?=parse_phone(get_field('head_office_phone','options'))?>"><?=get_field('head_office_phone','options')?></a>
                    </li>
                    <li>
                        <span class="fa-li"><i class="fa-solid fa-fax"></i></span>
                        <?=get_field('head_office_fax','options')?>
                    </li>
                    <li>
                        <span class="fa-li"><i class="fa-solid fa-envelope"></i></span>
                        <a href="mailto:<?=get_field('head_office_email','options')?>"><?=get_field('head_office_email','options')?></a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 col-xxl-2 d-flex flex-column gap-4 justify-content-between footer__address">
                <div>
                    <div class="footer__heading">Sales Office</div>
                    <?=get_field('sales_office_address', 'options')?>
                </div>
                <ul class="fa-ul">
                    <li>
                        <span class="fa-li"><i class="fa-solid fa-phone"></i></span>
                        <a href="tel:<?=parse_phone(get_field('sales_office_phone','options'))?>"><?=get_field('sales_office_phone','options')?></a>
                    </li>
                    <li>
                        <span class="fa-li"><i class="fa-solid fa-fax"></i></span>
                        <?=get_field('sales_office_fax','options')?>
                    </li>
                    <li>
                        <span class="fa-li"><i class="fa-solid fa-envelope"></i></span>
                        <a href="mailto:<?=get_field('sales_office_email','options')?>"><?=get_field('sales_office_email','options')?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="colophon">
    <div class="container-xl py-2">
        <img src="<?=get_stylesheet_directory_uri()?>/img/dadco-logo--wo.svg" alt="Dadco Alumina & Chemicals Limited">
        <div class="d-flex flex-wrap justify-content-between lined">
            <div class="col-md-8 text-center text-md-start">
                &copy; <?=date('Y')?> Dadco Alumina &amp; Chemicals Limited
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center justify-content-md-end flex-wrap gap-1">
                <a href="/terms-conditions/">Terms & Conditions</a> |
                <a href="/privacy-policy/">Privacy</a> & <a href="/cookie-policy/"> Cookies</a> | 
                <a href="https://www.chillibyte.co.uk/" rel="nofollow noopener" target="_blank" class="cb"
                    title="Digital Marketing by Chillibyte"></a>
            </div>
        </div>
    </div>
</div>
<?php wp_footer();
if (get_field('gtm_property', 'options')) {
    ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe
        src="https://www.googletagmanager.com/ns.html?id=<?=get_field('gtm_property', 'options')?>"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
}
?>
</body>

</html>

<?php
/*
                <ul class="fa-ul mb-4">
                    <li><span class="fa-li"><i class="fa-solid fa-phone"></i></span> <a
                            href="tel:<?=parse_phone(get_field('contact_phone', 'options'))?>"><?=get_field('contact_phone', 'options')?></a>
                    </li>
                    <li><span class="fa-li"><i class="fa-solid fa-envelope"></i></span> <a
                            href="mailto:<?=get_field('contact_email', 'options')?>"><?=get_field('contact_email', 'options')?></a>
                    </li>
                    <li><span class="fa-li"><i class="fa-solid fa-map-marker-alt"></i></span>
                        <?=get_field('address', 'options')?>
                    </li>
                </ul>

                */