<?php

namespace  FelipeMateus\IPTV\Controllers;

use Illuminate\Http\Request;

use  FelipeMateus\IPTV\Model\IPTVChannel;

class ChannelListController  extends Controller{

    /**
     *  This fucntion return file M3U to list to player
     *
     * @return response
     */
	public function index(){
		$data["list"] = IPTVChannel::getList();
		return response()
            ->view("IPTV::list_M3U",$data, 200)
            ->header('Content-Type', "text/plain");
	}
}
