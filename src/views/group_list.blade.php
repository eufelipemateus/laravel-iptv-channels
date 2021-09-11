@extends('IPTV::app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
					<div class="row">
						<div class="col-md-4"><b>{{ __('Channels Groups') }}</b></div>

						<div class="col-md-3"><a href="{{ route('list_channel') }}">{{  __('Channel List') }}</a></div>
						<div class="col-md-3"><a href="{{ route('add_group') }}">{{ __('Add Group')}}</a></div>
                        <div class="col-md-2"><a href="{{ route('config') }}">{{ __('Config')}}</a></div>

					</div>
				</div>

                <div class="card-body">
					@foreach($list as $group)
					<div class="row">
						<div class="col-md-8">
						{{ $group->name }}
						</div>
						<div class="col-md-2">
						  <a href="{{ route('delete_group',$group->id)  }}">{{ __('delete')}}</a>
						</div>
						<div class="col-md-2">
						  <a href="{{ route('show_group',$group->id)  }}">{{ __('edit') }}</a>
						</div>

					</div>
					@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
