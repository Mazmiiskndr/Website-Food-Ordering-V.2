<link href="<?= base_url('assets/admin/') ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin/users') ?>">Data Users</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Update Users</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <?php foreach($detail as $row){ ?>
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-5 col-lg-6  col-md-6 col-xxl-5 ">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade show active" id="first">
                                            <img class="img-fluid" src="<?= base_url('assets/uploads/users/'.$row->gambar) ?>" alt="">
                                        </div>

                                    </div>
                                </div>
                                <!--Tab slider End-->
                                <div class="col-xl-7 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                    <div class="product-detail-content">
                                       <div class="basic-form">

                                        <form action="<?= base_url('admin/users/update_users_aksi') ?>" method="post" enctype="multipart/form-data">

                                            <div class="row">
                                                <div class="col">
                                                    <label>Nama</label>
                                                    <input type="hidden" name="id_users" class="form-control text-black" value="<?= $row->id_users ?>">
                                                    <input type="text" name="nama" class="form-control text-black" value="<?= $row->nama ?>">
                                                    <?= form_error('nama', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                                </div>
                                                <div class="col">
                                                    <label>Email</label>
                                                    <input type="text" name="email" class="form-control text-black" value="<?= $row->email ?>" readonly>
                                                    <?= form_error('email', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                                </div>
                                            </div>



                                            <div class="form-group mt-3">
                                                <label>Alamat</label>
                                                <input type="text" name="alamat_users" class="form-control text-black" value="<?= $row->alamat_users ?>">
                                                <?= form_error('alamat_users', '<small class="text-danger" style="color: red;">','</small>'); ?>

                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <label>No. HP</label>
                                                    <input type="text" name="no_hp" class="form-control text-black" value="<?= $row->no_hp ?>">
                                                    <?= form_error('no_hp', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                                </div>
                                                <div class="col">
                                                    <label>Gambar</label>
                                                    <input type="file" id="file-input" name="gambar" class="form-control-file mt-2" value="<?= set_value('gambar') ?>"> 
                                                </div>
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


