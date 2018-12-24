<?php

use Carbon\Carbon;

class Events extends Eloquent {
	
	public static $HostLong = [
        'VATCAN' => 'VATCAN',
        'VATCAR' => 'VATCAR',
        'VATMEX' => 'VATMEX',
        'VATSIM' => 'VATSIM',
        'VATUSA' => 'VATUSA',
        'ZAB' => 'Albuquerque ARTCC',
        'ZAN' => 'Anchorage ARTCC', 
        'ZTL' => 'Atlanta ARTCC',
        'ZBW' => 'Boston ARTCC',
        'ZAU' => 'Chicago ARTCC',
        'ZOB' => 'Cleveland ARTCC',
        'ZDV' => 'Denver ARTCC',
        'ZFW' => 'Fort Worth ARTCC',
        'HCF' => 'Honolulu CF',
        'ZHU' => 'Houston ARTCC',
        'ZID' => 'Indianapolis ARTCC',
        'ZJX' => 'Jacksonville ARTCC',
        'ZKC' => 'Kansas City ARTCC',
        'ZLA' => 'Los Angeles ARTCC',
        'ZME' => 'Memphis ARTCC',
        'ZMA' => 'Miami ARTCC',
        'ZMP' => 'Minnieapolis ARTCC',
        'ZNY' => 'New York ARTCC',
        'ZOA' => 'Oakland ARTCC',
        'ZLC' => 'Salt Lake City ARTCC',
        'ZSE' => 'Seattle ARTCC',
        'ZDC' => 'Washington DC ARTCC',
    ];

    public static $DefaultPos = [
	'0' => 'None',
        '1' => 'Support',
        '2' => 'Enroute',
        '3' => 'D10',
	'4' => 'Oklahoma City',
	'5' => 'Waco',
	'6' => 'Abilene',
    '7' => 'Midland',
    '8' => 'Lubbock',
    '9' => 'Greg County / LongView',
    '10' => 'Altus',
    '11' => 'Monroe',
    '12' => 'Shreveport',
    '13' => 'Wichita Falls',
    ];

	protected $table = 'event';

	protected $dates = ['created_at', 'updated_at', 'event_start', 'event_end'];
	protected $fillable = array('title', 'event_start', 'event_end', 'banner_link', 'description', 'host', 'status');


    public function positions() {
        return $this->hasMany('EventPosition', 'event_id');
    }

    public function getHostLongAttribute()
    {
        foreach (Events::$HostLong as $id => $long) {
            if ($this->host == $id) {
                return $long;
            }
        }

        return "";
    }

    public function getStatusLongAttribute()
    {
        switch($this->status)
        {
            case 0: return "Hidden";
            case 1: return "Active";

        }
    }

    public static function current()
    {
        return static::query()->where('status', '1')->where('event_end', '>', Carbon::now());
    }

    public function fillPositions()
    {
        //
    }
}
