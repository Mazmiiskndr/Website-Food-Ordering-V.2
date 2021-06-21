<link href="<?= base_url('assets/admin/') ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin/users') ?>">Data Users</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Detail Users</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <?php foreach($detail as $row){ ?>
              <div class="col-xl-6 col-lg-6 col-sm-6">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="profile-photo">
                                        <img src="<?= base_url('assets/uploads/users/'.$row->gambar) ?>" width="250" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <h3 class="mt-4 mb-1"><?= $row->nama ?></h3>
                                    <p class="text-muted mt-3">
                                        <?= $row->email ?>
                                        <br>
                                        <?= $row->no_hp ?>
                                        <br>
                                        <?= $row->alamat_users ?>
                                    </p>
                                    <p class="text-muted"><?= date('d F, y',strtotime($row->date)) ?></p>
                                </div>
                            </div>
                            
                            <div class="card-footer pt-0 pb-0 text-center">
                                    <a href="javascript:history.go(-1)" class="btn btn-danger light">Back</a>
                                    <a class="btn btn-primary light mt-3 px-5 mb-3 ml-3" href="<?= base_url('admin/users/edit_users/'.$row->id_users) ?>">Update</a>

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
<script src="<?= base_url('assets/admin/') ?>/vendor/highlightjs/highlight.pack.min.js"></script>
<!-- Circle progress -->

