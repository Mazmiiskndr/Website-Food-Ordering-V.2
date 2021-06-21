<link href="<?= base_url('assets/admin/') ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin/transaksi') ?>">Data Pesanan</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Update Pesanan</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <?php foreach($detail as $row){ ?>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-5 col-lg-6  col-md-6 col-xxl-5 ">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade show active" id="first">
                                            <img class="img-fluid" src="<?= base_url('assets/uploads/menu/'.$row->gambar_foods) ?>" alt="">
                                        </div>

                                    </div>
                                </div>
                                <!--Tab slider End-->
                                <div class="col-xl-7 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                    <div class="product-detail-content">
                                     <div class="basic-form">
                                        
                                        <?php foreach($detail as $row){ ?>
                                       <table class="table text-black table-responsive table-borderless">
                                           <tr>
                                               <th>Nama</th>
                                               <th>:</th>
                                               <td><?= $row->nama ?></td>
                                           </tr>
                                           <tr>
                                               <th>Menu</th>
                                               <th>:</th>
                                               <td><?= $row->nama_foods ?></td>
                                           </tr>
                                           <tr>
                                               <th>Restoran</th>
                                               <th>:</th>
                                               <td><?= $row->nama_restoran ?></td>
                                           </tr>
                                           <tr>
                                               <th>Alamat</th>
                                               <th>:</th>
                                               <td><?= $row->alamat_users ?></td>
                                           </tr>
                                           <tr>
                                               <th>Quantity</th>
                                               <th>:</th>
                                               <td><?= $row->qty ?></td>
                                           </tr>
                                           <tr>
                                               <th>Harga Menu</th>
                                               <th>:</th>
                                               <td>Rp. <?= number_format($row->harga,0,',','.'); ?></td>
                                           </tr>
                                           <tr>
                                               <th>Total</th>
                                               <th>:</th>
                                               <td>Rp. <?= number_format($row->total,0,',','.'); ?></td>
                                           </tr>
                                           <tr>
                                               <th>Order Date</th>
                                               <th>:</th>
                                               <td><?= date('d F, Y', strtotime($row->tanggal)) ?></td>
                                           </tr>
                                           <tr>
                                               <th>Success Date</th>
                                               <th>:</th>
                                               <td><?= date('d F, Y', strtotime($row->success_date)) ?></td>
                                           </tr>
                                           
                                           <tr>
                                               <th>Status</th>
                                               <th>:</th>
                                               <td>
                                                   <?php if($row->status == "" or $row->status == "NULL" ){ ?>
                                                        <span class="text-secondary"><i class="fa fa-exclamation-circle fa-lg"></i> &nbsp; Dispatch</span>
                                                    <?php }elseif($row->status == "In Procces"){ ?>
                                                        <span class="text-warning"><i class="fa fa-refresh fa-lg fa-spin"></i> &nbsp; In Procces</span>
                                                    <?php }elseif($row->status == "Closed"){ ?>
                                                        <span class="text-success"><i class="fa fa-check-square fa-lg"></i> &nbsp; Delivered</span>
                                                    <?php }elseif($row->status == "Rejected"){ ?>
                                                        <span class="text-danger"><i class="fa fa-times fa-lg"></i> &nbsp; Cancelled</span>
                                                    <?php }else{ ?>
                                                    <?php } ?>
                                               </td>
                                           </tr>
                                    

                                       </table>
                                       <a href="<?= base_url('admin/transaksi/edit_transaksi/'.$row->id_transaksi) ?>" class="btn btn-facebook btn-sm mr-1"> Update</a>
                                       <a href="<?= base_url('admin/transaksi/delete_transaksi/'.$row->id_transaksi) ?>" class="btn btn-youtube btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Delete</a>
                                        <?php } ?>

                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<
<script src="<?= base_url('assets/admin/') ?>/vendor/highlightjs/highlight.pack.min.js"></script>
<!-- Circle progress -->


