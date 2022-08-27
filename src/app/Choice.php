<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Choice extends Model
{
    protected $table = 'choices';
    protected $guarded = ['created_at', 'updated_at'];

    public function getData() {
        return $this -> name;
    }
}