<?php

namespace App\Http\Controllers;

use App\Models\CovidCase;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $cases = CovidCase::orderBy('province', 'asc')->paginate(10);

        return view('dashboard', [
            'cases' => $cases
        ]);
    }
}
