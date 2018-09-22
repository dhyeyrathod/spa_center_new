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
                            <h1>Contact Us</h1>
                            <img class="img-fluid " src="<?= base_url('assets') ?>/images/title_border.png">
                            <p>Pallamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-box">
                            <div class="col-lg-12">
                                <h3>Address</h3>
                                <h6 class="font-weight-bold"><i class="fa fa-map-marker text-info mr-2"></i> Location: <b class="text-info">Delhi</b></h6>
                                <br>
                                <h6 class="font-weight-bold"><i class="fa fa-phone mr-2 text-info"></i> Phone:</h6>
                                <a href="tel:0000 000 000">+91 0000 000 000</a><br><br>
                                <h6 class="font-weight-bold"><i class="fa fa-envelope mr-2  text-info"></i> E-mail:</h6>
                                <a href="mailto:info@mail.com">info@mail.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-box">
                            <div class="col-lg-12">
                                <h3>Form</h3>
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input name="yourname" class="contact_form_detail" required="" type="text" placeholder="First Name">
                                        </div>
                                        <div class="col-md-6">
                                            <input name="email" class="contact_form_detail" required="" type="text" placeholder="Last Name">
                                        </div>
                                        <div class="col-md-6">
                                            <input name="phonenumber" class="contact_form_detail" required="" type="text" placeholder="Email Address">
                                        </div>
                                        <div class="col-md-6">
                                            <input name="phonenumber" class="contact_form_detail" required="" type="text" placeholder="Phone Number">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea name="yourmessage" class="contact_form_detail1" required="" placeholder="Your Messge..."></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="submit_btn_box">
                                                <input name="submit" class="submit_btn" type="submit" value="Send Message">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php $this->load->view('common/footer') ?>
        <?php $this->load->view('common/js') ?>
    </body>
</html>