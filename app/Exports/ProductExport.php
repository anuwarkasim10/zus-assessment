<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;

class ProductExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;
    protected $visitor;

    function __construct($data) {
        $this->visitor = $data;
    }

    public function view(): View
    {
        $data = Product::select('*')->get();

        return view('exports.products', compact('data'));
    }
}
