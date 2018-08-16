<?php
Route::group(['namespace' => 'Wti\FeedbackForm\Http\Controllers','middleware' => 'web'], function () {
    Route::get('contact', 'FeedbackController@index')->name('contact');
    Route::post('contact', 'FeedbackController@send');
});
