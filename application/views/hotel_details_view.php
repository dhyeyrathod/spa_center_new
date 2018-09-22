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
                            <div class="embed-responsive embed-responsive-16by9 z-depth-1 mb-4">
                                <iframe   class="embed-responsive-item" src="https://www.youtube.com/embed/D7oHP6st5J4?rel=0&amp;showinfo=0" frameborder="4" style="height: 101%" allowfullscreen></iframe>
                            </div>
                            <div class="embed-responsive embed-responsive-16by9 z-depth-1 mb-4">
                                <iframe   class="embed-responsive-item" src="https://www.youtube.com/embed/xdGPjcnU0uY?rel=0&amp;showinfo=0" frameborder="4" style="height: 101%" allowfullscreen></iframe>
                            </div>
                            <div class="embed-responsive embed-responsive-16by9 z-depth-1 mb-4">
                                <iframe   class="embed-responsive-item" src="https://www.youtube.com/embed/ZJp0SUD-7ms?rel=0&amp;showinfo=0" frameborder="4" style="height: 101%" allowfullscreen></iframe>
                            </div>
                            <div class="embed-responsive embed-responsive-16by9 z-depth-1 mb-4">
                                <iframe   class="embed-responsive-item" src="https://www.youtube.com/embed/a4ivizaIh14?rel=0&amp;showinfo=0" frameborder="4" style="height: 101%" allowfullscreen></iframe>
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