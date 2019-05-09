@extends('starducks.layout')

@section('main')

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employees</title>
</head>

<div class="container">

    <h1 class="jumbotron">Employees</h1>
    <div>
        <ul class="list-group">
            @foreach ($starducks as $starduck) 
            <li class="list-group-item"> 
                <p>
                    {{ $starduck->firstName }} 
                    {{ $starduck->lastName }} 
                    <br>
                </p>
                
                {!! Form::open(['route' => ['starducks.destroy', $starduck->employee_id], 'method' => 'post']) !!}
                    {{ method_field('DELETE') }}
                    @csrf

                    <div class="form-group">
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </div>
            
                {!! Form::close() !!}
            </li>
            @endforeach
        </ul>
    </div>


    <!-- Felhantering -->
    @if(count($errors) > 0) 
        <h3>Fel</h3>
        <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
    @endif
</div>

@endsection