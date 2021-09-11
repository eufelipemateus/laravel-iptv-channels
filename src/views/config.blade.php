@extends('IPTV::app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    <div class="row">
						<div class="col-md-5"><b>Configuração IPTV</b></div>
						<div class="col-md-3"><a href="{{ route('list_channel') }}">Channel List</a></div>
						<div class="col-md-2"><a href="{{ route('list_group') }}">Groups List</a></div>
                        <div class="col-md-2"><a href="{{ route('list_cdn') }}">CDN List</a></div>
					</div>
                </div>

                <div class="card-body">
					<form class="form-horizontal" role="form" method="POST" action="{{ url()->current()  }}" enctype="multipart/form-data">

						{{ csrf_field() }}


                        @foreach($config_list  as $config)

                        <div class="form-group">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox"  id="flexSwitchCheckDefault"  value='1'  name="{{$config['name']}}" @if(@$config['val']) checked @endif>
                                <label class="form-check-label" for="flexSwitchCheckDefault">{{$config['name']}}<label>
                            </div>
                        </div>
                        @endforeach

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
