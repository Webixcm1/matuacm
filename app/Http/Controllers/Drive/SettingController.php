<?php

namespace App\Http\Controllers\Drive;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Handle display view setting
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        return view('drive.setting');
    }
}
