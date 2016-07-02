<?php
/*
Template Name: Contact
*/
get_header();
?>
<?php include_once 'breadcrums.php' ?>
<link rel="stylesheet" href="<?php echo get_site_url(); ?>/assets/css/pages/page_contact.css">
<!-- Google Map -->
<div id="map" class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1959.5128080098136!2d106.60387225605797!3d10.809349861540966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752b9337d2802f%3A0x9e161419b3a6113d!2zxJDGsOG7nW5nIHPhu5EgMywgQsOsbmggSMawbmcgSMOyYSwgQsOsbmggVMOibiwgSOG7kyBDaMOtIE1pbmgsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1467434021348" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
</div><!---/map-->
<!-- End Google Map -->

<!--=== Content Part ===-->
<div class="container content">
    <div class="row margin-bottom-30">
        <div class="col-md-9 mb-margin-bottom-30">
            <div class="headline"><h2>Nội dung liên hệ</h2></div>
            <p>Quý khách vui lòng điền nội dung liên hệ vào form bên dưới. Chúng tôi sẽ phản hồi một cách nhanh nhất! </p><br />

            <form action="<?php echo get_site_url(); ?>/assets/php/sky-forms-pro/demo-contacts-process.php" method="post" id="sky-form3" class="sky-form contact-style">
                <fieldset class="no-padding">
                    <label>Họ và tên <span class="color-red">*</span></label>
                    <div class="row sky-space-20">
                        <div class="col-md-7 col-md-offset-0">
                            <div>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                    </div>

                    <label>Email <span class="color-red">*</span></label>
                    <div class="row sky-space-20">
                        <div class="col-md-7 col-md-offset-0">
                            <div>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                        </div>
                    </div>

                    <label>Nội dung <span class="color-red">*</span></label>
                    <div class="row sky-space-20">
                        <div class="col-md-11 col-md-offset-0">
                            <div>
                                <textarea rows="8" name="message" id="message" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <br />
                    <p><button type="submit" class="btn-u">Gửi</button></p>
                </fieldset>
            </form>
        </div><!--/col-md-9-->

        <div class="col-md-3">
            <!-- Contacts -->
            <div class="headline"><h2>Thông tin liên hệ</h2></div>
            <ul class="list-unstyled who margin-bottom-30">
                <li><a href="#"><i class="fa fa-home"></i>31/63/16, Đường sổ 3, Kp 14, Bình Hưng Hòa A, Q. Bình Tân, Tp. HCM</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i>hoanggiaglass@yahoo.com.vn</a></li>
                <li><a href="#"><i class="fa fa-phone"></i>0913 925 223</a></li>
                <li><a href="#"><i class="fa fa-globe"></i>http://www.hoanggiaprinting.com</a></li>
            </ul>

            <!-- Business Hours -->
            <div class="headline"><h2>Giờ làm việc</h2></div>
            <ul class="list-unstyled margin-bottom-30">
                <li><strong>Thứ 2 - Chủ nhật:</strong> 09am to 8pm</li>
            </ul>
        </div><!--/col-md-3-->
    </div><!--/row-->

    <!-- Owl Clients v1 -->
    <div class="headline"><h2>Our Clients</h2></div>
    <div class="owl-clients-v1">
        <div class="item">
            <img src="<?php echo get_site_url(); ?>/assets/img/clients4/1.png" alt="">
        </div>
        <div class="item">
            <img src="<?php echo get_site_url(); ?>/assets/img/clients4/2.png" alt="">
        </div>
        <div class="item">
            <img src="<?php echo get_site_url(); ?>/assets/img/clients4/3.png" alt="">
        </div>
        <div class="item">
            <img src="<?php echo get_site_url(); ?>/assets/img/clients4/4.png" alt="">
        </div>
        <div class="item">
            <img src="<?php echo get_site_url(); ?>/assets/img/clients4/5.png" alt="">
        </div>
        <div class="item">
            <img src="<?php echo get_site_url(); ?>/assets/img/clients4/6.png" alt="">
        </div>
        <div class="item">
            <img src="<?php echo get_site_url(); ?>/assets/img/clients4/7.png" alt="">
        </div>
        <div class="item">
            <img src="<?php echo get_site_url(); ?>/assets/img/clients4/8.png" alt="">
        </div>
        <div class="item">
            <img src="<?php echo get_site_url(); ?>/assets/img/clients4/9.png" alt="">
        </div>
    </div>
    <!-- End Owl Clients v1 -->
</div><!--/container-->
<!--=== End Content Part ===-->
<?php get_footer(); ?>
<script type="text/javascript" src="<?php echo get_site_url(); ?>/assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
<script type="text/javascript" src="<?php echo get_site_url(); ?>/assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo get_site_url(); ?>/assets/js/forms/login.js"></script>
<script type="text/javascript" src="<?php echo get_site_url(); ?>/assets/js/forms/contact.js"></script>
<script type="text/javascript" src="<?php echo get_site_url(); ?>/assets/js/pages/page_contacts.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        App.init();
        LoginForm.initLoginForm();
        ContactForm.initContactForm();
        OwlCarousel.initOwlCarousel();
    });
</script>
