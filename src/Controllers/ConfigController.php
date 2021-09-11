<?php

namespace  FelipeMateus\IPTVChannels\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use FelipeMateus\IPTVChannels\Model\IPTVCdn;
use FelipeMateus\IPTVChannels\Model\IPTVConfig;

class ConfigController extends Controller
{
    /**
     * Show config page.
     *
     * @return view -> IPTV::config
     */
	public function config(){

        $data["config_list"] = IPTVConfig::getAllSettings();
		return view("IPTV::config", $data);
	}

    /**
     * Update config .
     *
     * @return redirect -> show configs
     */
    public function configSave(Request $request ){
        $configs = IPTVConfig::getAllSettings();
        foreach($configs as $config){
            IPTVConfig::set($config['name'], $request->boolean($config['name']),'bool');
        }
        return redirect()->route('config');
    }
}
