<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <a href="<?= base_url() ?>"><img src="<?= base_url('assets') ?>/images/logo.png" class="img-fluid" /></a>
            </div>
            <div class="col-lg-8">
                <div class="social_icon">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="phone_box">
                    <p><i class="fa fa-phone"></i> <a href="tel:+91 0000 000 000">+91 0000 000 000</a> </p>
                </div>
            </div>
        </div>
    </div>
</header>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id='cssmenu'>
                    <ul>
                        <li><a href="<?= base_url('/') ?>">Home</a></li>
                        <li><a href="<?= base_url('about_us/') ?>">About Us</a></li>
                        <li class="has-sub">
                            <a href="<?= base_url('services/') ?>">Service</a>
                            <ul>
                                <?php foreach ($all_services_key as $key => $all_services_data) : ?>
                                    <li><a href="<?= base_url().str_replace(" ","-",$all_services_data->services_name)."/detials/".$this->friend->base64url_encode($all_services_data->id) ?>"><?= $all_services_data->services_name ?></a></li>
                                <?php endforeach ; ?>
                            </ul>
                        </li>
                        <li><a href="<?= base_url('spa_gift/') ?>">Gift a Spa</a></li>
                        <li><a href="<?= base_url('blog/') ?>">Blog</a></li>
                        <li><a href="<?= base_url('contact_us/') ?>">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>