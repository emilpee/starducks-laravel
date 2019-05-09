@extends('starducks.layout')

@section('main')

    <div class="container">
        <h1> {{ $starduck->firstName }} {{ $starduck->lastName }} </h1>
        <h3><strong>EmployeeID:</strong> {{ $starduck->employee_id }}</h3>
        <p><strong>Mail:</strong> {{ $starduck->email }} </p>
        <p><strong>Department:</strong> {{ $starduck->department }} </p>
        <p><strong>Salary $$$:</strong> {{ $starduck->salary }} </p>
    </div>

@endsection