<?php

namespace App\Services;

use App\Models\Permission;
use App\Models\Role;
use App\Models\RolePermissions;

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
        $role= Role::create($data) ;
        // $role->permissions->attach( [[1],[2]] );
        foreach($data['permissions'] as $item)
        {
            RolePermissions::create([
                'role_id' => $role->id,
                'permission_id' => $item
            ]);
        }
        return $role;
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
