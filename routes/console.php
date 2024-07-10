<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('start', function () {
    Artisan::call("db:seed");
    $this->info("Server Running on [http://127.0.0.1:8000]");
    Artisan::call("serve");
});
