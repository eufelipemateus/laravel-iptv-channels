@extends('IPTV::app')

@section('style')
<style>
/*
.form-group input[type="checkbox"] {
    display: none;
}

.form-group input[type="checkbox"] + .btn-group > label span {
    width: 20px;
}

.form-group input[type="checkbox"] + .btn-group > label span:first-child {
    display: none;
}
.form-group input[type="checkbox"] + .btn-group > label span:last-child {
    display: inline-block;
}

.form-group input[type="checkbox"]:checked + .btn-group > label span:first-child {
    display: inline-block;
}
.form-group input[type="checkbox"]:checked + .btn-group > label span:last-child {
    display: none;
}*/

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
						<div class="col-md-5"><b>Channel</b></div>
						<div class="col-md-3"><a href="{{ route('list_channel') }}">Channel List</a></div>
						<div class="col-md-2"><a href="{{ route('list_group') }}">Groups List</a></div>
                        <div class="col-md-2"><a href="{{ route('add_cdn') }}">Add Cdn</a></div>
					</div>
                </div>

                <div class="card-body">
					<form class="form-horizontal" role="form" method="POST" action="{{ url()->current()  }}" enctype="multipart/form-data">

						{{ csrf_field() }}

						<div class="form-group">
							<label for="number" class="col-md-4 control-label">Number</label>
							<div class="col-md-6">
								<input id="number" type="number" min="1"   class="form-control" name="number" value="@if(isset($Channel->number)){{ $Channel->number }}@endif" placeholder="" required autofocus>

                                @if ($errors->has('number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('number') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>


						<div class="form-group">
							<label for="image" class="col-md-4 control-label">Logo</label>
							<div class="col-md-6">
								<input id="image" type="file"   class="form-control" name="image" @if(!isset($Channel->logo)) required @endif placeholder=""  >

								@if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>


						<div class="form-group">
							<label for="name" class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								<input id="name" type="text"   class="form-control" name="name" value="@if(isset($Channel->name)){{ $Channel->name }}@endif" placeholder="" required >
								@if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>




						<div class="form-group">
							<label for="group_id" class="col-md-4 control-label">Group</label>
							<div class="col-md-6">
								<select id="group_id" class="form-control" name="group_id"   >
									@foreach($Groupslist as $group)
										<option @if(isset($Channel->group_id)) @if($Channel->group_id==$group->id)  selected @endif @endif value="{{ $group->id}}">{{$group->name }}</option>
									@endforeach
								</select>
							</div>
						</div>

						<div class="form-group">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox"  id="flexSwitchCheckDefault"  value='1'  name="radio" @if(@$Channel->radio) checked @endif>
                                <label class="form-check-label" for="flexSwitchCheckDefault">É uma rádio?</label>
                            </div>
                        </div>

						<div class="row">
							<div class="col-md-6 col-md-offset-5">
								<button class="btn btn-primary">Salvar</button>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>

    @if(isset($Channel))
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    <div class="row">
						<div class="col-md-7"><b>Urls CDN</b></div>
                    </div>
                </div>
                <div class="card-body">
                    @foreach ($urls as $url)
                    <form class="form-vertical" role="form" method="POST" action="{{ route('update_update',['id'=>$url->id])  }}" enctype="multipart/form-data">
                    <input type="hidden" id="channel_id_{{$url->id}}" name="iptv_channel_id" value="{{$url->iptv_channel_id}}">
                    {{ csrf_field() }}

                        <div class="row">

							<div class="col-md-5">
                                <label for="url_stream_{{$url->id}}" class="col-md-4 control-label">Url Stream</label>
								<input id="url_stream_{{$url->id}}" type="text"   class="form-control" name="url_stream" value="@if(isset($url->url_stream)){{ $url->url_stream }}@endif" placeholder="" required >
								@if ($errors->has('url_stream'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('url_stream') }}</strong>
                                    </span>
                                @endif
							</div>

							<div class="col-md-3">
                                <label for="cdn_id_{{$url->id}}" class="col-md-3 control-label">CDN</label>
								<select id="cdn_id_{{$url->id}}" class="form-control" name="iptv_cdn_id"   >
									@foreach($Cdnslist as $cdn)
										<option  @if( $url->iptv_cdn_id ==  $cdn->id)   selected @endif   value="{{ $cdn->id}}">{{$cdn->name }}</option>
									@endforeach
								</select>
							</div>

                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>

                            <div class="col-md-2">
                                <a href="{{  route('delete_url',$url->id) }}"  class="btn btn-primary">Delete</a>
                            </div>
                        </div>
                    </form>
                    @endforeach
                    <form class="form-vertical" role="form" method="POST" action="{{ route('create_url')  }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" id="new_channel_id" name="iptv_channel_id" value="{{$Channel->id}}">
                        <div class="row">

                            <div class="col-md-5">
                                <label for="new_url_stream" class="col-md-4 control-label">Url Stream</label>
                                <input id="new_url_stream" type="text"   class="form-control" name="url_stream" value="" placeholder="" required >
                                @if ($errors->has('url_stream'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('url_stream') }}</strong>
                                    </span>
                                @endif
                            </div>


							<div class="col-md-5">
                                <label for="new_cdn_id" class="col-md-3 control-label">CDN</label>
								<select id="new_cdn_id" class="form-control" name="iptv_cdn_id"   >
									@foreach($Cdnslist as $cdn)
										<option value="{{ $cdn->id}}">{{$cdn->name }}</option>
									@endforeach
								</select>
							</div>

                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">Adicionar</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
