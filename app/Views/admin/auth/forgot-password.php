<?= $this->extend('themes/admin/auth/layout') ?>

<?= $this->section('content') ?>
<style>
    .auth-link:hover {
        color: blue !important;
    }
</style>

<div class="row w-100 mx-0">
    <div class="col-lg-4 mx-auto">
        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
            <div class="brand-logo text-center">
                <img src="<?= $assets_base_path ?? base_url('admin/assets/') ?>images/logo.png" alt="logo" width="200">
            </div>
            <h4>Forgot Password</h4>
            <p class="font-weight-light">Enter your email and we'll send you a link to reset your password.</p>
            <form class="pt-3">
                <div class="form-group">
                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
                        placeholder="Email">
                </div>
                <div class="mt-3 my-2 d-flex justify-content-between align-items-center">
                    <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="#">SUBMIT</a>

                    <a href="<?= url_to('admin.login') ?>" class="auth-link text-black text-decoration-none fs-6"><i
                            class="mdi mdi-chevron-double-left"></i> Back to Login</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>