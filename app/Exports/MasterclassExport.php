<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class MasterclassExport implements FromView
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
        $data = DB::table('masterclass')->join('users', 'users.id', '=', 'masterclass.user_id')->select(['masterclass.*', 'users.email'])->get();

        return view('exports.masterclass', compact('data'));
    }
}
