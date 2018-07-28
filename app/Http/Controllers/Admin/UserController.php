<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    /**
     * @var User
     */
    private $user;

    /**
     * UserController constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {

        $this->user = $user;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $map = [];
        $users = $this->user->fetchList($map, $request->input('size', 30));
        return view('admin.users', compact('users'));
    }

    public function status($id, $action)
    {
        $isChanged = $this->user->changeStatus($id, $action);
        return redirect(route('admin-users'))->with(['type' => 1, 'status' => $isChanged ? '更改成功!': '更改失败!']);
    }
}
