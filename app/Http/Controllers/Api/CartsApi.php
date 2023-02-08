<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Carts;
use App\Models\User;
use App\Models\DeliverySchedule;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use \Laravel\Sanctum\PersonalAccessToken;

class CartsApi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $user_id)
    {
        $token =  $request->token;
        $personalAccessToken = PersonalAccessToken::findToken($token)->tokenable_id;
        $user = $personalAccessToken->tokenable;

        $cart = Carts::join('delivery_schedules', 'carts.delivery_schedule_id', '=', 'delivery_schedules.id')
            ->where('carts.user_id', $user->id)
            ->get(['carts.*', 'delivery_schedules.delivery_date', 'delivery_schedules.delivery_fee']);

        return response()->json($cart);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd( $request->all());
        if($request->cart_id){
            $checked = Carts::find($request->cart_id);
            if($request->delivery_schedule_id){

                $checked['delivery_schedule_id'] = $request->delivery_schedule_id;
                $checked->save();
            }else{
                $new_price = $checked->price_qty / $checked->quantity;
                $price_qty = $new_price * $request->quantity;

                $checked['quantity'] = $request->quantity;
                $checked['price_qty'] = $price_qty;
                $checked->save();
            }

                return response()->json([
                    'error' => false,
                    'success' => 'Successfully updated Add to Cart'
                ]);
        }else{
            $addtocart = $request->all();        // dd( $addtocart );
            $user = null;
            $token = null;

            if (isset($request->token)) {
                $token =  $request->token;

                if(strlen($token) < 6){
                    $user = $token;
                }else{
                    $personalAccessToken = PersonalAccessToken::findToken($token);
                    $user = $personalAccessToken->tokenable_id;
                }
                $price_qty = $addtocart['price'] * $addtocart['quantity'];
                if (isset($user)) {
                    $checked = Carts::where('user_id', $user)->where('delivery_schedule_id', $request->delivery_schedule_id)->first();
                    if (!$checked) {
                        try {
                            Carts::create([
                                'user_id' => $user,
                                'product_id' => $addtocart['product_id'],
                                'quantity' => $addtocart['quantity'],
                                'price_qty' => $price_qty,
                                'unit_price' => $addtocart['price'],
                                'booth_id' => $addtocart['booth_id'],
                                'delivery_schedule_id' => $addtocart['delivery_schedule_id'],
                            ]);
                        } catch (\Throwable $th) {
                            // DB::rollBack();
                            throw $th;
                        }
                    } else {
                        // $checked['delivery_schedule_id'] = $request->delivery_schedule_id;
                        $checked['quantity'] += $request->quantity;
                        $checked['price_qty'] += $price_qty;
                        $checked->save();
                    }

                    return response()->json([
                        'error' => false,
                        'success' => 'Add to Cart successfully'
                    ]);
                } else {


                    return response()->json([
                        'error' => true,
                        'message' => 'Email entered invalid.'
                    ]);
                }

            }
        }





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $cart = Carts::find($id);
            $cart->delete();

            return response()->json(['success' => 'Cart deleted successfully!']);
        } catch (\Throwable $th) {
            // DB::rollBack();
            throw $th;
        }
    }

    public function nama(Request $request, $token)
    {

        if (isset($token)) {
            $token =  $token;
            $personalAccessToken = PersonalAccessToken::findToken($token);
            $user = $personalAccessToken->tokenable;
        }

        $cart = Carts::join('delivery_schedules', 'carts.delivery_schedule_id', '=', 'delivery_schedules.id')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', $user->id)
            ->orderBy('delivery_schedules.delivery_date', 'DESC')
            ->get(['carts.*', 'products.name', 'products.price', 'products.product_image', 'delivery_schedules.delivery_date', 'delivery_schedules.delivery_fee']);

        $total = DB::select('select sum(t.price_qty) as sub_total, sum(t.delivery_fee) as delivery_charges, (sum(t.price_qty) + sum(t.delivery_fee)) as total from (
            select distinct(ds.delivery_date) as delivery_date, sum(c.price_qty) as price_qty, ds.delivery_fee
                from carts as c
                inner join delivery_schedules as ds
                on c.delivery_schedule_id = ds.id
                inner join users as u
                on c.user_id = u.id
                where c.user_id = ' . $user->id . '
                group by ds.delivery_date, c.price_qty, ds.delivery_fee
            ) as t ');

        // $cart = collect($cart);
        $data = new Collection();

        // dd($cart);

        $schedule = [];
        $product_id = [];

        $newCart = [];

        foreach($cart as $c){
            array_push($product_id, $c->product_id);
        }

        if ($product_id != []) {
            foreach (array_unique($product_id) as $id) {
                $current_date = now()->format('Y-m-d H:i:s');

                $date = $current_date;
                $new = Carbon::parse($date);
                $new_date = $new->addDays(2);
                $format = $new_date->format('Y-m-d H:i:s');

                array_push($schedule, DeliverySchedule::distinct()->where('delivery_date', '>=', $format)->where('product_id',  $id)->orderBy('delivery_date', 'asc')->get());
            }
        }

        foreach ( $cart as $item ) {
            foreach ($schedule as $list ) {
                foreach ($list as $l) {

                    if ($item->product_id == $l->product_id) {
                        array_push($newCart, $l);
                    }
                }
            };
        }
        // dd($newCart);

        $schedule_id = [];
        foreach ($newCart as $element) {
            $schedule_id[$element['product_id']][] = $element;
        }

        // dd($schedule_id);
        foreach ($schedule_id as $key => $sid) {

            foreach($cart as $c) {
                if ($key == $c->product_id) {
                    $data->push([
                        'id' => $c->id,
                        'user_id' => $c->user_id,
                        'product_id' => $c->product_id,
                        'quantity' => $c->quantity,
                        'price_qty' => $c->price_qty,
                        'unit_price' => $c->price,
                        'delivery_schedule_id' => $c->delivery_schedule_id,
                        'booth_id' => $c->booth_id,
                        'name' => $c->name,
                        'product_image' => $c->product_image,
                        'user_id' => $c->user_id,
                        'delivery_date' => $c->delivery_date,
                        'delivery_fee' => $c->delivery_fee,
                        'schedule' => $sid
                    ]);
                }

            }
        }

        // dd($data);

        $email = User::where('id', $user->id)->pluck('email');
        return view('carts', [
            'cart' => $data,
            'schedule' => $schedule,
            'total' => $total,
            'user_id' => $user->id,
            'email' => $email
        ]);
    }

    public function checkStock(Request $request)
    {
        $items = $request->all();

        // Check foreach cart item for available qty
        $message = Array();

        foreach ($items as $item) {
            foreach ($item as $i) {
                $scheduleItem = DeliverySchedule::where('id', $i["delivery_schedule_id"])->first();

                if ( $i["quantity"] > $scheduleItem->available_delivery) {
                    $message['name'] = $i['name'];
                    $message['message'] = "This item exceed available stock for the delivery date.";
                }
            }

        }

        return response()->json([$message], 200);
    }
}
