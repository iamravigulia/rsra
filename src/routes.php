<?php
use Illuminate\Support\Facades\Route;

Route::get('greeting', function () {
    return 'Hi, this is your awesome package! rswa';
});

Route::get('Rswa/test', 'EdgeWizz\Rswa\Controllers\RswaController@test')->name('test');

Route::post('fmt/Rswa/store', 'EdgeWizz\Rswa\Controllers\RswaController@store')->name('fmt.rswa.store');

Route::post('fmt/Rswa/update/{id}', 'EdgeWizz\Rswa\Controllers\RswaController@update')->name('fmt.rswa.update');

Route::post('fmt/Rswa/csv', 'EdgeWizz\Rswa\Controllers\RswaController@csv_upload')->name('fmt.rswa.csv');

Route::any('fmt/Rswa/inactive/{id}',  'EdgeWizz\Rswa\Controllers\RswaController@inactive')->name('fmt.rswa.inactive');
Route::any('fmt/Rswa/active/{id}',  'EdgeWizz\Rswa\Controllers\RswaController@active')->name('fmt.rswa.active');