<?php

use App\Models\HomepageContent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'homepage' => HomepageContent::query()->first(),
    ]);
});
