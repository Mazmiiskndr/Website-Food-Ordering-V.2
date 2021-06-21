<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="ai-icon" href="<?= base_url('admin') ?>" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>

            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-cutlery"></i>
                    <span class="nav-text">Menu</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?= base_url('admin/menu') ?>">Menu Grid</a></li>
                    <li><a href="<?= base_url('admin/menu/menu_list') ?>">Menu List</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-building"></i>
                    <span class="nav-text">Restoran</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?= base_url('admin/restoran/restoran_grid') ?>">Restoran Grid</a></li>
                    <li><a href="<?= base_url('admin/restoran') ?>">Restoran List</a></li>
                </ul>
            </li>
            <li><a class="ai-icon" href="<?= base_url('admin/kategori') ?>" aria-expanded="false">
                    <i class="flaticon-381-controls-3"></i>
                    <span class="nav-text">Kategori Restoran</span>
                </a>

            </li>
            <li><a class="ai-icon" href="<?= base_url('admin/transaksi') ?>" aria-expanded="false">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="nav-text">Pesanan</span>
                </a>

            </li>
            <li><a class="ai-icon" href="<?= base_url('admin/users') ?>" aria-expanded="false">
                    <i class="fa fa-users"></i>
                    <span class="nav-text">Users</span>
                </a>

            </li>
            <li><a class="ai-icon" href="<?= base_url('admin/contact') ?>" aria-expanded="false">
                    <i class="fa fa-comments"></i>
                    <span class="nav-text">Contact</span>
                </a>

            </li>

            <li><a class="ai-icon" href="<?= base_url('admin/laporan') ?>" aria-expanded="false">
                    <i class="flaticon-381-notepad"></i>
                    <span class="nav-text">Laporan</span>
                </a>

            </li>
            <li><a class="ai-icon" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fa fa-sign-out text-danger"></i>
                    <span class="nav-text text-danger">Logout</span>
                </a>

            </li>
        
        </ul>
    </div>
</div>
 

<!-- Modal -->
<div class="modal fade" id="logoutModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger">Ingin Logout?</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
        
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger light" data-dismiss="modal">Close</button>
                <a href="<?= base_url('auth/login/logout') ?>" class="btn btn-sm btn-youtube">Logout</a>
            </div>
        </div>
    </div>
</div>