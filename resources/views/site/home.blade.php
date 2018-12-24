@extends('layouts.master')

@section('title')
@parent
| Home
@stop

@section('content')
<div class="rotating-banner">
	<div class="container">
		<div class="about-us-one">
			<div class="row">
				<div class="col-sm-9">
					<h2>Fort Worth Virtual ARTCC</h2>
						<p style="text-align:justify">Fort Worth Virtual Air Route Traffic Control Center (ZFW ARTCC) is part of the VATSIM Network of virtual pilots and air traffic controllers. Modeled on the real Fort Worth ARTCC, we cover more than 147,000 square miles spread over parts of 5 states. We provide services to 85 airports with instrument approach procedures and 20 radar approach control facilities including the main one, the Dallas/Fort Worth terminal area. We have 14 military bases, 23 military operations areas, and 8 aerial refueling tracks.</p>
						<p style="text-align:justify">All information contained on these pages are for flight simulation use only on the VATSIM network and shall not be used for real world navigation or aviation purposes. This site is in no way affiliated with the FAA, actual ZFW ARTCC or any other governing aviation agency or group. All content contained herein is approved for use on the VATSIM network.</p>
				</div>
				<div class="col-sm-3 online-sectors">
					<table class="table table-condensed">
						<tr>
                            <th width="40%">Center</th>
                            <td width="60%" class="<?= !empty($online->getCenter()) ? 'online' : 'offline' ?>">
                                <span>
                                    @if(!empty($online->getCenter()))
                                    ONLINE
                                    @else
                                    OFFLINE
                                    @endif
                                </span>
                            </td>
                        </tr>
						<tr>
							<th width="40%">D10 TRACON</th>
							<td width="60%" class="<?= !empty($online->D10()) ? 'online' : 'offline' ?>">
								<span>
									@if(!empty($online->D10()))
									ONLINE
									@else
									OFFLINE
									@endif
								</span>
							</td>
						</tr>
						<tr>
							<th>DFW ATCT</th>
							<td class="<?= !empty($online->getDFW()) ? 'online' : 'offline' ?>">
								<span>
									@if(!empty($online->getDFW()))
									ONLINE
									@else
									OFFLINE
									@endif
								</span>
							</td>
						</tr>
						<tr>
							<th>DAL ATCT</th>
							<td class="<?= !empty($online->getDAL()) ? 'online' : 'offline' ?>">
								<span>
									@if(!empty($online->getDAL()))
									<?= implode("/", $online->getDAL()) ?>
									@else
									OFFLINE
									@endif
								</span>
							</td>
						</tr>
						<tr>
							<th>OKC ATCT</th>
							<td class="<?= !empty($online->getOKC()) ? 'online' : 'offline' ?>">
								<span>
									@if(!empty($online->getOKC()))
									<?= implode("/", $online->getOKC()) ?>
									@else
									OFFLINE
									@endif
								</span>
							</td>
						</tr>
						<tr>
							<th>ACT ATCT</th>
							<td class="<?= !empty($online->getACT()) ? 'online' : 'offline' ?>">
								<span>
									@if(!empty($online->getACT()))
									<?= implode("/", $online->getACT()) ?>
									@else
									OFFLINE
									@endif
								</span>
							</td>
						</tr>
                        <tr>
                           <th>LBB ATCT</th>
                           <td class="<?= !empty($online->getLBB()) ? 'online' : 'offline' ?>">
                                <span>
                                    @if(!empty($online->getLBB()))
                                    <?= implode("/", $online->getLBB()) ?>
                                    @else
                                    OFFLINE
                                    @endif
                                </span>
                            </td>
                            </tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@include('layouts.sidebar')

