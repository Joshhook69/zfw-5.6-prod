@extends('layouts.master')

@section('title')
@parent
| Instructing
@stop

@section('content')

<?php function rolepos($pos){
    return function($role) use ($pos) {
        return $role->name == $pos;
    };
} ?>

<div class="page-heading-two">
	<div class="container">
		<h2>Admin - Instructing - Training Sessions</h2>
	</div>
</div>

<div class="container">
	<div class="table-responsive">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th width="15%">Slot</th>
					<th width="15%">Position</th>
					<th width="15%">Student</th>
					<th width="15%">Mentor</th>
					<th width="35%">Comments</th>
					<th width="5%">Actions</th>
				</tr>
			</thead>
			<tbody>
				@forelse($sessions as $session)
				<tr>
					<td>{{{$session->slot}}}</td>
					<td>{{{$session->pos_req}}}</td>
					<td>{{{$session->Trainee->full_name}}}</td>
					<td>{{{$session->mentor->full_name}}}</td>
					<td>{{{$session->trainee_comments}}}</td>
					<td>@if($session->mentor_id == Auth::id() || Auth::user()->can('snrstaff'))
						<a href="#" data-toggle="modal" data-target="#cancelModal-{{$session->id}}" class="btn btn-danger btn-sm simple-tooltip" title="Cancel Session"><i class="fa fa-times"></i></a>
						<a href="#" data-toggle="modal" data-target="#editModal-{{$session->id}}" class="btn btn-primary btn-sm simple-tooltip" title="Edit Session"><i class="fa fa-pencil"></i></a>

						<div class="modal fade" id="editModal-{{$session->id}}">
	                        <div class="modal-dialog">
	                                <div class="modal-content">
	                                {{ Form::open(['action'=>['MentorController@editSession', $session->id]])}}

	                                    <div class="modal-header">
	                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                                        <h4 class="modal-title">Edit Session</h4>
	                                    </div>
	                                    <div class="modal-body">
	                                        <div class="form-group">
	                                            <label name="time" class="control-label">Session Slot:</label>
												<label name="time" class="control-label">{{{$session->slot}}}</label>
												<label name="req" class="control-label">Session Type:</label>
												<label name="req" class="control-label">{{{$session->pos_req}}}</label>
												<label name="mentor" class="control-label">Mentor:</label>
												<select name="mentor" class="form-control">
													@foreach($Roles->filter(rolepos('INS'))->first()->users as $tra)
													<option value="{{{$tra->id}}}">{{{$tra->full_name}}}</option>
													@endforeach
													@foreach($Roles->filter(rolepos('MTR'))->first()->users as $tra)
													<option value="{{{$tra->id}}}">{{{$tra->full_name}}}</option>
													@endforeach
												</select>
	                                        </div>
	                                    </div>
	                                    <div class="modal-footer">
	                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                                        <button type="submit" class="btn btn-primary">Submit</a>
	                                    </div>

	                                {{ Form::close() }}
	                            </div>
	                        </div>
	                    </div>	
						
	                    <div class="modal fade" id="cancelModal-{{$session->id}}">
	                        <div class="modal-dialog">
	                                <div class="modal-content">
	                                {{ Form::open(['action'=>['MentorController@cancelSession', $session->id]])}}

	                                    <div class="modal-header">
	                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                                        <h4 class="modal-title">Cancel Session</h4>
	                                    </div>
	                                    <div class="modal-body">
	                                        <div class="form-group">
	                                            {{Form::label('cancel', 'Cancel Message:', ['class'=>'control-label'])}}
	        									{{Form::textarea('cancel', null, ['class'=>'form-control'])}}
	                                        </div>
	                                    </div>
	                                    <div class="modal-footer">
	                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                                        <button type="submit" class="btn btn-primary">Submit</a>
	                                    </div>

	                                {{ Form::close() }}
	                            </div>
	                        </div>
	                    </div>
						@endif
					</td>
				</tr>
				@empty
				<tr>
					<td colspan="6"><center>No Student Sessions</center></td>
				</tr>
				@endforelse
			</tbody>
		</table>
	</div>
</div>

@stop
