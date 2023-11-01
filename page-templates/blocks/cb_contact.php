<section class="contact py-5">
    <div class="container-xl">
        <h2>Head Office</h2>
        <div class="row">
            <div class="col-md-6">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa-solid fa-map-marker-alt"></i></span>
                        <?=get_field('head_office_address','options')?></li>
                    <li><span class="fa-li"><i class="fa-solid fa-phone"></i></span>
                        <?=get_field('head_office_phone','options')?></li>
                    <li><span class="fa-li"><i class="fa-solid fa-fax"></i></span>
                        <?=get_field('head_office_fax','options')?></li>
                    <li><span class="fa-li"><i class="fa-solid fa-envelope"></i></span>
                        <?=get_field('head_office_email','options')?></li>
                </ul>
            </div>
            <div class="col-md-6">
                <iframe src="<?=get_field('head_office_map_url','options')?>" width="100%" height="450" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</section>
<section class="contact py-5 bg--blue-300">
    <div class="container-xl">
        <h2>Sales Office</h2>
        <div class="row">
            <div class="col-md-6 order-1 order-md-2">
            <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa-solid fa-map-marker-alt"></i></span>
                        <?=get_field('sales_office_address','options')?></li>
                    <li><span class="fa-li"><i class="fa-solid fa-phone"></i></span>
                        <?=get_field('sales_office_phone','options')?></li>
                    <li><span class="fa-li"><i class="fa-solid fa-fax"></i></span>
                        <?=get_field('sales_office_fax','options')?></li>
                    <li><span class="fa-li"><i class="fa-solid fa-envelope"></i></span>
                        <?=get_field('sales_office_email','options')?></li>
                </ul>
            </div>
            <div class="col-md-6 order-2 order-md-1">
                <iframe src="<?=get_field('sales_office_map_url','options')?>" width="100%" height="450" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</section>