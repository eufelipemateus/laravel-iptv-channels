<?php

namespace Felipefm32\LaravelIPTV\Controllers;

use Illuminate\Http\Request;
use Felipefm32\LaravelIPTV\Model\IPTVChannelGroup;


class showChannelsGroupController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
	
	public function index($id){
		
		$data["Group"] = IPTVChannelGroup::findOrFail($id);
		
		return view("IPTV::channelGroup",$data);
		
	}
}
