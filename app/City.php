<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    // テーブル名
    protected $table = 'city';
    // タイムスタンプ
    public $timestamps = false;
}
