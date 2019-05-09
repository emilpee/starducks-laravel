@extends('starducks.layout')

@section ('main')

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employees</title>
</head>
<body> -->

    {!! Form::open(['route' => 'starducks.store']) !!}
    
        <div class="form-group">
            {!! Form::label('firstName', 'Förnamn') !!}
            {!! Form::text('firstName', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('lastName', 'Efternamn') !!}
            {!! Form::text('lastName', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('department', 'Department') !!}
            {!! Form::text('department', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('salary', 'Salary') !!}
            {!! Form::text('salary', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Add employee', ['class' => 'btn btn-info']) !!}

    {!! Form::close() !!}


    <!-- Felhantering -->
    @if(count($errors) > 0) 
        <h3>Fel</h3>
        <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
    @endif
    
</body>
</html>



@endsection