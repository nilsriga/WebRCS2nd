<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class HomeController extends Controller
{
    public function index() {
        return view('galaDarbsRCS/home');
        // return view('klasesDarbiRCS/d7/db');
    }

    public function articles() {
        return view('galaDarbsRCS/articles');
    }

    public function articles2() {
        return view('galaDarbsRCS/articles2');
    }

    public function articles3() {
        return view('galaDarbsRCS/articles3');
    }

    public function article1() {
        return view('galaDarbsRCS/article1');
    }    
    
    public function chat() {
        return view('galaDarbsRCS/chat');
    }    

    public function register() {
        return view('galaDarbsRCS/register');
    }

    public function aboutUs() {
        return view('galaDarbsRCS/aboutUs');
    }

    public function clicker() {
        return view('galaDarbsRCS/clicker');
    }
    
    public function calculator() {
        return view('galaDarbsRCS/calculator');
    }    
    // public function index() {
    //     $tasks = [
    //         "Go to the store",
    //         "Go to the market",
    //         "Go to work",
    //         "Go to the concert",
    //     ];
    //     return view('tutorials/ajaxDatabaseTutorial', [
    //         'tasks' => $tasks,

    //         // 'foo' => '<script>alert("foobar")</script>'
    //     ]);
    // }



        // šī funkcija ir priekš ajaxJsTutorial. Lai parādītos messages
    // public function index() {

    //     $messages = Message::all();

    //     return view('tutorials/ajaxJsTutorial', [
    //         'messages' => $messages
    //     ]);
    // }
}



