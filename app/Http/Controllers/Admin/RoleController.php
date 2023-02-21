<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.roles.index')->only('index');
        $this->middleware('can:admin.roles.create')->only('create', 'store'); // Quiero que este middleware verifique que los usuarios que entren a la ruta tanto create como store tengan el permiso admin.roles.create
        $this->middleware('can:admin.roles.edit')->only('edit', 'update');
        $this->middleware('can:admin.roles.destroy')->only('destroy');
    }

    public function index() 
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    public function create() 
    {
        $role = new Role();
        $permissions = Permission::all();

        return view('admin.roles.create', compact('role', 'permissions'));
    }

    public function store(Request $request) 
    {
        $request->validate([
            'name' => 'required'
        ]);

        // Creamos un nuevo rol
        $role = Role::create($request->all());

        // Asignamos distintos permisos a el rol que acabamos de crear
        $role->permissions()->sync($request->permissions);

        return redirect()->route('admin.roles.edit', $role);
    }

    public function show(Role $role)
    {
        return view('admin.roles.show', compact('role'));
    }

    public function edit(Role $role) 
    {
        $permissions = Permission::all();

        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, Role $role) 
    {
        $request->validate([
            'name' => 'required'
        ]);

        $role->update($request->all());

        $role->permissions()->sync($request->permissions);

        return redirect()->route('admin.roles.edit', $role);
    }

    public function destroy(Role $role) 
    {
        $role->delete();

        return redirect()->route('admin.roles.index');
    }
}
