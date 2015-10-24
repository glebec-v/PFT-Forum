@extends('layouts.master')
@section('content')
    <div class="col-md-6">
        {!! Form::open(['url' => '/auth/login', 'class' => 'form']) !!}

            <h1>Sign In to Your Account</h1>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                There were some problems signing into your account:
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                {!! Form::label('email', 'Your E-mail Address') !!}
                {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'E-mail']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Your Password') !!}
                {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password']) !!}
            </div>

            <div class="form-group">
                <label>
                    {!! Form::checkbox('remember', 'remember') !!} Remember Me
                </label>
            </div>

            <div class="form-group">
                {!! Form::submit('Login', ['class'=>'btn btn-primary']) !!}
            </div>

            <div>
                <a href="/password/email">Forgot Your Password?</a>
            </div>

        {!! Form::close() !!}

    </div>
@endsection