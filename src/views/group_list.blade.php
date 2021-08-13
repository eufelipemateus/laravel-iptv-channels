@extends('IPTV::app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
					<div class="row">
						<div class="col-md-7"><b>Channels Groups</b></div>

						<div class="col-md-3"><a href="{{ route('list_channel') }}">Channels List</a></div>
						<div class="col-md-2"><a href="{{ route('add_group') }}">Add Group</a></div>
					</div>
				</div>

                <div class="card-body">
					@foreach($list as $group)
					<div class="row">
						<div class="col-md-9">
						{{ $group->name }}
						</div>
						<div class="col-md-2">
						  <a href="{{ route('delete_group',$group->id)  }}">delete</a>
						</div>
						<div class="col-md-1">
						  <a href="{{ route('show_group',$group->id)  }}">edit</a>
						</div>

					</div>
					@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
