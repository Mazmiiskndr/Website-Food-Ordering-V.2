<!-- Breadcrumb Area Start Here -->
<div class="breadcrumbs-area position-relative" style="background-image: url('<?= base_url('assets/') ?>2-2.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 class="title-3">Login-Register</h3>
                    <ul>
                        <li><a href="<?= base_url('') ?>">Home</a></li>
                        <li>Login-Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End Here -->
<!-- Login Area Start Here -->
<div class="login-register-area mt-no-text mb-no-text">
    <div class="container container-default-2 custom-area">
        <div class="row">

            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-custom">
                <?= $this->session->flashdata('pesan'); ?>
                <div class="login-register-wrapper">
                    <div class="section-content text-center mb-5">
                        <h2 class="title-4 mb-2">Halaman Register</h2>
                        <p class="desc-content">Isi kolom register dengan lengkap</p>
                    </div>
                    <form action="<?= base_url('auth/register') ?>" method="post">
                        <div class="single-input-item mb-3">
                            <input type="text" placeholder="Nama Lengkap" name="nama" value="<?= set_value('nama') ?>">
                            <?= form_error('nama', '<small class="text-danger ml-3" style="color: red;">','</small>'); ?>
                        </div>
                        <div class="single-input-item mb-3">
                            <input type="text" placeholder="Email" name="email" value="<?= set_value('email') ?>">
                            <?= form_error('email', '<small class="text-danger ml-3" style="color: red;">','</small>'); ?>
                        </div>
                        <div class="single-input-item mb-3">
                            <input type="password" placeholder="Password" name="password" value="<?= set_value('password') ?>">
                            <?= form_error('password', '<small class="text-danger ml-3" style="color: red;">','</small>'); ?>
                        </div>
                        <div class="single-input-item mb-3">
                            <input type="text" placeholder="No. Hp" name="no_hp" value="<?= set_value('no_hp') ?>">
                            <?= form_error('no_hp', '<small class="text-danger ml-3" style="color: red;">','</small>'); ?>
                        </div>
                        <div class="single-input-item mb-3">
                            <input type="text" placeholder="Alamat Lengkap" name="alamat_users" value="<?= set_value('alamat_users') ?>">
                            <?= form_error('alamat_users', '<small class="text-danger ml-3" style="color: red;">','</small>'); ?>
                        </div>
                       
                        <div class="single-input-item mb-3">
                            <button class="btn obrien-button-2 primary-color">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Area End Here -->
<!-- Support Area Start Here -->
<div class="support-area">
    <div class="container container-default custom-area">
        <div class="row">
            <div class="col-lg-12 col-custom">
                <div class="support-wrapper d-flex">
                    <div class="support-content">
                        <h1 class="title">Need Help ?</h1>
                        <p class="desc-content">Call our support 24/7 at 01234-567-890</p>
                    </div>
                    <div class="support-button d-flex align-items-center">
                        <a class="obrien-button primary-btn" href="contact-us.html">Contact now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- Support Area End Here -->