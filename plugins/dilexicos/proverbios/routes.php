<?php

use Dilexicos\Proverbios\Models\Proverbios;

Route::get('api/proverbios', function(){

  $proverbios = Proverbios::all();

  return $proverbios;

});
