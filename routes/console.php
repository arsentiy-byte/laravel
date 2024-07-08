<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    /** @phpstan-ignore-next-line  */
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();
