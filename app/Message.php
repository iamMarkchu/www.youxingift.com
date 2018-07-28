<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    public function fetchList($map, $size, $order=['id', 'desc'])
    {
        return $this->where($map)->orderBy($order[0], $order[1])->paginate($size);
    }

    public function store($data)
    {
        foreach ($data as $key => $item)
        {
            $this->$key = $item;
        }
        return $this->save();
    }
}
