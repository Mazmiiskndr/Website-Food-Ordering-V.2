
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Kategori Restoran</a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <?= $this->session->flashdata('pesan'); ?>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><strong>Data Kategori Restoran</strong></h4>
                        <a href="" class="pull-right btn btn-facebook" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-plus"></i> Tambah Data Kategori Restoran</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach($res_kategori as $row){
                                        ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $row->nama_kategori ?></td>
                                                <td>
                                                   
                                                    <a href="<?= base_url('admin/kategori/edit_kategori/'.$row->id_kategori) ?>" class="btn btn-facebook shadow btn-sm sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="<?= base_url('admin/kategori/delete_kategori/'.$row->id_kategori) ?>" class="btn btn-youtube shadow btn-sm sharp" onclick="return confirm('Yakin ingin menghapus?')"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                      
                                    <?php } ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Kategori</th>
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


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Kategori Restoran</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/kategori/tambah_kategori') ?>"  method="post">
                    <div class="form-group">
                        <label class="form-control-label">Nama Kategori</label>
                        <input type="text" class="form-control" name="nama_kategori" placeholder="Masukan Nama Kategori" required>
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary light">Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>