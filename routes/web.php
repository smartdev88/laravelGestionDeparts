<?php

use App\Models\Voyage;

Route::get('/', function(){
    return redirect()->route('voyages.index');
});


Route::resource('voyages', 'VoyageController');
