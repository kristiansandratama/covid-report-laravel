<?php

namespace App\Http\Controllers;

use Excel;
use Pdf;
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

    public function print()
    {
        $cases = CovidCase::orderBy('province', 'asc')->get();
        $confirmed_sum = CovidCase::sum('confirmed');
        $in_care_sum = CovidCase::sum('in_care');
        $recovered_sum =  CovidCase::sum('recovered');
        $dead_sum = CovidCase::sum('dead');

        $pdf = Pdf::loadview('dashboard_pdf', [
            'cases' => $cases,
            'confirmed_sum' => $confirmed_sum,
            'in_care_sum' => $in_care_sum,
            'recovered_sum' => $recovered_sum,
            'dead_sum' => $dead_sum,
        ]);
        return $pdf->stream();
    }
}
