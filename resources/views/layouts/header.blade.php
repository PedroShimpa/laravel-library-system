<div class="header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="float-left">
					<div class="hamburger sidebar-toggle">
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
					</div>
				</div>
				<div class="float-right">

					<div class="dropdown dib">
						<div class="header-icon" data-toggle="dropdown">
							<span class="user-avatar">{{ auth()->user()->name}}
								<i class="ti-angle-down f-s-10"></i>
							</span>
							<div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">

								<div class="dropdown-content-body">
									<ul>
										<li>
											<a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
												<i class="ti-power-off"></i>
												<span>{{ __('Sair')}}</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
	@csrf
</form>