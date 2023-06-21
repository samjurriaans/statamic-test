<?php

use Illuminate\Support\Facades\Route;

Route::name('addon')->group(static function () {
  Route::view('/my-addon', 'my-addon::addon');
});
