<?php $asset_base_path = base_url('admin/assets/'); ?>

<nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row navbar-mini fixed-top">
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>

        <!-- Brand Section -->
        <div class="navbar-brand-wrapper d-flex align-items-center">
            <a class="navbar-brand brand-logo" href="<?= url_to('admin.dashboard') ?>">
                <img src="<?= $asset_base_path ?>images/logo.png" alt="logo" style="width: 80px; height: auto;" />
            </a>
            <a class="navbar-brand brand-logo-mini d-lg-none" href="<?= url_to('admin.dashboard') ?>">
                <img src="<?= $asset_base_path ?>images/logo-mini.svg" alt="logo" />
            </a>
        </div>

        <!-- Welcome Message -->
        <h4 class="font-weight-bold mb-0 d-none d-lg-block mt-1 flex-grow-1 text-start">Welcome back, Ayesa Khatun
        </h4>

        <!-- Right-Side Content -->
        <ul class="navbar-nav flex-row align-items-center">
            <!-- Date Range -->
            <!-- <li class="nav-item d-none d-xl-block">
                <h4 class="mb-0 font-weight-bold">Mar 12, 2019 - Apr 10, 2019</h4>
            </li> -->

            <!-- Calendar Notifications -->
            <li class="nav-item dropdown me-2 ms-3">
                <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center" id="messageDropdown"
                    href="#" data-bs-toggle="dropdown">
                    <i class="mdi mdi-email-open mx-0"></i>
                    <span class="count bg-info">2</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list"
                    aria-labelledby="messageDropdown">
                    <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="<?= $asset_base_path ?>images/faces/face4.jpg" alt="image" class="profile-pic">
                        </div>
                        <div class="preview-item-content flex-grow">
                            <h6 class="preview-subject font-weight-normal">David Grey</h6>
                            <p class="font-weight-light small-text text-muted mb-0">The meeting is cancelled</p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="<?= $asset_base_path ?>images/faces/face2.jpg" alt="image" class="profile-pic">
                        </div>
                        <div class="preview-item-content flex-grow">
                            <h6 class="preview-subject font-weight-normal">Tim Cook</h6>
                            <p class="font-weight-light small-text text-muted mb-0">New product launch</p>
                        </div>
                    </a>
                </div>
            </li>

            <!-- Email Notifications -->
            <li class="nav-item dropdown me-2">
                <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center" id="notificationDropdown"
                    href="#" data-bs-toggle="dropdown">
                    <i class="mdi mdi-bell mx-0"></i>
                    <span class="count bg-danger">1</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list"
                    aria-labelledby="notificationDropdown">
                    <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-success">
                                <i class="mdi mdi-information mx-0"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject font-weight-normal">Application Error</h6>
                            <p class="font-weight-light small-text mb-0 text-muted">Just now</p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-warning">
                                <i class="mdi mdi-settings mx-0"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject font-weight-normal">Settings</h6>
                            <p class="font-weight-light small-text mb-0 text-muted">Private message</p>
                        </div>
                    </a>
                </div>
            </li>

            <!-- Profile Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" data-bs-toggle="dropdown"
                    id="profileDropdown">
                    <img src="<?= $asset_base_path ?>images/faces/face5.jpg" alt="profile"
                        style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; margin-right: 10px;" />
                    <span class="nav-profile-name d-none d-md-inline">Ayesa Khatun</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown" aria-labelledby="profileDropdown"
                    style="min-width: 200px;">
                    <a class="dropdown-item d-flex align-items-center">
                        <i class="mdi mdi-account-settings text-primary me-2"></i> Profile
                    </a>
                    <a class="dropdown-item d-flex align-items-center">
                        <i class="mdi mdi-key-variant text-primary me-2"></i> Change Password
                    </a>
                    <a class="dropdown-item d-flex align-items-center">
                        <i class="mdi mdi-settings text-primary me-2"></i> Settings
                    </a>
                    <a class="dropdown-item d-flex align-items-center">
                        <i class="mdi mdi-logout text-primary me-2"></i> Logout
                    </a>
                </div>
            </li>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </ul>
    </div>
</nav>