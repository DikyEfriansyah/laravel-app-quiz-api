<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\User;

class QuestionController extends Controller
{
    public function showQuestion(){
        $question = Question::with('questionOptions')->get();

        return response()->json([
            "data" => $question
        ]);
    }

    public function showUser(){
        $user = User::all();

        return response()->json([
            "data" => $user
        ]);
    }
}
