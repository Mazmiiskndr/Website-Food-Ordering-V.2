<!-- Begin Slider Area One -->
        <div class="slider-area">
            <div class="obrien-slider arrow-style" data-slick-options='{
        "slidesToShow": 1,
        "slidesToScroll": 1,
        "infinite": true,
        "arrows": true,
        "dots": true,
        "autoplay" : true,
        "fade" : true,
        "autoplaySpeed" : 7000,
        "pauseOnHover" : false,
        "pauseOnFocus" : false
        }' data-slick-responsive='[
        {"breakpoint":992, "settings": {
        "slidesToShow": 1,
        "arrows": false,
        "dots": true
        }}
        ]'>
                <div class="slide-item slide-1 bg-position slide-bg-2 animation-style-01" style="background-image: url('<?= base_url('assets/') ?>1-1.jpg')">
                    <div class="slider-content">
                        <h4 class="slider-small-title text-success">Natural Menu</h4>
                        <h2 class="slider-large-title text-white">Life with Healthy</h2>
                        <div class="slider-btn">
                            <a class="obrien-button btn-success" href="<?= base_url('home/shop') ?>">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="slide-item slide-4 bg-position slide-bg-2 animation-style-01" style="background-image: url('<?= base_url('assets/') ?>2-2.jpg')">
                    <div class="slider-content">
                        <h4 class="slider-small-title text-white"> Fast procces delivered</h4>
                        <h2 class="slider-large-title text-white">Special Menu</h2>
                        <div class="slider-btn">
                            <a class="obrien-button btn-success" href="<?= base_url('home/shop') ?>">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area One End Here -->
        <!-- Product Area Start Here -->
        <div class="product-area mt-text mb-no-text">
            <div class="container container-default custom-area">
                <div class="row">
                    <div class="col-lg-5 col-custom m-auto text-center">
                        <div class="section-content">
                            <h2 class="title-1 text-uppercase">Menu</h2>
                            <div class="desc-content">
                                <p>All best seller menu are now available for you and your can buy this menu from here any time any where so sop now</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="product-wrapper col-lg-12 col-custom">
                        <div class="product-slider" data-slick-options='{
                    "slidesToShow": 4,
                    "slidesToScroll": 1,
                    "infinite": true,
                    "arrows": false,
                    "dots": false
                    }' data-slick-responsive='[
                    {"breakpoint": 1200, "settings": {
                    "slidesToShow": 3
                    }},
                    {"breakpoint": 992, "settings": {
                    "slidesToShow": 2
                    }},
                    {"breakpoint": 576, "settings": {
                    "slidesToShow": 1
                    }}
                    ]'> 
                        <?php foreach($foods as $row){ ?>
                            <div class="single-item">
                                <div class="single-product position-relative mb-30">
                                    <div class="product-image">
                                        <a class="d-block" href="<?= base_url('dashboard/foods_detail/'.$row->id_foods) ?>">
                                            <img src="<?= base_url('assets/uploads/menu/'.$row->gambar_foods) ?>" alt="" class="product-image-1 w-100">
                                            <img src="<?= base_url('assets/uploads/menu/'.$row->gambar_foods) ?>" alt="" class="product-image-2 position-absolute w-100">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="<?= base_url('dashboard/foods_detail/'.$row->id_foods) ?>"><?= $row->nama_foods ?></a></h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price ">Rp. <?= number_format($row->harga,0,',','.'); ?></span>
                                        </div>
                                    </div>
                                    <div class="add-action d-flex position-absolute">
                                        <a href="<?= base_url('home/cart/tambah_cart/'.$row->id_foods) ?>" title="Add To cart">
                                            <i class="ion-bag"></i>
                                        </a>
                                        
                                        <a href="<?= base_url('dashboard/foods_detail/'.$row->id_foods) ?>" data-toggle="modal" title="Quick View">
                                            <i class="ion-eye"></i>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area End Here -->
        
        <!-- Product Area Start Here -->
        <div class="product-area mt-text mb-text-p">
            <div class="container container-default custom-area">
                <div class="row">
                    <div class="col-lg-5 m-auto text-center col-custom">
                        <div class="section-content">
                            <h2 class="title-1 text-uppercase">Restoran</h2>
                            <div class="desc-content">
                                <p>All best seller restaurant are now available for you and your can buy this restaurant from here any time any where so sop now</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 product-wrapper col-custom">
                        <div class="product-slider" data-slick-options='{
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "infinite": true,
                        "arrows": false,
                        "dots": false
                        }' data-slick-responsive='[
                        {"breakpoint": 1200, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint": 992, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint": 576, "settings": {
                        "slidesToShow": 1
                        }}
                        ]'>
                            <?php foreach($restoran as $row){ ?>
                            <div class="single-item">
                                <div class="single-product position-relative mb-30">
                                    <div class="product-image">
                                        <a class="d-block" href="<?= base_url('dashboard/restoran_detail/'.$row->id_restoran) ?>">
                                            <img src="<?= base_url('assets/uploads/restoran/'.$row->gambar) ?>" alt="" class="product-image-1 w-100">
                                            <img src="<?= base_url('assets/uploads/restoran/'.$row->gambar) ?>" alt="" class="product-image-2 position-absolute w-100">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="<?= base_url('dashboard/restoran_detail/'.$row->id_restoran) ?>"><?= $row->nama_restoran ?></a></h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price "><?= $row->nama_kategori ?></span>
                                        </div>
                                    </div>
                                    <div class="add-action d-flex position-absolute">
                                        <a href="<?= base_url('home/restoran/menu_restoran/'.$row->id_restoran) ?>" title="Add To Wishlist">
                                            <i class="fa fa-cutlery"></i>
                                        </a>
                                        <a href="<?= base_url('dashboard/restoran_detail/'.$row->id_restoran) ?>" data-toggle="modal" title="Quick View">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                            <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area End Here -->
        <!-- Banner Area Start Here -->
        <div class="banner-area mt-text mb-text-p">
            <div class="container container-default custom-area">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-custom">
                        <div class="banner-image hover-style">
                            <a class="d-block" href="<?= base_url('home/shop') ?>">
                                <img class="w-100" src="<?= base_url('assets/uploads/banner/') ?>banner1.jpg" alt="Banner Image">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-custom">
                        <div class="banner-image hover-style mb-0">
                            <a class="d-block" href="<?= base_url('home/shop') ?>">
                                <img class="w-100" src="<?= base_url('assets/uploads/banner/') ?>banner2.jpg" alt="Banner Image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End Here -->
        <!-- Feature Area Start Here -->
        <div class="feature-area mb-no-text">
            <div class="container container-default custom-area">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-5 col-md-12 col-custom">
                        <div class="feature-content-wrapper">
                            <h2 class="title">Important to eat fruit</h2>
                            <p class="desc-content">Eating fruit provides health benefits — people who eat more fruits and vegetables as part of an overall healthy diet are likely to have a reduced risk of some chronic diseases. Fruits provide nutrients vital for health and maintenance of your body.</p>
                            <p class="desc-content"> Fruits are sources of many essential nutrients that are underconsumed, including potassium, dietary fiber, vitamin C, and folate (folic acid).</p>
                            <p class="desc-content"> Most fruits are naturally low in fat, sodium, and calories. None have cholesterol.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7 col-md-12 col-custom">
                        <div class="feature-image position-relative">
                            <img src="<?= base_url('assets/uploads/banner/') ?>banner2.jpg" alt="Obrien Feature">
                            <div class="popup-video position-absolute">
                                <a class="popup-vimeo" href="https://www.youtube.com/watch?v=_9VUPq3SxOc">
                                    <i class="ion-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Area End Here -->
        <!-- Feature Area Start Here -->
        <div class="feature-area mb-no-text">
            <div class="container container-default custom-area">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-7 col-md-7 col-custom order-2 order-md-1">
                        <div class="feature-image position-relative">
                            <img class="w-100" src="<?= base_url('assets/uploads/menu/') ?>Pizza2.jpg" alt="Obrien Feature">
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-5 col-md-5 col-custom order-1 order-md-2">
                        <div class="feature-content-countdown">
                            <h2 class="title">8. Countdown Product</h2>
                            <div class="price-box">
                                <span class="regular-price">$80.00</span>
                                <span class="old-price"><del>$90.00</del></span>
                            </div>
                            <p class="desc-content">
                                Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
                            </p>
                            <div class="countdown-wrapper countdown-style-2 d-flex" data-countdown="2022/12/24"></div>
                            <a href="<?= base_url('home/shop') ?>" class="btn obrien-button-2 primary-color">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Area End Here -->
        <!-- Newslatter Area Start Here -->
        <div class="newsletter-area mt-no-text mb-text-p" style="background-image: url('<?= base_url('assets/') ?>footer.jpg')">
            <div class="container container-default h-100 custom-area">
                <div class="row h-100" >
                    <div class="col-lg-8 col-xl-5 offset-xl-6 offset-lg-3 col-custom" >
                        <div class="newsletter-content text-center d-flex flex-column align-items-center justify-content-center h-100">
                            <div class="section-content">
                                <h4 class="title-4 text-uppercase">Special <span>Offer</span> for subscription</h4>
                                <h2 class="title-3 text-uppercase">Get instant discount for membership</h2>
                                <p class="desc-content">Subscribe our newsletter and all latest news of our <br>latest product, promotion and offers</p>
                            </div>
                            <div class="newsletter-form-wrap ml-auto mr-auto">
                                <form id="mc-form" class="mc-form d-flex position-relative">
                                    <input type="email" id="mc-email" class="form-control email-box" placeholder="email@example.com" name="EMAIL">
                                    <button id="mc-submit" class="btn primary-btn obrien-button newsletter-btn position-absolute" type="submit">Subscribe</button>
                                </form>
                                <!-- mailchimp-alerts Start -->
                                <div class="mailchimp-alerts text-centre">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
                                </div>
                                <!-- mailchimp-alerts end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newslatter Area End Here -->
        <!-- Call To Action Area Start Here -->
        <div class="call-to-action-area mb-text">
            <div class="container container-default custom-area">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-custom">
                        <div class="call-to-action-item mt-0 d-lg-flex d-md-block align-items-center">
                            <div class="call-to-action-icon">
                                <img src="<?= base_url('assets/food/') ?>assets/images/icons/icon-1.png" alt="Icon">
                            </div>
                            <div class="call-to-action-info">
                                <h3 class="action-title">Free Home Delivery</h3>
                                <p class="desc-content">Provide free home delivery for all product over $100</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-custom">
                        <div class="call-to-action-item d-lg-flex d-md-block align-items-center">
                            <div class="call-to-action-icon">
                                <img src="<?= base_url('assets/food/') ?>assets/images/icons/icon-2.png" alt="Icon">
                            </div>
                            <div class="call-to-action-info">
                                <h3 class="action-title">Quality Products</h3>
                                <p class="desc-content">We ensure our product quality all times</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-custom">
                        <div class="call-to-action-item d-lg-flex d-md-block align-items-center">
                            <div class="call-to-action-icon">
                                <img src="<?= base_url('assets/food/') ?>assets/images/icons/icon-3.png" alt="Icon">
                            </div>
                            <div class="call-to-action-info">
                                <h3 class="action-title">Online Support</h3>
                                <p class="desc-content">To satisfy our customer we try to give support online</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action Area End Here -->
        <!-- Support Area Start Here -->
        <div class="support-area">
            <div class="container container-default custom-area">
                <div class="row">
                    <div class="col-lg-12 col-custom">
                        <div class="support-wrapper d-flex">
                            <div class="support-content">
                                <h1 class="title">Need Help ?</h1>
                                <p class="desc-content">Call our support 24/7 at 01234-567-890</p>
                            </div>
                            <div class="support-button d-flex align-items-center">
                                <a class="obrien-button primary-btn" href="contact-us.html">Contact now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Support Area End Here -->