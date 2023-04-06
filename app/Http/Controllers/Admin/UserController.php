<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.users.index')->only('index');
        $this->middleware('can:admin.users.create')->only('create', 'store'); // Quiero que este middleware verifique que los usuarios que entren a la ruta tanto create como store tengan el permiso admin.users.create
        $this->middleware('can:admin.users.edit')->only('edit', 'update');
    }

    public function index()
    {
        $users = User::latest()->paginate();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        $user = new User();
        $roles = Role::all();

        return view('admin.users.create', compact('user', 'roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Asignamos el rol
        $user->roles()->sync($request->roles);

        return redirect()->route('admin.users.index')->with('info', ['type' => 'success', 'title' => 'User created!', 'text' => 'User created successfully.']);
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($user->id)],
            'password' => ['confirmed']
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        $user->roles()->sync($request->roles);

        return redirect()->route('admin.users.index')->with('info', ['type' => 'success', 'title' => 'User updated!', 'text' => 'User updated successfully.']);
    }
}
