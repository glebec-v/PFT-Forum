@extends('layouts.master')

@section('content')
    <div class="col-md-6">
        {!! Form::open(['url' => '/auth/register', 'class' => 'form']) !!}

            <h1>Create an Account</h1>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    There were some problems creating an account:
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                {!! Form::label('name', 'Your Name') !!}
                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Name']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Your E-mail Address') !!}
                {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Email Address']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Your Password') !!}
                {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Confirm Password') !!}
                {!! Form::password('password_confirmation', ['class'=>'form-control', 'placeholder'=>'Confirm Password']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Create My Account!', ['class'=>'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}
    </div>
@endsection