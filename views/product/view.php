<?php include_once ROOT."/views/layouts/header.php"?>

<!-- breadcrumb part start-->
<section class="breadcrumb_part single_product_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb part end-->

<!--================Single Product Area =================-->
<div class="product_image_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="product_img_slide owl-carousel">
                    <div class="single_product_img">
                        <img src="/template/img//product/single_product.png" alt="#" class="img-fluid">
                    </div>
                    <div class="single_product_img">
                        <img src="/template/img//product/single_product.png" alt="#" class="img-fluid">
                    </div>
                    <div class="single_product_img">
                        <img src="/template/img//product/single_product.png" alt="#" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="single_product_text text-center">
                    <h3><?= $product['name']?></h3>
                    <p>
                        <?= $product['description']?>
                    <div class="card_area">
                        <div class="product_count_area">
                            <p>Quantity</p>
                            <div class="product_count d-inline-block">
                                <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                                <input class="product_count_item input-number" type="text" value="1" min="0" max="10">
                                <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                            </div>
                            <p><?= $product['price']?>$</p>
                        </div>
                        <div class="add_to_cart">
                            <div class="btn_3 add_to_cart_ajax">add to cart</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Single Product Area =================-->
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