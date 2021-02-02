<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Test;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $user = User::where('code', $request->student_id)->first();

        $questions = Question::select('id', 'question',
        'answer','choice_one','choice_two','choice_three', 'choice_four')->get();

        return view('test', compact(['user', 'questions']));
    }

    public function grade(Request $request)
    {
        $questions = Question::select('id', 'question',
        'answer','choice_one','choice_two','choice_three', 'choice_four')->get();

        $answers = $request->all();
        
        $correct = 0;
        $wrong = 0;
        foreach ($questions as $key => $value) {
            if($value->answer == $answers['answer_'. ($key + 1)]){
                $correct++;
            } else {
                $wrong++;
            }
        }
        $total = $correct + $wrong;

        $test = Test::create([
            'score' => $correct,
            'correct_answers' => $correct,
            'wrong_answers' => $wrong,
            'user_id' => $request->user_id
        ]);

        if($test) {
            return view('result', compact(['test','questions', 'answers']));
        } else {
            die('Error Creating Test');
        }
    }
}
