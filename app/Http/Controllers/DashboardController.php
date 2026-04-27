<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $chart = [
            'feb' => 50,
            'mar' => 60,
            'apr' => 10,
            'mei' => 20,
            'juni' => 10
        ];
        return view('pages.dashboard.dashboard', compact('chart'));
    }
}
