<?php

#IPTV Routes


Route::group([
    'prefix' => 'public/m3u8',
    'middleware' => 'api',
	],
    function(){
         Route::get('/{slug}',"FelipeMateus\IPTV\Controllers\ChannelListM3UController@show");
    });
Route::group([
    'middleware' => ['web'],
	],
	function(){
        Route::prefix('channel')->group(function () {
            Route::get('list', 'FelipeMateus\IPTV\Controllers\ChannelController@list')->name('list_channel');
            Route::get('add', 'FelipeMateus\IPTV\Controllers\ChannelController@new')->name('add_channel');
            Route::post('add', 'FelipeMateus\IPTV\Controllers\ChannelController@create')->name('create_channel');
            Route::get('/{id}', 'FelipeMateus\IPTV\Controllers\ChannelController@show')->name('show_channel');
            Route::post('/{id}', 'FelipeMateus\IPTV\Controllers\ChannelController@update')->name('update_channel');
            Route::get('/del/{id}', 'FelipeMateus\IPTV\Controllers\ChannelController@delete')->name('delete_channel');
        });


        Route::prefix('group')->group(function () {
            Route::get('/list', 'FelipeMateus\IPTV\Controllers\GroupController@list')->name('list_group');

            Route::get('/add', 'FelipeMateus\IPTV\Controllers\GroupController@new')->name('add_group');
            Route::post('/add', 'FelipeMateus\IPTV\Controllers\GroupController@create')->name('create_group');

            Route::get('/{id}', 'FelipeMateus\IPTV\Controllers\GroupController@show')->name('show_group');

            Route::post('/{id}', 'FelipeMateus\IPTV\Controllers\GroupController@update')->name('update_group');
            Route::get('/del/{id}', 'FelipeMateus\IPTV\Controllers\GroupController@delete')->name('delete_group');
        });


        Route::prefix('cdn')->group(function () {
            Route::get('/list', 'FelipeMateus\IPTV\Controllers\CdnController@list')->name('list_cdn');

            Route::get('/add', 'FelipeMateus\IPTV\Controllers\CdnController@new')->name('add_cdn');
            Route::post('/add', 'FelipeMateus\IPTV\Controllers\CdnController@create')->name('create_cdn');


            Route::get('/{id}', 'FelipeMateus\IPTV\Controllers\CdnController@show')->name('show_cdn');
            Route::post('/{id}', 'FelipeMateus\IPTV\Controllers\CdnController@update')->name('update_cdn');

            Route::get('/del/{id}', 'FelipeMateus\IPTV\Controllers\CdnController@delete')->name('delete_cdn');
        });


        Route::prefix('url')->group(function () {
            Route::post('/add', 'FelipeMateus\IPTV\Controllers\UrlController@create')->name('create_url');
            Route::post('/{id}', 'FelipeMateus\IPTV\Controllers\UrlController@update')->name('update_update');
            Route::get('/del/{id}', 'FelipeMateus\IPTV\Controllers\UrlController@delete')->name('delete_url');
        });


	});
