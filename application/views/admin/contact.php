
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Contact</a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <?= $this->session->flashdata('pesan'); ?>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><strong>Data Contact</strong></h4>
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
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach($contact as $row){
                                        ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $row->nama ?></td>
                                                <td><?= $row->email ?></td>
                                                <td><?= $row->subject ?></td>
                                                <td><?= $row->deskripsi ?></td>
                                                
                                                
                                                <td>
                                        
                                    
                                                    <a href="<?= base_url('admin/contact/delete_contact/'.$row->id_contact) ?>" class="btn btn-youtube shadow btn-sm sharp" onclick="return confirm('Yakin ingin menghapus?')"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                      
                                    <?php } ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Users</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Deskripsi</th>
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