<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\User;
use App\Message;

class ViewController extends Controller
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

        $messages = Message::all();

        foreach ($messages as $message) {
            $message->user->name;
        }

        $messages = Message::orderBy('id', 'DESC')->get();
  
        // dd($messages->owner_id);
        
        return view('galaDarbsRCS.chat', compact('messages'));
    }    

    public function chatStore() {

        $message = new Message();

        $message->title = request('title');
        $message->content = request('content');
        $message->owner_id = auth()->id();

        $message->save();
   
        return back();
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
    
    public function userData() {

        if (Auth::check())
        {
            return view('galaDarbsRCS/userData');
        }

        // Show the page
        abort(404);

        // abort_unless(Auth::check(), 403);
        // return view('galaDarbsRCS/userData');
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



