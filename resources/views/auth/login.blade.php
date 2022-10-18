@extends('layouts.app_guest')
@section('content')
<div class="unix-login">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="login-content" >
                    <div class="login-logo">
                        <a><span>{{ __('Biblioteca Online') }}</span></a>
                    </div>
                    <div class="login-form">
                        <h4>{{ __('Login') }}</h4>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf

                            <div class="form-group">
                                <label for="email">{{ __('E-mail') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-mail" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Senha') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Senha" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-check">
                                <label class="form-check-label" for="remember">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Lembrar-me') }}
                                </label>
                            </div>




                            @if (Route::has('password.request'))
                            <label class="pull-right">
                                <a href="{{ route('password.request') }}">{{ __('Esqueci minha senha') }}</a>
                            </label>
                            @endif




                            <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">{{ __('Logar') }}</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection