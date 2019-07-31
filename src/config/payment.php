<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authorization key
    |--------------------------------------------------------------------------
    */
    'api_key' => env('S2P_KEY', null),


    /*
    |--------------------------------------------------------------------------
    | Defining application environment
    |--------------------------------------------------------------------------
    |
    | If true, it will use the production environment
    | If false, it will use the development environment (sandbox)
    |
    */
    'sandbox' => env('S2P_SANDBOX', false)
];
