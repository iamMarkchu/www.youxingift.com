<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function fetchList($map, $size)
    {
        return $this->where($map)->orderBy('id', 'desc')->paginate($size);
    }
}
