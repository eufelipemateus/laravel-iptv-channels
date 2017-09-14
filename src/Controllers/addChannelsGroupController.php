<?php

namespace Felipefm32\LaravelIPTV\Controllers;

use Illuminate\Http\Request;

class addChannelsGroupController extends Controller
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
		
		return view("IPTV::channelGroup");
	}
}
