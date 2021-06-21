
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Restoran</a></li>
            </ol>
        </div>
        <!-- row -->

 
        <div class="row">
            <div class="col-12">
                <?= $this->session->flashdata('pesan'); ?>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><strong>Data Restoran</strong></h4>
                        <a href="" class="pull-right btn btn-facebook" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-plus"></i> Tambah Data Restoran</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Kategori</th>
                                        <th>Email</th>
                                        <th>Url</th>
                                        <th>No. HP</th>
                                        <th>Buka</th>
                                        <th>Tutup</th>
                                        <th>Hari</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach($restoran as $row){
                                        ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            
                                            <td><?= $row->nama_restoran ?></td>
                                            <td><?= $row->nama_kategori ?></td>
                                            <td><a href="javascript:void(0);"><strong><?= $row->email ?></strong></a></td>
                                            <td><?= $row->url ?></td>
                                            <td><a href="javascript:void(0);"><strong><?= $row->no_hp ?></strong></a></td>
                                            <td><?= $row->buka_restoran ?></td>
                                            <td><?= $row->tutup_restoran ?></td>
                                            <td><?= $row->o_days ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/restoran/menu_restoran/'.$row->id_restoran) ?>" class="btn btn-twitter shadow btn-sm sharp mr-1"><i class="fa fa-cutlery"></i></a>
                                                <a href="<?= base_url('admin/restoran/edit_restoran/'.$row->id_restoran) ?>" class="btn btn-facebook shadow btn-sm sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="<?= base_url('admin/restoran/delete_restoran/'.$row->id_restoran) ?>" class="btn btn-youtube shadow btn-sm sharp" onclick="return confirm('Yakin ingin menghapus?')"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Kategori</th>
                                        <th>Email</th>
                                        <th>No. HP</th>
                                        <th>Buka</th>
                                        <th>Tutup</th>
                                        <th>Hari</th>
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
                <h5 class="modal-title">Tambah Data Restoran</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/restoran/tambah_restoran') ?>"  method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col">
                            <label class="form-control-label">Nama Restoran</label>
                            <input type="text" class="form-control" name="nama_restoran" placeholder="Masukan Nama Restoran" required>
                        </div>
                        <div class="col">
                            <label class="form-control-label">Email Restoran</label>
                            <input type="email" class="form-control" name="email" placeholder="Masukan Email" required>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <label class="form-control-label">No. HP</label>
                        <input type="text" class="form-control" name="no_hp" placeholder="Masukan No. HP" required>
                        </div>
                        <div class="col">
                            <label class="form-control-label">Wesbite Url</label>
                        <input type="text" class="form-control" name="url" placeholder="Website URL Jika Ada">
                        </div>
                    </div>

                    
                    <div class="form-group mt-3">
                        <label class="form-control-label">Kategori Restoran</label>
                        <select name="id_kategori" id="" class="form-control">
                            <option>--Pilih Kategori Restoran--</option>
                            <?php foreach($res_kategori as $rk){ ?>
                                <option value="<?= $rk->id_kategori ?>"><?= $rk->nama_kategori ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label class="form-control-label">Waktu Buka</label>
                            <input type="time" class="form-control" name="buka_restoran" required>

                        </div>
                        <div class="col">
                            <label class="form-control-label">Waktu Tutup</label>
                            <input type="time" class="form-control" name="tutup_restoran" required>

                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label class="form-control-label">Hari Buka</label>
                        <select name="o_days" id="" class="form-control">
                            <option>--Pilih Hari Buka--</option>
                            <option value="Senin-Selasa">Senin-Selasa</option>
                            <option value="Senin-Rabu">Senin-Rabu</option>
                            <option value="Senin-Kamis">Senin-Kamis</option>
                            <option value="Senin-Jumat">Senin-Jumat</option>
                            <option value="Senin-Sabtu">Senin-Sabtu</option>
                            <option value="24Jam - x7">24Jam - x7</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Alamat</label>
                        <textarea name="alamat" rows="2" class="form-control" placeholder="Alamat restoran"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Gambar</label>
                        <input type="file" class="form-control-file" name="gambar" value="<?= set_value('gambar') ?>" required>
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
