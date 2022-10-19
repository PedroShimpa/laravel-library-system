@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="bootstrap-data-table-panel">
				<a class="btn btn-primary mb-3" href="{{ route('users.create') }}">Adicionar</a>
				<div class="table-responsive">
					<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>{{__('Nome')}}</th>
								<th>{{__('Email')}}</th>
								<th>{{__('Ações')}}</th>
							</tr>
						</thead>
						<tbody>
							@foreach($users as $key => $user)
							<tr>
								<td>{{__($user->name)}}</td>
								<td>{{__($user->email)}}</td>
								<td>
									<a class="btn btn-icon btn-icon-only" title="{{ __('Permissões')}}" href="{{ route('users.permissions', $user->id)}}"><i class="fa fa-list fa-2x"></i></a>
									<a class="btn btn-icon btn-icon-only" title="{{ __('Editar')}}" href="{{ route('users.show', $user->id)}}"><i class="text-primary fa fa-pencil fa-2x"></i></a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			{!! $users->links() !!}
		</div>
	</div>
</div>
@endsection

@section('page-scripts')
<script src="{{ asset('./js/lib/data-table/datatables.min.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#ootstrap-data-table-export').DataTable()
	})
</script>
@endsection