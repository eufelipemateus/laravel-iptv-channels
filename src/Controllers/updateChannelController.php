<?php

namespace Felipefm32\LaravelIPTV\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Validation\Rule;
=======
>>>>>>> 06de5f10860b48c2b2cce895533b59a9e8b57c5f
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
		
<<<<<<< HEAD
		
		$channel =IPTVChannel::findOrFail($id);
		
		$this->validate($request, [
			'number' => ['required','numeric',Rule::unique('iptv_channels')->ignore($channel->id, 'id')],
			'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'group_id' => 'required|exists:iptv_channel_groups,id',
		]);
		
		
		
		
=======
		$channel =IPTVChannel::findOrFail($id);
		
>>>>>>> 06de5f10860b48c2b2cce895533b59a9e8b57c5f
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
