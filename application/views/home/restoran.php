<!-- Breadcrumb Area Start Here -->
        <div class="breadcrumbs-area position-relative" style="background-image: url('<?= base_url('assets/') ?>2-2.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="breadcrumb-content position-relative section-content">
                            <h3 class="title-3">Restoran</h3>
                            <ul>
                                <li><a href="<?= base_url('') ?>">Home</a></li>
                                <li>Restoran</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Shop Main Area Start Here -->
        <div class="shop-main-area shop-fullwidth">
            <div class="container container-default custom-area">
                <div class="row flex-row-reverse">
                    <div class="col-12 col-custom widget-mt">
                        <!--shop toolbar start-->
                        <div class="shop_toolbar_wrapper">
                            <div class="shop_toolbar_btn">
                                <button data-role="grid_3" type="button" class="active btn-grid-3" data-toggle="tooltip" title="3"> <i class="fa fa-th-large"></i></button>
                            
                                <button data-role="grid_list" type="button" class="btn-list" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button>
                            </div>
                        
                        </div>
                        <!--shop toolbar end-->
                        <!-- Shop Wrapper Start -->
                        <div class="row shop_wrapper grid_4">
                            <?php foreach($restoran as $row){  ?>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-custom product-area">
                                <div class="single-product position-relative">
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
                                    <div class="product-content-listview">
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
                                        <div class="add-action-listview d-flex">
                                            <a href="<?= base_url('home/restoran/menu_restoran/'.$row->id_restoran) ?>" title="Add To cart">
                                                <i class="fa fa-cutlery"></i>
                                            </a>
                                          
                                            <a href="#exampleModalCenter" data-toggle="modal" title="Quick View">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                        <p class="desc-content">
                                            <?= $row->alamat ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <!-- Shop Wrapper End -->
                        <!-- Bottom Toolbar Start -->
                        <div class="row">
                            <div class="col-sm-12 col-custom">
                                <div class="toolbar-bottom mt-30">
                                    
                                </div>
                            </div>
                        </div>
                        <!-- Bottom Toolbar End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Main Area End Here -->
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