@extends('master')

@section('title', 'ajaxDatabaseTutorial')


<p>Hello From title and Homepage section of ajaxDatabaseTutorial.blade.php</p>

@section('content')
    <p>Hello From content section of ajaxDatabaseTutorial.blade.php</p>

    {{-- <h1>My {!!$foo!!} website!</h1> --}}

    @foreach($tasks as $tasks)

        <li>{{$tasks}}</li>

    @endforeach

@endsection