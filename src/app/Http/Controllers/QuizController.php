<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller {
    public function index($id) {
        $data = ['id' => $id];
        $choices = [
            1=>[
                1=>['こうわ','たかなわ','たかわ'],
                2=>['かめど', 'かめと', 'かめいど'],
                3=>['こうじまち', 'おかとまち', 'かゆまち']
            ],
            2=>[
                1=>['むこうひら', 'むかいなだ', 'むきひら'],
                2=>['みよし', 'おしらべ', 'みつぎ'],
                3=>['きやま', 'かなやま', 'ぎんざん']
            ],
        ];
        return view ('quiz.index',compact('id','choices'));
    }
}