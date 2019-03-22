@extends('master')

@section('title', 'Calculator 1')


@section('content')

<style>
.row {
    margin-bottom: 0px;
}
@media only screen and (min-width: 993px) {
  .container {
    width: 30%;
  }
}
@media only screen and (min-width: 580px) {
  .container {
    width: 40%;
  }
}

/* .completed {
    text-decoration: line-through;!important
} */

</style>

<div class="container">
        <div class="col-12 orange p-2 shadow">
            <div class="row" id="calculator">
                <div class="col-12">
                    <div id="display" contenteditable="true" class="white p-1 m-1 shadow inner">@{{current || '0'}}</div>     
                </div>
                <div class="row col-12">
                    <div  v-on:click="clear" class="col-4 red waves-effect waves-light btn">AC</div>
                    <div  v-on:click="action('+')" class="col-4 red waves-effect waves-light btn">+</div>
                    <div  v-on:click="action('-')" class="col-4 red waves-effect waves-light btn">-</div>
                </div>
                <div class="row col-12">
                    <div  v-on:click="clearLast" class="col-4 red waves-effect waves-light btn">C</div>
                    <div  v-on:click="action('*')" class="col-4 red waves-effect waves-light btn">X</div>
                    <div  v-on:click="action('/')" class="col-4 red waves-effect waves-light btn">:</div>
                </div>
                <div class="row col-12">
                    <div  v-on:click="addNumber(7)" class="col-4 red waves-effect waves-light btn">7</div>
                    <div  v-on:click="addNumber(8)" class="col-4 red waves-effect waves-light btn">8</div>
                    <div  v-on:click="addNumber(9)" class="col-4 red waves-effect waves-light btn">9</div>
                </div>
                <div class="row col-12">
                    <div  v-on:click="addNumber(4)" class="col-4 red waves-effect waves-light btn">4</div>
                    <div  v-on:click="addNumber(5)" class="col-4 red waves-effect waves-light btn">5</div>
                    <div  v-on:click="addNumber(6)" class="col-4 red waves-effect waves-light btn">6</div>
                </div>
                <div class="row col-12">
                    <div  v-on:click="addNumber(1)" class="col-4 red waves-effect waves-light btn">1</div>
                    <div  v-on:click="addNumber(2)" class="col-4 red waves-effect waves-light btn">2</div>
                    <div  v-on:click="addNumber(3)" class="col-4 red waves-effect waves-light btn">3</div>
                </div>
                <div class="row col-12">
                    <div  v-on:click="addNumber(0)" class="col-4 red waves-effect waves-light btn">0</div>
                    <div  v-on:click="addDot" class="col-4 red waves-effect waves-light btn">.</div>
                    <div  v-on:click="result" class="col-4 red waves-effect waves-light btn">=</div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- <div id="app">
    <ul>
        <li v-for="item in todos">
            <span 
                :class="item.completed ? 'completed' : '' "
                v-on:click="item.completed = !item.completed"
            >
            @{{ item.title }}
            </span>
            <button v-if="item.completed" v-on:click="deleteItem(item)">Delete</button>
        </li>
    </ul>
    <div>
        <input type="text" v-model="newElement.title">
        <button v-on:click="addItem()">Add</button>
    </div>
</div> --}}

@endsection
