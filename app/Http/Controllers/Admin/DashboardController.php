<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $boxes = [];

        $boxes[] = [
            'title' => 'New Trades',
            'des'   => 'All New Trades',
            'value' => 100,
            'icon'  => '<span class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                            <i data-feather="briefcase" class="text-primary"></i>
                        </span>',
            'color' => 'bg-aqua',
            'link'  => '/'
        ];

        $boxes[] = [
            'title' => 'New Traders',
            'des'   => 'All New Traders',
            'value' => 100,
            'icon'  => '<span class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                                        <i data-feather="briefcase" class="text-primary"></i>
                                    </span>',
            'color' => 'bg-aqua',
            'link'  => '/'
        ];

        $boxes[] = [
            'title' => 'Withdrawal Requests',
            'des'   => 'All Withdrawal Requests',
            'value' => 100,
            'icon'  => '<span class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                                        <i data-feather="briefcase" class="text-primary"></i>
                                    </span>',
            'color' => 'bg-aqua',
            'link'  => '/'
        ];

        $boxes[] = [
            'title' => 'Conversion Requests',
            'des'   => 'All Conversion Requests',
            'value' => 100,
            'icon'  => '<span class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                                        <i data-feather="briefcase" class="text-primary"></i>
                                    </span>',
            'color' => 'bg-aqua',
            'link'  => '/'
        ];

        $boxes[] = [
            'title' => 'Total Sales',
            'des'   => 'All Total Sales',
            'value' => 100,
            'icon'  => '<span class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                                        <i data-feather="briefcase" class="text-primary"></i>
                                    </span>',
            'color' => 'bg-aqua',
            'link'  => '/'
        ];

        $boxes[] = [
            'title' => 'Total Traders',
            'des'   => 'Total Traders',
            'value' => 100,
            'icon'  => '<span class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                                        <i data-feather="briefcase" class="text-primary"></i>
                                    </span>',
            'color' => 'bg-aqua',
            'link'  => '/'
        ];

        $boxes[] = [
            'title' => 'Total Profit Paid',
            'des'   => 'Total Profit Paid',
            'value' => 100,
            'icon'  => '<span class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                                        <i data-feather="briefcase" class="text-primary"></i>
                                    </span>',
            'color' => 'bg-aqua',
            'link'  => '/'
        ];

        $boxes[] = [
            'title' => 'Total Trade Premium Paid',
            'des'   => 'Total Trade Premium Paid',
            'value' => 100,
            'icon'  => '<span class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                                        <i data-feather="briefcase" class="text-primary"></i>
                                    </span>',
            'color' => 'bg-aqua',
            'link'  => '/'
        ];

        return view('admin.dashboard', compact('boxes'));
    }

    public function page($slug){
        return view('admin.pages.'. $slug);
    }
}
