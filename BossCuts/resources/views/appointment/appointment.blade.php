@extends("layouts.front")

@section('content')

<div class="container">

    <div class="row">

        <div class="col-md-12 text-center alert alert-warning" style="margin-top: 15px; margin-bottom: 15px;">
            <h2>Are you?</h2>
        </div>
        <div class="col-md-6 text-center">
            <!-- <div class="text-center"> -->
                <h1 class="display-4">Guest</h1>
            <!-- </div> -->
            <br/>

            <a class="btn btn-primary" href="{{ action('AppointmentController@appointmentGuest') }}" style="font-size: 20px;">Guest</a>

        </div>

        <div class="col-md-6">
            <div class="text-center">
                <h1 class="display-4">User</h1>
            </div>
            <br/>
            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-info btn-sm float-right">
                            {{ __('Login') }}
                        </button>

                        <a class="btn btn-info btn-sm float-right mr-2" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>

                        <a href="{{ route('register') }}" class="btn btn-info btn-sm float-left">Register</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection