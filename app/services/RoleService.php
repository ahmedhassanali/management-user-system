<?php

namespace App\Services;

use App\Models\Role;

class RoleService
{

    public function getAll()
    {
        return Role::all();
    }

    public function find(int $id)
    {
        return Role::find($id);
    }

    public function store(array $data)
    {
        return Role::create($data);
    }

    public function update(array $data, int $id)
    {
        $role = Role::find($id);
        return $role->update($data);
    }

    public function delete(int $id)
    {
        $role = Role::find($id);
        return  $role->delete();
    }
}
