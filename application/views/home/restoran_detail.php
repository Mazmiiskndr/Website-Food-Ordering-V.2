<!-- Breadcrumb Area Start Here -->
<div class="breadcrumbs-area position-relative" style="background-image: url('<?= base_url('assets/') ?>2-2.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 class="title-3">Restoran Detail</h3>
                    <ul>
                        <li><a href="<?= base_url('') ?>">Home</a></li>
                        <li>Restoran Detail</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End Here -->
<div class="single-product-main-area">
    <div class="container container-default custom-area">
        <?php foreach($detail as $row){ ?> 
            <div class="row">
                <div class="col-lg-5 col-custom">
                    <div class="product-details-img horizontal-tab" >
                        <div class="product-slider popup-gallery product-details_slider" data-slick-options='{
                        "slidesToShow": 1,
                        "arrows": false,
                        "fade": true,
                        "draggable": false,
                        "swipe": false,
                        "asNavFor": ".pd-slider-nav"
                    }'>
                    <div class="single-image border">
                        <a href="<?= base_url('assets/uploads/restoran/'.$row->gambar) ?>">
                            <img src="<?= base_url('assets/uploads/restoran/'.$row->gambar) ?>" alt="Product">
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-7 col-custom">
            <div class="product-summery position-relative">
                <div class="product-head mb-3">
                    <h2 class="product-title"><?= $row->nama_restoran ?></h2>
                </div>
                <div class="price-box mb-2">
                    <span class="regular-price"><?= $row->nama_kategori ?></span>
                </div>
                
                <div class="sku">
                    <span>Email &nbsp; : <strong><?= $row->email ?></strong></span>

                </div>
                <div class="sku">
                    <span>No. HP &nbsp;: <strong><?= $row->no_hp ?></strong></span>

                </div>
                <div class="sku">
                    <span>Buka &nbsp;&nbsp; : <strong><?= $row->buka_restoran ?></strong></span>

                </div>
                <div class="sku">
                    <span>Tutup &nbsp; : <strong><?= $row->tutup_restoran ?></strong></span>
                </div>
                <div class="sku mb-3">
                    <span><strong><?= $row->o_days ?></strong></span>

                </div>
                <div class="sku mb-3">
                    <span><?= $row->url ?></span>

                </div>
                <p class="desc-content mb-5"><?= $row->alamat ?></p>

                <div class="buy-button mb-5">
                    <a href="<?= base_url('home/restoran/menu_restoran/'.$row->id_restoran) ?>" class="btn obrien-button-3 black-button">Menu Restoran</a>
                </div>
                <div class="social-share mb-4">
                    <span>Share :</span>
                    <a href="#"><i class="fa fa-facebook-square facebook-color"></i></a>
                    <a href="#"><i class="fa fa-twitter-square twitter-color"></i></a>
                    <a href="#"><i class="fa fa-linkedin-square linkedin-color"></i></a>
                    <a href="#"><i class="fa fa-pinterest-square pinterest-color"></i></a>
                </div>

            </div>
        </div>
    </div>
    <div class="row mt-no-text">
        <div class="col-lg-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#connect-1" role="tab" aria-selected="true">Alamat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#connect-2" role="tab" aria-selected="false">Reviews</a>
                </li>

            </ul>
            <div class="tab-content mb-text" id="myTabContent">
                <div class="tab-pane fade show active" id="connect-1" role="tabpanel" aria-labelledby="home-tab">
                    <div class="desc-content">
                        <p class="mb-3"><?= $row->alamat ?></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="connect-2" role="tabpanel" aria-labelledby="profile-tab">
                    <!-- Start Single Content -->
                    <div class="product_tab_content  border p-3">
                        <div class="review_address_inner">
                            <!-- Start Single Review -->
                            <div class="pro_review mb-5">
                                <div class="review_thumb">
                                    <img alt="review images" src="assets/images/review/1.jpg">
                                </div>
                                <div class="review_details">
                                    <div class="review_info mb-2">
                                        <div class="product-rating mb-2">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5>Admin - <span> December 19, 2020</span></h5>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in viverra ex, vitae vestibulum arcu. Duis sollicitudin metus sed lorem commodo, eu dapibus libero interdum. Morbi convallis viverra erat, et aliquet orci congue vel. Integer in odio enim. Pellentesque in dignissim leo. Vivamus varius ex sit amet quam tincidunt iaculis.</p>
                                </div>
                            </div>
                            <!-- End Single Review -->
                        </div>
                        <!-- Start RAting Area -->
                        <div class="rating_wrap">
                            <h5 class="rating-title-1 mb-2">Add a review </h5>
                            <p class="mb-2">Your email address will not be published. Required fields are marked *</p>
                            <h6 class="rating-title-2 mb-2">Your Rating</h6>
                            <div class="rating_list mb-4">
                                <div class="review_info">
                                    <div class="product-rating mb-3">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End RAting Area -->
                        <div class="comments-area comments-reply-area">
                            <div class="row">
                                <div class="col-lg-12 col-custom">
                                    <form action="#" class="comment-form-area">
                                        <div class="row comment-input">
                                            <div class="col-md-6 col-custom comment-form-author mb-3">
                                                <label>Name <span class="required">*</span></label>
                                                <input type="text" required="required" name="Name">
                                            </div>
                                            <div class="col-md-6 col-custom comment-form-emai mb-3">
                                                <label>Email <span class="required">*</span></label>
                                                <input type="text" required="required" name="email">
                                            </div>
                                        </div>
                                        <div class="comment-form-comment mb-3">
                                            <label>Comment</label>
                                            <textarea class="comment-notes" required="required"></textarea>
                                        </div>
                                        <div class="comment-form-submit">
                                            <input type="submit" value="Submit" class="comment-submit btn obrien-button primary-btn">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Content -->
                </div>
            </div>
        </div>
    </div>
<?php } ?>
</div>
</div>
<!-- Single Product Main Area End -->
<!-- Product Area Start Here -->
<div class="product-area mb-text">
    <div class="container container-default custom-area">
        <div class="row">
            <div class="col-lg-5 m-auto text-center col-custom">
                <div class="section-content">
                    <h2 class="title-1 text-uppercase">Related Menu</h2>
                    <div class="desc-content">
                        <p>You can check the related product for your shopping collection.</p>
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
<?php $menu = $this->db->get('foods',3)->result(); ?>
<?php foreach($menu as $m){ ?>
    <div class="single-item">
        <div class="single-product position-relative">
            <div class="product-image">
                <a class="d-block" href="<?= base_url('dashboard/foods_detail/'.$m->id_foods) ?>">
                    <img src="<?= base_url('assets/uploads/menu/'.$m->gambar_foods) ?>" alt="" class="product-image-1 w-100">
                    <img src="<?= base_url('assets/uploads/menu/'.$m->gambar_foods) ?>" alt="" class="product-image-2 position-absolute w-100">
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
                    <h4 class="title-2"> <a href="<?= base_url('dashboard/foods_detail/'.$m->id_foods) ?>"><?= $m->nama_foods ?></a></h4>
                </div>
                <div class="price-box">
                    <span class="regular-price ">Rp. <?= number_format($m->harga,0,',','.'); ?></span>
                </div>
            </div>
            <div class="add-action d-flex position-absolute">
                <a href="<?= base_url('home/cart/tambah_cart/'.$m->id_foods) ?>" title="Add To cart">
                    <i class="ion-bag"></i>
                </a>
               
                <a href="<?= base_url('dashboard/foods_detail/'.$m->id_foods) ?>" data-toggle="modal" title="Quick View">
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