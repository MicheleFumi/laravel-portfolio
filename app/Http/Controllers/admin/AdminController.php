<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return 'questa è la homepage della area admin';
    }

    public function profile()
    {
        return Auth::user();
    }
}
