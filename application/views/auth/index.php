<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="<?= base_url(); ?>auth" class="logo d-flex align-items-center">
            <img src="<?= base_url() ?>assets/img/logo-btext.png" alt="">
        </a>

        <nav id="navbar" class="navbar">
            <ul class="px-5">
                <li><a class="f-bevietnam nav-link navbar-freedy scrollto" href="#">The guide</a></li>
                <li><a class="f-bevietnam nav-link navbar-freedy scrollto" href="#">Specifications</a></li>
                <li><a class="f-bevietnam nav-link navbar-freedy scrollto"
                        href="<?= base_url(); ?>link/lern_transparency">Technology</a></li>
                <li><a class="f-bevietnam nav-link mx-0 my-2 mx-lg-2 my-lg-auto text-center btn-login active"
                        href="<?= base_url(); ?>auth/login">Register</a>
                </li>
                <li><a class="f-bevietnam nav-link mx-0 my-2 mx-lg-2 my-lg-auto text-center btn-login"
                        href="<?= base_url(); ?>auth/login">Log
                        in</a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="top" class="hero">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center slider-freedy text-start">
                <h1 class=" fw-bold">ExchangeTailor<br>
                    <span class="text-blackgr">The Solution for Travelers</span>
                </h1>
                <p class=" my-3">
                    ExchangeTailor provides his custumers a multi-currency wallet that allows to instant convert their
                    wallet balance into the currency of the country they are in and it allows to carry out comfortably
                    all the payments they want, quickly and easily.
                    ExchangeTailor has a crypto trade-off plaform integrated that allow you trade from everywhere in the
                    world.
                </p>
                <div class="d-flex">
                    <a href="<?= base_url(); ?>auth/signup_referral"
                        class="btn-slider-signin active d-inline-flex align-items-center justify-content-center align-self-center me-3 mb-3">
                        <span class="">Register</span>
                    </a><a href="<?= base_url(); ?>auth/signup_referral"
                        class="btn-slider-signin d-inline-flex align-items-center justify-content-center align-self-center me-3 mb-3">
                        <span class="">Log in</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Hero -->

