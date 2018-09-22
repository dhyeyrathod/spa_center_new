<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <?php $this->load->view('common/css') ?>
    </head>
    <body>
        <?php $this->load->view('common/header') ?>
        <section class="slider mb-5">
            <div class="container">
                <div class="effect3">
                    <img src="<?= base_url('assets') ?>/images/inner-slider.jpg" class="img-fluid" />
                </div>
            </div>
        </section>
        <section class="mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section_title">
                            <h1>Spa Services</h1>
                            <img class="img-fluid " src="<?= base_url('assets') ?>/images/title_border.png">
                            <p>Pallamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                        </div>
                    </div>
                    <?php foreach ($all_services_key as $key => $all_services_data) : ?>
                        <div class="col-lg-4 mb-4">
                            <div class="services-box">
                                <a href="<?= base_url().str_replace(" ","-",$all_services_data->services_name)."/detials/".$this->friend->base64url_encode($all_services_data->id) ?>">
                                    <div class="card">
                                        <img src="<?= base_url('admin/services_image') ?>/<?= $all_services_data->image ?>" style="width: 350px;height: 236px;" class="img-fluid" />
                                    </div>
                                    <h3><?= $all_services_data->services_name ?></h3>
                                </a>
                                <p><?= mb_substr($all_services_data->services_description, 0, 110) ; ?></p>
                                <p><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></p>
                            </div>
                        </div>
                    <?php endforeach ; ?>
                </div>
            </div>
        </section>
        <section class="mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section_title">
                            <h1>Hotel Bengaluru</h1>
                            <img class="img-fluid " src="<?= base_url('assets') ?>/images/title_border.png">
                            <p>Pallamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="location-box effect2">
                            <a href="#">
                                <div class="card">
                                    <img src="<?= base_url('assets') ?>/images/hotel-1.jpg" class="img-fluid" />
                                </div>
                                <h3>Welcom Hotel Bengaluru</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="location-box effect2">
                            <a href="#">
                                <div class="card">
                                    <img src="<?= base_url('assets') ?>/images/hotel-2.jpg" class="img-fluid" />
                                </div>
                                <h3>Shreyas Yoga Retreat</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="location-box effect2">
                            <a href="#">
                                <div class="card">
                                    <img src="<?= base_url('assets') ?>/images/hotel-3.jpg" class="img-fluid" />
                                </div>
                                <h3>Hotel Vivanta Taj Yeshwantpur</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="location-box effect2">
                            <a href="#">
                                <div class="card">
                                    <img src="<?= base_url('assets') ?>/images/hotel-4.jpg" class="img-fluid" />
                                </div>
                                <h3>The Oberoi Bangalore</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="location-box effect2">
                            <a href="#">
                                <div class="card">
                                    <img src="<?= base_url('assets') ?>/images/hotel-5.jpg" class="img-fluid" />
                                </div>
                                <h3>Sheraton Grand Bangalore Hotel</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="location-box effect2">
                            <a href="#">
                                <div class="card">
                                    <img src="<?= base_url('assets') ?>/images/hotel-6.jpg" class="img-fluid" />
                                </div>
                                <h3>JW Marriott Bengaluru</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="location-box effect2">
                            <a href="#">
                                <div class="card">
                                    <img src="<?= base_url('assets') ?>/images/hotel-7.jpg" class="img-fluid" />
                                </div>
                                <h3>Shangri La Bengaluru</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="location-box effect2">
                            <a href="#">
                                <div class="card">
                                    <img src="<?= base_url('assets') ?>/images/hotel-8.jpg" class="img-fluid" />
                                </div>
                                <h3>Melange Astris</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="location-box effect2">
                            <a href="#">
                                <div class="card">
                                    <img src="<?= base_url('assets') ?>/images/hotel-9.jpg" class="img-fluid" />
                                </div>
                                <h3>Vivanta By Taj M G Road</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="location-box effect2">
                            <a href="#">
                                <div class="card">
                                    <img src="<?= base_url('assets') ?>/images/hotel-10.jpg" class="img-fluid" />
                                </div>
                                <h3>Fortune Select JP Cosmos</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="location-box effect2">
                            <a href="#">
                                <div class="card">
                                    <img src="<?= base_url('assets') ?>/images/hotel-11.jpg" class="img-fluid" />
                                </div>
                                <h3>Hotel Royal Orchid Bangalore</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="location-box effect2">
                            <a href="#">
                                <div class="card">
                                    <img src="<?= base_url('assets') ?>/images/hotel-12.jpg" class="img-fluid" />
                                </div>
                                <h3>MSR Hotel & Spa</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php $this->load->view('common/footer') ?>
        <?php $this->load->view('common/js') ?>
    </body>
</html>