<?php

namespace Felipefm32\LaravelIPTV\Model;

use Illuminate\Database\Eloquent\Model;

class IPTVChannel extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'group_id', 'number', 'name','logo','url_stream','radio',
    ];
	
	protected $table = "iptv_channels";

	/**
     * Get the group that this channel.
     */
    public function group()
    {
        return $this->belongsTo('Felipefm32\LaravelIPTV\Model\IPTVChannelGroup');
    }
	
	public function scopeGetList($query){
		
		return  $query->orderBy("radio")->orderBy('number')->get(); 
		
	}
	
	public function setLogoAttribute($image){
		
		$nameLogo = md5($image->getClientOriginalName()).'.'.$image->getClientOriginalExtension();
		
		$path = "logos/";
		$destinationPath = public_path('/'.$path);

		$image->move($destinationPath, $nameLogo);
			
		$this->attributes['logo'] =  $path.$nameLogo;
	}
	
	
	
}
