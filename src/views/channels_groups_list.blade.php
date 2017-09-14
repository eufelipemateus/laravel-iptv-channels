@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
					<div class="row">
						<div class="col-md-7"><b>Channels Groups</b></div>

						<div class="col-md-3"><a href="{{ route('list_channels') }}">Channels List</a></div>
						<div class="col-md-2"><a href="{{ route('add_channelsGroups') }}">Add Group</a></div>
					</div>
				</div>

                <div class="panel-body">
					@foreach($list as $group)
					<div class="row">
						<div class="col-md-10">
						{{ $group->name }}
						</div>
						<div class="col-md-1">
						  <a href="{{ route('delete_channelsGroups',$group->id)  }}">delete</a>
						</div>
						<div class="col-md-1">
						  <a href="{{ route('show_channelsGroups',$group->id)  }}">edit</a>
						</div>
						
					</div>
					@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection