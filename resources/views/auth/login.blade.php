@extends('layouts.login')

{{-- Web site Title --}}
@section('title'){{ trans('auth.login') }}@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/AdminLTE/plugins/iCheck/square/blue.css') }}">
@endsection

{{-- Content --}}
@section('content')
    <!-- start: LOGIN BOX -->
    <p class="login-box-msg">{{ trans('auth.sign_title') }}</p>

    {!! Form::open(['route' => 'login']) !!}
    <div class="form-group has-feedback">
        {!! Form::text('email', null, [
                    'class' => 'form-control',
                    'placeholder' => trans('auth.email'),
                    'required' => 'required',
                    'autofocus' => 'autofocus',
                    'dusk' => 'login-email-input'
                    ]) !!}
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
        {!! Form::password('password', [
                    'class' => 'form-control password',
                    'placeholder' => trans('auth.password'),
                    'required' => 'required',
                    'dusk' => 'login-password-input'
                    ]) !!}
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row">
        <div class="col-xs-8">
            <div class="checkbox icheck">
                <label>
                    {!! Form::checkbox('remember', '1', false) !!}
                    {{ trans('auth.remember_me') }}
                </label>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat" id="loginButton" dusk="login-button">
                {{ trans('auth.login') }}
            </button>
        </div>
        <!-- /.col -->
    </div>
    {!! Form::close() !!}
    <a href="{{ route('password.request') }}">
        {{ trans('auth.forgot_password') }}
    </a><br>
    <a href="{{ route('register') }}" class="text-center">
        {{ trans('auth.create_account') }}
    </a>
    <!-- end: LOGIN BOX -->
@endsection

@section('scripts')
    <script src="{{ asset('vendor/AdminLTE/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%'
            });
        });
    </script>
@endsection
