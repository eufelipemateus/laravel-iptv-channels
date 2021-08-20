@extends('IPTV::app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
					<div class="row">
						<div class="col-md-5"><b>Channels</b></div>
                        <div class="col-md-2"><a href="{{ route('add_channel') }}">Add Channel</a></div>
                        <div class="col-md-2"><a href="{{ route('list_cdn') }}">CDN List</a></div>
						<div class="col-md-3"><a href="{{ route('list_group') }}">Channel Groups</a></div>
					</div>
				</div>

                <div class="card-body">
					@foreach($list as $channel)
						<div class="row">
							<div class="col-md-1">
								<b>{{ $channel->number }}.</b>
							</div>
							<div class="col-md-2">
								<img src="{{ url($channel->logo) }}"  width="50"  />
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
