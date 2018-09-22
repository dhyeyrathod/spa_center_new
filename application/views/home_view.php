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
        <section class="slider">
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide effect3 mb-5" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?= base_url('assets') ?>/images/slider-1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?= base_url('assets') ?>/images/slider-2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?= base_url('assets') ?>/images/slider-3.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
        <section class="mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section_title">
                            <h1>Welcome Spa Center</h1>
                            <img class="img-fluid " src="<?= base_url('assets') ?>/images/title_border.png">
                            <p>Pallamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="about-box">
                            <h3>Swedish Oil Massage</h3>
                            <p>Spa Company is one of the best and leading companies in India known for delivering the quality services. It gives the unique experience to the clients by our special treatment and massage therapies. Spa experts of our company have designed natural treatments where you will come across with different herbal and ancient techniques, which gives the best mode in the field of relaxation. Our Spa experts are trained and professionals who provide customized services according to the customers need. These experts are friendlier in nature and solve the problem of the clients in an effective way.</p>
                            <h3>Thai Dry Massage</h3>
                            <p>Spa Company is one of the best and leading companies in India known for delivering the quality services. It gives the unique experience to the clients by our special treatment and massage therapies. Spa experts of our company have designed natural treatments where you will come across with different herbal and ancient techniques, which gives the best mode in the field of relaxation. Our Spa experts are trained and professionals who provide customized services according to the customers need. These experts are friendlier in nature and solve the problem of the clients in an effective way.</p>
                        </div>
                    </div>
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
                    <?php foreach ($all_hotels_key as $key => $all_hotels_data) : ?>
                        <div class="col-lg-4 mb-4">
                            <div class="location-box effect2">
                                <a href="#">
                                    <div class="card">
                                        <img src="<?= base_url('admin/hotels_images/') ?>/<?= $all_hotels_data->image ?>" class="img-fluid" />
                                    </div>
                                    <h3><?= $all_hotels_data->hotel_name ?></h3>
                                </a>
                            </div>
                        </div>
                    <?php endforeach ; ?>
                </div>
            </div>
        </section>
        <?php $this->load->view('common/footer') ?>
        <?php $this->load->view('common/js') ?>
    </body>
</html>