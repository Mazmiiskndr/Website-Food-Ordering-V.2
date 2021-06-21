
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Menu List</a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <?= $this->session->flashdata('pesan'); ?>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><strong>Data Menu List</strong></h4>
                        <a href="" class="pull-right btn btn-facebook" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-plus"></i> Tambah Data Menu</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Gambar</th>
                                        <th>Restoran</th>
                                        <th>Nama Menu</th>
                                        <th>Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach($foods as $row){
                                        ?>
                                      
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><img src="<?= base_url('assets/uploads/menu/'.$row->gambar_foods) ?>" alt="" width="60"></td>
                                                
                                                <td><a href="javascript:void(0);"><strong><?= $row->nama_restoran ?></strong></a></td>
                                                <td><?= $row->nama_foods ?></td>
                                                <td>Rp. <?= number_format($row->harga,0,',','.'); ?></td>
                                                <td>
                                                    <a href="<?= base_url('admin/menu/edit_menu/'.$row->id_foods) ?>" class="btn btn-facebook shadow btn-sm sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="<?= base_url('admin/menu/delete_menu/'.$row->id_foods) ?>" class="btn btn-youtube shadow btn-sm sharp" onclick=" return confirm('Yakin ingin menghapus?')"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                    <?php } ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Gambar</th>
                                        <th>Restoran</th>
                                        <th>Nama Menu</th>
                                        <th>Harga</th>
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
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Menu</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/menu/tambah_menu') ?>"  method="post" enctype="multipart/form-data">

                    <div class="form-group mt-3">
                        <label class="form-control-label">Restoran</label>
                        <select name="id_restoran" id="" class="form-control">
                            <option>--Pilih Restoran--</option>
                            <?php foreach($restoran as $rk){ ?>
                                <option value="<?= $rk->id_restoran ?>"><?= $rk->nama_restoran ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Nama Menu</label>
                        <input type="text" class="form-control" name="nama_foods" placeholder="Masukan Nama Menu" required>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Harga</label>
                        <input type="number" class="form-control" name="harga" placeholder="Masukan Harga" required>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="2" class="form-control" placeholder="Deskripsi Menu"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Gambar</label>
                        <input type="file" class="form-control-file" name="gambar_foods" value="<?= set_value('gambar_foods') ?>" required>
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