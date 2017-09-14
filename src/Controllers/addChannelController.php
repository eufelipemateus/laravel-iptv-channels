<?php

namespace Felipefm32\LaravelIPTV\Controllers;

use Illuminate\Http\Request;
use Felipefm32\LaravelIPTV\Model\IPTVChannelGroup;


class addChannelController extends Controller
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
		
		$data["Groupslist"] = IPTVChannelGroup::get();
		
		return view("IPTV::channel",$data);
	}
	
	
}
