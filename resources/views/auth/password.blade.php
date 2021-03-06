@extends('layouts.master')
@section('content')
    <div class="col-md-6">
        {!! Form::open(['url' => '/password/email', 'class' => 'form']) !!}

        <h1>Recover Your Password</h1>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                There were some problems recovering your password:
                <br />
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
            {!! Form::submit('E-mail Password Reset Link', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection
