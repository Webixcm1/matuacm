<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    /**
     * show request reset password form
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        return view('Auth.resetpassword');
    }
}
