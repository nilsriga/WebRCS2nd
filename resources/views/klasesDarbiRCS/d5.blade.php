@extends('master')

@section('title', 'D4')

@section('content')

    Hello Chief!

<style>
    li span.completed {
        text-decoration: line-through;
    }
</style>

<div id="app">
    <ul>
        <li v-for="item in todos">
            <span 
                :class="item.completed ? 'completed' : ''"
                @click="item.completed = !item.completed"
                
                >@{{itme.title}}
            </span>
            <button v-if="item.completed" @click="delete(item)">Delete</button>
        </li>
    </ul>
</div>


{{-- <div id="app">
    <p>@{{ message }}</p>
    <input type="text" v-model="message">
    <button v-on:click="changeMessage()">button For vue</button>
</div> --}}

@endsection
