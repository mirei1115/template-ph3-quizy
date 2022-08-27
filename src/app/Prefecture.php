<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Prefecture extends Model
{
    //モデルに紐づけるテーブル名を指定
    protected $table = 'prefectures';
    //guarded:データ登録をさせないカラム指定
    protected $guarded = ['created_at', 'updated_at'];

    //Eloquentでのデータ取得
    //全てのデータ取得
    public function getData() {
        $data = DB::table($this->table)->get();
        return $data;
    }
}