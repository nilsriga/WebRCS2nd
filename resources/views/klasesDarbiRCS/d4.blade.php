@extends('master')

@section('title', 'D4')

@section('content')

<style>
    #draggable { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
    #droppable { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }
</style>

    Hello Chief!

<span>
    <div id="draggable" class="ui-widget-content block">
        <p>drag'n'drop</p>
    </div>    
</span>
<span>
    <div id="droppable" class="ui-widget-header block">
        <p>drag'n'drop</p>
    </div>
</span>
    



<p id="paragraph1">The following will be the homework</p>

<button id="button1">Button1</button>
<button id="button2">Button2</button>

<p id="p1" class="changable-paragraph">fast</p>
<p id="p2" class="changable-paragraph">food</p>


<div>
    <button id="btn1">Button1</button>
    <button id="btn2">Button2</button> 
</div>

<a data-fancybox="gallery" href="http://clipart-library.com/images/kAcbbx6T4.png"><img src="http://clipart-library.com/images/kAcbbx6T4.png" height="200px"></a>
<a data-fancybox="gallery" href="http://clipart-library.com/images/8T6o9BRTE.png"><img src="http://clipart-library.com/images/8T6o9BRTE.png" height="200px"></a>


<a href="http://clipart-library.com/images/kAcbbx6T4.png" id="rcs-link">Far</a>

@endsection
