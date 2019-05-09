@extends('starducks.layout')

@section('main')

    <div class="container-fluid">
        <h1> {{ $starduck->firstName }} {{ $starduck->lastName }} </h1>
        <ul class="list-group">
            <li class="list-group-item"> <strong>EmployeeID:</strong> {{ $starduck->employee_id }}</li>
            <li class="list-group-item"> <strong>Mail:</strong> {{ $starduck->email }} </li>
            <li class="list-group-item"> <strong>Department:</strong> {{ $starduck->department }} </li>
            <li class="list-group-item"> <strong>Salary:</strong> {{ $starduck->salary }} </li>
        </ul>
    </div>

@endsection