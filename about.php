<?php
session_start();
$page = "About Page";
$active = "about";
$pagetitle = "Who we are | FieldMarine Engineering";
require_once('head.php');
?>

<body class="royal_preloader">
    <div id="royal_preloader"></div>
    <div id="wrapper" class="wrapper clearfix">
        
        <?php require_once('header.php'); ?>

        <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
            <div class="bg-section">
                <img src="assets/images/about-top-bg.jpg" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        <div class="title text-center">
                            <div class="title--heading">
                                <h1>About Us</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb d-flex justify-content-center">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item alt">Who we are</li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about1" class="about about-1 pt-110 pb-50">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        <div class="heading mb-50 text--center">
                            <h2 class="heading--title mb-3">About Us</h2>
                            <p class="heading--desc text-mint mb-0">At Fieldmarine Engineering Services Limited, we pride ourselves in providing high-quality and exquisite engineering services to our clients in the marine sector.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="highlight2" class="highlight-2 bg-overlay bg-overlay-blue text-center pb-0">
            <div class="bg-section"><img src="assets/images/fm-marine-bg.jpg" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                        <div class="heading">
                            <h2 class="heading--title color-white mb-0">Our services are guaranteed for quality and reliability as we tailor our services to meet our clients needs. With our vast expertise in engineering, marine and drilling, Fieldmarine is a proven leader in the provision of engineering and marine services.</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="highlight--content text-center">
                            <div class="bg-section">
                                <img src="assets/images/fm-marine-overlay.jpg" alt="" />
                            </div>
                            <div class="highlight--button">
                                <div class="highlight-overlay">
                                    <div class="pos-vertical-center">
                                        <a class="popup-img" href="#">
                                            <span class="btn--animation"></span>
                                            <img src="assets/images/fm-pulse.png">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-divider"></div>
        </section>
        <section id="case" class="case case-standard case-3col bg-gray pt-100 pb-60">
            <div class="container">
                <div class="row flipInX" data-wow-delay="100ms">
                    <div class="col-sm-12 col-md-10 offset-md-1">
                        <div class="heading heading-2 mb-50 text--center">
                            <h2 class="heading--title">Customer satisfaction guaranteed</h2>
                            <p class="heading--desc mb-0">Customer satisfaction is at the heart of whatever we do. All projects receive the attention of our team of licensed professionals, supported by our outstanding Technical Specialists, Logistics and Administrative Project Coordinators and Consultants. With the aim to continually improve in our client service-delivery, we have put measures in place to ensure quality service delivery and the enhancement of the energy sector in general.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <?php require_once('footer.php'); ?>

        <div id="back-to-top" class="backtop"><i class="fa fa-long-arrow-up"></i></div>
    </div>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/royal_preloader.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/functions.js"></script>
    <script src="assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
    <script src="assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/js/rsconfig.js"></script>
</body>

</html>