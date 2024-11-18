<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\Admin\Auth as AdminAuth;
use App\Controllers\Admin\Dashboard as AdminDashboard;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// admin login
$routes->group('/admin', static function ($routes) {
    $routes->get('login', [AdminAuth::class, 'login'], ['as' => 'admin.login']);
    $routes->post('login', [AdminAuth::class, 'handle_login'], ['as' => 'admin.login']);

    $routes->get('forget-password', [AdminAuth::class, 'forget_password'], ['as' => 'admin.forget-password']);
    $routes->post('forget-password', [AdminAuth::class, 'handle_forget_password'], ['as' => 'admin.forget-password']);
    $routes->get('verify-email', [AdminAuth::class, 'verify_email'], ['as' => 'admin.verify-email']);
    $routes->get('reset-password', [AdminAuth::class, 'reset_password'], ['as' => 'admin.reset-password']);
    $routes->post('reset-password', [AdminAuth::class, 'handle_reset_password'], ['as' => 'admin.reset-password']);

    $routes->get('logout', [AdminAuth::class, 'logout'], ['as' => 'admin.logout'], ['filter' => 'adminAuth']);

    $routes->group('/', static function ($routes) {
        $routes->get('dashboard', [AdminDashboard::class, 'index'], ['as' => 'admin.dashboard']);
    });
});
