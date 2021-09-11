<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use FelipeMateus\IPTVChannels\Model\IPTVConfig;

class CreateIptvConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iptv_configs', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name")->unique();
            $table->text('val');
            $table->char('type', 20)->default('string');
        });

        IPTVConfig::set('RADIO_STREAM',true,'bool');
        IPTVConfig::set('DOWNLOAD_FILE',false, 'bool');
        IPTVConfig::set('URL_CDN',false, 'bool');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iptv_configs');
    }
}
