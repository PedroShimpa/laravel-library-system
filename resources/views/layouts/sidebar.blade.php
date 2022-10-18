<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
	<div class="nano">
		<div class="nano-content">
			<ul>
				<div class="logo"><a href="{{ route('home')}}">
						<span>{{__('Blibioteca')}}</span>
					</a></div>
				<li class="label">{{ __('Principal')}}</li>
				@can('users')
				<li><a href="{{ route('users.index')}}" ><i class="ti-user" ></i>{{__('Usúarios')}}</a></li>
				@endcan
				<li><a><i class="ti-close"></i> {{ __('Sair')}}</a></li>
			</ul>
		</div>
	</div>
</div>