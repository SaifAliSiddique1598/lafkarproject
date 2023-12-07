<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioManagementController extends Controller
{
     public function index(){
        return view('admin.pages.portfolio-management.index');
    }
}
