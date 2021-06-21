
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Laporan</a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <?= $this->session->flashdata('pesan'); ?>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><strong>Data Laporan</strong></h4>
                        <div class="">
                            <a href="" class="pull-right btn btn-sm btn-whatsapp ml-3"><i class="fa fa-file-excel-o"></i> Export to Excel </a>
                            <a href="" class="pull-right btn btn-sm btn-pinterest ml-3"><i class="fa fa-file-pdf-o"></i> Export to PDF </a>
                            <a href="" class="pull-right btn btn-sm btn-google"><i class="fa fa-print"></i> Print </a>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Users</th>
                                        <th>Nama Menu</th>
                                        <th>Qty</th>
                                        <th>Order Date</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach($laporan as $row){
                                        ?>
                                            <tr>
                                                <td><?= $no++ ?>.</td>
                                                <td><?= $row->nama ?></td>
                                                <td><?= $row->nama_foods ?></td>
                                                <td><?= $row->qty ?></td>
                                                <td><?= date('d F, Y', strtotime($row->tanggal)) ?></td>
                                                <td>
                                                    <?php if($row->status == "" or $row->status == "NULL" ){ ?>
                                                        <span class="badge badge-secondary light shadow-sm"><i class="fa fa-exclamation-circle fa-lg"></i> &nbsp; Dispatch</span>
                                                    <?php }elseif($row->status == "In Procces"){ ?>
                                                        <span class="badge badge-warning light shadow-sm"><i class="fa fa-refresh fa-lg fa-spin"></i> &nbsp; In Procces</span>
                                                    <?php }elseif($row->status == "Closed"){ ?>
                                                        <span class="badge badge-success light shadow-sm"><i class="fa fa-check-square fa-lg"></i> &nbsp; Delivered</span>
                                                    <?php }elseif($row->status == "Rejected"){ ?>
                                                        <span class="badge badge-danger light shadow-sm"><i class="fa fa-times fa-lg"></i> &nbsp; Cancelled</span>
                                                    <?php }else{ ?>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                   <a href="<?= base_url('admin/transaksi/detail_transaksi/'.$row->id_transaksi) ?>" class="btn btn-twitter shadow btn-sm sharp mr-1"><i class="fa fa-eye"></i></a>
                                                    <a href="<?= base_url('admin/transaksi/edit_transaksi/'.$row->id_transaksi) ?>" class="btn btn-facebook shadow btn-sm sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="<?= base_url('admin/transaksi/delete_transaksi/'.$row->id_transaksi) ?>" class="btn btn-youtube shadow btn-sm sharp" onclick="return confirm('Yakin ingin menghapus?')"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                      
                                    <?php } ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Users</th>
                                        <th>Nama Menu</th>
                                        <th>Qty</th>
                                        <th>Alamat</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>