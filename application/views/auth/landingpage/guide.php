<!-- ======= Hero Section ======= -->
<section id="" class="hero d-flex align-items-center p-3 pt-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="link-back p-0">
                    <a href="<?= base_url() ?>">
                        <img src="<?= base_url() ?>assets/img/back-link.png" alt="">
                    </a>
                </div>
            </div>

            <?php if ($guide == 1) { ?>
            <div class="col-12 my-5">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/icon-guide-1.png" alt="">
                    <span class="fw-bold text-blue-freedy f-lexend">Wallet</span>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="col-12 text-center mb-5">
                    <p>
                        ExchangeTailor offers the possibility of sending or receiving funds by bank transfer, <b>even
                            from
                            a bank account not under your name</b>, without limitations, without any documentation
                        required and
                        anonymously.
                    </p>
                </div>
                <div class="col-12 text-center">
                    <div class="text-center bg-flowers-pink">
                        <img src="<?=base_url()?>assets/img/flower.png" alt="" class="lt">
                        <img src="<?=base_url()?>assets/img/flower.png" alt="" class="rb">
                        <p class="d-inline-block">
                            <b>Your wallet is identified through the ‘’Unique Code’’</b><br>
                            (you can find it on the home page of your account)<br>
                            <b>You have to use your Unique Code in order to topup your wallet and receive incoming
                                transfers</b>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="accordion" id="accordionFreedy">
                    <div class="accordion-item freedy-accordion-item mb-5">
                        <h2 class="accordion-header m-0" id="pageOne">
                            <button id="btnaccorionOne" class="accordion-button freedy-accordion-button collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                aria-expanded="false" aria-controls="collapseOne">
                                <div class="box-title-accordion ms-auto text-center">
                                    <span class="head">How to Topup your wallet and receive funds</span>
                                    <span class="small" id="seemoreOne">See more</span>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="pageOne"
                            data-bs-parent="#accordionFreedy">
                            <div class="accordion-body freedy-accordion-body p-3 p-lg-5">
                                <?php $this->load->view('auth/landingpage/guide-1-1'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item freedy-accordion-item mb-5">
                        <h2 class="accordion-header m-0" id="pageTwo">
                            <button id="btnaccorionTwo" class="accordion-button freedy-accordion-button collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                <div class="box-title-accordion ms-auto text-center">
                                    <span class="head">How to transfers funds between wallet to wallet</span>
                                    <span class="small" id="seemoreTwo">See more</span>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="pageTwo"
                            data-bs-parent="#accordionFreedy">
                            <div class="accordion-body freedy-accordion-body p-3 p-lg-5">
                                <?php $this->load->view('auth/landingpage/guide-1-2'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item freedy-accordion-item mb-5">
                        <h2 class="accordion-header m-0" id="pageThree">
                            <button id="btnaccorionThree" class="accordion-button freedy-accordion-button collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                <div class="box-title-accordion ms-auto text-center">
                                    <span class="head">How to convert currencies</span>
                                    <span class="small" id="seemoreThree">See more</span>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="pageThree"
                            data-bs-parent="#accordionFreedy">
                            <div class="accordion-body freedy-accordion-body p-3 p-lg-5">
                                <?php $this->load->view('auth/landingpage/guide-1-3'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item freedy-accordion-item mb-5">
                        <h2 class="accordion-header m-0" id="pageFour">
                            <button id="btnaccorionFour" class="accordion-button freedy-accordion-button collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                                <div class="box-title-accordion ms-auto text-center">
                                    <span class="head">How to withdraw funds and make bank transfers</span>
                                    <span class="small" id="seemoreFour">See more</span>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="pageFour"
                            data-bs-parent="#accordionFreedy">
                            <div class="accordion-body freedy-accordion-body p-3 p-lg-5">
                                <?php $this->load->view('auth/landingpage/guide-1-4'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php if ($guide == 2) { ?>
            <div class="col-12 my-5">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/icon-guide-2.png" alt="">
                    <span class="f-lexend text-blue-freedy">Easy trips</span>
                </div>
            </div>
            <div class="col-12 mb-5 text-center">
                <h3 class="fw-bold">With ExchangeTailor your money travels with you.</h3>
                <p>Follow few easy steps to instant convert FIAT currencies and make easy payments from wherever
                    you want
                </p>
            </div>

            <div class="col-12 mb-5">
                <div class="d-flex flex-column flex-md-row flex-wrap justify-content-center">
                    <div class="col-12 col-md-6 col-lg-3 text-center px-2 py-2">
                        <h5 class="card-title my-3 text-blue-freedy fw-bold">Step 1</h5>
                        <div class="card freedy-card text-center">
                            <div class="card-body">
                                <p class="card-text">
                                    Top up your wallet by bank transfers
                                    in one of the 10 currencies that allows you to receive bank transfers (see the
                                    list).
                                    You just need to follow the easy procedure that you can find in the
                                    ‘’Deposit/Receive’’ section of your wallet
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 text-center px-2 py-2">
                        <h5 class="card-title my-3 text-blue-freedy fw-bold">Step 2</h5>
                        <div class="card freedy-card text-center">
                            <div class="card-body">
                                <p class="card-text">Select one of the currency
                                    in where you have the funds and
                                    Click the button ‘’Swap’’</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 text-center px-2 py-2">
                        <h5 class="card-title my-3 text-blue-freedy fw-bold">Step 3</h5>
                        <div class="card freedy-card text-center">
                            <div class="card-body">
                                <p class="card-text">Enter the amount and choose
                                    one of the 50 currencies that allows you to convert and send (see the list) and
                                    click ‘’Confirm’’
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 text-center px-2 py-2">
                        <h5 class="card-title my-3 text-blue-freedy fw-bold">Step 4</h5>
                        <div class="card freedy-card text-center">
                            <div class="card-body">
                                <p class="card-text">Congratulations!
                                    Now you can make easy and fast payments in the currencies of the country you are in
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php if ($guide == 3) { ?>
            <div class="col-12 my-5">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/icon-guide-3.png" alt="">
                    <span class="f-lexend text-blue-freedy">Daily use</span>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <p>
                            The wallet functions of ExchangeTailor are suitable for all daily payments, even for small
                            amounts; everywhere in the world.
                        </p>
                        <div class="col-12 d-flex flex-column justify-content-center">
                            <div class="content-freedy circle text-start">
                                <ul class="ps-0">
                                    <li class="ali">Low and fixed fees </li>
                                    <li class="ali">Convert currencies for free during any trip</li>
                                    <li class="ali">More convenient, faster and safer than the use of cash and credit
                                        cards</li>
                                    <li class="ali">User will be able to make any payment from his own device </li>
                                    <li class="ali">Balance will be updated in real time </li>
                                    <li class="ali">Can be consulted directly through the specific application</li>
                                    <li class="ali">Respect of the privacy and anonymity of each user as no sms email or
                                        paper will be sent</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-none d-md-grid">
                        <img src="<?= base_url() ?>assets/img/img-12.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php if ($guide == 4) { ?>
            <div class="col-12 my-5">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/icon-guide-4.png" alt="">
                    <span class="f-lexend text-blue-freedy">Buy&sell crypto with FIAT</span>

                    <h1>Coming soon!</h1>
                </div>
            </div>
            <?php } ?>

            <?php if ($guide == 5) { ?>
            <div class="col-12 my-5">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/icon-guide-5.png" alt="">
                    <span class="fw-bold text-blue-freedy f-lexend">Capital Exportation</span>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="col-12 text-center mb-5">
                    <p>
                        Given the increasingly stringent and restrictive regulations on international bank transfers,
                        ExchangeTailor offers a simple, risk-free and 100% legal solution.
                        The user who wants to send capital abroad will have to open a ExchangeTailor account and will
                        have to carry out the following procedure to remain in the legality and away from tax
                        assessments:
                    </p>
                </div>
                <div class="col-12 mb-5">
                    <div class="d-flex flex-column flex-md-row flex-wrap justify-content-center">
                        <div class="col-12 col-md-6 col-lg-4 px-2 py-2">
                            <div class="card freedy-card small text-center">
                                <div class="card-body">
                                    <h5 class="card-title text-blue-freedy fw-bold">Step 1</h5>
                                    <p class="card-text"><b>Top up wallet</b> (the top up is not a credit transfer and
                                        therefore is not fiscally relevant as it is not comparable to a payment).</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 px-2 py-2">
                            <div class="card freedy-card small text-center">
                                <div class="card-body">
                                    <h5 class="card-title text-blue-freedy fw-bold">Step 2</h5>
                                    <p class="card-text"><b>Convert</b> the amount to export into the currency of the
                                        destination country (the currency conversion is also not fiscally relevant).</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 px-2 py-2">
                            <div class="card freedy-card small text-center">
                                <div class="card-body">
                                    <h5 class="card-title text-blue-freedy fw-bold">Step 3</h5>
                                    <p class="card-text"><b>Send</b> the converted amount, via our platform, as a
                                        national transfer (with this procedure the international transfer is
                                        eliminated).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 text-center mb-5">
                    <h3 class="text-dark fw-bold">How we make this service possible?</h3>
                    <div class="col-12 col-md-8 mx-auto my-4">
                        <img src="<?= base_url() ?>assets/img/img-13.png" alt="" class="img-fluid">
                    </div>
                    <p>
                        <b>ExchangeTailor</b>, making use of the licensee company's capitals, partners and offices, in
                        order to
                        respect the laws in force on the matter, will not carry out an international transfer but will
                        send a national transfer from the current account of the country of destination to the current
                        account required by the sender, in the same country, carrying out an internal clearing only
                        afterwards (the internal clearing procedure is 100% legal).
                    </p>
                </div>
            </div>
            <?php } ?>

            <?php if ($guide == 11) { ?>
            <div class="col-12 my-5">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/icon-guide-4.png" alt="">
                    <span class="f-lexend text-blue-freedy">Essential for your trips</span>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h3 class="text-dark">With PiggyBank your money travels with you.</h3>
                        <p>
                            With this function integrated into your wallet, you will be able to see all the activities
                            that accept ExchangeTailor as a collection and payment system.
                        </p>
                    </div>
                    <div class="col-6 d-none d-md-grid">
                        <img src="<?= base_url() ?>assets/img/img-13.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php if ($guide == 6) { ?>
            <div class="col-12 my-5">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/icon-guide-6.png" alt="">
                    <span class="f-lexend text-blue-freedy">Search</span>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="row">
                    <div class="col-12 col-md-6 my-auto">
                        <p>With this function integrated into your wallet, you will be able to see all the activities
                            that accept <b>ExchangeTailor</b> as a collection and payment system.
                        </p>
                    </div>
                    <div class="col-4 d-none d-md-grid mx-auto">
                        <img src="<?= base_url() ?>assets/img/img-14.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php if ($guide == 7) { ?>

            <div class="col-12 my-5">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/icon-guide-7.png" alt="">
                    <span class="f-lexend text-blue-freedy">Find me</span>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <p>ExchangeTailor allows you to increase the visibility of your business by including it in the
                            search section that will be in every single wallet of all the users.
                            In this way your company will be easily accessible and traceable by all users who use
                            ExchangeTailor for daily payments.
                        </p>

                        <p>
                            <b class="text-blue-freedy">How to access to FIND ME service :</b> <br>
                            Send an email to <u class="text-dark">contact@ExchangeTailor.org</u> with the<br>
                            subject FIND ME<br>
                            The email must contain the following data:
                        </p>

                        <div class="col-12 d-flex flex-column justify-content-center">
                            <div class="content-freedy line text-start d-flex flex-row">
                                <ul class="ps-0 w-50">
                                    <li class="ali">Name of the business</li>
                                    <li class="ali">Product category</li>
                                    <li class="ali">Google map link</li>
                                </ul>
                                <ul class="ps-0 w-50">
                                    <li class="ali">Website link</li>
                                    <li class="ali">Own unique code </li>
                                    <li class="ali">Attachment of the company logo in .PNG format</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 d-none d-md-grid mx-auto">
                        <img src="<?= base_url() ?>assets/img/img-15.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php if ($guide == 8) { ?>
            <div class="col-12 my-5">
                <div class="logo-text text-center">
                    <img src="<?= base_url() ?>assets/img/icon-guide-8.png" alt="">
                    <span class="f-lexend text-blue-freedy">Collections and Payments</span>

                    <h1>Coming soon!</h1>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section><!-- End Hero -->