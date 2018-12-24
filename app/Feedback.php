<?php

class Feedback extends Eloquent {

    public static $Positions = [
     'FTW_CTR' => 'Enroute (Fort Worth Center)',
     'APP' => '-------- APPROACH/DEPARTURE --------',
     'REG_APP' => '(D10) Regional Approach/Departure', 
     'ABI_APP' => '(ABI) Abilene Approach/Departure', 
     'ACT_APP' => '(ACT) Waco Approach/Departure',
     'GGG_APP' => '(GGG) Longview Approach/Departure',
     'LBB_APP' => '(LBB) Lubbock Approach/Departure',
     'LTS_APP' => '(LTS) Altus Approach/Departure',
     'MAF_APP' => '(MAF) Midland Approach/Departure',
     'MLU_APP' => '(MLU) Monroe Approach/Departure',
     'OKC_APP' => '(OKC) Oke City Approach/Departure',
     'SHV_APP' => '(SHV) Shreveport Approach/Departure',
     'SJT_APP' => '(SJT) San Angelo Approach/Departure',
     'SPS_APP' => '(SPS) Wichita Falls Approach/Departure',
     'TWR' => '-------------- TOWER --------------',
     'DFW_TWR' => '(DFW) Dallas Fort Worth Tower', 
     'DAL_TWR' => '(DAL) Dallas Love Tower', 
     'ABI_TWR' => '(ABI) Abilene Tower',
     'ACT_TWR' => '(ACT) Waco Tower',
     'ADM_TWR' => '(ADM) Ardmore Tower',
     'ADS_TWR' => '(ADS) Addison Tower',
     'AFW_TWR' => '(AFW) Fort Worth Alliance Tower',
     'BAD_TWR' => '(BAD) Barksdale Tower',
     'CNW_TWR' => '(CNW) TSTC Tower',
     'CSM_TWR' => '(CSM) Sherman Tower',
     'DTN_TWR' => '(DTN) Downtown Tower', 
     'DTO_TWR' => '(DTO) Denton Tower',
     'DYS_TWR' => '(DYS) Dyess Tower',
     'FTW_TWR' => '(FTW) Fort Worth Meacham Tower',
     'FWS_TWR' => '(FWS) Fort Worth Spinks Tower',
     'GGG_TWR' => '(GGG) East Texas Regional Tower',
     'GKY_TWR' => '(GKY) Arlington Tower',
     'GPM_TWR' => '(GPM) Grand Prairie Tower',
     'GVT_TWR' => '(GVT) Majors Tower',
     'GYI_TWR' => '(GYI) North Texas Tower',
     'LAW_TWR' => '(LAW) Lawton Tower',
     'LTS_TWR' => '(LTS) Altus Tower',
     'MAF_TWR' => '(MAF) Midland Tower',
     'MLU_TWR' => '(MLU) Monroe Tower',
     'NFW_TWR' => '(NFW) Fort Worth Navy',
     'OKC_TWR' => '(OKC) Rogers Tower',
     'OUN_TWR' => '(OUN) Westheimer Tower',
     'PWA_TWR' => '(PWA) Wiley Post Tower',
     'RBD_TWR' => '(RBD) Executive Tower',
     'SHV_TWR' => '(SHV) Shreveport Tower',
     'SJT_TWR' => '(SJT) San Angelo Tower',
     'SPS_TWR' => '(SPS) Wichita Falls Tower',
     'TIK_TWR' => '(TIK) Tinker Tower',
     'TKI_TWR' => '(TKI) Mckinney Tower',
     'TXK_TWR' => '(TXK) Texarkana Tower',
     'TYR_TWR' => '(TYR) Tyler Pounds Tower',
     'GND' => '-------------- GROUND --------------',
     'DFW_GND' => '(DFW) Dallas Fort Worth Ground', 
     'DAL_GND' => '(DAL) Dallas Love Ground', 
     'ABI_GND' => '(ABI) Abilene Ground',
     'ACT_GND' => '(ACT) Waco Ground',
     'ADM_GND' => '(ADM) Ardmore Ground',
     'ADS_GND' => '(ADS) Addison Ground',
     'AFW_GND' => '(AFW) Fort Worth Alliance Ground',
     'BAD_GND' => '(BAD) Barksdale Ground',
     'CNW_GND' => '(CNW) TSTC Ground',
     'CSM_GND' => '(CSM) Shermon Ground',
     'DTN_GND' => '(DTN) Downtown Ground', 
     'DTO_GND' => '(DTO) Denton Ground',
     'DYS_GND' => '(DYS) Dyess Ground',
     'FTW_GND' => '(FTW) Fort Worth Meacham Ground',
     'FWS_GND' => '(FWS) Fort Worth Spinks Ground',
     'GGG_GND' => '(GGG) East Texas Regional Ground',
     'GKY_GND' => '(GKY) Arlington Ground',
     'GPM_GND' => '(GPM) Grand Prairie Ground',
     'GVT_GND' => '(GVT) Majors Ground',
     'GYI_GND' => '(GYI) North Texas Ground',
     'LAW_GND' => '(LAW) Lawton Ground',
     'LTS_GND' => '(LTS) Altus Ground',
     'MAF_GND' => '(MAF) Midland Ground',
     'MLU_GND' => '(MLU) Monroe Ground',
     'NFW_GND' => '(NFW) Fort Worth Navy Ground',
     'OKC_GND' => '(OKC) Rogers Ground',
     'OUN_GND' => '(OUN) Westheimer Ground',
     'PWA_GND' => '(PWA) Wiley Post Ground',
     'RBD_GND' => '(RBD) Executive Ground',
     'SHV_GND' => '(SHV) Shreveport Ground',
     'SJT_GND' => '(SJT) San Angelo Ground',
     'SPS_GND' => '(SPS) Wichita Falls Ground',
     'TIK_GND' => '(TIK) Tinker Ground',
     'TKI_GND' => '(TKI) Mckinney Ground',
     'TXK_GND' => '(TXK) Texarkana Ground',
     'TYR_GND' => '(TYR) Tyler Pounds Ground',
     'DEL' => '------------ DELIVERY ------------',
     'DFW_DEL' => '(DFW) Dallas Fort Worth Delivery', 
     'DAL_DEL' => '(DAL) Dallas Love Delivery',
     'AFW_DEL' => '(AFW) Fort Worth Alliance Delivery',
     'DTO_DEL' => '(DTO) Denton Delivery',
     'FTW_DEL' => '(FTW) Fort Worth Meacham Delivery',
     'FWS_DEL' => '(FWS) Fort Worth Spinks Delivery',
     'MLU_DEL' => '(MLU) Monroe Delivery',
     'NFW_DEL' => '(NFW) Fort Worth Navy Delivery',
     'OKC_DEL' => '(OKC) Rogers Delivery',
     'RBD_DEL' => '(RBD) Executive Delivery',
     'SHV_DEL' => '(SHV) Shreveport Delivery',
     'SPS_DEL' => '(SPS) Wichita Falls Delivery',
     'TIK_DEL' => '(TIK) Tinker Delivery',
     'UNKNOWN' => 'Unknown'
    ];

