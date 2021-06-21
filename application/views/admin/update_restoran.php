<link href="<?= base_url('assets/admin/') ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin/restoran/restoran_grid') ?>">Data Restoran</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Update Restoran</a></li>
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
                                            <img class="img-thumbnail" src="<?= base_url('assets/uploads/restoran/'.$row->gambar) ?>" alt="">
                                        </div>

                                    </div>
                                </div>
                                <!--Tab slider End-->
                                <div class="col-xl-7 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                    <div class="product-detail-content">
                                       <div class="basic-form">

                                        <form action="<?= base_url('admin/restoran/update_restoran_aksi') ?>" method="post" enctype="multipart/form-data">

                                            <div class="row">
                                                <div class="col">
                                                    <label>Nama</label>
                                                    <input type="hidden" name="id_restoran" class="form-control text-black" value="<?= $row->id_restoran ?>">
                                                    <input type="text" name="nama_restoran" class="form-control text-black" value="<?= $row->nama_restoran ?>">
                                                    <?= form_error('nama_restoran', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                                </div>
                                                <div class="col">
                                                    <label>Kategori</label>
                                                    <select name="id_kategori" class="form-control">
                                                        <option value="<?= $row->id_kategori ?>"><?= $row->nama_kategori ?></option>
                                                        <?php foreach($res_kategori as $res){ ?>
                                                            <option value="<?= $res->id_kategori ?>"><?= $res->nama_kategori ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <label>Email</label>
                                                    <input type="text" name="email" class="form-control text-black" value="<?= $row->email ?>">
                                                    <?= form_error('email', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                                </div>
                                                <div class="col">
                                                    <label>No. HP</label>
                                                    <input type="text" name="no_hp" class="form-control text-black" value="<?= $row->no_hp ?>">
                                                    <?= form_error('no_hp', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="form-control-label">Waktu Buka</label>
                                                    <input type="time" class="form-control" name="buka_restoran" value="<?= $row->buka_restoran ?>" required>

                                                </div>
                                                <div class="col">
                                                    <label class="form-control-label">Waktu Tutup</label>
                                                    <input type="time" class="form-control" name="tutup_restoran" value="<?= $row->tutup_restoran ?>" required>

                                                </div>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label class="form-control-label">Hari Buka</label>
                                                <select name="o_days" id="" class="form-control">
                                                    <option value="<?= $row->o_days ?>"><?= $row->o_days ?></option>
                                                    <option value="Senin-Selasa">Senin-Selasa</option>
                                                    <option value="Senin-Rabu">Senin-Rabu</option>
                                                    <option value="Senin-Kamis">Senin-Kamis</option>
                                                    <option value="Senin-Jumat">Senin-Jumat</option>
                                                    <option value="Senin-Sabtu">Senin-Sabtu</option>
                                                    <option value="24Jam - x7">24Jam - x7</option>
                                                </select>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label>Alamat</label>
                                                <textarea class="form-control" name="alamat" rows="2"><?= $row->alamat  ?></textarea>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label>Gambar</label>
                                                <input type="file" id="file-input" name="gambar" class="form-control-file mt-2" value="<?= set_value('gambar') ?>">

                                            </div>
                                            
                                            <div class="form-group mt-4">
                                                <a href="javascript:history.go(-1)" class="btn btn-danger light">Back</a>
                                                <button type="submit" class="btn btn-primary light ml-3">Update</button>
                                            </div>
                                        </form>

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


