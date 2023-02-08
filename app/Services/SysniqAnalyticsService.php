<?php

namespace App\Services;

use Analytics;
use Spatie\Analytics\Period;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;

class SysniqAnalyticsService
{
    public function __construct()
    {
        //
    }

    public function Hotspots()
    {
        $data = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
            ])->get('https://www.staging.2vr360.online/sff2022/analytics/api/analytic/get?event_url=' );
        $data  = $data->json();

        $list = [];

        foreach ($data['data'] as $d) {
            array_push($list, $d);
        }

        return $list ?? [];
    }
}
