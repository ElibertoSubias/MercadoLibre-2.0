@extends('layouts.masterPrincipal')
@section('content')
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-default">
				<h1 class="panel-title">Acceso a la app</h1>
				<form action="{{ route('login')}}" method="post" accept-charset="utf-8">
					{{ csrf_field() }}
					<div class="form-group {{ $errors->has('login') ? 'has-error' : ''}}">
						<input type="text" name="login" class="form-control" value="{{old('login')}}">
						{!! $errors->first('login','<span class="help-block">:message</span>') !!}
					</div>
					<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}"> 
						<input type="password" name="password" class="form-control">
						{!! $errors->first('password','<span class="help-block">:message</span>') !!}
					</div> 
					<button type="btn btn-primary">Entrar</button>
				</form>
			</div>
		</div>
	</div>
@stop