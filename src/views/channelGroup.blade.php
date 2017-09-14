@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
<<<<<<< HEAD
                <div class="panel-heading">Channel Group</div>
=======
                <div class="panel-heading">Channel</div>
>>>>>>> 06de5f10860b48c2b2cce895533b59a9e8b57c5f

                <div class="panel-body">
					<form class="form-horizontal" role="form" method="POST" action="{{ url()->current() }}" enctype="multipart/form-data">
			
						{{ csrf_field() }}

						
						
						<div class="form-group">
							<label for="name" class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								<input id="name" type="text"   class="form-control" name="name" value="@if(isset($Group->name)){{ $Group->name }}@endif" placeholder="" required autofocus>
							</div>
						</div>
						
						
				
						<div class="row">
							<div class="col-md-6 col-md-offset-5">
								<button>Salvar</button>
							</div>
						</div>
			
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection