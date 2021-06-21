 <!-- Breadcrumb Area Start Here -->
 <div class="breadcrumbs-area position-relative" style="background-image: url('<?= base_url('assets/') ?>1-1.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 class="title-3">Checkout</h3>
                    <ul>
                        <li><a href="<?= base_url('') ?>">Home</a></li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End Here -->
<!-- Checkout Area Start Here -->
<div class="checkout-area">
    <div class="container container-default-2 custom-container">
        <div class="row">
            <div class="col-12">
                
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <form action="<?= base_url('home/checkout/tambah_order') ?>" method="post">
                    <div class="checkbox-form">
                        <h3>Billing Details</h3>
                        <div class="row">
                            
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Email</label>
                                    <input value="<?= $this->session->userdata('email') ?>" type="text" readonly style="background-color: #4343; color: grey;" name="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Nama Lengkap</label>
                                    <input value="<?= $this->session->userdata('nama') ?>" type="text" name="nama"  readonly style="background-color: #4343; color: grey;" name="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>No. HP <span class="required">*</span></label>
                                    <input value="<?= $this->session->userdata('no_hp') ?>" type="text" name="no_hp"  readonly style="background-color: #4343; color: grey;" name="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Alamat Lengkap <span class="required">*</span></label>
                                    <input value="<?= $this->session->userdata('alamat_users') ?>" type="text" name="alamat_users">
                                </div>
                            </div>
                            
                           
                           
                           
                        </div>
                        
                    </div>
                
            </div>
            <div class="col-lg-6 col-12">
                <div class="your-order">
                    <h3>Your order</h3>
                    <div class="your-order-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="cart-product-name">Menu</th>
                                    <th class="cart-product-name">Qty</th>
                                    <th class="cart-product-total">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($orders as $order){ ?>

                                <tr class="cart_item">
                                    <td class="cart-product-name"> <?= $order['name'] ?><strong class="product-quantity">
                                    </strong></td>
                                    <td class=" text-center"><strong class="amount">× <?= $order['qty'] ?></strong></td>
                                    <td class="cart-product-total text-center"><span class="amount">Rp. <?= number_format($order['price'],0,',','.') ?></span></td>
                                </tr>
                                <?php } ?>
                                
                            </tbody>
                            <tfoot>
                                
                                <tr class="order-total">
                                    <th>Order Total</th>
                                    <td></td>
                                    <td class="text-center"><strong><span class="amount">Rp. <?= number_format($this->cart->total(),0,',','.') ?></span></strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="payment-method">
                        <div class="payment-accordion">
                            <div id="accordion">
                                
                                <div class="card">
                                    <div class="card-header" id="#payment-2">
                                        <h5 class="panel-title mb-2">
                                            <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Bayar di Tempat (COD)
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <div class="card-body mb-2 mt-2">
                                            <p>Alamat : <strong><?= $this->session->userdata('alamat_users') ?></strong></p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" name="placeorder" class="btn obrien-button primary-btn d-block mt-3">Place Order</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Checkout Area End Here -->
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