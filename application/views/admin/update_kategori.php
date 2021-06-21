<link href="<?= base_url('assets/admin/') ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin/kategori') ?>">Data Kategori Restoran</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Update Kategori Restoran</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <?php foreach($detail as $row){ ?>
               <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Update Kategori Restoran</h5>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('admin/kategori/update_kategori_aksi') ?>" method="post">
                         <div class="form-group mt-3">
                            <label>Nama Kategori</label>
                            <input type="hidden" name="id_kategori" value="<?= $row->id_kategori ?>">
                            <input type="text" name="nama_kategori" class="form-control text-black" value="<?= $row->nama_kategori ?>">
                            <?= form_error('nama_kategori', '<small class="text-danger" style="color: red;">','</small>'); ?>

                        </div>
                    </div>
                    <div class="card-footer d-sm-flex justify-content-between align-items-center">
                        <div class="card-footer-link mb-4 mb-sm-0">
                            <a href="javascript:history.go(-1)" class="btn btn-danger light">Back</a>
                            <button type="submit" class="btn btn-primary light ml-3">Update</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    <?php } ?>
</div>
</div>
</div>
</div>
</div>
<
<script src="<?= base_url('assets/admin/') ?>/vendor/highlightjs/highlight.pack.min.js"></script>
<!-- Circle progress -->


