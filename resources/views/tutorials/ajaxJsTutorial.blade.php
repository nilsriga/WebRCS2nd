@extends('master')

@section('title', 'Homepage')

@section('content')
<style>
.hidden {
    display: none;
}
</style>

<div>
    <form action="/create" method='post'>
        @csrf
        <input type="text" name='title' placeholder="Title" autofocus>
        <input type="text" name='content' placeholder="Content">
        <button type='submit'>Submit</button>
    </form>
</div>
<div>
    <button id="btn">Load JSON</button>
</div>

<div id="animal-info">


</div>


<p>Recent Messages:</p>

<ul>
    @foreach($messages as $message)
    <li><strong>{{$message->title }}</strong><br>
        {{$message->content}}
        <br>
        {{$message->created_at->format('d/m/Y H:i')}}
        {{$message->created_at->diffForHumans()}}

        <br>
    </li>
    @endforeach
</ul>


<div>
        <h1>saturs no master blade</h1>
        <p>saturs no master zem yield content</p>
        <button id="color-button">Press Me!</button>
        <button id="button2" onclick="makeRed()">button2</button>
        <div id="paragraph">
            <p>Someting writtern</p>
        
        </div>
</div>

<aside> 
        my aside tag line
</aside>
    
@endsection