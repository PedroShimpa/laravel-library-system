@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header mb-2">
					{{ __('Permissões de ') . ucfirst($user->name)}}:
				</div>
				<div class="card-body">
					<form method="post" action="{{ route('users.permissions.edit', $user->id)}}">
						@method('put')
						@csrf
						@foreach($permissions as $permission)
						<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="{{ $permission['id']}}" name="permission[{{ $permission['name']}}]" value="{{ $permission['name']}}" @can($permission['name']) checked @endcan>
							<label class="custom-control-label" for="{{ $permission['id']}}">{{ __($permission['name'])}}</label>
						</div>
						<br>
						@endforeach
						<div class="row mb-0">
							<div class="col-md-8 offset-md-4">
								<button type="submit" class="btn btn-primary">
									{{ __('Salvar') }}
								</button>
								<a type="button" href="{{ route('users.index')}}" class="btn btn-light">
									{{ __('Voltar') }}
								</a>
							</div>

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection