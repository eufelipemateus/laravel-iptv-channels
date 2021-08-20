@extends('IPTV::app')

@section('style')
<style>
.row{
    margin: 1% 0;
}
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    <div class="row">
						<div class="col-md-6"><b>Cdn</b></div>
						<div class="col-md-2"><a href="{{ route('list_cdn') }}">CDN List</a></div>
						<div class="col-md-2"><a href="{{ route('list_group') }}">Groups List</a></div>
                        <div class="col-md-2"><a href="{{ route('list_channel') }}">Channel List</a></div>

					</div>
                </div>

                <div class="card-body">
					<form class="form-horizontal" role="form" method="POST" action="{{ url()->current() }}" enctype="multipart/form-data">

						{{ csrf_field() }}


						<div class="form-group">
							<label for="name" class="col-md-4 control-label">Slug</label>
							<div class="col-md-6">
								<input id="name" type="text"   class="form-control" name="slug" value="@if(isset($cdn->slug)){{ $cdn->slug }}@endif" placeholder="" required autofocus>

                                @if ($errors->has('slug'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('slug') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>

						<div class="form-group">
							<label for="name" class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								<input id="name" type="text"   class="form-control" name="name" value="@if(isset($cdn->name)){{ $cdn->name }}@endif" placeholder="" required autofocus>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 col-md-offset-5">
								<button  class="btn btn-primary">Salvar</button>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
