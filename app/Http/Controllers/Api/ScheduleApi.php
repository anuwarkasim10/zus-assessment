<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DeliverySchedule;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ScheduleApi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($product_id, $token)
    {
        $current_date = now()->format('Y-m-d H:i:s');

        $date = $current_date;
        $new = Carbon::parse($date);
        $new_date = $new->addDays(2);
        $format = $new_date->format('Y-m-d H:i:s');
        $schedule = DeliverySchedule::where('delivery_date', '>=', $format)->where('product_id', $product_id)->orderBy('delivery_date', 'asc')->get();

        $products = Product::where('id', '!=', $product_id)->get();
        $product = Product::where('id', $product_id)->first();

        $productBooth = Product::where('id', '!=', $product_id)->orderBy('booth_id', 'ASC')->get();

        $foodkits = array();
        $others = array();

        foreach ($productBooth as $key => $value) {
            // dd($value);
            if ($value->booth_id > 1000) {
                $foodkits[] = $value;
            } else {
                $others[] = $value;
            }
        }

        return view('single-page-product', [
            'product'  => $product,
            'schedule' => $schedule,
            'products' => $products,
            'foodkits' => $foodkits,
            'others'   => $others,
            'token'    => $token
        ]);
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
        //
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

    public function indexMasterclass($masterclass_id, $token)
    {
        // $token = 'null';

        $current_date = now()->format('Y-m-d H:i:s');

        $date = $current_date;
        $new = Carbon::parse($date);
        $new_date = $new->addDays(2);
        $format = $new_date->format('Y-m-d H:i:s');
        $products = Product::all();
        $product = Product::where('booth_id', $masterclass_id)->first();
        $schedule = DeliverySchedule::where('delivery_date', '>=', $format)->where('product_id',  $product->id)->orderBy('delivery_date', 'asc')->get();

        $productBooth = Product::orderBy('booth_id', 'ASC')->get();

        $foodkits = array();
        $others = array();

        foreach ($productBooth as $key => $value) {
            // dd($value);
            if ($value->booth_id > 1000) {
                $foodkits[] = $value;
            } else {
                $others[] = $value;
            }
        }


        return view('single-page-product', [
            'product' => $product,
            'schedule' => $schedule,
            'products' => $products,
            'foodkits' => $foodkits,
            'others'   => $others,
            'token' => $token
        ]);
    }

}
