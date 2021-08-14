<?php

#IPTV Routes


Route::group([
    'prefix' => 'public',
    'middleware' => 'api',
	],
    function(){
        Route::get('m3u8',"FelipeMateus\IPTV\Controllers\ChannelListM3UController@show");
    });
Route::group([
    'middleware' => ['web'],
	],
	function(){
		Route::get('channel/list', 'FelipeMateus\IPTV\Controllers\ChannelController@list')->name('list_channel');
		Route::get('channel/add', 'FelipeMateus\IPTV\Controllers\ChannelController@new')->name('add_channel');
		Route::post('channel/add', 'FelipeMateus\IPTV\Controllers\ChannelController@create')->name('create_channel');

		Route::get('channel/{id}', 'FelipeMateus\IPTV\Controllers\ChannelController@show')->name('show_channel');
		Route::post('channel/{id}', 'FelipeMateus\IPTV\Controllers\ChannelController@update')->name('update_channel');
		Route::get('channel/del/{id}', 'FelipeMateus\IPTV\Controllers\ChannelController@delete')->name('delete_channel');


		Route::get('group/list', 'FelipeMateus\IPTV\Controllers\GroupController@list')->name('list_group');

		Route::get('group/add', 'FelipeMateus\IPTV\Controllers\GroupController@new')->name('add_group');
		Route::post('group/add', 'FelipeMateus\IPTV\Controllers\GroupController@create')->name('create_group');

		Route::get('group/{id}', 'FelipeMateus\IPTV\Controllers\GroupController@show')->name('show_group');

		Route::post('group/{id}', 'FelipeMateus\IPTV\Controllers\GroupController@update')->name('update_group');
		Route::get('group/del/{id}', 'FelipeMateus\IPTV\Controllers\GroupController@delete')->name('delete_group');
	});
