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
            <?= $this->session->flashdata('pesan'); ?>
            <div class="col-lg-12">
                <!-- Cart Table Area -->
                <div class="table table-responsive mb-3">

                    <form action="<?= base_url('home/cart/update_cart') ?>" method="post">
                        <h3 class="text-center mb-3">Recent Orders</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th class="pro-thumbnail">No</th>
                                    <th class="pro-title">Nama</th>
                                    <th class="pro-price">Menu</th>
                                    <th class="pro-quantity">Jumlah</th>
                                    <th class="pro-subtotal">Status</th>
                                    <th class="pro-subtotal">Harga</th>
                                    <th class="pro-remove">Aksi</th>
                                </tr>
                            </thead> 
                            <tbody>
                                <?php 
                                $no = 1;
                                $id = $this->session->userdata('id_users');
                                $orders = $this->db->query("SELECT * FROM transaksi t, users u WHERE t.id_users=u.id_users AND u.id_users='$id'")->result();
                                foreach($orders as $order){
                                    if ($order->status == "" or $order->status == "Rejected" or $order->status == "In Procces" or $order->status == "NULL") {
                                        
                                        ?>
                                        <tr class="text-center">
                                            <td><?= $no++ ?>.</td>
                                            <td><?= $order->nama ?></td>
                                            <td><?= $order->nama_foods ?></td>
                                            <td><?= $order->qty ?></td>
                                            <td>
                                                <?php if($order->status == "Rejected"){ ?>

                                                    <span class="text-danger"><i class="fa fa-times"></i> &nbsp; <strong>Cancelled!</strong></span>
                                                <?php }elseif($order->status == "" or $order->status == "NULL"){ ?>
                                                    <span class="text-secondary"><i class="fa fa-exclamation-circle"></i> &nbsp; <strong>Dispatch!</strong></span>
                                                <?php }elseif($order->status == "In Procces"){ ?>
                                                    <span class="text-warning"><i class="fa fa-refresh fa-spin"></i> &nbsp; <strong>On Your Way!</strong></span>
                                                <?php }else{ ?>
                                                <?php } ?>
                                            </td>
                                            <td>Rp. <?= number_format($order->total,0,',','.'); ?></td>

                                            <td>
                                                <a href="<?= base_url('home/order/order_detail/'.$order->id_transaksi) ?>" class="btn obrien-button-2 bg-info rounded-0 text-white">Detail</a>
                                                <?php if($order->status == "" or $order->status == "NULL"){ ?>
                                                <a href="<?= base_url('home/order/batal_order/'.$order->id_transaksi) ?>" class="btn obrien-button-2 bg-danger rounded-0 text-white" onclick="return confirm('Yakin ingin membatalkan pesanan?')">Batal</a>
                                                <?php }else{} ?>
                                            </td>
                                        </tr>
                                    <?php }else{} ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    

                    <div class="row">
                        <div class="col-lg-12 ml-auto mb-3">
                            <!-- Cart Calculation Area -->
                            <div class="table table-responsive mt-3">
                                <h3 class="text-center mb-3 mt-3">Success Orders</h3>
                                <form action="<?= base_url('home/cart/update_cart') ?>" method="post">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="text-center">
                                                <th class="pro-thumbnail">No</th>
                                                <th class="pro-title">Nama</th>
                                                <th class="pro-price">Menu</th>
                                                <th class="pro-quantity">Jumlah</th>
                                                <th class="pro-subtotal">Status</th>
                                                <th class="pro-subtotal">Harga</th>
                                                <th class="pro-remove">Invoice</th>
                                            </tr>
                                        </thead> 
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                            $id = $this->session->userdata('id_users');
                                            $orders = $this->db->query("SELECT * FROM transaksi t, users u WHERE t.id_users=u.id_users AND u.id_users='$id'")->result();
                                            foreach($orders as $order){
                                                if ($order->status == "Closed") {
                                                    
                                                    ?>
                                                    <tr class="text-center">
                                                        <td><?= $no++ ?>.</td>
                                                        <td><?= $order->nama ?></td>
                                                        <td><?= $order->nama_foods ?></td>
                                                        <td><?= $order->qty ?></td>
                                                        <td>
                                                            <?php if($order->status == "Closed"){ ?>
                                                                <span class="text-success"><i class="fa fa-check-square"></i> &nbsp; <strong>Delivered!</strong></span>
                                                            <?php }else{ ?>
                                                            <?php } ?>
                                                        </td>
                                                        <td>Rp. <?= number_format($order->total,0,',','.'); ?></td>

                                                        <td><a href="<?= base_url('home/order/print_order/'.$order->id_transaksi) ?>" class="btn obrien-button-2 bg-primary rounded-0 text-white">Print</a></td>
                                                    </tr>
                                                <?php }else{} ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Cart Update Option -->
                        <div class="cart-update-option d-block d-md-flex justify-content-between mt-3">
                            <div class="apply-coupon-wrapper">
                                <a href="<?= base_url('home/shop') ?>" class="btn obrien-button primary-btn">Lanjutkan Belanja</a>


                            </div>
                            <div class="">
                                <h6 class="text-center">Alamat : <span class="text-secondary"><?= $this->session->userdata('alamat_users') ?></span></h6>
                            </div>
                           
                        </div>
                    </div>
                </form>
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
