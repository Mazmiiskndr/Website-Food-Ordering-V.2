
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
                        <h4 class="card-title"><strong>Cari Data Laporan</strong></h4>
                        
                    </div>
                    <div class="card-body">

                        <form class="mt-3" action="<?= base_url('admin/laporan') ?>" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label class="form-control-label">Dari Tanggal</label>
                                <input type="date" class="form-control" name="dari" aria-describedby="name">
                                <?= form_error('dari', '<small class="text-danger" style="color: red;">','</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Sampai Tanggal</label>

                                <input type="date" class="form-control" name="sampai" aria-describedby="name">                        
                                <?= form_error('sampai', '<small class="text-danger" style="color: red;">','</small>'); ?>
                            </div>
                            <div class="form-actions">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-facebook">Tampilkan</button>
                                    <button type="reset" class="btn btn-danger light ml-3">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
