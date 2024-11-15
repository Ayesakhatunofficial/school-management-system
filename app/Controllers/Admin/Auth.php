<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function login()
    {
        return view('admin/auth/login');
    }

    public function forget_password()
    {
        return view('admin/auth/forgot-password');
    }

    public function reset_password()
    {
        return view('admin/auth/reset-password');
    }

    public function verify_email()
    {
        return view('admin/auth/verify-email', [
            'message' => 'Email verifed!',
            'ok' => true
        ]);
    }
}