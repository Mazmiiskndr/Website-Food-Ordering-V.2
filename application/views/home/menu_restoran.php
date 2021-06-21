<div class="breadcrumbs-area position-relative" style="background-image: url('<?= base_url('assets/') ?>1-1.jpg')">
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <div class="breadcrumb-content position-relative section-content">
                <h3 class="title-3">Menu Restoran</h3>
                <ul>
                    <li><a href="<?= base_url('') ?>">Home</a></li>
                    <li>Shop</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Breadcrumb Area End Here -->
<!-- Shop Main Area Start Here -->
<div class="shop-main-area">
    <div class="container container-default custom-area">
        <div class="row flex-row-reverse">
            <div class="col-lg-9 col-12 col-custom widget-mt">
                <!--shop toolbar start-->
                <div class="shop_toolbar_wrapper">
                    <div class="shop_toolbar_btn">
                        <button data-role="grid_3" type="button" class="active btn-grid-3" data-toggle="tooltip" title="3"><i class="fa fa-th"></i></button>
                        <!-- <button data-role="grid_4" type="button"  class=" btn-grid-4" data-toggle="tooltip" title="4"></button> -->
                        <button data-role="grid_list" type="button" class="btn-list" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button>
                    </div>
                   
                </div>
                <!--shop toolbar end-->
                <!-- Shop Wrapper Start -->
                <div class="row shop_wrapper grid_3">
                    <?php foreach($detail as $row) {?>
                    <div class="col-md-6 col-sm-6 col-lg-4 col-custom product-area">
                        <div class="single-product position-relative">
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
                            <div class="product-content-listview">
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
                                <div class="price-box">
                                    
                                    <span class="regular-price ">Restoran : <?= $row->nama_restoran ?></span>
                                </div>
                                <div class="add-action-listview d-flex">
                                    <a href="<?= base_url('home/cart/tambah_cart/'.$row->id_foods) ?>" title="Add To cart">
                                        <i class="ion-bag"></i>
                                    </a>
                                    
                                    <a href="<?= base_url('dashboard/foods_detail/'.$row->id_foods) ?>" data-toggle="modal" title="Quick View">
                                        <i class="ion-eye"></i>
                                    </a>
                                </div>
                                <p class="desc-content">
                                    <?= $row->deskripsi ?>
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
            <div class="col-lg-3 col-12 col-custom">
                <!-- Sidebar Widget Start -->
                <aside class="sidebar_widget widget-mt">
                    <div class="widget_inner">
                        <div class="widget-list widget-mb-1">
                            <h3 class="widget-title">Search</h3>
                            <div class="search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Our Menu" aria-label="Search Our Menu">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-list widget-mb-1">
                            <h3 class="widget-title">Restoran</h3>
                            <!-- Widget Menu Start -->
                            <nav>
                                <ul class="mobile-menu p-0 m-0">
                                    <?php foreach($restoran as $res){ ?>
                                    <li class="menu-item-has-children"><a href="<?= base_url('dashboard/restoran_detail/'.$res->id_restoran) ?>"><?= $res->nama_restoran ?></a>
                                        
                                    </li>
                                <?php } ?>
                                    
                                </ul>
                            </nav>
                            <!-- Widget Menu End -->
                        </div>
                       
                        <div class="widget-list widget-mb-3">
                            <h3 class="widget-title">Kategori</h3>
                            <div class="sidebar-body">
                                <ul class="tags">
                                    <?php foreach($res_kategori as $rk){ ?>
                                    <li><a href="<?= base_url('home/restoran/kategori_restoran/'.$rk->id_kategori) ?>"><?= $rk->nama_kategori ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="widget-list widget-mb-4">
                            <h3 class="widget-title">Recent Menu</h3>
                            <div class="sidebar-body">
                                <?php $menu = $this->db->get('foods',3)->result(); ?>
                                <?php foreach($menu as $m){ ?>
                                <div class="sidebar-product align-items-center">
                                    <a href="<?= base_url('dashboard/foods_detail/'.$row->id_foods) ?>" class="image">
                                        <img src="<?= base_url('assets/uploads/menu/'.$m->gambar_foods) ?>" alt="product">
                                    </a>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="<?= base_url('dashboard/foods_detail/'.$row->id_foods) ?>"><?= $m->nama_foods ?></a></h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price ">Rp. <?= number_format($m->harga,0,',','.'); ?></span>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                                    <?php   } ?>
                               
                                
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- Sidebar Widget End -->
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