<div class="container">
		@if($announcements)
		<br />
			@foreach($announcements as $announcements)
				@if($announcements->class == 1)
				<div class="alert alert-success" role="alert">{{$announcements->message}}<p>- <b>{{$announcements->admin->full_name}}</b></div>
				@elseif($announcements->class == 2)
				<div class="alert alert-warning" role="alert">{{$announcements->message}}<p>- <b>{{$announcements->admin->full_name}}</b></div>
				@elseif($announcements->class == 3)
				<div class="alert alert-danger" role="alert">{{$announcements->message}}<p>- <b>{{$announcements->admin->full_name}}</b></div>
				@endif
			@endforeach
		<div class="divider-1"></div>
		@endif
	<div class="row">
		<div class="col-lg-6">
			<h2><i class="fa fa-newspaper-o"></i> News</h2>
			@forelse($news as $n)
			<h5>{{$n->poster_time}}<div style="padding-left: 10%; display: inline;"><a href="https://zfwartcc.net/forum/">{{$n->subject}}</a></div></h5>
			@empty
			<center><h5><i>No News Announcements to display</i></h5></center>
			@endforelse
		</div>
		<div class="col-lg-6" style="overflow: auto; height:500px">
			<h2><i class="fa fa-calendar"></i> Events</h2>
			@forelse ($events as $e)
				@if($e->banner_link == '')
				<h5><a href="/event/{{{$e->id}}}">{{{$e->title}}}</a></h5>
				@else
				<p><a href="/event/{{{$e->id}}}"><img width="100%" src="{{{$e->banner_link}}}"></a></p>
				@endif
			@empty
				<p>No Events Scheduled</p>
			@endforelse
		</div>
	</div>
	<div class="divider-1"></div>


	<div class="row" id="tableData">
		<div class="col-md-6 weather">
			<h2><i class="fa fa-cloud"></i> Weather</h2>
			<center><h2><i class="fa fa-refresh fa-spin"></i></h2></center>
		</div>
		<div class="col-md-6">
			<h2><i class="fa fa-search"></i> Who's Online?</h2>
			<center><h2><i class="fa fa-refresh fa-spin"></i></h2></center>
		</div>
	</div>
	<div class="divider-1"></div>
	<div class="row">
		<div class="col-md-6">
			<h2>Top 5 Total This Month</h2>
			<div class="table-responsive">
				<table class="table table-bordered text-center">
					<thead>
						<th><center>Name</center></th>
						<th><center>Time</center></th>
					</thead>
					<tbody>
						@foreach($currentTop5 as $controller)
						<tr>
							<td>{{{ $controller->first_name . " " . $controller->last_name }}}</td>
							<td>{{{ $controller->duration_time }}}
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
                <div class="col-md-6">
                        <h2>Top 5 Center This Month</h2>
                        <div class="table-responsive">
                                <table class="table table-bordered text-center">
                                        <thead>
                                                <th><center>Name</center></th>
                                                <th><center>Time</center></th>
                                        </thead>
                                        <tbody>
                                                @foreach($currentTop5Enroute as $controller)
                                                <tr>
                                                        <td>{{{ $controller->first_name . " " . $controller->last_name }}}</td>
                                                        <td>{{{ $controller->duration_time }}}
                                                </tr>
                                                @endforeach
                                        </tbody>
                                </table>
                        </div>
                </div>
                <div class="col-md-6">
                        <h2>Top 5 Approach This Month</h2>
                        <div class="table-responsive">
                                <table class="table table-bordered text-center">
                                        <thead>
                                                <th><center>Name</center></th>
                                                <th><center>Time</center></th>
                                        </thead>
                                        <tbody>
                                                @foreach($currentTop5Approach as $controller)
                                                <tr>
                                                        <td>{{{ $controller->first_name . " " . $controller->last_name }}}</td>
                                                        <td>{{{ $controller->duration_time }}}
                                                </tr>
                                                @endforeach
                                        </tbody>
                                </table>
                        </div>
                </div>
                <div class="col-md-6">
                        <h2>Top 5 Local This Month</h2>
                        <div class="table-responsive">
                                <table class="table table-bordered text-center">
                                        <thead>
                                                <th><center>Name</center></th>
                                                <th><center>Time</center></th>
                                        </thead>
                                        <tbody>
                                                @foreach($currentTop5Local as $controller)
                                                <tr>
                                                        <td>{{{ $controller->first_name . " " . $controller->last_name }}}</td>
                                                        <td>{{{ $controller->duration_time }}}
                                                </tr>
                                                @endforeach
                                        </tbody>
                                </table>
                        </div>
                </div>
	</div>
</div>

<script src="/assets/front/tables.js"></script>

@stop
