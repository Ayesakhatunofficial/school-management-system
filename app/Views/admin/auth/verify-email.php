<?= $this->extend('themes/admin/auth/layout') ?>

<?= $this->section('content') ?>

<div class="row w-100 mx-0">
    <div class="col-lg-4 mx-auto">
        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
            <div class="brand-logo text-center">
                <img src="<?= $assets_base_path ?? base_url('admin/assets/') ?>images/logo.png" alt="logo" width="200">
            </div>

            <div class="text-center">
                <p class="text-danger fs-6"><?= $message ?></p>
                <div class="countdown">Redirecting in <span id="countdown">3</span> seconds...</div>
            </div>

        </div>
    </div>
</div>

<script>
    let countdownValue = 3;
    const countdownElement = document.getElementById('countdown');

    const countdownInterval = setInterval(() => {
        countdownValue--;
        countdownElement.textContent = countdownValue;

        if (countdownValue === 0) {
            clearInterval(countdownInterval); // Stop the countdown
            <?php if ($ok === true): ?>
                window.location.href = '<?= url_to('admin.reset-password') ?>';
            <?php else: ?>
                window.location.href = '<?= url_to('admin.forget-password') ?>';
            <?php endif ?>
        }
    }, 1000)
</script>

<?= $this->endSection() ?>