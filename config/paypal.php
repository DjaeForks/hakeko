<?php
return [
    'client_id' => env('PAYPAL_CLIENT_ID','ATdxMHmKExY9HFWi4N2VWGNxpNLlen2V3nISZIs0y_4V7zY5kvQkpcFrDFVwPklRXupBOAL9kbI0gBh9'),
    'secret' => env('PAYPAL_SECRET','EPRJ5NVdkK8X9RFTPHhcfgvWSJ21YQwXtK_Aw1pM91lQd7FBsPGsOXfcwZJF7v1SqWvg03LpkURRfZEt'),
    'settings' => array(
        'mode' => env('PAYPAL_MODE','sandbox'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];
