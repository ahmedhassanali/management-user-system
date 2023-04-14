<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Role;
use App\Models\User;
use App\Services\UserService;

class UserController extends Controller
{

    public function __construct(private UserService $userService)
    {
    }
    
    public function index()
    {
        try {
            $users = $this->userService->getAll();
            return view('dashboard.users.index', compact('users'));
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function create()
    {
        $roles = Role::all();
        return view('dashboard.users.create', compact('roles'));
    }


    public function store(UserStoreRequest $request)
    {
        try {
            $this->userService->store($request->all());
            return redirect()->route('users.index')->with('success', 'User added successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        try {
            $user = $this->userService->update($request->all(), $user->id);
            return redirect()->route('users.index')->with('success', 'User updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }


    public function destroy(User $user)
    {
        try {
            $this->userService->delete($user->id);
            return redirect()->route('users.index')->with('success', 'User deleted successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