    protected $table = 'feedback';

    protected $fillable = array('controller_id', 'position', 'level', 'comments', 'staff_comments', 'pilot_name', 'pilot_id', 'pilot_email', 'flight_callsign', 'status');

    public function controller() {
        return $this->hasOne('User', 'id', 'controller_id');
    }

    public function getLevelTextAttribute()
    {
    	switch($this->level)
    	{
    		case 0: return "Unsatisfactory";
    		case 1: return "Poor";
    		case 2: return "Fair";
    		case 3: return "Good";
    		case 4: return "Excellent";
    	}
    }

    public function getFeedbackPosAttribute()
    {
        foreach (Feedback::$Positions as $id => $Long) {
            if ($this->position == $id) {
                return $Long;
            }
        }

        return "";
    }

    public function sendPilotEmail()
    {
        return Mail::send('emails.feedbackpilot', ['feedback' => $this], function($message){
            $message->from('no-reply@zfwartcc.net', 'vZFW No-Reply');
            $message->to($this->pilot_email);
            $message->subject('vZFW - Feedback Response');
        });
    }

    public function sendControllerEmail()
    {
        return Mail::send('emails.feedbackcontroller', ['feedback' => $this], function($message){
            $message->from('no-reply@zfwartcc.net', 'vZFW No-Reply');
            $message->to($this->controller->email);
            $message->subject('vZFW - New Feedback');
        });
    }

}
