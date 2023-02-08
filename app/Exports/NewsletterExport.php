<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;

class NewsletterExport implements FromView
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
        $data = User::where('is_newsletter', true)->orderBy('updated_at', 'desc')->get();

        return view('exports.newsletter', compact('data'));
    }
}
