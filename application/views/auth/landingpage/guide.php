<!-- ======= Hero Section ======= -->
<section id="" class="hero d-flex align-items-center p-3 pt-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="link-back p-0">
                    <a href="<?= base_url() ?>#guide">
                        <img src="<?= base_url() ?>assets/img/back-link.png" alt="">
                    </a>
                </div>
            </div>

            <?php if ($guide == 99) { ?>
                <div class="col-12 my-5 text-center">
                    <h1>Coming soon!</h1>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">

                        </div>
                    </div>
                </div>
            <?php } ?>

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
                            <b translate="no"> ExchangeTailor </b> offers the possibility of sending or receiving funds by
                            bank transfer, <b>even
                                from
                                a bank account not under your name</b>, without limitations, without any documentation
                            required and
                            anonymously.
                        </p>
                    </div>
                    <div class="col-12 text-center">
                        <div class="text-center bg-flowers-pink">
                            <img src="<?= base_url() ?>assets/img/flower.png" alt="" class="lt">
                            <img src="<?= base_url() ?>assets/img/flower.png" alt="" class="rb">
                            <p class="d-inline-block">
                                <b>Your wallet is identified through the </b><b translate="no"> ‘’Unique Code’’ </b><br>
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
                                <button id="btnaccorionOne" class="accordion-button freedy-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <div class="box-title-accordion ms-auto text-center">
                                        <span class="head">How to Topup your wallet and receive funds</span>
                                        <span class="small" id="seemoreOne">See more</span>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="pageOne" data-bs-parent="#accordionFreedy">
                                <div class="accordion-body freedy-accordion-body p-3 p-lg-5">
                                    <?php $this->load->view('auth/landingpage/guide-1-1'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item freedy-accordion-item mb-5">
                            <h2 class="accordion-header m-0" id="pageTwo">
                                <button id="btnaccorionTwo" class="accordion-button freedy-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="box-title-accordion ms-auto text-center">
                                        <span class="head">How to transfers funds between wallet to wallet</span>
                                        <span class="small" id="seemoreTwo">See more</span>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="pageTwo" data-bs-parent="#accordionFreedy">
                                <div class="accordion-body freedy-accordion-body p-3 p-lg-5">
                                    <?php $this->load->view('auth/landingpage/guide-1-2'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item freedy-accordion-item mb-5">
                            <h2 class="accordion-header m-0" id="pageThree">
                                <button id="btnaccorionThree" class="accordion-button freedy-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="box-title-accordion ms-auto text-center">
                                        <span class="head">How to convert currencies </span>
                                        <span class="small" id="seemoreThree">See more</span>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="pageThree" data-bs-parent="#accordionFreedy">
                                <div class="accordion-body freedy-accordion-body p-3 p-lg-5">
                                    <?php $this->load->view('auth/landingpage/guide-1-3'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item freedy-accordion-item mb-5">
                            <h2 class="accordion-header m-0" id="pageFour">
                                <button id="btnaccorionFour" class="accordion-button freedy-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <div class="box-title-accordion ms-auto text-center">
                                        <span class="head">How to withdraw funds and make bank transfers</span>
                                        <span class="small" id="seemoreFour">See more</span>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="pageFour" data-bs-parent="#accordionFreedy">
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
                    <h3 class="fw-bold">With <b translate="no"> ExchangeTailor </b> your money travels with you.</h3>
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
                                        in one of the 10 currencies that allows you to receive bank transfers.<br>
                                        You just need to follow the easy procedure that you can find in the
                                        <b translate="no"> ‘’Deposit/Receive’’ </b> section of your wallet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 text-center px-2 py-2">
                            <h5 class="card-title my-3 text-blue-freedy fw-bold">Step 2</h5>
                            <div class="card freedy-card text-center">
                                <div class="card-body">
                                    <p class="card-text">Select one of the currencies
                                        in where you have the funds and
                                        Click the button <b translate="no"> ‘’Swap’’ </b></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 text-center px-2 py-2">
                            <h5 class="card-title my-3 text-blue-freedy fw-bold">Step 3</h5>
                            <div class="card freedy-card text-center">
                                <div class="card-body">
                                    <p class="card-text">Enter the amount and choose
                                        one of the 50 currencies that allows you to convert and send and
                                        click <b translate="no"> ‘’Confirm’’ </b>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 text-center px-2 py-2">
                            <h5 class="card-title my-3 text-blue-freedy fw-bold">Step 4</h5>
                            <div class="card freedy-card text-center">
                                <div class="card-body">
                                    <p class="card-text"><b>Congratulations!</b><br>
                                        Now you can make easy and fast payments in the currency of the country you are in
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
                                The wallet functions of <b translate="no"> ExchangeTailor </b> are suitable for all daily
                                payments, even for small
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
                <div class="col-12 text-center">
                    <h3>Coming soon!</h3>
                </div>

                <div class="col-12">
                    <div class="logo-text text-center">
                        <h2 class="title-top-header fw-bold">
                            Buy and sell crypto using FIAT currencies <br>
                            ‘’<b translate="no">Trade-Off </b> Platform’’
                        </h2>
                    </div>
                </div>
                <div class="col-12 mb-5 mt-3">
                    <div class="col-12 text-center mb-5">
                        <p class="mb-5">
                            <b translate="no"> ExchangeTailor </b> offers the possibility to buy and sell cryptocurrencies
                            using FIAT, directly from
                            any FIAT balance of your <b translate="no"> ExchangeTailor </b> wallet.<br>
                            <b translate="no"> ExchangeTailor </b> also give the possibility to withdraw<br>
                            your funds by converting them INTO ANY FIAT CURRENCY; after conversion you can send your funds
                            to any bank account, even if it is not under your name,<br>
                            thanks to the integrated <b translate="no"> trade-off </b> platform.<br>
                            <br>
                            <b translate="no"> ExchangeTailor </b>, being a <b translate="no"> trade-off </b> platform, the
                            ‘’Buy’’ and ‘’Sell’’
                            orders are just ‘’LIMIT’’
                            orders.
                        </p>

                        <h3 class="fw-bold text-blue-freedy">How to topup crypto wallet</h3>

                        <p class="mt-3">In order to topup your <b translate="no"> ExchangeTailor </b> crypto wallet follow the procedure below :</p>

                    </div>
                    <div class="d-flex flex-row justify-content-center flex-wrap">
                        <div class="in-crypto">
                            <span>Step 1</span>
                            <div class="box-crypto">
                                <p class="mb-3">Log in to your <b translate="no"> ExchangeTailor </b> wallet and select
                                    crypto</p>
                                <img class="my-auto img-fluid" src="<?= base_url() ?>assets/img/crypto-1.png" alt="">
                            </div>
                        </div>
                        <div class="in-crypto">
                            <span>Step 2</span>
                            <div class="box-crypto">
                                <p class="mb-3">Click top up button</p>
                                <img class="my-auto img-fluid" src="<?= base_url() ?>assets/img/crypto-2.png" alt="">
                            </div>
                        </div>
                        <div class="in-crypto">
                            <span>Step 3</span>
                            <div class="box-crypto">
                                <p class="mb-3">Select the FIAT currency that you want to convert in USDX, enter the
                                    amount and click convert</p>
                            </div>
                        </div>
                        <div class="in-crypto">
                            <span>Step 4</span>
                            <div class="box-crypto">
                                <p class="mb-3">After clicking convert make sure that all data are correct and then click
                                    on the button confirm</p>
                            </div>
                        </div>
                        <div class="in-crypto">
                            <span>Step 5</span>
                            <div class="box-crypto">
                                <p class="mb-3">Congratulations! Now you can start to buy and sell crypto</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 text-center mt-5">
                        <h3 class="fw-bold text-blue-freedy">How to buy and sell crypto by placing limit order</h3>

                        <p class="mt-3">
                            A buy limit order will be executed only at the limit price or a lower price; and a sell limit
                            order will be executed only at the limit price or a higher one.
                            <br>
                            The price is guaranteed, but the filling of the order is not. Limit orders will be executed only
                            if the price meets the order qualifications.
                        </p>

                        <div class="box-p-crypto">
                            <p>To start trading, enter the price you want to trade at, once you've entered the amount, you
                                can choose to enter the amount of cryptocurrency you want to buy/sell  or the USDX amount
                                you want to spend or receive.</p>
                        </div>

                        <h3 class="fw-bold text-blue-freedy">How to withdraw your earning</h3>

                        <p class="mt-3">
                            In order to withdraw your your funds follow the procedure below :
                        </p>

                    </div>

                    <div class="d-flex flex-row justify-content-center flex-wrap">
                        <div class="in-crypto">
                            <span>Step 1</span>
                            <div class="box-crypto">
                                <p class="mb-3">From your wallet, in crypto section, click the button withdraw</p>
                                <img class="my-auto img-fluid" src="<?= base_url() ?>assets/img/crypto-3.png" alt="">
                            </div>
                        </div>
                        <div class="in-crypto">
                            <span>Step 2</span>
                            <div class="box-crypto">
                                <p class="mb-3">Enter the USDX amount that you want to convert, choose your favorite FIAT
                                    currency and click withdraw</p>
                            </div>
                        </div>
                        <div class="in-crypto">
                            <span>Step 3</span>
                            <div class="box-crypto">
                                <p class="mb-3">After clicking withdraw make sure that all data are correct and then click
                                    on confirm</p>
                            </div>
                        </div>
                        <div class="in-crypto">
                            <span>Step 4</span>
                            <div class="box-crypto">
                                <p class="mb-3">Congratulations! Now your balance is available on your FIAT wallet, in the
                                    chosen currency</p>
                            </div>
                        </div>
                        <div class="in-crypto">
                            <span>Step 5</span>
                            <div class="box-crypto">
                                <p class="mb-3">Now you can transfer your funds to any bank account, even if is not under
                                    your name, in more than 50 currencies</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 text-center">
                    <h3>Coming soon!</h3>
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
                            <b translate="no"> ExchangeTailor </b> offers a simple, risk-free and 100% legal solution.
                            The user who wants to send capital abroad will have to open a <b translate="no"> ExchangeTailor
                            </b> account and will
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
                            <b translate="no"> ExchangeTailor </b>, making use of the licensee company's capitals, partners
                            and offices, in
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
                                that accept <b translate="no"> ExchangeTailor </b> as a collection and payment system.
                            </p>
                        </div>
                        <div class="col-6 d-none d-md-grid">
                            <img src="<?= base_url() ?>assets/img/img-13.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            <?php } ?>

            <?php if ($guide == 6) { ?>
                <div class="col-12 text-center">
                    <h3>Coming soon!</h3>
                </div>
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
                                that accept <b translate="no"> ExchangeTailor </b> as a collection and payment system.
                            </p>
                        </div>
                        <div class="col-4 d-none d-md-grid mx-auto">
                            <img src="<?= base_url() ?>assets/img/img-14.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-12 my-5 text-center">
                    <h3>Coming soon!</h3>
                </div>
            <?php } ?>
            
            <!-- Start Findme -->
            <?php if ($guide == 7) { ?>
                <div class="col-12 my-5">
                    <div class="logo-text text-center">
                        <div class="wrap-icon-guide-7 d-flex justify-content-center align-items-center mx-auto ">
                            <img src="<?= base_url() ?>assets/img/icon-guide-7.png" alt="icon-guide-7">
                        </div>
                        <span class="f-poppins fw-bolder text-blue-freedy mt-3">Find me</span>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12 col-md-6 text-md-start">
                            <p><b translate="no"> ExchangeTailor </b> allows you to increase the visibility of your business
                                by including it in the
                                search section that will be in every single wallet of all the users.
                                <br>
                                In this way your company will be easily accessible and traceable by all users who use
                                <b translate="no"> ExchangeTailor </b> for daily payments.
                            </p>
                            <h6 class="text-blue-freedy fw-bolder f-poppins mt-5">
                                START TO APPLY NOW FOR FIND ME SERVICE
                            </h6>
                            <form id="form-input-unique-code" action="<?=base_url()?>link/getref" method="post" class="w-100 my-3">
                                <input 
                                    type="hidden" 
                                    id="token"
                                    name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                    value="<?php echo $this->security->get_csrf_hash(); ?>" 
                                    class="input-unique-code"    
                                >   
                                <div class="row d-flex flex-column flex-md-row justify-content-center align-items-center justify-content-lg-start">
                                    <div class="col-12 col-md-9 col-lg-7 col-xl-5">
                                        <input type="text" name="ucode" maxlength="8" class="input-unique-code" placeholder="Enter your Unique Code">
                                    </div>
                                    <div class="col-12 col-md-3 col-lg-2">
                                        <button type="submit" class="btn-unique-code d-flex justify-content-center align-items-center btn my-3">
                                            <span class="mx-3">
                                                Next
                                            </span>
                                            <div class="circle-btn-unique-code flex justify-content-center">
                                                <i class="ri-arrow-right-line fs-4"></i>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <h6 class="text-blue-freedy fw-bolder f-poppins mb-5">
                                How to register to FIND ME service :
                            </h6>

                            <p class="">
                                Enter your unique code in order to validate your account, then click next and fill out all the fields that you find on the next pages, make sure to have ready an image of your business logo of and prepare the google maps link your business locations
                            </p>

                            <p>
                                If you encounter problems while applying, contact our support service :
                            </p>

                            <p class="fw-semibold text-decoration-underline">
                                 contact@exchangetailor.com
                            </p>

                            <div class="col-12 d-flex flex-column justify-content-center">
                                <div class="content-freedy line text-start d-flex flex-row">
                                
                                </div>
                            </div>
                        </div>
                            
                        <div class="col-4 d-none d-md-grid mx-auto">
                            <img src="<?= base_url() ?>assets/img/img-15.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                
            <?php } ?>
            <!-- End Findme -->

            <?php if ($guide == 8) { ?>
                <div class="col-12 text-center">
                    <h3>Coming soon!</h3>
                </div>
                <div class="col-12 my-5">
                    <div class="logo-text text-center">
                        <img src="<?= base_url() ?>assets/img/icon-guide-8.png" alt="">
                        <span class="f-lexend text-blue-freedy">Collections and Payments</span>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="content-freedy">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <p>
                                    <b translate="no"> ExchangeTailor </b> offers your company, a multi-currency collection
                                    and payment system that
                                    can
                                    be easily integrated into your e-commerce :
                                </p>
                                <div class="col-12 d-flex flex-column justify-content-center">
                                    <div class="content-freedy circle text-start d-flex flex-row">
                                        <ul class="ps-0">
                                            <li class="ali">Integration is free of charge</li>
                                            <li class="ali">No monthly and no annual fees</li>
                                            <li class="ali">Collections in real time from users of the TracklessBank circuit
                                            </li>
                                            <li class="ali">Cheaper than credit cards</li>
                                            <li class="ali">Reception and sending of national and international bank
                                                transfers
                                                at
                                                the lowest rates on the market</li>
                                            <li class="ali">100% secure and free funds custody
                                                Possibility of converting instantly to and from other currencies.</li>
                                            <li class="ali">Eliminates the problem of tedious changes compared to the use of
                                                cash</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <div class="col-4 d-none d-md-grid mx-auto">
                                <img src="<?= base_url() ?>assets/img/img-23.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-12">
                                <h4 class="text-dark">Request the service by contacting : ........@trackless.com</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 my-5 text-center">
                    <h3>Coming soon!</h3>
                </div>
            <?php } ?>
        </div>
    </div>
</section><!-- End Hero -->


<!-- Notifikasi -->
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