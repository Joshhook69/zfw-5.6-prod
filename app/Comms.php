<?php

class Comms extends Eloquent {

	public static $FacilityLong = [
'a' => 'ZFW - Enroute',
'b' => 'D10 - Dallas Fort Worth TRACON',
'c' => 'OKC - Oklahoma City TRACON',
'd' => 'MAF - Midland TRACON',
'e' => 'ABI - Abilene TRACON',
'f' => 'LBB - Lubbock TRACON',
'g' => 'SJT - San Angelo TRACON',
'h' => 'ACT - Waco TRACON',
'i' => 'GGG - Longview TRACON',
'j' => 'SHV - Shreveport TRACON',
'k' => 'MLU - Monroe TRACON',
'l' => 'LTS - Altus RAPCON',
'm' => 'SPS - Wichita Falls RAPCON',
'n' => 'FSI - Fort Sill RAPCON',
'o' => 'GRK - Grey AAF RAPCON',
'p' => 'DFW - Dallas Fort Worth ATCT',
'q' => 'ABI - Abilene ATCT',
'r' => 'ACT - Waco ATCT',
's' => 'ADM - Ardmore ATCT',
't' => 'ADS - Addison ATCT',
'u' => 'AFW - Fort Worth Alliance ATCT',
'v' => 'BAD - Barksdale ATCT',
'w' => 'CNW - TSTC Waco ATCT',
'x' => 'CSM - Sherman ATCT',
'y'=> 'DAL - Dallas Love ATCT',
'z' => 'DTN - Downtown ATCT',
'aa' => 'DTO - Denton ATCT',
'ab' => 'DYS - Dyess ATCT',
'ac' => 'FTW - Fort Worth Meacham ATCT',
'ad' => 'FWS - Fort Worth Spinks ATCT',
'ae' => 'GGG - East Texas Regional ATCT',
'af' => 'GKY - Arlington ATCT',
'ag' => 'GPM - Grand Prairie ATCT',
'ah' => 'GVT - Majors ATCT',
'ai' => 'GYI - North Texas ATCT',
'aj' => 'LAW - Lawton ATCT',
'ak' => 'LTS - Altus ATCT',
'al' => 'MAF - Midland ATCT',
'am' => 'MLU - Monroe ATCT',
'an' => 'NFW - Fort Worth Navy ATCT',
'ao' => 'OKC - Rogers ATCT',
'ap' => 'OUN - Westheimer ATCT',
'aq' => 'PWA - Wiley Post ATCT',
'ar' => 'RBD - Executive ATCT',
'as' => 'SHV - Shreveport ATCT',
'at' => 'SJT - San Angelo ATCT',
'au' => 'SPS - Wichita Falls ATCT',
'av' => 'TIK - Tinker ATCT',
'aw' => 'TKI - Mckinney ATCT',
'ax' => 'TXK - Texarkana ATCT',
'ay' => 'TYR - Tyler Pounds ATCT',
'UNKNOWN' => 'UNKNOWN',
        ];

    protected $table = 'comms_airport';
    protected $fillable = array('position', 'name', 'facility', 'frequency', 'pofid');

    public function getFacilityLongAttribute()
    {
        foreach (Comms::$FacilityLong as $id => $facility) {
            if ($this->facility == $id) {
                return $facility;
            }
        }

        return "";
    }

}
