<div class="login bg-signin">
    <div class="container">
        <div class="row d-flex d-lg-inline-grid justify-content-center justify-content-xl-start">
            <div class="col-10 col-sm-9 col-md-7 col-lg-5 box-form">
                <a href="<?= base_url(); ?>auth/login" class="link-back">
                    <img src="<?= base_url() ?>assets/img/back.png" alt="">
                </a>
                <form class="form-login-freedy d-flex align-items-start flex-column" style="height: 100%;" method="POST" action="<?= base_url(); ?>auth/register">
                    <?php if (@isset($_SESSION["failed"])) { ?>
                        <div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
                            <span class="notif-login f-poppins"><?= $_SESSION["failed"] ?></span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } ?>
                    <?php if (@isset($_SESSION["success"])) { ?>
                        <div class="col-12 alert alert-success alert-dismissible fade show" role="alert">
                            <span class="notif-login f-poppins"><?= @$_SESSION["success"] ?></span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } ?>
                    <input type="hidden" id="token" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                    <input type="hidden" name="time_location" id="time_location">
                    <input type="hidden" name="referral" value="<?= @$_SESSION["referral"] ?>">
                    <div class="col-12 mb-5 text-center">
                        <a href="<?= base_url() ?>">
                            <img src="<?= base_url(); ?>assets/img/logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-12 mb-4">
                        <label for="email" class="form-label f-publicsans">Email</label>
                        <div class="input-group">
                            <input type="email" class="form-control f-publicsans" id="email" name="email" value="<?php if (@isset($_SESSION['email'])) {
                                                                                                                        echo $_SESSION['email'];
                                                                                                                    } ?>" required>
                            <div class="input-group-text">
                                <span>
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <label for="email" class="form-label f-publicsans">Confirm Email</label>
                        <div class="input-group">
                            <input type="email" class="form-control f-publicsans" id="email" name="confirmemail" value="<?php if (@isset($_SESSION['confirmemail'])) {
                                                                                                                            echo $_SESSION['confirmemail'];
                                                                                                                        } ?>" required>
                            <div class="input-group-text">
                                <span>
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <label for="password1" class="form-label f-publicsans">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control f-publicsans" name="pass" id="password1" value="" required>
                            <div class="input-group-text">
                                <span>
                                    <i class="fa fa-eye" id="togglePassword1" style="cursor: pointer" toggle="#password1"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <label for="password2" class="form-label f-publicsans">Confirm Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control f-publicsans" name="confirmpass" id="password2" value="" required>
                            <div class="input-group-text">
                                <span>
                                    <i class="fa fa-eye" id="togglePassword2" style="cursor: pointer" toggle="#password2"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-5">
                        <label for="email" class="form-label f-publicsans">Refferal code <span class="text-mute">(
                                optional )</span>
                        </label>
                        <div class="input-group">
                            <input type="text" class="form-control f-publicsans py-2" id="referral" name="referral" value="<?= @$_COOKIE['ref'] ?>">
                        </div>
                    </div>
                    <div class="g-recaptcha" data-sitekey="<?php echo $this->config->item('google_key') ?>"></div>
                    <div class="col-12 mt-5 d-grid gap-2">
                        <button type="submit" class="btn btn-login f-roboto">SIGN UP</button>
                        <a href="<?= base_url(); ?>auth/login">Do you have account ? LOG IN</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>