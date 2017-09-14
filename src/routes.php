<?php

#IPTV Routes


Route::group([
	'prefix'=>"channels",
    'middleware' => 'api',
	],
    function(){
        Route::get('list',"Felipefm32\LaravelIPTV\Controllers\ChannelListController@index");
    });
Route::group([
    'middleware' => 'web',
	],
	function(){
		Route::get('listChannels', 'Felipefm32\LaravelIPTV\Controllers\showListChannelsController@index')->name('list_channels');
		Route::get('addChannel', 'Felipefm32\LaravelIPTV\Controllers\addChannelController@index')->name('add_channel');
		Route::post('addChannel', 'Felipefm32\LaravelIPTV\Controllers\createChannelController@save')->name('create_channel');
		
		Route::get('channel/{id}', 'Felipefm32\LaravelIPTV\Controllers\showChannelController@index')->name('show_channel');
		Route::post('channel/{id}', 'Felipefm32\LaravelIPTV\Controllers\updateChannelController@save')->name('update_channel');
		Route::get('delChannel/{id}', 'Felipefm32\LaravelIPTV\Controllers\deleteChannelController@save')->name('delete_channel');
		
		
		Route::get('listChannelsGroups', 'Felipefm32\LaravelIPTV\Controllers\showListChannelsGroupsController@index')->name('list_channelsGroups');
		
		Route::get('addChannelGroup', 'Felipefm32\LaravelIPTV\Controllers\addChannelsGroupController@index')->name('add_channelsGroups');
		Route::post('addChannelGroup', 'Felipefm32\LaravelIPTV\Controllers\createChannelsGroupController@save')->name('create_channelsGroups');
		
		Route::get('channelGroup/{id}', 'Felipefm32\LaravelIPTV\Controllers\showChannelsGroupController@index')->name('show_channelsGroups');
		
		Route::post('channelGroup/{id}', 'Felipefm32\LaravelIPTV\Controllers\updateChannelsGroupController@save')->name('update_channelsGroups');
		Route::get('delChannelGroup/{id}', 'Felipefm32\LaravelIPTV\Controllers\deleteChannelsGroupController@save')->name('delete_channelsGroups');
		
	});