@extends('masterRCS')

@section('title', 'Chat')

@section('content')

@include('galaDarbsRCS/breadcrumbs')

<p>Hello Chief from home for Chat blade</p>

<div class="container">
    <div class="row chat-container animated-container">
        <div class="chat-window">
            <div class="messages">
                <ul>
                    <li>message</li>
                    <li>message</li>
                    <li>message</li>
                    <li>message</li>
                </ul>
            </div>
        </div>
        <button class=" submit-button waves-effect waves-light red btn right" type="submit">Submit</button>
    </div>
</div>

@endsection