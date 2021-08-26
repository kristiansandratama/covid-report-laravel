<?php

namespace App\Http\Controllers;

use App\Models\CovidCase;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $confirmed_sum = CovidCase::sum('confirmed');
        $in_care_sum = CovidCase::sum('in_care');
        $recovered_sum =  CovidCase::sum('recovered');
        $dead_sum = CovidCase::sum('dead');

        return view('home', [
            'confirmed_sum' => $confirmed_sum,
            'in_care_sum' => $in_care_sum,
            'recovered_sum' => $recovered_sum,
            'dead_sum' => $dead_sum,
        ]);
    }
}
