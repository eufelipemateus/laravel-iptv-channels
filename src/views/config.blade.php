@extends('IPTV::app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    <div class="row">
						<div class="col-md-4"><b>{{  __("IPTV Config")  }}</b></div>
						<div class="col-md-3"><a href="{{ route('list_channel') }}">{{  __('Channel List') }}</a></div>
						<div class="col-md-3"><a href="{{ route('list_group') }}">{{ __('Groups List') }}</a></div>
                        <div class="col-md-2"><a href="{{ route('list_cdn') }}">{{ __('CDN List') }}</a></div>
					</div>
                </div>

                <div class="card-body">
					<form class="form-horizontal" role="form" method="POST" action="{{ url()->current()  }}" enctype="multipart/form-data">

						{{ csrf_field() }}

                        @foreach($config_list  as $config)

                        <div class="form-group">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox"  id="flexSwitchCheckDefault"  value='1'  name="{{$config['name']}}" @if(@$config['val']) checked @endif>
                                <label class="form-check-label" for="flexSwitchCheckDefault">{{ __($config['name']) }}<label>
                            </div>
                        </div>
                        @endforeach

                        <div class="form-group">
							<label for="group_id" class="col-md-4 control-label">{{ __('Locale') }}</label>
							<div class="col-md-6">
								<select id="group_id" class="form-control" name="CURRENT_LOCALE" >
									@foreach($locales as $key => $locale)
										<option @if($current_locate==$key)  selected @endif  value="{{ $key}}">{{$locale }}</option>
									@endforeach
								</select>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 col-md-offset-5">
								<button class="btn btn-primary"> {{ __('Save') }}</button>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection
