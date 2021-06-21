<!-- Breadcrumb Area Start Here -->
<div class="breadcrumbs-area position-relative" style="background-image: url('<?= base_url('assets/') ?>2-2.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 class="title-3">Contact Us</h3>
                    <ul>
                        <li><a href="<?= base_url('') ?>">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End Here -->
<!-- Contact Us Area Start Here -->
<div class="contact-us-area">
    <div class="container container-default-2 custom-area">
        <?= $this->session->flashdata('pesan'); ?>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-custom">
                <div class="contact-info-item">
                    <div class="con-info-icon">
                        <i class="ion-ios-location-outline"></i>
                    </div>
                    <div class="con-info-txt">
                        <h4>Our Location</h4>
                        <p>(800) 123 456 789 / (800) 123 456 789 info@example.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-custom">
                <div class="contact-info-item">
                    <div class="con-info-icon">
                        <i class="ion-iphone"></i>
                    </div>
                    <div class="con-info-txt">
                        <h4>Contact us Anytime</h4>
                        <p>Mobile: 012 345 678<br>Fax: 123 456 789</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-custom text-align-center">
                <div class="contact-info-item">
                    <div class="con-info-icon">
                        <i class="ion-ios-email-outline"></i>
                    </div>
                    <div class="con-info-txt">
                        <h4>Support Overall</h4>
                        <p>Support24/7@example.com <br> info@example.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-custom">
                <form method="post" action="<?= base_url('home/contact/contact_aksi') ?>" accept-charset="UTF-8" >
                    <div class="comment-box mt-5">
                        <h5 class="text-uppercase">Get in Touch</h5>
                        <div class="row mt-3">
                            <div class="col-md-6 col-custom">
                                <div class="input-item mb-4">
                                    <input class="border rounded-0 w-100 input-area name" type="text" name="nama" id="con_name" placeholder="Name">
                                    <?= form_error('nama', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-custom">
                                <div class="input-item mb-4">
                                    <input class="border rounded-0 w-100 input-area email" type="email" name="email" id="con_email" placeholder="Email">
                                    <?= form_error('email', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                            </div>
                            <div class="col-12 col-custom">
                                <div class="input-item mb-4">
                                    <input class="border rounded-0 w-100 input-area email" type="text" name="subject" id="con_content" placeholder="Subject">
                                    <?= form_error('subject', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                            </div>
                            <div class="col-12 col-custom">
                                <div class="input-item mb-4">
                                    <textarea cols="30" rows="5" class="border rounded-0 w-100 custom-textarea input-area" name="deskripsi" id="con_message" placeholder="Message"></textarea>
                                    <?= form_error('deskripsi', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                            </div>
                            <div class="col-12 col-custom mt-40">
                                <button type="submit" id="submit" name="submit" class="btn obrien-button primary-btn rounded-0 mb-0">Send A Message</button>
                            </div>
                            <p class="col-12 col-custom form-message mb-0"></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact Us Area End Here -->
<!-- Google Maps -->
<div class="google-map-area">
    <div id="contacts" class="map-area">
        <div id="googleMap"></div>
    </div>
</div>
<!-- Google Maps End -->
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