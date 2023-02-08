<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'name' => 'ONE DREAM PROPERTY',

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    // 'url' => env('APP_URL', 'https://www.staging.2vr360.online/sff-uat'),
    'url' => env('APP_URL', 'http://127.0.0.1:8000'),

    'asset_url' => env('ASSET_URL', null),

    'vr360_url' => env('VR360_URL', 'https://www.staging.2vr360.online/sff-uat/enter-virtualmarketplace'),
    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => 'Asia/Kuala_Lumpur',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

    'locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Faker Locale
    |--------------------------------------------------------------------------
    |
    | This locale will be used by the Faker PHP library when generating fake
    | data for your database seeds. For example, this will be used to get
    | localized telephone numbers, street address information and more.
    |
    */

    'faker_locale' => 'en_US',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,
        Brian2694\Toastr\ToastrServiceProvider::class,
        /*
         * Package Service Providers...
         */
        Spatie\Permission\PermissionServiceProvider::class,
        Yajra\DataTables\DataTablesServiceProvider::class,

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
        App\Providers\MenuServiceProvider::class,
        Maatwebsite\Excel\ExcelServiceProvider::class,
        Barryvdh\DomPDF\ServiceProvider::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [

        'App' => Illuminate\Support\Facades\App::class,
        'Arr' => Illuminate\Support\Arr::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'Broadcast' => Illuminate\Support\Facades\Broadcast::class,
        'Bus' => Illuminate\Support\Facades\Bus::class,
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Config' => Illuminate\Support\Facades\Config::class,
        'Cookie' => Illuminate\Support\Facades\Cookie::class,
        'Crypt' => Illuminate\Support\Facades\Crypt::class,
        'Date' => Illuminate\Support\Facades\Date::class,
        'DB' => Illuminate\Support\Facades\DB::class,
        'Eloquent' => Illuminate\Database\Eloquent\Model::class,
        'Event' => Illuminate\Support\Facades\Event::class,
        'File' => Illuminate\Support\Facades\File::class,
        'Gate' => Illuminate\Support\Facades\Gate::class,
        'Hash' => Illuminate\Support\Facades\Hash::class,
        'Http' => Illuminate\Support\Facades\Http::class,
        'Js' => Illuminate\Support\Js::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Mail' => Illuminate\Support\Facades\Mail::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Password' => Illuminate\Support\Facades\Password::class,
        'Queue' => Illuminate\Support\Facades\Queue::class,
        'RateLimiter' => Illuminate\Support\Facades\RateLimiter::class,
        'Redirect' => Illuminate\Support\Facades\Redirect::class,
        // 'Redis' => Illuminate\Support\Facades\Redis::class,
        'Request' => Illuminate\Support\Facades\Request::class,
        'Response' => Illuminate\Support\Facades\Response::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'Str' => Illuminate\Support\Str::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,
        'Toastr'  => Brian2694\Toastr\Facades\Toastr::class,
        'Excel' => Maatwebsite\Excel\Facades\Excel::class,
        'PDF' => Barryvdh\DomPDF\Facade::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Mywebstats API Config
    |--------------------------------------------------------------------------
    |
    | This config will be used to get mywebstats data from API
    |
    */

    'base_URI'  => env('WEBSTATS_URL', 'https://www.mywebstats.com.au/api/stats/4'),
    'site_id'   => env('SITE_ID', '101324156'),
    'sitekey'   => env('SITEKEY', 'f3625e1fcd4c3c9b'),
    'href'      => env('HREF', 'https://singaporefoodfestival.sg/'), // Change this as default domain to filter only

    /*
    |--------------------------------------------------------------------------
    | Stripe Payment Key
    |--------------------------------------------------------------------------
    |
    | This config will be used for stripe API communication
    |
    */
    'base_url'  =>  env('STRIPE_BASEURL', 'https://api.stripe.com'),

    // Live credentials
    'stripe_key'  => env('STRIPE_PK', 'pk_live_51H9k2BIeIH5Sr7p4zir02AsWsdqlqnSDx3wkwVkZCVkuo7NBZZJ0AO9t3kIWSzT5wCWmRWnDKlUOi7KzVa0b1pWO00IhMrl9xa'),
    'stripe_secret'  => env('STRIPE_SECRET', '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'),

    // Test Credentials
    // 'stripe_key'  => env('STRIPE_PK', 'pk_test_51H9k2BIeIH5Sr7p4KwGbeaM7aHg8Gq1kcB9ykZHLB3VMQynsMuGPwzJWlwtDnZQ4MyO4PXRua4Mz6WqaH4mtw21300WyR1ZWIu'),
    // 'stripe_secret'  => env('STRIPE_SECRET', 'sk_test_51H9k2BIeIH5Sr7p4I0NXQil84jzCIy2DzTZ3OaH5ucYiSHzSsDfgR4X0DuLYI3AxcrpGMdLbxlgoaTGWNXk3UZfV00Gf7qSaRX'),
    'success_url' => env('STRIPE_SUCCESS', 'https://singaporefoodfestival.sg/stripe-success'),
    'cancel_url' => env('STRIPE_CANCEL', 'https://singaporefoodfestival.sg/stripe-cancel'),

    /*
    |--------------------------------------------------------------------------
    | eNETS Payment Key
    |--------------------------------------------------------------------------
    |
    | This config will be used for eNETS API communication
    |
    */
    'enets_base_url'  =>  env('ENETS_BASEURL', 'https://uat-api.nets.com.sg:9065'),
    // 'enets_apikey'  => env('ENETS_APIKEY', 'b027dacd-1c13-4916-8b93-38fae6be2f80'),
    // 'enets_secret'  => env('ENETS_SECRET', '21296dd3-5bf6-4dfc-b8a2-03fbcc213b7b'),

    // Test
    // 'enets_apikey'  => env('ENETS_APIKEY', '154eb31c-0f72-45bb-9249-84a1036fd1ca'),
    // 'enets_secret'  => env('ENETS_SECRET', '38a4b473-0295-439d-92e1-ad26a8c60279'),

    // Production
    'enets_secret'  => env('ENETS_SECRET', '50d79a4f-1130-490e-906c-c6e44fb59214'),
    'enets_apikey'  => env('ENETS_APIKEY', '59cd7347-d957-4e31-97d9-9b07be464521'),

    'enets_umid'  => env('ENETS_UMID', 'UMID_827763000'),
    'enets_mid'  => env('ENETS_MID', '827763000'),

    'handler_url' => env('ENETS_URL', "https://singaporefoodfestival.sg/enets-v2"),
    'enets_successV4' => env('ENETS_SUCCESSV4_URL', 'https://singaporefoodfestival.sg/enets-v4-success'),
    'enets_failureV4' => env('ENETS_FAILUREV4_URL', 'https://singaporefoodfestival.sg/enets-v4-failure'),
    'checkout_expired' => env('ENETS_EXPIRED_URL', 'https://singaporefoodfestival.sg/enets-expired'),

    /*
    |--------------------------------------------------------------------------
    | eNETS Payment V3 - NETS QR
    |--------------------------------------------------------------------------
    |
    | This config will be used for NETS QR API communication -> Credentials are common testing: Please add in .env to override!
    |
    */
    'enetsQR_mode' => env('ENETSQR_MODE', 'TEST'),
    'enetsQR_url' => env('ENETSQR_URL', 'https://singaporefoodfestival.sg/enets-v3'),
    'enetsQR_success' => env('ENETSQR_SUCCESS_URL', 'https://singaporefoodfestival.sg/enets-v3-success'),
    'enetsQR_failure' => env('ENETSQR_FAILURE_URL', 'https://singaporefoodfestival.sg/enets-v3-failure'),
    'enetsQR_tid'  => env('ENETSQR_TID', '37066801'),
    'enetsQR_mid'  => env('ENETSQR_MID', '11137066800'),
    'enetsQR_stan'  => env('ENETSQR_MID', '100001'),
    'enetsQR_api_key' => env('ENETSQR_APIKEY', 'b027dacd-1c13-4916-8b93-38fae6be2f80'),
    'enetsQR_secret_key' => env('ENETSQR_APIKEY', '21296dd3-5bf6-4dfc-b8a2-03fbcc213b7b'),

    // NETSQR API URL UAT & PRODUCTION
    'enetsQR_order_url' => env('ENETSQR_ORDER_URL', 'https://uat-api.nets.com.sg:9065/uat/merchantservices/qr/dynamic/v1/order/request'),
    'enetsQR_query_url' => env('ENETSQR_QUERY_URL', 'https://uat-api.nets.com.sg:9065/uat/merchantservices/qr/dynamic/v1/order/request'),
    'enetsQR_reversal_url' => env('ENETSQR_REVERSAL_URL', 'https://uat-api.nets.com.sg:9065/uat/merchantservices/qr/dynamic/v1/order/request'),

    /*
    |--------------------------------------------------------------------------
    | Register Masterclass
    |--------------------------------------------------------------------------
    |
    | This config will be used for MASTERCLASS Registration API
    |
    */
    'api_register_masterclass'  =>  env('REG_MASTERCLASS_API', 'http://127.0.0.1:8000/api/masterclass'),
];
