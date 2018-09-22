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
                            <h1><?= $servies_details_key->services_name ?></h1>
                            <img class="img-fluid " src="<?= base_url('assets') ?>/images/title_border.png">
                            <p>Pallamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                        </div>
                    </div>
                    <!-- Grid column -->
                    <div class="col-lg-8 col-md-8">
                        <div class="blog-box">
                            <div class="single-news mb-lg-0 mb-4">
                                <div class="view overlay rounded z-depth-1-half mb-4">
                                    <img class="img-fluid" src="<?= base_url('admin/services_image') ?>/<?= $servies_details_key->image ?>" style="width: 100%" alt="Sample image">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <?= $servies_details_key->services_description ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="blog-box">
                            <ul class="list-inline">
                                <?php foreach ($all_services_key as $key => $all_services_data) : ?>
                                    <li><i class="fa fa-angle-double-right"></i> <a class="black-text" href="<?= base_url().str_replace(" ","-",$all_services_data->services_name)."/detials/".$this->friend->base64url_encode($all_services_data->id) ?>"><?= $all_services_data->services_name ?></a></li>
                                <?php endforeach ; ?>
                                
                            </ul>
                            <div class="embed-responsive embed-responsive-16by9 z-depth-1 mb-4">
                                <iframe   class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $servies_details_key->youtube_code ?>" frameborder="4" style="height: 101%" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <!--Grid column-->
                </div>
            </div>
        </section>
        <?php $this->load->view('common/footer') ?>
        <?php $this->load->view('common/js') ?>
    </body>
</html>