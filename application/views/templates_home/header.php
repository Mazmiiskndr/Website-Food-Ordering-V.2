<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title; ?></title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon --> 
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/') ?>favicon.png">

    <!-- CSS
       ============================================ -->
       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="<?= base_url('assets/food/') ?>assets/css/vendor/bootstrap.min.css">
       <!-- FontAwesome -->
       <link rel="stylesheet" href="<?= base_url('assets/food/') ?>assets/css/vendor/font.awesome.min.css">
       <!-- Ionicons -->
       <link rel="stylesheet" href="<?= base_url('assets/food/') ?>assets/css/vendor/ionicons.min.css">
       <!-- Slick CSS -->
       <link rel="stylesheet" href="<?= base_url('assets/food/') ?>assets/css/plugins/slick.min.css">
       <!-- Animation -->
       <link rel="stylesheet" href="<?= base_url('assets/food/') ?>assets/css/plugins/animate.min.css">
       <!-- jQuery Ui -->
       <link rel="stylesheet" href="<?= base_url('assets/food/') ?>assets/css/plugins/jquery-ui.min.css">
       <!-- Nice Select -->
       <link rel="stylesheet" href="<?= base_url('assets/food/') ?>assets/css/plugins/nice-select.min.css">
       <!-- Magnific Popup -->
       <link rel="stylesheet" href="<?= base_url('assets/food/') ?>assets/css/plugins/magnific-popup.css">

       <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from the above) -->

    <!-- <link rel="stylesheet" href="<?= base_url('assets/food/') ?>assets/css/vendor/vendor.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/food/') ?>assets/css/plugins/plugins.min.css"> -->

        <!-- Main Style CSS (Please use minify version for better website load performance) -->
        <link rel="stylesheet" href="<?= base_url('assets/food/') ?>assets/css/style.css">
        <!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->
    </head>

    <body>

        <div class="home-wrapper home-3">
            <!-- Header Area Start Here -->
            <header class="main-header-area">
                <!-- Main Header Area Start -->
                <div class="main-header">
                    <div class="container container-default custom-area">
                        <div class="row">
                            <div class="col-lg-12 col-custom">
                                <div class="row align-items-center">
                                    <div class="col-lg-2 col-xl-2 col-sm-6 col-6 col-custom">
                                        <div class="header-logo d-flex align-items-center">
                                            <a href="<?= base_url('') ?>">
                                                <img class="img-full" src="<?= base_url('assets/food/') ?>assets/images/logo/logo2.png" alt="Header Logo">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-xl-7 position-static d-none d-lg-block col-custom">
                                        <nav class="main-nav d-flex justify-content-center">
                                            <ul class="nav">
                                                <li>
                                                    <a class="<?= $this->uri->uri_string() === '' ? 'active' : '' ?>" href="<?= base_url('') ?>">
                                                        <span class="menu-text"> Home</span>
                                                
                                                    </a>
                                                    
                                                </li>
                                                <li>
                                                    <a class="<?= $this->uri->uri_string() === 'home/shop' ? 'active' : '' ?>" href="<?= base_url('home/shop') ?>">
                                                        <span class="menu-text">Menu</span>
                                                        
                                                    </a>
                                                    
                                                </li>
                                                <li>
                                                    <a class="<?= $this->uri->uri_string() === 'home/restoran' ? 'active' : '' ?>" href="<?= base_url('home/restoran') ?>">
                                                        <span class="menu-text">Restoran</span>
                                                        
                                                    </a>
                                                    
                                                </li>
                                                <?php if($this->session->userdata('email')){  ?>
                                                <li>
                                                    <a class="<?= $this->uri->uri_string() === 'home/order' ? 'active' : '' ?>" href="<?= base_url('home/order') ?>">
                                                        <span class="menu-text"> Order</span>
                                                    </a>
                                               
                                                </li>
                                                <?php }else{ ?>
                                                <?php } ?>
                                                <li>
                                                    <a class="<?= $this->uri->uri_string() === 'home/about' ? 'active' : '' ?>" href="<?= base_url('home/about') ?>">
                                                        <span class="menu-text"> About</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="<?= $this->uri->uri_string() === 'home/contact' ? 'active' : '' ?>" href="<?= base_url('home/contact') ?>">
                                                        <span class="menu-text">Contact</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-lg-2 col-xl-3 col-sm-6 col-6 col-custom">
                                        <div class="header-right-area main-nav">
                                            <ul class="nav">
                                                <li class="login-register-wrap d-none d-xl-flex">
                                                    <?php if(!$this->session->userdata('email')){  ?>
                                                    <span><a href="<?= base_url('auth/login') ?>">Login</a></span>
                                                    <span><a href="<?= base_url('auth/register') ?>">Register</a></span>
                                                    <?php }else{ ?>
                                                       <a href="#"><i class="fa fa-user-circle"></i> My Account</a>
                                                       <ul class="dropdown-submenu dropdown-hover">
                                                            <li><a href="<?= base_url('home/account') ?>">Profile</a></li>
                                                            <li><a href="<?= base_url('home/order') ?>">Order</a></li>
                                                            <li><a href="<?= base_url('auth/login/logout') ?>" onclick="return confirm('Ingin Logout?')">Logout</a></li>
                                                    
                                                        </ul>
                                                    <?php } ?>
                                                </li>
                                                <?php if($this->session->userdata('email')){ ?>
                                                <li class="minicart-wrap">
                                                    <a href="#" class="minicart-btn toolbar-btn">
                                                        <i class="ion-bag"></i>
                                                        <span class="cart-item_count qty"><?= $this->cart->total_items() ?></span>
                                                    </a>
                                                    <div class="cart-item-wrapper dropdown-sidemenu dropdown-hover-2">
                                                        <?php if(empty($this->cart->contents())){ ?>
                                                        <div class="cart-price-total justify-content text-center">
                                                            <h6 class="text-danger text-center">Belum ada menu</h6>
                                                        </div>
                                                    <?php }else{ 
                                                        foreach($this->cart->contents() as $item){
                                                    ?>
                                                    <div class="single-cart-item">
                                                            <div class="cart-img">
                                                                <a href="<?= base_url('home/cart') ?>"><img src="<?= base_url('assets/uploads/menu/'.$item['image']) ?>" alt=""></a>
                                                            </div>
                                                            <div class="cart-text">
                                                                <h5 class="title"><a href="<?= base_url('home/cart') ?>"><?= $item['name']?></a></h5>
                                                                <div class="cart-text-btn">
                                                                    <div class="cart-qty">
                                                                        <span><?= $item['qty']?>x</span>
                                                                        <span class="cart-price">Rp. <?= number_format($item['subtotal'],0,',','.') ?></span>
                                                                    </div>
                                                                    <a href="<?= base_url('home/cart/delete/'.$item['rowid']) ?>"><i class="ion-trash-b"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                        <div class="cart-price-total d-flex justify-content-between">
                                                            <h5>Total :</h5>
                                                            <h5>Rp. <?= number_format($this->cart->total(),0,',','.') ?></h5>
                                                        </div>
                                                    <?php } ?>
                                                        
                                                        <div class="cart-links d-flex justify-content-center">
                                                            <a class="obrien-button white-btn" href="<?= base_url('home/cart') ?>">View cart</a>
                                                            <a class="obrien-button white-btn" href="<?= base_url('home/checkout') ?>">Checkout</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php }else{} ?>
                                                <li class="mobile-menu-btn d-lg-none">
                                                    <a class="off-canvas-btn" href="#">
                                                        <i class="fa fa-bars"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main Header Area End -->


                <!-- Sticky Header Start Here-->
                <div class="main-header header-sticky">
                    <div class="container container-default custom-area">
                        <div class="row">
                            <div class="col-lg-12 col-custom">
                                <div class="row align-items-center">
                                    <div class="col-lg-2 col-xl-2 col-sm-6 col-6 col-custom">
                                        <div class="header-logo">
                                            <a href="<?= base_url('') ?>">
                                                <img class="img-full" src="<?= base_url('assets/food/') ?>assets/images/logo/logo2.png" alt="Header Logo">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-xl-7 position-static d-none d-lg-block col-custom">
                                        <nav class="main-nav d-flex justify-content-center">
                                            <ul class="nav">
                                                <li>
                                                    <a class="<?= $this->uri->uri_string() === '' ? 'active' : '' ?>" href="<?= base_url('') ?>">
                                                        <span class="menu-text"> Home</span>
                                                
                                                    </a>
                                                    
                                                </li>
                                                <li>
                                                    <a class="<?= $this->uri->uri_string() === 'home/shop' ? 'active' : '' ?>" href="<?= base_url('home/shop') ?>">
                                                        <span class="menu-text">Menu</span>
                                                        
                                                    </a>
                                                    
                                                </li>
                                                <li>
                                                    <a class="<?= $this->uri->uri_string() === 'home/restoran' ? 'active' : '' ?>" href="<?= base_url('home/restoran') ?>">
                                                        <span class="menu-text">Restoran</span>
                                                        
                                                    </a>
                                                    
                                                </li>
                                                
                                                <?php if($this->session->userdata('email')){  ?>
                                                <li>
                                                    <a href="<?= base_url('home/order') ?>">
                                                        <span class="menu-text"> Order</span>
                                        
                                                    </a>
                                               
                                                </li>
                                                <?php }else{ ?>
                                                <?php } ?>
                                                <li>
                                                    <a href="<?= base_url('home/about') ?>">
                                                        <span class="menu-text"> About</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url('home/contact') ?>">
                                                        <span class="menu-text">Contact</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-lg-2 col-xl-3 col-sm-6 col-6 col-custom">
                                        <div class="header-right-area main-nav">
                                            <ul class="nav">
                                                <li class="login-register-wrap d-none d-xl-flex">
                                                   <?php if(!$this->session->userdata('email')){  ?>
                                                    <span><a href="<?= base_url('auth/login') ?>">Login</a></span>
                                                    <span><a href="<?= base_url('auth/register') ?>">Register</a></span>
                                                    <?php }else{ ?>
                                                       <a href="#"><i class="fa fa-user-circle"></i> My Account</a>
                                                       <ul class="dropdown-submenu dropdown-hover">
                                                            <li><a href="<?= base_url('home/account') ?>">Profile</a></li>
                                                            <li><a href="<?= base_url('home/order') ?>">Order</a></li>
                                                            <li><a href="<?= base_url('auth/login/logout') ?>" onclick="return confirm('Ingin Logout?')">Logout</a></li>
                                                    
                                                        </ul>
                                                    <?php } ?>
                                                </li>
                                                
                                               <?php if($this->session->userdata('email')){ ?>
                                                <li class="minicart-wrap">
                                                    <a href="#" class="minicart-btn toolbar-btn">
                                                        <i class="ion-bag"></i>
                                                        <span class="cart-item_count qty"><?= $this->cart->total_items() ?></span>
                                                    </a>
                                                    <div class="cart-item-wrapper dropdown-sidemenu dropdown-hover-2">
                                                        <?php if(empty($this->cart->contents())){ ?>
                                                        <div class="cart-price-total justify-content text-center">
                                                            <h6 class="text-danger text-center">Belum ada menu</h6>
                                                        </div>
                                                    <?php }else{ 
                                                        foreach($this->cart->contents() as $item){
                                                    ?>
                                                    <div class="single-cart-item">
                                                            <div class="cart-img">
                                                                <a href="<?= base_url('home/cart') ?>"><img src="<?= base_url('assets/uploads/menu/'.$item['image']) ?>" alt=""></a>
                                                            </div>
                                                            <div class="cart-text">
                                                                <h5 class="title"><a href="<?= base_url('home/cart') ?>"><?= $item['name']?></a></h5>
                                                                <div class="cart-text-btn">
                                                                    <div class="cart-qty">
                                                                        <span><?= $item['qty']?>x</span>
                                                                        <span class="cart-price">Rp. <?= number_format($item['subtotal'],0,',','.') ?></span>
                                                                    </div>
                                                                    <a href="<?= base_url('home/cart/delete/'.$item['rowid']) ?>"><i class="ion-trash-b"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                        <div class="cart-price-total d-flex justify-content-between">
                                                            <h5>Total :</h5>
                                                            <h5>Rp. <?= number_format($this->cart->total(),0,',','.') ?></h5>
                                                        </div>
                                                    <?php } ?>
                                                        
                                                        <div class="cart-links d-flex justify-content-center">
                                                            <a class="obrien-button white-btn" href="<?= base_url('home/cart') ?>">View cart</a>
                                                            <a class="obrien-button white-btn" href="<?= base_url('home/checkout') ?>">Checkout</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php }else{} ?>
                                                <li class="mobile-menu-btn d-lg-none">
                                                    <a class="off-canvas-btn" href="#mobileMenu">
                                                        <i class="fa fa-bars"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- off-canvas menu start -->
            <aside class="off-canvas-wrapper" id="mobileMenu">
                <div class="off-canvas-overlay"></div>
                <div class="off-canvas-inner-content">
                    <div class="btn-close-off-canvas">
                        <i class="fa fa-times"></i>
                    </div>
                    <div class="off-canvas-inner">

                        <div class="search-box-offcanvas">
                            <form>
                                <input type="text" placeholder="Search product...">
                                <button class="search-btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <!-- mobile menu start -->
                        <div class="mobile-navigation">

                            <!-- mobile menu navigation start -->
                            <nav>
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children"><a href="<?= base_url('') ?>">Home</a>
                            
                                    </li>
                                    <li class="menu-item-has-children"><a href="<?= base_url('home/shop') ?>">Menu</a>
                                       
                                    </li>
                                    <li class="menu-item-has-children"><a href="<?= base_url('home/restoran') ?>">Restoran</a>
                                       
                                    </li>
                                    <?php if($this->session->userdata('email')){ ?>
                                        <li class="menu-item-has-children"><a href="<?= base_url('home/order') ?>">Order</a>
                                       
                                    </li>
                                    <?php }else{} ?>
    
                                    
                                    <li><a href="<?= base_url('home/about') ?>">About Us</a></li>
                                    <li><a href="<?= base_url('home/contact') ?>">Contact</a></li>
                                </ul>
                            </nav>
                            <!-- mobile menu navigation end -->
                        </div>
                        <!-- mobile menu end -->
                        <div class="header-top-settings offcanvas-curreny-lang-support">
                            <!-- mobile menu navigation start -->
                            <nav>
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children"><a href="#">My Account</a>
                                        <ul class="dropdown">
                                            <?php if(!$this->session->userdata('email')){  ?>
                                                <li><a href="<?= base_url('auth/login') ?>">Login</a></li>
                                                <li><a href="<?= base_url('auth/register') ?>">Register</a></li>
                                            <?php }else{ ?>
                                                <li><a href="<?= base_url('home/account') ?>">Profile</a></li>
                                                <li><a href="<?= base_url('auth/login/logout') ?>">Logout</a></li>
                                            <?php } ?>
                                            
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </nav>
                            <!-- mobile menu navigation end -->
                        </div>
                        <!-- offcanvas widget area start -->
                        <div class="offcanvas-widget-area">
                            <div class="top-info-wrap text-left text-black">
                                <ul>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <a href="info@yourdomain.com">(1245) 2456 012</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        <a href="info@yourdomain.com">info@yourdomain.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="off-canvas-widget-social">
                                <a title="Facebook-f" href="#"><i class="fa fa-facebook-f"></i></a>
                                <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                                <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                            </div>
                        </div>
                        <!-- offcanvas widget area end -->
                    </div>
                </div>
            </aside>
            <!-- off-canvas menu end -->
        </header>
        <!-- Header Area End Here -->