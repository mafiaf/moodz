<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
      $users = [
          '0' => [
              'first_name' => 'Baris',
              'last_name' => 'Firat',
              'location' => 'Utrecht'
            ],
            '1' => [
              'first_name' => 'Carolien',
              'last_name' => 'Said',
              'location' => 'Utrecht'
          ]
    ];
    return view('admin.users.index', compact('users'));
    // doorgestuurd naar index blade door middel van Compact
    }

    public function create()
    {
    return 'view'('admin.users.create');
    }

    public function store(Request $request)
  {
    User::create($request->all());
    return 'success';
    return $request->all();
  }
}
