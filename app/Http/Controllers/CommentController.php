<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Testing\Fakes\Fake;

class CommentController extends Controller
{
    public $comment_array = [
        [

        ],

    ];
    public function index()
    {
        // dd($this->comment_array);
        return view('index', ['comments' => $this->comment_array]);
    }

    public function postcomment(Request $request){
        $validate = $request->validate([
            'comment' => 'required|max:250'
        ]);

        array_unshift($this->comment_array, [
            'name' => Fake()->name,
            'time' => Carbon::now()->diffForHumans(),
            'body' => $request->comment,
        ]);

        return view('index', ['comments' => $this->comment_array]);
    }
}
