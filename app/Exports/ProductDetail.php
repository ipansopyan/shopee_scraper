<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Scrape;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ProductDetail implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    function __construct($dta) {
        $this->dta = $dta;
    }

     public function view(): View
    {
        
        return view('scrape/productdetail', [
            'datas' => $this->dta
        ]);
    }
}
