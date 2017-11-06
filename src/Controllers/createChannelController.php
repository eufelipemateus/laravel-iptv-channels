<?php

namespace Felipefm32\LaravelIPTV\Controllers;

use Illuminate\Http\Request;
use Felipefm32\LaravelIPTV\Model\IPTVChannel;

class createChannelController extends Controller
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
	
	public function save(Request $request){
			
		$this->validate($request, [
			'number' => 'numeric|required|unique:iptv_channels',
			'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
			'group_id' => 'required|exists:iptv_channel_groups,id',
		]);
		
		
		
		$data = $request->all();
	

		$c = IPTVChannel::create($data);
		// Save Image
		$c->logo = $request->file('image') ;
		$c->save();
		
		
		return redirect()->route('list_channels');

	}
}
