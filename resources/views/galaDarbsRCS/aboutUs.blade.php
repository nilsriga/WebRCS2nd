@extends('masterRCS')

@section('title', 'About Us')

@section('content')

@include('galaDarbsRCS/breadcrumbs')

<p>Hello Chief from home for About Us blade</p>

<h5>About Us:</h5>

<div class="row">
    <div class="col s12">
        <ul class="tabs">
            <li class="tab col s3"><a class="active" href="#test1">Test 1</a></li>
            <li class="tab col s3"><a href="#test2">Test 2</a></li>
            <li class="tab col s3"><a href="#test3">Test 3</a></li>
            <li class="tab col s3"><a href="#test4">Test 4</a></li>
        </ul>
    </div>
    <div id="test1" class="col s12">Šis ir 1. tests</div>
    <div id="test2" class="col s12">Masdfasdfasdfas</div>
    <div id="test3" class="col s12">Test 3</div>
    <div id="test4" class="col s12">Test 4</div>
</div>

<h5>Contacts:</h5>



@endsection