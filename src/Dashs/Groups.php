<?php

namespace Tschope\IPTVChannels\Dashs;

use Tschope\IPTVCore\Helpers\IPTVDashBase;
use Tschope\IPTVChannels\Model\IPTVChannelGroup;


class Groups extends IPTVDashBase {
    public static  $title = "Groups Total";

    public static function view(){
        $data['total'] = IPTVChannelGroup::count();
        return view('IPTV::group_dash', $data);
    }
}
