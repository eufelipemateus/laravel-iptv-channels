@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
					<div class="row">
						<div class="col-md-7"><b>Channels</b></div>
						<div class="col-md-3"><a href="{{ route('list_channelsGroups') }}">Channel Groups</a></div>
						<div class="col-md-2"><a href="{{ route('add_channel') }}">Add Channel</a></div>
					</div>
				</div>

                <div class="panel-body">
					@foreach($list as $channel)
						<div class="row">
							<div class="col-md-1">
								<b>{{ $channel->number }}.</b>
							</div>
							<div class="col-md-2">
								<img src="{{ url($channel->logo) }}"  width="25" height="25" />						
							</div>
							<div class="col-md-3">
								{{ $channel->name }}
							</div>
							<div class="col-md-3">
								{{ $channel->group->name }}
							</div>
							
							<div class="col-md-1">
							  <a href="{{  route('show_channel',$channel->id) }}">edit</a>
							</div>
							<div class="col-md-2">
							  <a href="{{  route('delete_channel',$channel->id) }}">delete</a>
							</div>
						</div>
					@endforeach
				
				
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
