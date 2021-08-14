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
						<div class="col-md-7"><b>Channel</b></div>
						<div class="col-md-3"><a href="{{ route('list_channel') }}">Channel List</a></div>
						<div class="col-md-2"><a href="{{ route('list_group') }}">Groups List</a></div>
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
							<label for="url_stream" class="col-md-4 control-label">Url Stream</label>
							<div class="col-md-6">
								<input id="url_stream" type="text"   class="form-control" name="url_stream" value="@if(isset($Channel->url_stream)){{ $Channel->url_stream }}@endif" placeholder="" required >
								@if ($errors->has('url_stream'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('url_stream') }}</strong>
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
</div>
@endsection
