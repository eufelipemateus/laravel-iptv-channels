<?php

namespace Felipefm32\LaravelIPTV\Controllers;


use Illuminate\Http\Request;

use Felipefm32\LaravelIPTV\Model\IPTVChannel;


class ChannelListController  extends Controller{
	
    
	public function index(){
		
		$data["list"] = IPTVChannel::getList();
		#return view("IPTV::channels_list_api",$data);
		
		return response()
            ->view("IPTV::channels_list_api",$data, 200)
            ->header('Content-Type', "text/plain");
	}
}
