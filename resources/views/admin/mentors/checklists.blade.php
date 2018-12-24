@extends('layouts.master')

@section('title')
@parent
| Instructing
@stop

@section('content')
<div class="page-heading-two">
    <div class="container">
        <h2>Training Checklists</h2>
    </div>
</div>

<div class="container">

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse0">General Setup</a>
                    </h4>
                </div>
                <div id="collapse0" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ol>
                            <li>Go through all information in the setting general tab</li>
                            <li>Proper Arrival and Departure feilds in settings/general/airspace</li>
                            <li>Proper selections under the view tab and diagrams tab</li>
                            <li>Student understands how to use all the panels and how to access them. Weather, Arrivals/Departures, ETC</li>
                            <li>Student understand how to text and use voice operations on VRC</li>
                            <li>Student understands how to use the alias file for text communication</li>
                            <li>Student understands the maximum radar distance for each posistion</li>
                            <li>Student understands and has been instructed on the proper use of flight strips</li>
                            <li>Student reads and understands information provided on GND data tags</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Minor Delivery/Ground</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body">
						<b>Delivery</b>
                        <ol>
                            <li>National Airspace System Classes of Airspace</li>
                            <li>National Airspace System Special Use Airspace</li>
                            <li>Airways and Route Systems</li>
                            <li>NAVAIDs and Fixes</li>
                            <li>VFR/SVFR Weather Minimums</li>
                            <li>Flight Rules (VFR, SVFR, DVFR, IFR)</li>
                            <li>METAR Decoding</li>
                            <li>TAF Decoding</li>
                            <li>Phonetic Alphabet</li>
                            <li>Aircraft Identification</li>
                            <li>Altitude and Flight Levels</li>
                            <li>VATSIM CoC Policies regarding Emergencies and Air Force One</li>
                            <li>Emergency Squawk Codes</li>
                            <li>Accessing and Amending Flight Plan Data</li>
                            <li>Preferred Routing Paths</li>
                            <li>Reading and understanding SIDs</li>
                            <li>Squawk Code Assignments</li>
                            <li>Cruise Altitude Selection</li>
                            <li>Climb Via SID Understanding</li>
                            <li>VFR Clearances outside Class Bravo</li>
                            <li>VFR Clearances inside Class Bravo</li>
                            <li>IFR Clearance Issuance (CRAFT)</li>
                            <li>Full Route Clearances</li>
                            <li>Climb Via SID Understanding</li>
                            <li>Scratch Pad Entries if neccessary</li>
                            <li>Listening to Readbacks and proceeding as neccessary</li>
                        </ol>
							<b>Ground</b>
						<ol>
                            <li>Movement vs Non-Movement Areas</li>
                            <li>Areas of Responsibility</li>
                            <li>Finding an Aircraft utilizing "say position"</li>
                            <li>Taxi Instructions without hold short instructions</li>
                            <li>Taxi Instructions including Hold Short Instructions</li>
                            <li>Taxi Instructions for Intersection Departures</li>
                            <li>Altimeter Issuance When Appropriate</li>
                            <li>Progressive Taxi Instructions</li>
                            <li>Helicopter Taxi Operations - Surface Taxi</li>
                            <li>Helicopter Taxi Operations - Hover Taxi</li>
                            <li>Helicopter Taxi Operations - Air Taxi</li>
                            <li>Coordination with Local Control</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Major Delivery/Ground</a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">
						<b>Prerequisites:</b>
                        <ol>
							<li>Must have an S1 Rating or higher</li>
							<li>Must display all competencies of a Clearance Delivery and Ground controller defined in GRP</li>
							<li>Must be able to handle the increased traffic load</li>
							<li>Must pass the DFW Major Ground Exam on VATUSA</li>
						</ol>
						<b>Requirements:</b>
						<ol>
							<li>Must know the runway configurations</li>
							<li>Must know the control area of Ground</li>
							<li>Must know where the cargo and GA ramps are located</li>
							<li>Must know the taxi flows of F, G, K, & L</li>
							<li>Must know the bridge flows of A, B, Y, & Z</li>
							<li>Must understand the concept of Directional Departures</li>
							<li>Must know that the international terminal is D</li>
							<li>Must know the initial altitudes and when to use Climb via SID</li>
							<li>Must understand the scratchpad procedures</li>
							<li>Must know the prop only departures</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Minor Tower</a>
                    </h4>
                </div>
                <div id="collapse5" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ol>
                            <li>Local Airspace Area of Responsibility</li>
                            <li>Selection of Runways</li>
                            <li>Recording an ATIS</li>
                            <li>Wake Turbulence Application</li>
                            <li>L.U.A.W Procedures and Restrictions</li>
                            <li>Call for departure releases</li>
                            <li>Departure Procedures</li>
                            <li>VFR Departure Procedures</li>
                            <li>Arrival Procedures</li>
                            <li>Communications Transfer</li>
                            <li>VFR Traffic Patterns</li>
                            <li>Missed Approach / Go Around Procedures</li>
                            <li>Spacing and Sequencing of Aircraft</li>
                            <li>Traffic/Safety Advisories</li>
                            <li>Runway Visual Range</li>
                            <li>Helicopter Operations (Arrival and Departure from Ramp)</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Major Tower</a>
                    </h4>
                </div>
                <div id="collapse6" class="panel-collapse collapse">
                    <div class="panel-body">
						<b>Prerequisites:</b>
						<ol>	
                            <li>Must have an S2 Rating or higher                                
                            <li>Must display all competencies of a Tower controller defined in GRP                                
                            <li>Must be DFW Major Ground certified                                
                            <li>Must be able to handle the increased traffic load                
                            <li>Must pass the DFW Major Tower Exam on VATUSA                                
                        </ol>        
						<b>Requirements:</b>
						<ol>
                            <li>Must know all information associated with DFW Major Ground 					
                            <li>Must know the control area of Tower                                
                            <li>Must understand the missed approach/go around procedures                                
                            <li>Must know the airspace tower owns                                
                            <li>Must know the relationship with Dallas Love                        
                            <li>Must know where the departure gates of the D10 are located                                
                            <li>Must understand how to use LAHSO                                
                            <li>Must know the RNAV off the runway points for departures                                
                            <li>Must know the headings for NON-RNAV departures	
						</ol>						
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Minor Approach</a>
                    </h4>
                </div>
                <div id="collapse7" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ol>
                            <li>Radar Modes and Radar Position Responsibilities</li>
                            <li>Radar Separation Requirements</li>
                            <li>Separation of Formation Flights (Standard and Non-Standard)</li>
                            <li>Approach Separation Requirements</li>
                            <li>Wake Turbulence Application</li>
                            <li>Visual Separation</li>
                            <li>Merging Target Procedure Understanding</li>
                            <li>Traffic Calls and Safety Alerts</li>
                            <li>Radar Identification Utilizing Primary Methods</li>
                            <li>Radar Identification Utilizing Secondary Methods</li>
                            <li>Cancellation of Radar Services</li>
                            <li>SIDs (Radar Vectored, Hybrid and Pilot-Nav)</li>
                            <li>STARs (Non-RNAV and RNAV)</li>
                            <li>Reading Instrument Approach Plates</li>
                            <li>Efficient Vectors</li>
                            <li>RNAV vs Non-RNAV Vectoring</li>
                            <li>PTACs (ILS, GPS/RNAV, VOR/TACAN, NBD, LOC, Visual)ILS Approach Clearance</li>
                            <li>Circling Approach Procedures</li>
                            <li>Climb out Instructions</li>
                            <li>Uncontrolled Field Procedures</li>
                            <li>VFR Flight Following</li>
                            <li>Pop UP IFR</li>
                            <li>VFR Arrivals at Class C/D Fields</li>
                            <li>VFR Class Charlie Departure Procedures</li>
                            <li>VFR Class C/B Transitions</li>
                            <li>VFR-on-Top (v. VFR and IFR)</li>
                            <li>Pop UP IFR</li>
                            <li>Radar Handoff</li>
                            <li>Holding Instructions</li>
                            <li>Clearances from Holdings</li>
                            <li>Speed Restrictions Utilizing Mach Number, Indicated Air Speed</li>
                            <li>Procedures to Join Airways</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">Major Approach</a>
                    </h4>
                </div>
                <div id="collapse8" class="panel-collapse collapse">
                    <div class="panel-body">
                        <b>Prerequisites:</b>
                        <ol>                                
                            <li>Must have an S3 Rating or higher</li>                              
                            <li>Must display all competencies of a TMU controller defined in GRP</li>                              
                            <li>Must be DFW Major Tower certified</li>                                 
                            <li>Must be able to handle the increased traffic load</li>                 
                            <li>Must pass the D10 Major Approach Exam on VATUSA</li>  
                        </ol>
						<b>Requirements:</b>
						<ol>                                
                            <li>Must know all information associated with DFW Major Tower</li>                              
                            <li>Must know where to find the available positions</li>                
                            <li>Must know the airspace each position controls</li>                       
                            <li>Must understand how the flow dependent arrivals into the D10 operate</li>                                
                            <li>Must understand satellite operations</li>                                
                            <li>Must understand how KDAL arrivals work</li>                                
                            <li>Must know where the do-not-cross line is located</li>                
                            <li>Must understand how departures out of the D10 work</li>                                
                            <li>Must know the top of the airspace and the top of the DFW Bravo</li>                                
                            <li>Must understand the different types of operations we can run at DFW (trips, duals, widely spaced)</li>                
                            <li>Must comply with all MVA's</li>                                
                            <li>Must understand why 11,000 is the bottom of the arrivals</li>                                
                            <li>Must know the initial altitudes of all fields in the D10</li>                                
                            <li>Must know who the appropriate person to hand off to is</li>
						</ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">Enroute</a>
                    </h4>
                </div>
                <div id="collapse9" class="panel-collapse collapse">
                    <div class="panel-body">
						<b>Prerequisites:</b>
                        <ol>                               
                            <li>Must have an S3 Rating or higher</li>     
							<li>Must be D10 Major Approach certified</li> 							
                            <li>Must display all competencies of an Enroute controller defined in GRP</li>                                                            
                            <li>Must be able to handle the increased traffic load</li>  
                        </ol>
						<b>Requirements:</b>
						<ol>
                            <li>Must know all information associated with D10 Major Approach</li>                          
                            <li>Must know where to find all center splits and available positions to work</li>                                
                            <li>Must be familiar with all LOA's</li>                                
                            <li>Must know to issue descent instructions for AUS/I90/TUL arrivals</li>                                
                            <li>Must be familiar with all TRACON airspace limits</li>                
                            <li>Must know about OKC TRACON procedures</li>
						</ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script> jQuery('.accordion-2 .panel-heading a[data-toggle="collapse"]').on('click', function () {   
    jQuery('.accordion-2 .panel-heading a[data-toggle="collapse"]').removeClass('actives');
    $(this).addClass('actives');
 });
</script>

@stop
