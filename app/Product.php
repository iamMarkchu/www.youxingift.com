<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redis;

class Product extends Model
{
    //
    public function getId()
    {
        return Redis::incr('products_last_id');
    }

    public function fetchList($map, $size, $order=['id', 'desc'])
    {
        return $this->where($map)->orderBy($order[0], $order[1])->paginate($size);
    }

    public function store($data)
    {
        $this->id = $this->getId();
        if (!isset($data['name']))
            $data['name'] = '产品'.$this->id;
        foreach ($data as $key => $item)
        {
            $this->$key = $item;
        }
        return $this->save();
    }

    public function tmpDelete($id)
    {
        return $this->destroy($id);
    }
}
