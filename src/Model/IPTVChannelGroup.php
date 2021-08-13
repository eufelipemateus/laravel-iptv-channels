<?php

namespace  FelipeMateus\IPTV\Model;

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

    /**
     * Get the comments for the blog post.
     */
    public function comments()
    {
        return $this->hasMany('FelipeMateus\IPTV\Model\IPTVChannel');
    }

}
