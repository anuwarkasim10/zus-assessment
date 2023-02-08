<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
        $this->webstats_uri = config('app.base_URI');
        $this->site_id = config('app.site_id');
        $this->sitekey = config('app.sitekey');
        $this->href = config('app.href');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $webstats = $this->webstats_uri;
        $site_id = $this->site_id;
        $sitekey = $this->sitekey;
        $href = $this->href;

        $variables = [
            'webstats' => $webstats,
            'site_id' => $site_id,
            'sitekey' => $sitekey,
            'href' => $href,
        ];
        

        return view('home', compact([
            'variables',
        ]));
    }
}
