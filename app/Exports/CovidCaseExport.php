<?php

namespace App\Exports;

use App\Models\CovidCase;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CovidCaseExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CovidCase::select('id', 'province', 'confirmed', 'in_care', 'recovered', 'dead')->get();
    }

    public function headings(): array
    {
        return ["Number", "Province", "Confirmed", "In Care", "Recovered", "Dead"];
    }
}
