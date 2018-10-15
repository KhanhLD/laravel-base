@extends('layouts.admin.login')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <b>Admin</b>Panel
        </div>
        <div class="login-box-body">
            {!! Form::open(['url' => '/admin/login']) !!}
                <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                    {!! Form::email('email', old('email'), [
                        'placeholder' => __('admin/login.email'),
                        'class' => 'form-control',
                    ]) !!}
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <label class="control-label" for="name">
                            {{ $errors->first('email') }}
                        </label>
                    @endif
                </div>

                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    {!! Form::input('password', 'password', null, [
                        'placeholder' => __('admin/login.password'),
                        'class' => 'form-control',
                    ]) !!}
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <label class="control-label" for="name">
                            {{ $errors->first('password') }}
                        </label>
                    @endif
                </div>
                <div class="row">
                    <div class="col-xs-8">
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('admin/login.login') }}</button>
                    </div>
                </div>
            {!! Form::close() !!}
            <div class="social-auth-links text-center">
            </div>
        </div>
    </div>
@endsection

@section('style')
    {!! Html::style('assets/adminlte/plugins/iCheck/square/blue.css') !!}
@endsection
