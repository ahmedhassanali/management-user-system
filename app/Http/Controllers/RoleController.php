<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleStoreRequest;
use App\Http\Requests\RoleUpdateRequest;
use App\Models\Permission;
use App\Services\RoleService;

class RoleController extends Controller
{

    public function __construct(private RoleService $roleService)
    {
    }

    public function index()
    {
        try {
            $roles = $this->roleService->getAll();
            return view('dashboard.roles.index', compact('roles'));
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $role = $this->roleService->find($id);
            return view('dashboard.roles.edit', compact('role'));
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function create()
    {
        try {
            $permissions = Permission::all();
            return view('dashboard.roles.create', compact('permissions'));
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function store(RoleStoreRequest $request)
    {
        try {
            $this->roleService->store($request->validated());
            return redirect()->route('roles.index')->with('success', 'Role added successfully.');;
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function update(RoleUpdateRequest $request, $id)
    {
        try {
            $this->roleService->update($request->validated(), $id);
            return redirect(route('roles.index'))->with('success', 'Role updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            dd($id);
            $this->roleService->delete($id);
            return redirect(route('roles.index'))->with('success', 'Role deleted successfully.');;
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
