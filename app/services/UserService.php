<?php

namespace App\Services;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{

    public function getAll()
    {
        return User::all();
    }

    public function find(int $id)
    {
        return User::find($id);
    }

    public function store(array $data)
    {
        $data['password'] =  Hash::make($data['password']);
        return User::create($data) ;
    }

    public function update(array $data, int $id)
    {
        $user = User::find($id);
        $data['password'] =  Hash::make($data['password']);
        return $user->update($data);
    }

    public function delete(int $id)
    {
        $user = User::find($id);
        return  $user->delete();
    }
}
