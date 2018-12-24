@extends('layouts.master')

@section('title')
@parent
| Runways
@stop

@section('content')
<div class="page-heading-two">
	<div class="container">
			<h2>Runways</h2>
		</div>
	</div>
</div>
	
	<div class="container">
		<div class="row">   
			<div class="col-sm-4">
				@if($kdfw->type == 'VFR')
				<div class="panel panel-success">
				@elseif($kdfw->type == 'MVFR')
				<div class="panel panel-warning">
				@elseif($kdfw->type == 'IFR')
				<div class="panel panel-danger">
				@endif
					<div class="panel-heading">
						<h4 class="panel-title">dallas - Fort Worth Intl (DFW)<span class="pull-right"><b>{{{$kdfw->type}}}</b></span></h4>
					</div>
					<div class="panel-body">
						Suggested Departure Runways: {{ $kdfw->dfw_departure_runways }}
						<br />
						Suggested Arrival Runways: {{ $kdfw->dfw_arrival_runways }}
						<hr>
						<small>{{{$kdfw->metar}}}</small>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				@if($kdal->type == 'VFR')
				<div class="panel panel-success">
				@elseif($kdal->type == 'MVFR')
				<div class="panel panel-warning">
				@elseif($kdal->type == 'IFR')
				<div class="panel panel-danger">
				@endif
					<div class="panel-heading">
						<h4 class="panel-title">Dallas Love Field(DAL)<span class="pull-right"><b>{{{$kdal->type}}}</b></span></h4>
					</div>
					<div class="panel-body">
						Suggested Departure Runways: {{ $kdal->dal_departure_runways }}
						<br />
						Suggested Arrival Runways: {{ $kdal->dal_arrival_runways }}
						<hr>
						<small>{{{$kdal->metar}}}</small>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				@if($kokc->type == 'VFR')
				<div class="panel panel-success">
				@elseif($kokc->type == 'MVFR')
				<div class="panel panel-warning">
				@elseif($kokc->type == 'IFR')
				<div class="panel panel-danger">
				@endif
					<div class="panel-heading">
						<h4 class="panel-title">Will Rodgers World (OKC)<span class="pull-right"><b>{{{$kokc->type}}}</b></span></h4>
					</div>
					<div class="panel-body">
						Suggested Departure Runways: {{ $kokc->okc_departure_runways }}
						<br />
						Suggested Arrival Runways:  {{ $kokc->okc_arrival_runways }}
						<hr>
						<small>{{{$kokc->metar}}}</small>
					</div>
				</div>
			</div>
		</div>
	</div>

@stop
