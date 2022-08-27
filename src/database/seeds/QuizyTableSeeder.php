<?php

use Illuminate\Database\Seeder;

class QuizyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prefecture_params = [
            [ 'name' => '東京の難読地名クイズ'],
            [ 'name' => '広島の難読地名クイズ'],
        ];
        DB::table('prefectures')->insert($prefecture_params);

        $question_params = [
            [ 'prefecture_id' => 1, 'img' => 'takanawa.jpg'],
            [ 'prefecture_id' => 1, 'img' => 'kameido.jpg'],
            [ 'prefecture_id' => 2, 'img' => 'mukainada.jpg'],
        ];
        DB::table('questions')->insert($question_params);

        $choice_params = [
            [
                'question_id' => 1,
                'name' => 'たかなわ',
                'valid' => 1,
            ],
            [
                'question_id' => 1,
                'name' => 'たかわ',
                'valid' => 0,
            ],
            [
                'question_id' => 1,
                'name' => 'こうわ',
                'valid' => 0,
            ],
            [
                'question_id' => 2,
                'name' => 'かめと',
                'valid' => 0,
            ],
            [
                'question_id' => 2,
                'name' => 'かめど',
                'valid' => 0,
            ],
            [
                'question_id' => 2,
                'name' => 'かめいど',
                'valid' => 1,
            ],
            [
                'question_id' => 3,
                'name' => 'むこうひら',
                'valid' => 0,
            ],
            [
                'question_id' => 3,
                'name' => 'むきひら',
                'valid' => 0,
            ],
            [
                'question_id' => 3,
                'name' => 'むかいなだ',
                'valid' => 1,
            ],
        ];
        DB::table('choices')->insert($choice_params);
    }
}
