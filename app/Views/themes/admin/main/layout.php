<?php $asset_base_path = base_url('admin/assets/'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>School Management System</title>
    <link rel="stylesheet" href="<?= $asset_base_path ?>vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= $asset_base_path ?>vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?= $asset_base_path ?>css/style.css">
    <link rel="shortcut icon" href="<?= $asset_base_path ?>images/school.png" />
    <style>
        .footer-name:hover {
            color: blue !important;
        }
    </style>
</head>

<body class="navbar-fixed-top">
    <div class="container-scroller d-flex">

        <?= $this->include('themes/admin/main/sidebar') ?>

        <div class="container-fluid page-body-wrapper">

            <?= $this->include('themes/admin/main/header') ?>

            <div class="main-panel">

                <div class="content-wrapper">
                    <?= $this->renderSection('content') ?>
                </div>

                <?= $this->include('themes/admin/main/footer') ?>

            </div>

        </div>

    </div>

    <script src="<?= $asset_base_path ?>vendors/js/vendor.bundle.base.js"></script>
    <script src="<?= $asset_base_path ?>vendors/chart.js/Chart.min.js"></script>
    <script src="<?= $asset_base_path ?>js/jquery.cookie.js" type="text/javascript"></script>
    <script src="<?= $asset_base_path ?>js/off-canvas.js"></script>
    <script src="<?= $asset_base_path ?>js/hoverable-collapse.js"></script>
    <script src="<?= $asset_base_path ?>js/template.js"></script>
    <script src="<?= $asset_base_path ?>js/jquery.cookie.js" type="text/javascript"></script>
    <script src="<?= $asset_base_path ?>js/dashboard.js"></script>
</body>

</html>