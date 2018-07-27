<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //

    public function store($data)
    {
        foreach ($data as $key => $item)
        {
            $this->$key = $item;
        }
        return $this->save();
    }
}
