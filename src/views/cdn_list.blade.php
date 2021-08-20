@extends('IPTV::app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
					<div class="row">
						<div class="col-md-5"><h3>CDN</h3></div>
                        <div class="col-md-2"><a href="{{ route('add_cdn') }}">Add Cdn</a></div>
						<div class="col-md-3"><a href="{{ route('list_group') }}">Channel Groups</a></div>
						<div class="col-md-2"><a href="{{ route('list_channel') }}">Channel List</a></div>

					</div>
				</div>

                <div class="card-body">
					@foreach($list as $cdn)
						<div class="row">

                            <div class="col-md-3">
								{{ $cdn->slug }}
							</div>

							<div class="col-md-3">
								{{ $cdn->name }}
							</div>

							<div class="col-md-1">
							  <a href="{{  route('show_cdn',$cdn->id) }}">edit</a>
							</div>
							<div class="col-md-2">
							  <a href="{{  route('delete_cdn',$cdn->id) }}">delete</a>
							</div>
						</div>
					@endforeach


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
