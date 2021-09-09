<?php

namespace  FelipeMateus\IPTVChannels\Controllers;

use Illuminate\Http\Request;

use  FelipeMateus\IPTVChannels\Model\IPTVChannel;

class ChannelListM3UController  extends Controller{

    /**
     *  This fucntion return file M3U to list to player
     *
     * @return response
     */
	public function show($slug){
		$data["list"] = IPTVChannel::getListM3u8($slug);
		return response()
            ->view("IPTV::list_M3U",$data, 200)
            ->header('Content-Type', "text/plain; charset=utf-8");
	}
}
