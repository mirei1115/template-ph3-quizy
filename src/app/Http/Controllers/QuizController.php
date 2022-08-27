<?php
//エイリアスをファイルパスにする事で自動読み込み
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Prefecture;
use App\Question;
use App\Choice;


class QuizController extends Controller {
  public function index() {
    $data = Prefecture::all();
    return view('quiz.index', ['data' => $data]);
  }

  public function quiz(Request $request) {
    $id = $request -> id;
    $prefecture = Prefecture::find($id);
    $questions = Question::where('prefecture_id', $id)->with("choices")->get();

    return view('quiz.quiz', ['prefecture'=> $prefecture], ['questions' => $questions]);

  // public function quiz($id) {
  //   $param = ['id' -> $id];
  //   $items = DB::select('select * from prefectures where id = :id', $param);
  //   $choices = DB::select('select * from choices where question_id = :id', $param);
  //   return view('quiz.quiz', compact('param', 'items', 'choices'));
  }
}

//week34
//ルートで指定している、@より前の部分の名前
// class QuizController extends Controller {
//   public function quiz_list($big_question_index)
//   それの中の@の後の、このオブジェクトって決まってるやつを呼び出す
//   {
//     $question_list = [
//       1=>[
//         1=>['こうわ', 'たかなわ', 'たかわ'],
//         2=>['かめど', 'かめと', 'かめいど'],
//         3=>['こうじまち', 'おかとまち', 'かゆまち']
//       ],
//       2=>[
//         1=>['むこうひら', 'むかいなだ', 'むきひら'],
//         2=>['みよし', 'おしらべ', 'みつぎ'],
//         3=>['きやま', 'かなやま', 'きんざん']
//       ],
//     ];
//     $quiz_title = [
//       1=>'東京の難読地名クイズ',
//       2=>'広島の難読地名クイズ',
//     ];
//     return view('quiz.quiz', compact('question_list','big_question_index','quiz_title'));
//   }
// }

// class QuizController extends Controller {
//   public function index(Request $request)
//   public function index($id)
//   {
//     $prefectures = Prefecture::get();
//     return view('quiz.quiz_list', ['prefectures' => $prefectures]);
//   }
//   public function quiz_contents(Request $request)
//   {
//     $id = $request->id;
//     $prefecture = Prefecture::find($id);
//     $questions = Question::where('prefecture_id', $id)->with("choices")->get();
//     return view('quiz.quiz', ['prefecture' => $prefecture],['questions' => $questions]);
//   }
// }

  // public function quiz($id) {
  //   $param = ['id' -> $id];
  //   $items = DB::select('select * from prefectures where id = :id', $param);
  //   $choices = DB::select('select * from choices where question_id = :id', $param);
  //   return view('quiz.quiz', compact('param', 'items', 'choices'));