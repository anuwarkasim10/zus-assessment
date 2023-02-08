<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Carts;
use App\Models\CustomerDetails;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use \Stripe\Stripe;
use \Stripe\StripeClient;
use Illuminate\Support\Facades\DB;
use Stripe\Customer;

class OrderApi extends Controller
{
    public function __construct()
    {
        $this->stripe_secret = config('app.stripe_secret');
        $this->success_url = config('app.success_url');
        $this->cancel_url = config('app.cancel_url');
        $this->enets_url = config('app.handler_url');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        if ( $request->payment_type == 'stripe' ) {
            $placeorder = $request->all();

            // dd($placeorder, '$placeorder');
            $placeorder = $placeorder;

            $addtocard = Carts::where('user_id', $placeorder['user_id'])->get();

            // Stripe Checkout Session
            $key = $this->stripe_secret;

            $stripe_client = new StripeClient($key);

            $line_items = array();

            foreach ($addtocard as $cartItem) {

                $product = Product::where('id', $cartItem['product_id'])->first();
                $unit_amount = $cartItem->price_qty / $cartItem->quantity;
                $line_items[] = array(
                    'price_data' => array(
                        'currency' => 'sgd',
                        'product_data' => array(
                            'name' => $product->name,
                        ),
                        'unit_amount' => bcmul((float)$unit_amount, 100) // cents
                    ),
                    // 'amount_subtotal'=> bcmul((int)$unit_amount, 100),
                    'quantity' => $cartItem->quantity,
                );
            }

            $shipping_options = array();
            $shipping_options[] = array(
                'shipping_rate_data' => array(
                    'display_name' => 'Delivery Fee',
                    'fixed_amount' => array(
                        'amount' => $request->total_delivery_fee * 100, // cents
                        'currency' => 'sgd'
                    ),
                    'type' => 'fixed_amount'
                ),
            );

            $session = $stripe_client->checkout->sessions->create([
                'success_url' => $this->success_url . "?session_id={CHECKOUT_SESSION_ID}",
                'cancel_url' => $this->cancel_url . "?session_id={CHECKOUT_SESSION_ID}",
                'line_items' => $line_items,
                'shipping_options' => $shipping_options,
                'mode' => 'payment',
            ]);

            // $exist = CustomerDetails::where('user_id', $placeorder['user_id'])->first();

            // if (!$exist) {
                $customerdetails = new CustomerDetails;
                $customerdetails['user_id'] = $placeorder['user_id'];
                $customerdetails['name'] = $placeorder['name'];
                $customerdetails['level'] = $placeorder['level'];
                $customerdetails['unit'] = $placeorder['unit'];
                $customerdetails['address_1'] = $placeorder['address_1'];
                $customerdetails['address_2'] = $placeorder['address_2'];
                $customerdetails['postcode'] = $placeorder['postcode'];
                $customerdetails['country'] = $placeorder['country'];
                $customerdetails['phone'] = $placeorder['phone'];
                $customerdetails->save();
            // } else if ($exist->address_1 != $placeorder['address_1'] || $exist->name != $placeorder['name'] || $exist->level != $placeorder['level'] || $exist->unit != $placeorder['unit'] || $exist->address_2 != $placeorder['address_2'] || $exist->postcode != $placeorder['postcode'] || $exist->country != $placeorder['country'] || $exist->phone != $placeorder['phone']) {
            //     $exist->address_1 = $placeorder['address_1'];
            //     $exist->name = $placeorder['name'];
            //     $exist->level = $placeorder['level'];
            //     $exist->unit = $placeorder['unit'];
            //     $exist->address_2 = $placeorder['address_2'];
            //     $exist->postcode = $placeorder['postcode'];
            //     $exist->country = $placeorder['country'];
            //     $exist->phone = $placeorder['phone'];
            //     $exist->save();

            //     $customerdetails =  $exist;
            // } else {
            //     $customerdetails =  $exist;
            // }

            DB::transaction(function () use ($placeorder, $addtocard, $session, $customerdetails) {
                return tap(Order::create([
                    'user_id' => $placeorder['user_id'],
                    'total' => $placeorder['total'],
                    'total_delivery_fee' => $placeorder['total_delivery_fee'],
                    // 'status_id' => $placeorder['status_id'],
                    'status_id' => $session['status'] == 'open' ? Order::CHECKOUT : 0,
                    'remark' => $placeorder['remark'],
                    'session_id' =>  $session['id'],
                    'customer_detail_id' =>  $customerdetails->id,
                    'payment_method_id' => 1,
                ]), function (Order $order) use ($addtocard) {

                    foreach ($addtocard as $list) {
                        OrderProduct::create([
                            'order_id' => $order->id,
                            'product_id' => $list['product_id'],
                            'quantity' => $list['quantity'],
                            'price_qty' => $list['price_qty'],
                            'booth_id' => $list['booth_id'],
                            'delivery_schedule_id' => $list['delivery_schedule_id'],
                        ]);
                        $addtocard->each->delete();
                    }
                    // return response()->json($session, 200);
                });

                // function (Order $order) use ($addtocard) {
                //     foreach($addtocard as $list){
                //         OrderProduct::create([
                //             'order_id' => $order->id,
                //             'product_id' => $list['product_id'],
                //             'quantity' => $list['quantity'],
                //             'price_qty' => $list['price_qty'],
                //             'booth_id' => $list['booth_id'],
                //             'delivery_schedule_id' => $list['delivery_schedule_id'],
                //         ]);
                //         $addtocard->each->delete();
                //     }
                //     // return response()->json($session, 200);
                // });
                // return response()->json(['success' => 'Order created successfully']);
            });
            // dd($session);
            return response()->json($session, 200);

        } else {
            $placeorder = $request->all();

            // dd($placeorder, '$placeorder');
            $placeorder = $placeorder;

            $addtocard = Carts::where('user_id', $placeorder['user_id'])->get();

            // $exist = CustomerDetails::where('user_id', $placeorder['user_id'])->first();

            // if (!$exist) {
                $customerdetails = new CustomerDetails;
                $customerdetails['user_id'] = $placeorder['user_id'];
                $customerdetails['name'] = $placeorder['name'];
                $customerdetails['level'] = $placeorder['level'];
                $customerdetails['unit'] = $placeorder['unit'];
                $customerdetails['address_1'] = $placeorder['address_1'];
                $customerdetails['address_2'] = $placeorder['address_2'];
                $customerdetails['postcode'] = $placeorder['postcode'];
                $customerdetails['country'] = $placeorder['country'];
                $customerdetails['phone'] = $placeorder['phone'];
                $customerdetails->save();
            // } else if ($exist->address_1 != $placeorder['address_1'] || $exist->name != $placeorder['name'] || $exist->level != $placeorder['level'] || $exist->unit != $placeorder['unit'] || $exist->address_2 != $placeorder['address_2'] || $exist->postcode != $placeorder['postcode'] || $exist->country != $placeorder['country'] || $exist->phone != $placeorder['phone']) {
            //     $exist->address_1 = $placeorder['address_1'];
            //     $exist->name = $placeorder['name'];
            //     $exist->level = $placeorder['level'];
            //     $exist->unit = $placeorder['unit'];
            //     $exist->address_2 = $placeorder['address_2'];
            //     $exist->postcode = $placeorder['postcode'];
            //     $exist->country = $placeorder['country'];
            //     $exist->phone = $placeorder['phone'];
            //     $exist->save();

            //     $customerdetails =  $exist;
            // } else {
            //     $customerdetails =  $exist;
            // }

            $session = [];
            $session['status'] = 'open';

            $length = 6;
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }

            // $session['id'] = 'enets_' . $customerdetails['user_id'] . '_' . md5(time());
            $session['id'] = 'enets_' . $customerdetails['user_id'] . '_' . $randomString;

            if($addtocard->count() > 0){
                DB::transaction(function () use ($placeorder, $addtocard, $session, $customerdetails) {
                    return tap(Order::create([
                        'user_id' => $placeorder['user_id'],
                        'total' => $placeorder['total'],
                        'total_delivery_fee' => $placeorder['total_delivery_fee'],
                        // 'status_id' => $placeorder['status_id'],
                        'status_id' => $session['status'] == 'open' ? Order::CHECKOUT : 0,
                        'remark' => $placeorder['remark'],
                        'session_id' =>  $session['id'],
                        'customer_detail_id' =>  $customerdetails->id,
                        'payment_method_id' => 2,
                    ]), function (Order $order) use ($addtocard) {

                        foreach ($addtocard as $list) {
                            OrderProduct::create([
                                'order_id' => $order->id,
                                'product_id' => $list['product_id'],
                                'quantity' => $list['quantity'],
                                'price_qty' => $list['price_qty'],
                                'booth_id' => $list['booth_id'],
                                'delivery_schedule_id' => $list['delivery_schedule_id'],
                            ]);
                            $addtocard->each->delete();
                        }
                    });
                });
            }

            $session['url'] = $this->enets_url;
            $session['customerDetail'] = $customerdetails;
            $session['placeOrder'] = $placeorder;
            return response()->json($session, 200);
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
        //
    }

    public function statusOrder($session_id) {

        $orderstatus = Order::where('session_id', $session_id)->first();

        return response()->json($orderstatus, 200);
    }
}
