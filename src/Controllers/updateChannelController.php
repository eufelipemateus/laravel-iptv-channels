<?php

namespace Felipefm32\LaravelIPTV\Controllers;

use Illuminate\Http\Request;
use Felipefm32\LaravelIPTV\Model\IPTVChannel;


class updateChannelController extends Controller{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
	
	public function save($id,Request $request){
		
		$channel =IPTVChannel::findOrFail($id);
		
		$data = $request->all();
		$channel->update($data);
		$image = $request->file('image');
		
		if(isset($image)){
			$channel->logo=$image;
			$channel->save;
		}
		
		return redirect()->route('list_channels');
	}
}
