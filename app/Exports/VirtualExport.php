<?php

namespace App\Exports;

use App\Models\Carts;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
class VirtualExport implements FromView
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
        $users = DB::select('select email, user_id, count( user_id) as total_item, created_at
                from (
                    select u.email, c.user_id, Date(c.created_at) as created_at, c.price_qty
                    from  carts as c
                    Left Join users as u
                    On u.id = c.user_id
                    GROUP by c.user_id, c.created_at, u.email, c.price_qty
                ) as t GROUP by t.user_id, t.created_at, t.email order by t.created_at desc');

        $total = Carts::groupBy('user_id')->selectRaw('sum(price_qty) as total, user_id')->pluck('total', 'user_id');

        $data = new Collection();
        foreach( $total as $user_id => $sum){
            foreach($users as $u){
                if($u->user_id == $user_id){
                    $data->push([
                        'email' => $u->email,
                        'user_id' => $u->user_id,
                        'total_item' => $u->total_item,
                        'created_at' => $u->created_at,
                        'total' =>  $sum
                    ]);
                }
            }
        }

        return view('exports.virtual', compact('data'));
    }
}
