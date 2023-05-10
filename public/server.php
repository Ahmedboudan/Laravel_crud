<?php
$options = [
    'ssl' => [
        'local_cert' => storage_path('storage/ssl/server.crt'),
        'local_pk' => storage_path('storage/ssl/server.key'),
    ],
];

$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(\Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = \Illuminate\Http\Request::capture()
);
$response->send();

$kernel->terminate($request, $response);
dd('server.php executed');