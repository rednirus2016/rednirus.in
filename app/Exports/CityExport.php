<?php

namespace App\Exports;

use App\Models\City;
use Maatwebsite\Excel\Concerns\WithHeadings;    
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;

class CityExport implements FromCollection,WithHeadings,WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public $stat = 0;
    
    function __construct($st) {
        $this->stat = $st;
    }
    
    public function collection()
    {
        return City::select('id','country_code','name')->where('active',$this->stat)->get();
    }

    public function map($data): array
    {
        return[
        $data->id,
        $data->country_code,
        $data->name
        ];
    }

    public function headings(): array
    {
        return [
            '#',
            'Country Code',
            'City Name'
        ];
    }
}