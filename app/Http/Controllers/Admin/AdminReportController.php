<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminReportController extends Controller
{
    public function Index()
    {
        return view('admin.home.index');
        # code...
    }
    public function Form()
    {
        return view('admin.home.add');
        # code...
    }
}
