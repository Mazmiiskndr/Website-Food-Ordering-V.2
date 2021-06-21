<link href="<?= base_url('assets/admin/') ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>vendor/star-rating/star-rating-svg.css">
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Menu Grid</a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-lg-12">
            <?= $this->session->flashdata('pesan'); ?>
            
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><strong>Data Menu Grid</strong></h4>
                        <a href="" class="pull-right btn btn-facebook" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-plus"></i> Tambah Data Menu</a>
                    </div>
                </div>
            </div>
            <?php foreach($foods as $row){ ?>
                <div class="col-lg-12 col-xl-6">
                    <div class="card">

                        <div class="card-body">
                            <div class="row m-b-30">
                                <div class="col-md-5 col-xxl-12">
                                    <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                        <div class="new-arrivals-img-contnent text-center">
                                            <img class="img-thumbnail" src="<?= base_url('assets/uploads/menu/'.$row->gambar_foods) ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-xxl-12">
                                    <div class="new-arrival-content position-relative">
                                        <h4><a href="#"><?= $row->nama_foods  ?></a></h4>
                                        <div class="comment-review star-rating">
                                            <!-- <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-empty"></i></li>
                                                <li><i class="fa fa-star-half-empty"></i></li>
                                            </ul> -->
                                            <!-- <span class="review-text">(34 reviews) / </span><a class="product-review" href=""  data-toggle="modal" data-target="#reviewModal">Write a review?</a> -->
                                            <p class="price">Rp. <?= number_format($row->harga,0,',','.'); ?></p>
                                        </div>
                                      
                                        <h6>Restoran : <span class="badge badge-sm badge-success light"><?= $row->nama_restoran ?></span></h6>
                                        <p class="text-content"><?= $row->deskripsi ?></p>
                                        <div class="mt-3">
                    
                                            <a href="<?= base_url('admin/menu/edit_menu/'.$row->id_foods) ?>" class="btn btn-facebook btn-sm shadow"><i class="fa fa-pencil"></i></a>
                                            <a href="<?= base_url('admin/menu/delete_menu/'.$row->id_foods) ?>" class="btn btn-youtube btn-sm shadow" onclick="return confirm('Yakin ingin menghapus?')"><i class="fa fa-trash"></i></a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
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


<script src="<?= base_url('assets/admin/') ?>/vendor/highlightjs/highlight.pack.min.js"></script>
<!-- Circle progress -->

<!-- Rating -->
<script src="<?= base_url('assets/admin/') ?>/vendor/star-rating/jquery.star-rating-svg.js"></script>