<link href="<?= base_url('assets/admin/') ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin/menu') ?>">Data Menu</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Update Menu</a></li>
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
                                            <img class="img-thumbnail" src="<?= base_url('assets/uploads/menu/'.$row->gambar_foods) ?>" alt="">
                                        </div>

                                    </div>
                                </div>
                                <!--Tab slider End-->
                                <div class="col-xl-7 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                    <div class="product-detail-content">
                                       <div class="basic-form">

                                        <form action="<?= base_url('admin/menu/update_menu_aksi') ?>" method="post" enctype="multipart/form-data">

                                            <div class="row">
                                                <div class="col">
                                                    <label>Nama</label>
                                                    <input type="hidden" name="id_foods" class="form-control text-black" value="<?= $row->id_foods ?>">
                                                    <input type="text" name="nama_foods" class="form-control text-black" value="<?= $row->nama_foods ?>">
                                                    <?= form_error('nama_foods', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                                </div>
                                                <div class="col">
                                                    <label>Restoran</label>
                                                    <select name="id_restoran" class="form-control">
                                                        <option value="<?= $row->id_restoran ?>"><?= $row->nama_restoran ?></option>
                                                        <?php foreach($restoran as $res){ ?>
                                                            <option value="<?= $res->id_restoran ?>"><?= $res->nama_restoran ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group mt-3">
                                                <label>Harga</label>
                                                <input type="number" name="harga" class="form-control mt-2" value="<?= $row->harga ?>">

                                            </div>
                                            <div class="form-group mt-3">
                                                <label>Deskripsi</label>
                                                <textarea class="form-control" name="deskripsi" rows="3"><?= $row->deskripsi  ?></textarea>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label>Gambar</label>
                                                <input type="file" id="file-input" name="gambar_foods" class="form-control-file mt-2" value="<?= set_value('gambar_foods') ?>">

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