<main id="main">
    <!-- ======= Section ======= -->
    <section id="reward" class="about bg-grey">
        <div class="container p-r">
            <div class="row gx-0">
                <div class="col-4 d-none d-lg-grid m-auto">
                    <img src="<?= base_url(); ?>assets/img/img-1.png" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center mb-5 ps-lg-5">
                    <div class="content-freedy p-r">
                        <h2 class=""><span class="text-blackgr2">Your Money</span> Worldwide</h2>
                        <ul class="p-0 ">
                            <li>Immidiate opening & free of charge</li>
                            <li>(No KYC & No AML)</li>
                            <li>Receive funds in more than 10 FIAT currencies</li>
                            <li>Convert FIAT istantly at the real exchange rate without any fee
                                Custody and send money in more than 50 FIAT currencies.</li>
                            <li>Trading your crypto during your vacation thanks to the integrated Trade-off Platform
                            </li>
                            <li>Keep your currencies safe in your wallet and send money worldwide.</li>
                            <li>Withdraw your funds to any bank account even if it is not under your name</li>
                        </ul>
                        <div class="text-start">
                            <a href="<?= base_url(); ?>auth/signup_referral"
                                class="btn-content-freedy d-inline-flex align-items-center justify-content-center align-self-center">
                                <span class="">Register</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Section -->

    <!-- ======= Section ======= -->
    <section id="services" class="about bg-flowers">
        <div class="container p-r">
            <div class="row gx-0">
                <div class="col-12 mb-5">
                    <div class="content-freedy p-r text-center">
                        <h2 class="">THE GUIDE</h2>
                        <h3><span class="text-blackgr2">How to use</span> ExchangeTailor</h3>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row d-flex flax-wrap justify-content-center align-items-center">
                        <div class="col-10 col-md-5 col-lg-3 px-2 mb-3 list-different">
                            <div
                                class="items-different p-4 d-flex flex-column justify-content-center align-items-center text-center">
                                <img src="<?= base_url() ?>assets/img/icon-guide-1.png" alt="" class="bg-red">
                                <span class="title my-auto">Wallet</span>
                                <a href="<?= base_url(); ?>link/service?service=<?= base64_encode('1') ?>"
                                    class="py-2 px-3">Learn more</a>
                            </div>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3 px-2 mb-3 list-different">
                            <div
                                class="items-different p-4 d-flex flex-column justify-content-center align-items-center text-center">
                                <img src="<?= base_url() ?>assets/img/icon-guide-2.png" alt="" class="bg-red">
                                <span class="title my-auto">For your trips</span>
                                <a href="<?= base_url(); ?>link/service?service=<?= base64_encode('2') ?>"
                                    class="py-2 px-3">Learn more</a>
                            </div>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3 px-2 mb-3 list-different">
                            <div
                                class="items-different p-4 d-flex flex-column justify-content-center align-items-center text-center">
                                <img src="<?= base_url() ?>assets/img/icon-guide-3.png" alt="" class="bg-red">
                                <span class="title my-auto">Daily use</span>
                                <a href="<?= base_url(); ?>link/service?service=<?= base64_encode('3') ?>"
                                    class="py-2 px-3">Learn more</a>
                            </div>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3 px-2 mb-3 list-different">
                            <div
                                class="items-different p-4 d-flex flex-column justify-content-center align-items-center text-center">
                                <img src="<?= base_url() ?>assets/img/icon-guide-4.png" alt="" class="bg-red">
                                <span class="title my-auto">Buy&sell crypto with FIAT</span>
                                <a href="<?= base_url(); ?>link/service?service=<?= base64_encode('4') ?>"
                                    class="py-2 px-3">Learn more</a>
                            </div>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3 px-2 mb-3 list-different">
                            <div
                                class="items-different p-4 d-flex flex-column justify-content-center align-items-center text-center">
                                <img src="<?= base_url() ?>assets/img/icon-guide-5.png" alt="" class="bg-red">
                                <span class="title my-auto">Capital exportation</span>
                                <a href="<?= base_url(); ?>link/lern_transparency" class="py-2 px-3">Learn more</a>
                            </div>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3 px-2 mb-3 list-different">
                            <div
                                class="items-different p-4 d-flex flex-column justify-content-center align-items-center text-center">
                                <img src="<?= base_url() ?>assets/img/icon-guide-6.png" alt="" class="bg-red">
                                <span class="title my-auto">Search activities</span>
                                <a href="<?= base_url(); ?>link/service?service=<?= base64_encode('6') ?>"
                                    class="py-2 px-3">Learn more</a>
                            </div>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3 px-2 mb-3 list-different">
                            <div
                                class="items-different p-4 d-flex flex-column justify-content-center align-items-center text-center">
                                <img src="<?= base_url() ?>assets/img/icon-guide-7.png" alt="" class="bg-red">
                                <span class="title my-auto">Find me</span>
                                <a href="<?= base_url(); ?>link/service?service=<?= base64_encode('7') ?>"
                                    class="py-2 px-3">Learn more</a>
                            </div>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3 px-2 mb-3 list-different">
                            <div
                                class="items-different p-4 d-flex flex-column justify-content-center align-items-center text-center">
                                <img src="<?= base_url() ?>assets/img/icon-guide-8.png" alt="" class="bg-red">
                                <span class="title my-auto">Collection & payment</span>
                                <a href="<?= base_url(); ?>link/service?service=<?= base64_encode('8') ?>"
                                    class="py-2 px-3">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Section -->

    <!-- ======= Section ======= -->
    <section id="reward" class="about bg-section-reward">
        <div class="container p-r">
            <div class="row gx-0">
                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center mb-5 ps-lg-5">
                    <div class="content-freedy p-r">
                        <h2 class=""><span class="text-blackgr2">Get Reward</span><br>
                            with our Affiliate Campaign</h2>
                        <p>ExchangeTailor assigns a personal referral link(with a referral code) to every account; you
                            just need to share it and let your friend register on the platform using the referral
                            link/code you shared. You will be rewarded for every single FIAT and crypto transaction
                            carry out by who signed up using your personal referral link.</p>
                        <span class="bp mb-3 d-block">Earn from wherever you are, by simply sharing your referral
                            link.</span>
                        <span class="bp mb-3 d-block">Share it and get reward forever</span>
                        <div class="text-start">
                            <a href="<?= base_url(); ?>auth/signup_referral"
                                class="btn-content-freedy d-inline-flex align-items-center justify-content-center align-self-center">
                                <span class="">Read More</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-none d-lg-grid m-auto mt-xxl-0">
                    <img src="<?= base_url(); ?>assets/img/img-2.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section><!-- Section -->


    <!-- ======= Section ======= -->
    <section id="services" class="about">
        <div class="container p-r">
            <div class="row gx-0">
                <div class="col-12 mb-5">
                    <div class="content-freedy p-r text-center">
                        <h2 class="">ExchangeTailor <span class="text-blackgr2">Specifications</span></h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row d-flex flax-wrap justify-content-center align-items-center">
                        <div class="col-10 col-md-5 col-lg-3 px-2 my-3 list-different">
                            <div
                                class="items-different p-2 d-flex flex-column justify-content-center align-items-center text-center">
                                <img src="<?= base_url() ?>assets/img/icon-spec-1.png" alt="">
                                <span class="title red my-auto">Non custodial
                                    wallet provides</span>
                                <a href="<?= base_url(); ?>link/service?service=<?= base64_encode('1') ?>"
                                    class="py-2 px-3">Read More</a>
                            </div>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3 px-2 my-3 list-different">
                            <div
                                class="items-different p-2 d-flex flex-column justify-content-center align-items-center text-center">
                                <img src="<?= base_url() ?>assets/img/icon-spec-2.png" alt="">
                                <span class="title red my-auto">No KYC No AML</span>
                                <a href="<?= base_url(); ?>link/service?service=<?= base64_encode('2') ?>"
                                    class="py-2 px-3">Read More</a>
                            </div>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3 px-2 my-3 list-different">
                            <div
                                class="items-different p-2 d-flex flex-column justify-content-center align-items-center text-center">
                                <img src="<?= base_url() ?>assets/img/icon-spec-3.png" alt="">
                                <span class="title red my-auto">Receive funds in
                                    10 FIAT currencies</span>
                                <a href="<?= base_url(); ?>link/service?service=<?= base64_encode('3') ?>"
                                    class="py-2 px-3">Read More</a>
                            </div>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3 px-2 my-3 list-different">
                            <div
                                class="items-different p-2 d-flex flex-column justify-content-center align-items-center text-center">
                                <img src="<?= base_url() ?>assets/img/icon-spec-4.png" alt="">
                                <span class="title red my-auto">Convert, custody
                                    & send in over 50
                                    FIAT curencies</span>
                                <a href="<?= base_url(); ?>link/service?service=<?= base64_encode('4') ?>"
                                    class="py-2 px-3">Read More</a>
                            </div>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3 px-2 my-3 list-different">
                            <div
                                class="items-different p-2 d-flex flex-column justify-content-center align-items-center text-center">
                                <img src="<?= base_url() ?>assets/img/icon-spec-5.png" alt="">
                                <span class="title red my-auto">Zero exchange fees and competitive rates for FIAT to
                                    FIAT</span>
                                <a href="<?= base_url(); ?>link/lern_transparency" class="py-2 px-3">Read More</a>
                            </div>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3 px-2 my-3 list-different">
                            <div
                                class="items-different p-2 d-flex flex-column justify-content-center align-items-center text-center">
                                <img src="<?= base_url() ?>assets/img/icon-spec-6.png" alt="">
                                <span class="title red my-auto">Clear & transparent
                                    prices without
                                    hidden cost</span>
                                <a href="<?= base_url(); ?>link/service?service=<?= base64_encode('6') ?>"
                                    class="py-2 px-3">Read More</a>
                            </div>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3 px-2 my-3 list-different">
                            <div
                                class="items-different p-2 d-flex flex-column justify-content-center align-items-center text-center">
                                <img src="<?= base_url() ?>assets/img/icon-spec-7.png" alt="">
                                <span class="title red my-auto">Trade off platform
                                </span>
                                <a href="<?= base_url(); ?>link/service?service=<?= base64_encode('7') ?>"
                                    class="py-2 px-3">Read More</a>
                            </div>
                        </div>
                        <div class="col-10 col-md-5 col-lg-3 px-2 my-3 list-different">
                            <div
                                class="items-different p-2 d-flex flex-column justify-content-center align-items-center text-center">
                                <img src="<?= base_url() ?>assets/img/icon-spec-8.png" alt="">
                                <span class="title red my-auto">Integration into
                                    your business
                                    API/plugin</span>
                                <a href="<?= base_url(); ?>link/service?service=<?= base64_encode('8') ?>"
                                    class="py-2 px-3">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Section -->

    <!-- ======= Section ======= -->
    <section id="" class="about">
        <div class="container p-r">
            <div class="row gx-0">
                <div class="col-12 mb-5">
                    <div class="content-freedy p-r text-center">
                        <h2 class="">Exchange Tailor</h2>
                        <h2 class="text-dark">Giving you a better service</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-4 d-none d-lg-grid m-auto">
                            <img src="<?= base_url(); ?>assets/img/img-3.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-6 mb-5 ps-lg-5">
                            <div class="content-freedy">
                                <h3 class="f-roboto"><span class="text-blackgr">Revolutionary system</span> with crypto
                                    trading
                                    service integrated</h3>
                                <div class="my-3">
                                    <ul class="p-0 ">
                                        <li>Trade off platform</li>
                                        <li>Shared order book</li>
                                        <li>Distributed and decentralized</li>
                                        <li>Buy crypto from your FIAT balance of your ExcahngeTailor wallet </li>
                                        <li>Withdraw your earning by bank transfer in more than
                                            50 currencies to any bank account even not under your name</li>
                                    </ul>
                                </div>
                                <div class="text-start">
                                    <a href="<?=base_url()?>link/soon"
                                        class="btn-content-freedy d-inline-flex align-items-center justify-content-center align-self-center">
                                        <span class="">Learn more</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-6 my-auto ps-lg-5">
                            <div class="content-freedy">
                                <h3 class="f-roboto"><span class="text-blackgr">The first debit card</span> completely
                                    anonymous
                                    that fully protect your privacy</h3>
                                <div class="my-3">
                                    <ul class="p-0 ">
                                        <li>Get your card: Virtual or Physical</li>
                                        <li>No limits! The entire account balance is available for card payments and
                                            bank transfers
                                        </li>
                                        <li>Pay and withdraw anonymously</li>
                                        <li>Use it on ApplePay, GooglePay & others</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 d-none d-lg-grid m-auto">
                            <img src="<?= base_url(); ?>assets/img/img-4.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Section -->

    <!-- ======= Section ======= -->
    <section id="features" class="about">
        <div class="container p-r">
            <div class="row gx-0">
                <div class="col-12 mb-5">
                    <div class="content-freedy p-r text-center">
                        <h2 class="">Features</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 features-freedy">
                            <div
                                class="features-freedy text-center d-flex align-items-center justify-content-center flex-wrap">
                                <div class="col-10 col-sm-6 col-lg-3">
                                    <div
                                        class=" d-flex flex-column align-items-center my-4 box-features px-2 pt-5 pb-4 m-auto">
                                        <img src="<?= base_url(); ?>assets/img/features-1.png" alt="">
                                        <h4 class=" mb-auto mt-3">100% Secure</h4>
                                        <a class=""
                                            href="<?= base_url(); ?>link/features?features=<?= base64_encode('1') ?>">Learn
                                            more</a>
                                    </div>
                                </div>
                                <div class="col-10 col-sm-6 col-lg-3">
                                    <div
                                        class=" d-flex flex-column align-items-center my-4 box-features px-2 pt-5 pb-4 m-auto">
                                        <img src="<?= base_url(); ?>assets/img/features-2.png" alt="">
                                        <h4 class=" mb-auto mt-3">Wallet</h4>
                                        <a class=""
                                            href="<?= base_url(); ?>link/features?features=<?= base64_encode('2') ?>">Learn
                                            more</a>
                                    </div>
                                </div>
                                <div class="col-10 col-sm-6 col-lg-3">
                                    <div
                                        class=" d-flex flex-column align-items-center my-4 box-features px-2 pt-5 pb-4 m-auto">
                                        <img src="<?= base_url(); ?>assets/img/features-3.png" alt="">
                                        <h4 class=" mb-auto mt-3">Technology</h4>
                                        <a class=""
                                            href="<?= base_url(); ?>link/features?features=<?= base64_encode('3') ?>">Learn
                                            more</a>
                                    </div>
                                </div>
                                <div class="col-10 col-sm-6 col-lg-3">
                                    <div
                                        class=" d-flex flex-column align-items-center my-4 box-features px-2 pt-5 pb-4 m-auto">
                                        <img src="<?= base_url(); ?>assets/img/features-4.png" alt="">
                                        <h4 class=" mb-auto mt-3">Mission</h4>
                                        <a class=""
                                            href="<?= base_url(); ?>link/features?features=<?= base64_encode('4') ?>">Learn
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Section -->

    <!-- ======= Section ======= -->
    <section id="contactus" class="about">
        <div class="container p-r">
            <div class="row gx-0">
                <div class="col-12 mb-5">
                    <div class="box-contactus px-3 py-5">
                        <div class="d-flex flex-row justify-content-center align-items-center">
                            <img src="<?= base_url() ?>assets/img/sendmail.png" alt="" class="mx-auto d-none d-md-grid">
                            <div class="form-contactus py-2 mx-auto">
                                <form id="form_submit" method="POST" action="<?= base_url(); ?>link/mailproses"
                                    class="d-flex flex-row justify-content-center align-items-center"
                                    onsubmit="return validate()">
                                    <input type="hidden" id="token"
                                        name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                        value="<?php echo $this->security->get_csrf_hash(); ?>">
                                    <input name="email" type="text" placeholder="Enter your email address" class="ms-4">
                                    <button class="mx-3 py-2 btn-contactus" type="submit" id="btnconfirm">
                                        <span class="mx-3 d-none d-sm-grid">Contact us</span>
                                        <img src="<?= base_url() ?>assets/img/arrow-contactus.png" alt="" class="mx-1">
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex flex-wrap">
                        <div class="powered-top mb-3 me-5">
                            <span>Powered By</span>
                            <a href="https://tracklessproject.com/">
                                <img src="<?= base_url() ?>assets/img/tracklessproject.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Section -->
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="contact" class="footer p-0 p-r">
    <div class="pt-5">
        <div class="container py-5">
            <div class="row gy-4">
                <div class="col-lg col-12 pe-2 footer-links">
                    <h4 class="">Follow us</h4>
                    <div class="list">
                        <a href="#" class="d-flex align-items-center justify-content-start my-1">
                            <!-- <i class="fa fa-envelope"></i> -->
                            <!-- <span class="ms-1">eeinformationservice@gmail.com</span> -->
                        </a>
                        <a href="#" class="d-flex align-items-center justify-content-start my-1">
                            <span class="icon"><i class="fab fa-twitter"></i></span>
                            <span class="ms-1"></span>
                        </a>
                        <a href="#" class="d-flex align-items-center justify-content-start my-1">
                            <span class="icon"><i class="fab fa-facebook-f"></i></span>
                            <span class="ms-1"></span>
                        </a>
                        <a href="#" class="d-flex align-items-center justify-content-start my-1">
                            <span class="icon"><i class="fab fa-instagram"></i></span>
                            <span class="ms-1"></span>
                        </a>
                        <a href="#" class="d-flex align-items-center justify-content-start my-1">
                            <span class="icon"><i class="fab fa-linkedin"></i></span>
                            <span class="ms-1"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg col-12 pe-2 footer-links">
                    <h4 class="">&nbsp;
                        <!--                        <a href="<?= base_url(); ?>link/faq" style="color:#fff;">FAQ</a>
-->
                    </h4>
                </div>
                <div class="col-lg col-12 pe-2 footer-links">
                    <h4 class="">
                        <a href="<?= base_url(); ?>link/about" style="color:#fff;">About <b
                                translate="no">PiggyBank</b></a>
                    </h4>
                </div>
            </div>
        </div>
        <div class="container pt-5 pb-4" style="z-index: 99; position: relative;">
            <div class="credits ">
                PiggyBankService (USA) is a service subject to partnership with licensee PBS Online LLC.
            </div>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#top" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<?php if (@isset($_SESSION["success"])) { ?>
<div class="alert alert-success alert-dismissible" id="success-alert" style="display: grid; position: fixed; top: 10px; z-index: 99999; padding: 1rem;
left: 0;
right: 0;
max-width: 300px;
margin: 0 auto;">
    <?= $_SESSION["success"]; ?>
</div>
<?php } ?>

<?php if (@isset($_SESSION["failed"])) { ?>
<div class="alert alert-danger alert-dismissible" id="danger-alert" style="display: grid; position: fixed; top: 10px; z-index: 99999; padding: 1rem;
left: 0;
right: 0;
max-width: 300px;
margin: 0 auto;">
    <?= $_SESSION["failed"]; ?>
</div>
<?php } ?>