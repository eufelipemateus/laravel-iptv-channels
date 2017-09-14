<?php

namespace Felipefm32\LaravelIPTV\Controllers;

use Illuminate\Http\Request;
use Felipefm32\LaravelIPTV\Model\IPTVChannelGroup;


class showListChannelsGroupsController extends Controller
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
	
	public function index(){
		
		$data["list"] = IPTVChannelGroup::get();
		
		return view("IPTV::channels_groups_list",$data);
		
	}
}
