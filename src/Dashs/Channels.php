<?php

namespace Tschope\IPTVChannels\Dashs;

use Tschope\IPTVCore\Helpers\IPTVDashBase;
use Tschope\IPTVChannels\Model\IPTVChannel;


class Channels extends IPTVDashBase {
    public static  $title = "Channels Total";

    public static function view(){
        $data['total'] = IPTVChannel::count();
        return view('IPTV::channel_dash', $data);
    }
}
