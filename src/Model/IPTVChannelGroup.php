<?php

namespace Felipefm32\LaravelIPTV\Model;

use Illuminate\Database\Eloquent\Model;

class IPTVChannelGroup extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
	
	protected $table = "iptv_channel_groups";
	
}
