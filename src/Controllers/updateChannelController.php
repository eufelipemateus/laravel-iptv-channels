<?php

namespace Felipefm32\LaravelIPTV\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
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
		
		$this->validate($request, [
			'number' => ['required','numeric',Rule::unique('iptv_channels')->ignore($channel->id, 'id')],
			'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'group_id' => 'required|exists:iptv_channel_groups,id',
		]);
		
	
		
		
		$data = $request->all();
		$channel->update($data);
		$image = $request->file('image');
		
		if(isset($image)){
			$channel->logo=$image;
		}
	
		
		if(!isset($data['radio'])){
			$channel->radio=false;
		}else{
			$channel->radio=true;
			
		}
		
		
		$channel->save();
		return redirect()->route('list_channels');
	}
}
