<?php

class Weather extends Eloquent {

	protected $table = 'weather';

	public $fillable = ['id', 'type', 'wind', 'baro', 'metar'];
	public $timestamps = false;


	public function getDFWDepartureRunwaysAttribute()
	{
		$wind_kts = $wind_dir = 0;

		if ($this->wind != 'Calm')
			list($wind_dir, $wind_kts) = explode("@", $this->wind);

		if (($wind_kts >= 10) && ($wind_dir >= 270 && $wind_dir <= 90))
			return '36R, 35L, 31L';
		elseif (($wind_kts < 10) || ($wind_kts >= 10 && ($wind_dir < 270 && $wind_dir > 90)))
			return '18L, 17R';
	}
	public function getDFWArrivalRunwaysAttribute()
	{
		$wind_kts = $wind_dir = 0;
		
		if ($this->wind != 'Calm')
			list($wind_dir, $wind_kts) = explode("@", $this->wind);

		if (($wind_kts >= 10) && ($wind_dir >= 270 && $wind_dir <= 90)){
			return '36L, 35C, 35R';
		$D10_flow = "north";}
		elseif (($wind_kts < 10) || ($wind_kts >= 10 && ($wind_dir < 270 && $wind_dir > 90))){
			return '18R, 17C, 17R, 13R';
		$D10_flow = "south";}
	}
	public function getDALDepartureRunwaysAttribute()
	{
		$wind_kts = $wind_dir = 0;

		if ($this->wind != 'Calm')
			list($wind_dir, $wind_kts) = explode("@", $this->wind);

		if ($D10_flow == "north")
			return '31L, 31R';
		elseif ($D10_flow == "south")
			return '13R, 13L';
	}
	
	public function getDALArrivalRunwaysAttribute()
	{
		$wind_kts = $wind_dir = 0;

		if ($this->wind != 'Calm')
			list($wind_dir, $wind_kts) = explode("@", $this->wind);

		if ($D10_flow == "north")
			return '31L, 31R';
		elseif ($D10_flow == "south")
			return '13R, 13L';
	}
	public function getOKCDepartureRunwaysAttribute()
	{
		$wind_kts = $wind_dir = 0;

		if ($this->wind != 'Calm')
			list($wind_dir, $wind_kts) = explode("@", $this->wind);

		if (($wind_kts) >= 10 && ($wind_dir >= 170 && $wind_dir <= 350))
			return '35L, 35R';
		elseif (($wind_kts < 10) || ($wind_kts) >= 10 && ($wind_dir < 170 && $wind_dir > 350))
			return '17R, 17L';
	}
	
	public function getOKCArrivalRunwaysAttribute()
	{
		$wind_kts = $wind_dir = 0;

		if ($this->wind != 'Calm')
			list($wind_dir, $wind_kts) = explode("@", $this->wind);

		if (($wind_kts) >= 10 && ($wind_dir >= 170 && $wind_dir <= 350))
			return '35L, 35R';
		elseif (($wind_kts < 10) || ($wind_kts) >= 10 && ($wind_dir < 170 && $wind_dir > 350))
			return '17R, 17L';
	}
}
