<?php

namespace App\Exports;

use App\Scrape;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ScrapeExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $dta;

    function __construct($dta) {
        $this->dta = $dta;
    }

     public function view(): View
    {
        
        return view('scrape/toko', [
            'datas' => $this->dta
        ]);
    }
}
