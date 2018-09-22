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
                            <h1>Gift a Spa</h1>
                            <img class="img-fluid " src="<?= base_url('assets') ?>/images/title_border.png">
                            <p>Pallamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                        </div>
                    </div>
                    <!-- Grid column -->
                    <div class="col-lg-8 col-md-8">
                        <div class="blog-box">
                            <!-- Featured news -->
                            <div class="single-news mb-lg-0 mb-4">
                                <!-- Image -->
                                <div class="view overlay rounded z-depth-1-half mb-4">
                                    <img class="img-fluid" src="<?= base_url('assets') ?>/images/blog-1.jpg" alt="Sample image">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!-- Excerpt -->
                                <h3 class="font-weight-bold dark-grey-text mb-3"><a>Title of the news</a></h3>
                                <p class=" mb-lg-0 mb-md-5 mb-4">Sed ut perspiciatis unde voluptatem omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae explicabo. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                                <p class=" mb-lg-0 mb-md-5 mb-4">Sed ut perspiciatis unde voluptatem omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae explicabo. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                                <p class=" mb-lg-0 mb-md-5 mb-4">Sed ut perspiciatis unde voluptatem omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae explicabo. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                                <p class=" mb-lg-0 mb-md-5 mb-4">Sed ut perspiciatis unde voluptatem omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae explicabo. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                            </div>
                            <!-- Featured news -->
                        </div>
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-8">
                        <div class="blog-box">
                            <?php foreach ($all_services_key as $key => $all_services_data) : ?>
                                <div class="embed-responsive embed-responsive-16by9 z-depth-1 mb-4">
                                    <iframe   class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $all_services_data->youtube_code ?>" frameborder="4" style="height: 101%" allowfullscreen></iframe>
                                </div>
                            <?php endforeach ; ?>
                        </div>
                    </div>
                    <!--Grid column-->
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
        <?php $this->load->view('common/footer') ?>
        <?php $this->load->view('common/js') ?>
    </body>
</html>