
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Users</a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <?= $this->session->flashdata('pesan'); ?>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><strong>Data Users</strong></h4>
                        <a href="" class="pull-right btn btn-facebook" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-plus"></i> Tambah Data Users</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Gambar</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No. HP</th>
                                        <th>Date</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach($users as $row){
                                        ?>
                                        <?php if($row->role_id == 2){ ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><img src="<?= base_url('assets/uploads/users/'.$row->gambar) ?>" alt="" width="60"></td>
                                                <td><?= $row->nama ?></td>
                                                <td><a href="javascript:void(0);"><strong><?= $row->email ?></strong></a></td>
                                                <td><a href="javascript:void(0);"><strong><?= $row->no_hp ?></strong></a></td>
                                                <td><?= date('d F, y',strtotime($row->date)) ?></td>
                                                <td>
                                                    <a href="<?= base_url('admin/users/detail_users/'.$row->id_users) ?>" class="btn btn-twitter shadow btn-sm sharp mr-1"><i class="fa fa-eye"></i></a>
                                                    <a href="<?= base_url('admin/users/edit_users/'.$row->id_users) ?>" class="btn btn-facebook shadow btn-sm sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="<?= base_url('admin/users/delete_users/'.$row->id_users) ?>" class="btn btn-youtube shadow btn-sm sharp" onclick=" return confirm('Yakin ingin menghapus?')"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    <?php } ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Gambar</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No. HP</th>
                                        <th>Date</th>
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
                <h5 class="modal-title">Tambah Data Users</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/users/tambah_users') ?>"  method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="form-control-label">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" required>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Masukan Email" required>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukan Password" required>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">No. HP</label>
                        <input type="text" class="form-control" name="no_hp" placeholder="Masukan No. HP" required>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Alamat</label>
                        <textarea name="alamat" rows="2" class="form-control" placeholder="Alamat Users"></textarea>
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
