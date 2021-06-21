<!-- Breadcrumb Area Start Here -->
        <div class="breadcrumbs-area position-relative" style="background-image: url('<?= base_url('assets/') ?>2-2.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="breadcrumb-content position-relative section-content">
                            <h3 class="title-3">Shopping Cart</h3>
                            <ul>
                                <li><a href="<?= base_url('') ?>">Home</a></li>
                                <li>Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- cart main wrapper start -->
        <div class="cart-main-wrapper mt-no-text mb-no-text">
            <div class="container container-default-2 custom-area">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Cart Table Area -->
                        <div class="cart-table table-responsive">
                            <form action="<?= base_url('home/cart/update_cart') ?>" method="post">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Gambar</th>
                                        <th class="pro-title">Menu</th>
                                        <th class="pro-price">Harga</th>
                                        <th class="pro-quantity">Jumlah</th>
                                        <th class="pro-subtotal">Total</th>
                                        <th class="pro-remove">Aksi</th>
                                    </tr>
                                </thead> 
                                <tbody>
                                    <?php $i =1; foreach($order as $row) { ?>
                                        <?php echo form_hidden($i.'[rowid]', $row['rowid']); ?>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="<?= base_url('assets/uploads/menu/'.$row['image']) ?>" alt="Product" /></a></td>
                                        <td class="pro-title"><a href="<?= base_url('dashboard/foods_detail/'.$row['id']) ?>"><?= $row['name'] ?></a></td>
                                        <td class="pro-price"><span>Rp. <?= number_format($row['price'],0,',','.') ?></span></td>
                                        <td class="pro-quantity">
                                            <div class="quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" name="<?= $i++ ?>[qty] " value="<?= $row['qty'] ?>" type="text" >
                                                    <div class="dec qtybutton">-</div>
                                                    <div class="inc qtybutton">+</div>
                                                    <div class="dec qtybutton"><i class="fa fa-minus"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-plus"></i></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="pro-subtotal"><span>Rp. <?= number_format($row['subtotal'],0,',','.') ?></span></td>
                                        <td class="pro-remove"><a href="<?= base_url('home/cart/delete/'.$row['rowid']) ?>"><i class="ion-trash-b"></i></a></td>
                                    </tr>
                                   <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- Cart Update Option -->
                        <div class="cart-update-option d-block d-md-flex justify-content-between">
                            <div class="apply-coupon-wrapper">
                                <a href="<?= base_url('home/shop') ?>" class="btn obrien-button primary-btn">Lanjutkan Belanja</a>

                                
                            </div>
                            <div class="">
                                <h5 class="text-center">Cart Total : <span class="text-success">Rp. <?= number_format($this->cart->total(),0,',','.') ?></span></h5>
                            </div>
                            <div class="cart-update mt-sm-16">
                                <button type="submit" class="btn obrien-button primary-btn">Update Cart</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-lg-12 ml-auto">
                        <!-- Cart Calculation Area -->
                        <div class="cart-calculator-wrapper">
                            <div class="cart-calculate-items">
                                
                                
                            </div>
                            <a href="<?= base_url('home/checkout') ?>" class="btn obrien-button primary-btn d-block">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart main wrapper end -->
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
