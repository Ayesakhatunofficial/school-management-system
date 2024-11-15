<?php $assets_base_path = base_url('admin/assets/') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>School Management System</title>
    <!-- base:css -->
    <link rel="stylesheet" href="<?= $assets_base_path ?>vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= $assets_base_path ?>vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= $assets_base_path ?>css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= $assets_base_path ?>images/school.png" />

    <style>
        .custom-hover:hover {
            color: red;
            /* Bootstrap primary color */
        }
    </style>
</head>



<body>
    <div class="container-scroller d-flex">
        <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
            <div class="content-wrapper d-flex align-items-center auth px-0">

                <?= $this->renderSection('content') ?>

            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="<?= $assets_base_path ?>vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <script src="<?= $assets_base_path ?>js/jquery.cookie.js" type="text/javascript"></script>
    <!-- inject:js -->
    <script src="<?= $assets_base_path ?>js/off-canvas.js"></script>
    <script src="<?= $assets_base_path ?>js/hoverable-collapse.js"></script>
    <script src="<?= $assets_base_path ?>js/template.js"></script>
    <!-- endinject -->
</body>

</html>