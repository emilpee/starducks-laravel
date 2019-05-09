@extends('starducks.layout')

@section('main')

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<div>

    <h1>Employees</h1>
    <div>
        <ul>
            @foreach ($starducks as $starduck) 
            <li> 
                {{ $starduck->firstName }} 
                {{ $starduck->lastName }} 
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