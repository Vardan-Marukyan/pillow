<?php include_once ROOT."/views/layouts/header.php"?>

<!-- breadcrumb part start-->
<section class="breadcrumb_part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <h2>product list</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb part end-->

<!-- product list part start-->
<section class="product_list section_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="product_sidebar">
                    <div class="single_sedebar">
                        <form action="/catalog/serch" id="search_catalog" method="post">
                            <input type="text" name="#" placeholder="Search keyword">
                            <i class="ti-search"></i>
                        </form>
                    </div>
                    <div class="single_sedebar">
                        <div class="select_option">
                            <div class="select_option_list">Category <i class="right fas fa-caret-down"></i> </div>
                            <div class="select_option_dropdown">

                                <?php foreach ($categorys as $category):?>
                                    <p><a href="category/<?= $category['id']?>"><?= $category['name']?></a></p>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                    <div class="single_sedebar">
                        <div class="select_option">
                            <div class="select_option_list">Type <i class="right fas fa-caret-down"></i> </div>
                            <div class="select_option_dropdown">
                                <?php foreach ($types as $type):?>
                                    <p><a href="type/<?= $type['id']?>"><?= $type['type']?></a></p>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="product_list">
                    <div class="row">
                        <?php foreach ($products as $product):?>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="/template/img/product/product_list_1.png" alt="#" class="img-fluid">
                                    <h3> <a href="product/<?=$product['id']?>"><?=$product['name']?></a> </h3>
                                    <p>From <?=$product['price']?>$</p>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                    <div class="load_more_btn text-center">
                        <div class="btn_3">Load More</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product list part end-->

<!-- client review part here -->
<section class="client_review">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="client_review_slider owl-carousel">
                    <div class="single_client_review">
                        <div class="client_img">
                            <img src="/template/img//client.png" alt="#">
                        </div>
                        <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                        <h5>- Micky Mouse</h5>
                    </div>
                    <div class="single_client_review">
                        <div class="client_img">
                            <img src="/template/img//client_1.png" alt="#">
                        </div>
                        <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                        <h5>- Micky Mouse</h5>
                    </div>
                    <div class="single_client_review">
                        <div class="client_img">
                            <img src="/template/img//client_2.png" alt="#">
                        </div>
                        <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                        <h5>- Micky Mouse</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- client review part end -->

<!-- feature part here -->
<section class="feature_part section_padding">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <div class="feature_part_tittle">
                    <h3>Credibly innovate granular
                        internal or organic sources
                        whereas standards.</h3>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="feature_part_content">
                    <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources. Credibly innovate granular internal or “organic” sources whereas high standards in web-readiness.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <div class="single_feature_part">
                    <img src="/template/img//icon/feature_icon_1.svg" alt="#">
                    <h4>Credit Card Support</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_feature_part">
                    <img src="/template/img//icon/feature_icon_2.svg" alt="#">
                    <h4>Online Order</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_feature_part">
                    <img src="/template/img//icon/feature_icon_3.svg" alt="#">
                    <h4>Free Delivery</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_feature_part">
                    <img src="/template/img//icon/feature_icon_4.svg" alt="#">
                    <h4>Product with Gift</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature part end -->

<!-- subscribe part here -->
<section class="subscribe_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="subscribe_part_content">
                    <h2>Get promotions & updates!</h2>
                    <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources credibly innovate granular internal .</p>
                    <div class="subscribe_form">
                        <input type="email" placeholder="Enter your mail">
                        <a href="#" class="btn_1">Subscribe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subscribe part end -->

<?php include_once ROOT."/views/layouts/footer.php"?>
