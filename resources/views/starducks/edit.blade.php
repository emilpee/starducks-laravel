@extends('starducks.layout')

@section('main')

    {!! Form::open(['route' => ['starducks.update', $starduck->employee_id], 'method' => 'post']) !!}
        
        {{ method_field('PATCH') }}
        @csrf
        
        <div class="form-group">
            {!! Form::label('firstName', 'Förnamn') !!}
            {!! Form::text('firstName', $starduck->firstName, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('lastName', 'Efternamn') !!}
            {!! Form::text('lastName', $starduck->lastName, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::text('email', $starduck->email, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('department', 'Department') !!}
            {!! Form::text('department', $starduck->department, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('salary', 'Salary') !!}
            {!! Form::text('salary', $starduck->salary, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Edit employee', ['class' => 'btn btn-info']) !!}

    {!! Form::close() !!}

@endsection