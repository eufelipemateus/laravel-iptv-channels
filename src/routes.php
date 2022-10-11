<?php

#IPTV Routes
Route::group([
    'prefix' => 'public/m3u8',
    'middleware' => ['api','public_cdn'],
	],
    function(){
         Route::get('/{slug}',"Tschope\IPTVChannels\Controllers\ChannelListM3UController@show")->name("cdn-playslit");
    });
Route::group([
    'middleware' => ['web', 'iptv_locale'],
	],
	function(){
        Route::prefix('channel')->group(function () {
            Route::get('list', 'Tschope\IPTVChannels\Controllers\ChannelController@list')->name('list_channel');
            Route::get('add', 'Tschope\IPTVChannels\Controllers\ChannelController@new')->name('add_channel');
            Route::post('add', 'Tschope\IPTVChannels\Controllers\ChannelController@create')->name('create_channel');
            Route::get('/{id}', 'Tschope\IPTVChannels\Controllers\ChannelController@show')->name('show_channel');
            Route::post('/{id}', 'Tschope\IPTVChannels\Controllers\ChannelController@update')->name('update_channel');
            Route::get('/del/{id}', 'Tschope\IPTVChannels\Controllers\ChannelController@delete')->name('delete_channel');
        });


        Route::prefix('group')->group(function () {
            Route::get('/list', 'Tschope\IPTVChannels\Controllers\GroupController@list')->name('list_group');

            Route::get('/add', 'Tschope\IPTVChannels\Controllers\GroupController@new')->name('add_group');
            Route::post('/add', 'Tschope\IPTVChannels\Controllers\GroupController@create')->name('create_group');

            Route::get('/{id}', 'Tschope\IPTVChannels\Controllers\GroupController@show')->name('show_group');

            Route::post('/{id}', 'Tschope\IPTVChannels\Controllers\GroupController@update')->name('update_group');
            Route::get('/del/{id}', 'Tschope\IPTVChannels\Controllers\GroupController@delete')->name('delete_group');
        });


        Route::prefix('cdn')->group(function () {
            Route::get('/list', 'Tschope\IPTVChannels\Controllers\CdnController@list')->name('list_cdn');

            Route::get('/add', 'Tschope\IPTVChannels\Controllers\CdnController@new')->name('add_cdn');
            Route::post('/add', 'Tschope\IPTVChannels\Controllers\CdnController@create')->name('create_cdn');


            Route::get('/{id}', 'Tschope\IPTVChannels\Controllers\CdnController@show')->name('show_cdn');
            Route::post('/{id}', 'Tschope\IPTVChannels\Controllers\CdnController@update')->name('update_cdn');

            Route::get('/del/{id}', 'Tschope\IPTVChannels\Controllers\CdnController@delete')->name('delete_cdn');
        });

        Route::prefix('url')->group(function () {
            Route::post('/add', 'Tschope\IPTVChannels\Controllers\UrlController@create')->name('create_url');
            Route::post('/{id}', 'Tschope\IPTVChannels\Controllers\UrlController@update')->name('update_update');
            Route::get('/del/{id}', 'Tschope\IPTVChannels\Controllers\UrlController@delete')->name('delete_url');
        });
	});
