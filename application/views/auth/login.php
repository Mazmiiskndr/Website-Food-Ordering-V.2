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
                        <h2 class="title-4 mb-2">Login</h2>
                        <p class="desc-content">Login dengan akun yang sudah ada</p>
                    </div>
                    <form action="<?= base_url('auth/login/proses_login') ?>" method="post">
                        <div class="single-input-item mb-3">
                            <input type="email" placeholder="Email" name="email">
                        </div>
                        <div class="single-input-item mb-3">
                            <input type="password" placeholder="Password" name="password">
                        </div>
                        <div class="single-input-item mb-3">
                            <div class="login-reg-form-meta d-flex align-items-center justify-content-between">

                                <a href="#" class="forget-pwd mb-3">Forget Password?</a>
                            </div>
                        </div>
                        <div class="single-input-item mb-3">
                            <button type="submit" class="btn obrien-button-2 primary-color">Login</button>
                        </div>
                        <div class="single-input-item">
                            <a href="<?= base_url('auth/register') ?>">Belum punya akun? Register!</a>
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