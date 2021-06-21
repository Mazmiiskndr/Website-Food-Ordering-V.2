


<div class="breadcrumbs-area position-relative" style="background-image: url('<?= base_url('assets/') ?>1-1.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 class="title-3">My Account</h3>
                    <ul>
                        <li><a href="<?= base_url('') ?>">Home</a></li>
                        <li>My Account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End Here -->
<!-- my account wrapper start -->
<div class="my-account-wrapper mt-no-text mb-no-text">
    <div class="container container-default-2 custom-area">
        <div class="row">
            <div class="col-lg-12 col-custom">
                <!-- My Account Page Start -->
                <div class="myaccount-page-wrapper">
                    <!-- My Account Tab Menu Start -->
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-custom">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                Dashboard</a>
                                <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i>
                                Orders</a>

                                <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i>
                                    Payment
                                Method</a>
                                <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i>
                                address</a>
                                <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account
                                Details</a>
                                <a href="<?= base_url('auth/login/logout') ?>" onclick="return confirm('Ingin Logout?')"><i class="fa fa-sign-out" ></i> Logout</a>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-md-8 col-custom">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Dashboard</h3>
                                        <div class="welcome">
                                            <p>Hello, <strong><?= $this->session->userdata('nama')?></strong> </p>
                                        </div>
                                        <p class="mb-0">From your account dashboard. you can easily check & view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Orders</h3>
                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Nama</th>
                                                        <th>Menu</th>
                                                        <th>Jumlah</th>
                                                        <th>Status</th>
                                                        <th>Harga</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $no = 1;
                                                    $id = $this->session->userdata('id_users');
                                                    $orders = $this->db->query("SELECT * FROM transaksi t, users u WHERE t.id_users=u.id_users AND u.id_users='$id'")->result();
                                                    foreach($orders as $order){
                                                        if ($order) {
                                                            
                                                            ?>
                                                            <tr>
                                                                <td><?= $no++ ?>.</td>
                                                                <td><?= $order->nama ?></td>
                                                                <td><?= $order->nama_foods ?></td>
                                                                <td><?= $order->qty ?></td>
                                                                <td>
                                                                    <?php if($order->status == "" or $order->status == "NULL" ){ ?>

                                                                        <span class="text-secondary"><i class="fa fa-exclamation-circle"></i> &nbsp; <strong>Dispatch</strong></span>
                                                                    <?php }elseif($order->status == "In Procces"){ ?>
                                                                        <span class="text-warning"><i class="fa fa-refresh fa-spin"></i> &nbsp; <strong>In Procces</strong></span>
                                                                    <?php }elseif($order->status == "Closed"){ ?>
                                                                        <span class="text-success"><i class="fa fa-check-square"></i> &nbsp; <strong>Delivered</strong></span>
                                                                    <?php }elseif($order->status == "Rejected"){ ?>
                                                                        <span class="text-danger"><i class="fa fa-times"></i> &nbsp; <strong>Cancelled</strong></span>
                                                                    <?php }else{ ?>
                                                                    <?php } ?>
                                                                </td>
                                                                <td>Rp. <?= number_format($order->total,0,',','.'); ?></td>

                                                                <td>
                                                                    <a href="<?= base_url('home/order/order_detail/'.$order->id_transaksi) ?>" class="btn obrien-button-2 bg-info rounded-0 text-white">Detail</a>
                                                                    <?php if($order->status == "Closed"){ ?>
                                                                        <a href="<?= base_url('home/order/print_order/'.$order->id_transaksi) ?>" class="btn obrien-button-2 bg-primary rounded-0 text-white">Print</a>
                                                                    <?php }elseif($order->status == "" or $order->status == "NULL"){ ?>
                                                                        <a href="<?= base_url('home/order/batal_order/'.$order->id_transaksi) ?>" class="btn obrien-button-2 bg-danger rounded-0 text-white" onclick="return confirm('Yakin ingin membatalkan pesanan?')">Batal</a>
                                                                    <?php }else{} ?>
                                                                </td>
                                                            </tr>
                                                        <?php }else{} ?>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Payment Method</h3>
                                        <p class="saved-message">Cash On Delivery!</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Billing Address</h3>
                                        <address>
                                            <p><strong><?= $this->session->userdata('nama')?></strong></p>
                                            <p><?= $this->session->userdata('alamat_users')?></p>
                                            <p>No. HP : <?= $this->session->userdata('no_hp')?></p>
                                        </address>
                                        <a href="#" class="btn obrien-button-2 primary-color rounded-0"><i class="fa fa-edit mr-2"></i>Edit Address</a>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="account-info" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Account Details</h3>
                                        <div class="account-details-form">
                                            <form action="#" method="post">
                                                <div class="single-input-item mb-3">
                                                    <label for="email" class="required mb-1">Email</label>
                                                    <input type="email" id="email" name="email" value="<?= $this->session->userdata('email') ?>" readonly style="background-color: #4343; color: grey;" />
                                                </div>
                                                <div class="single-input-item mb-3">
                                                    <label for="display-name" class="required mb-1">Nama</label>
                                                    <input type="text" id="display-name" placeholder="Display Name" name="nama"  value="<?= $this->session->userdata('nama')  ?>" />
                                                </div>
                                                <div class="single-input-item mb-3">
                                                    <label for="email" class="required mb-1">Alamat</label>
                                                    <input type="text" placeholder="Alamat" name="alamat_users" value="<?= $this->session->userdata('alamat_users') ?>" />
                                                </div>
                                                <div class="single-input-item mb-3">
                                                    <label for="email" class="required mb-1">No. HP</label>
                                                    <input type="text" placeholder="No. HP" name="no_hp" value="<?= $this->session->userdata('no_hp') ?>" />
                                                </div>

                                                <fieldset>
                                                    <legend>Password change</legend>
                                                    <div class="single-input-item mb-3">
                                                        <label for="current-pwd" class="required mb-1">Current Password</label>
                                                        <input type="password" id="current-pwd" placeholder="Current Password" />
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-custom">
                                                            <div class="single-input-item mb-3">
                                                                <label for="new-pwd" class="required mb-1">New Password</label>
                                                                <input type="password" id="new-pwd" placeholder="New Password" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-custom">
                                                            <div class="single-input-item mb-3">
                                                                <label for="confirm-pwd" class="required mb-1">Confirm Password</label>
                                                                <input type="password" id="confirm-pwd" placeholder="Confirm Password" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="single-input-item single-item-button">
                                                    <button class="btn obrien-button primary-btn">Save Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- Single Tab Content End -->
                            </div>
                        </div> <!-- My Account Tab Content End -->
                    </div>
                </div> <!-- My Account Page End -->
            </div>
        </div>
    </div>
</div>
<!-- my account wrapper end -->
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