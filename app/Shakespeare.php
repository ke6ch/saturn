<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Shakespeare extends Model
{
    use Searchable;

    // タイムスタンプ
    // public $timestamps = false;

    /**
     * モデルのタイプ名取得
     *
     * @return string
     */
    public function searchableAs()
    {
        return 'line';
    }

}
