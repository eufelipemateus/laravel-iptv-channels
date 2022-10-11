<?php

namespace Tschope\IPTVChannels\Dashs;

use Tschope\IPTVCore\Helpers\IPTVDashBase;
use Tschope\IPTVChannels\Model\IPTVCdn;

class Cdns extends IPTVDashBase {
    public static  $title = "CDNs Total";

    public static function view(){
        $data['total'] = IPTVCdn::count();
        return view('IPTV::cdn_dash', $data);
    }
}
