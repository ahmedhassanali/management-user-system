<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Services\RoleService;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function __construct(private RoleService $roleService)
    {
        
    }

    public function index()
    {
        try {
            $roles = $this->roleService->getAll();
            return view('dashbored.roles.index',compact('$roles'));
        } catch (\Exception $e) {
            // return $this->errorResponse($e->getMessage(), $e->getCode());
        }
    }

    public function create()
    {
        return view('dashbored.roles.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Role $role)
    {
        //
    }

    public function edit(Role $role)
    {
        //
    }

    public function update(Request $request, Role $role)
    {
        //
    }

    public function destroy(Role $role)
    {
        //
    }
}
