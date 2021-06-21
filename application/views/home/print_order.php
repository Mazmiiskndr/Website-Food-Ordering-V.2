<div class="container mt-4 mb-4">
 <div class="row">
    <div class="col-lg-12">
        <?php foreach($detail as $row){ ?>
            <div class="card shadow">
                <div class="card-header"> Invoice <strong><?= date('d F, Y', strtotime($row->success_date)) ?></strong> <span class="float-right">
                    <strong>Status :<?php if($row->status == "" or $row->status == "NULL"){ ?>
                        <span class="text-info">Dispatch!</span>
                    <?php }elseif($row->status == "Rejected"){ ?>
                        <span class="text-danger">Cancelled!</span>
                    <?php }elseif($row->status == "In Procces"){ ?>
                        <span class="text-warning">On Your Way!</span>
                    <?php }elseif($row->status == "Closed"){ ?>
                        <span class="text-success">Delivered!</span>
                    <?php }else{ ?>
                        <?php } ?> </div>
                        <div class="card-body">
                            <div class="row mb-5">
                                <div class="mt-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                    <h6>Dari :</h6>
                                    <div> <strong><?= $row->nama_restoran ?></strong> </div>
                                    <div><?= $row->alamat ?></div>
                                </div>
                                <div class="mt-4 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                    <h6>Pengiriman:</h6>
                                    <div> <strong><?= $row->nama ?></strong> </div>
                                    <div><?= $row->alamat_users ?></div>
                                </div>
                                <div class="mt-4 col-xl-3 col-lg-3 col-md-12 col-sm-12 d-flex justify-content-lg-end justify-content-md-center justify-content-xs-start">
                                    <div class="row align-items-center">
                                        <div class="col-sm-12"> 
                                            <div class="brand-logo mb-3">
                                                <img class="logo-abbr mr-2" src="<?= base_url('assets/') ?>favicon.png" alt="" width="100">
                                                <img class="logo-compact" src="<?= base_url('assets/admin/') ?>/images/logo-text2.png" alt="">
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Menu</th>
                                            <th>Restoran</th>
                                            <th>Jumlah</th>
                                            <th class="right">Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="center"><?= $row->nama ?></td>
                                            <td class="left strong"><?= $row->nama_foods ?></td>
                                            <td class="left strong"><?= $row->nama_restoran ?></td>
                                            <td class="left"><?= $row->qty ?></td>
                                            <td class="right">Rp. <?= number_format($row->harga,0,',','.'); ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-sm-5"> </div>
                                <div class="col-lg-4 col-sm-5 ml-auto">
                                    <table class="table table-clear">
                                        <tbody>

                                            <tr>
                                                <td class="left"><strong>Total</strong></td>
                                                <td class="right"><strong>Rp. <?= number_format($row->total,0,',','.'); ?></strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>


</div>

<script>
    window.print();
</script>


<script src="<?= base_url('assets/admin/') ?>/vendor/global/global.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

<!-- Datatable -->
<script src="<?= base_url('assets/admin/') ?>/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>/js/plugins-init/datatables.init.js"></script>
<script src="<?= base_url('assets/admin/') ?>/js/custom.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>/js/deznav-init.js"></script>
<script src="<?= base_url('assets/admin/') ?>/vendor/owl-carousel/owl.carousel.js"></script>


<!-- Chart piety plugin files -->
<script src="<?= base_url('assets/admin/') ?>/vendor/peity/jquery.peity.min.js"></script>

<!-- Apex Chart -->
<script src="<?= base_url('assets/admin/') ?>/vendor/apexchart/apexchart.js"></script>

<!-- Dashboard 1 -->
<script src="<?= base_url('assets/admin/') ?>/js/dashboard/dashboard-1.js"></script>

</body>
</html>