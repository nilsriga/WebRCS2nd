@extends('masterRCS')

@section('title', 'Chat')

@section('content')

@include('galaDarbsRCS/breadcrumbs')

<br>
<div id="app" class="container">
    <div class="row chat-container animated-container z-depth-2">
        <div class="chat-window z-depth-2">
            <div class="messages">
                <example></example>
                <ul>
                    <li>message</li>
                    <li>message</li>
                    <li>message</li>
                    <li>message</li>
                </ul>
            </div>
        </div>
        <button class="z-depth-2 submit-button waves-effect waves-light red btn right" type="submit">Submit</button>
    </div>
</div>

@endsection