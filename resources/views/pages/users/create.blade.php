@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<h4>{{ __('Novo Usuario') }}</h4>
			<hr>
			<form method="POST" action="{{ route('users.store') }}">
				@csrf
				<div class="form-group">
					<input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nome" required autocomplete="name" autofocus>
					@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
				<div class="form-group">
					<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-mail" required autocomplete="email" autofocus>
					@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
				<button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-10">{{ __('Salvar') }}</button>
				<a type="button" href="{{ route('users.index')}}" class="btn btn-light btn-flat m-b-30 m-t-10">
					{{ __('Voltar') }}
				</a>
			</form>
		</div>
	</div>
</div>
@endsection