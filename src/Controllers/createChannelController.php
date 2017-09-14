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
<<<<<<< HEAD
			
		$this->validate($request, [
			'number' => 'numeric|required|unique:iptv_channels',
			'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
=======
		
		
		
		$this->validate($request, [
			'number' => 'numeric|required|unique:iptv_channels',
			'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
>>>>>>> 06de5f10860b48c2b2cce895533b59a9e8b57c5f
			'group_id' => 'required|exists:iptv_channel_groups,id',
		]);
		
		
		$data = $request->all();
	
<<<<<<< HEAD
	
=======
		
		
>>>>>>> 06de5f10860b48c2b2cce895533b59a9e8b57c5f
		$c = IPTVChannel::create($data);
		// Save Image
		$c->logo = $request->file('image') ;
		$c->save();
		
		
		return redirect()->route('list_channels');
<<<<<<< HEAD
=======
		
>>>>>>> 06de5f10860b48c2b2cce895533b59a9e8b57c5f
	}
}
