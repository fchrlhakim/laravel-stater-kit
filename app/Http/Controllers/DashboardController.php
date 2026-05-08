<?php

namespace App\Http\Controllers;

use App\Http\ViewModels\DashboardViewModel;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(DashboardViewModel $viewModel): View
    {
        return view('dashboard.index', [
            'stats' => $viewModel->stats(),
            'folders' => $viewModel->folders(),
        ]);
    }
}
