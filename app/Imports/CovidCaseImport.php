<?php

namespace App\Imports;

use App\Models\CovidCase;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CovidCaseImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if (CovidCase::where('province', $row['province'])->exists())
        {
            CovidCase::where('province', $row['province'])->update([
                'province' => $row['province'],
                'confirmed' => $row['confirmed'],
                'in_care' => $row['in_care'],
                'recovered' => $row['recovered'],
                'dead' => $row['dead'],
            ]);
        } else {
            return new CovidCase([
                'province' => $row['province'],
                'confirmed' => $row['confirmed'],
                'in_care' => $row['in_care'],
                'recovered' => $row['recovered'],
                'dead' => $row['dead'],
            ]);
        }
        
    }
}
