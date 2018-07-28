<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function fetchList($map, $size=30, $order=['id', 'desc'])
    {
        return $this->where($map)->orderBy($order[0], $order[1])->paginate($size);
    }

    public function changeStatus($id, $action)
    {
        if ($action == 'active')
            $status = 1;
        elseif ($action == 'inactive')
            $status = 0;
        else
            return false;
        $model = $this->find($id);
        if (!$model)
            return false;

        $model->status = $status;
        return $model->save();
    }
}
