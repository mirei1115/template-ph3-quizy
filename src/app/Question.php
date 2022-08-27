<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Question extends Model
{
    protected $table = 'questions';
    protected $guarded = ['created_at', 'updated_at'];

    public function choices() {
        return $this -> hasMany(Choice::class);
    }

    public function getData() {
        return $this -> question_id . ':' . $this -> img;
    }
}