<?php
namespace App\Http\Controllers;

use App\Prefecture;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller {
    // public function index(Request $request)
    public function index($id)
    {
      $prefectures = Prefecture::get();
      return view('quiz.quiz_list', ['prefectures' => $prefectures]);
    }

    public function quiz_contents(Request $request)
    {
      $id = $request->id;
      $prefecture = Prefecture::find($id);
      $questions = Question::where('prefecture_id', $id)->with("choices")->get();
      return view('quiz.quiz', ['prefecture' => $prefecture],['questions' => $questions]);
    }
}