<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.permissions.index')->only('index');
        $this->middleware('can:admin.permissions.create')->only('create', 'store'); // Quiero que este middleware verifique que los usuarios que entren a la ruta tanto create como store tengan el permiso admin.permissions.create
        $this->middleware('can:admin.permissions.edit')->only('edit', 'update');
        $this->middleware('can:admin.permissions.destroy')->only('destroy');
    }

    public function index() 
    {
        $permissions = Permission::latest()->paginate();
        return view('admin.permissions.index', compact('permissions'));
    }

    public function create() 
    {
        $permission = new Permission();
        return view('admin.permissions.create', compact('permission'));
    }

    public function store(Request $request) 
    {
        $request->validate([
            'name'        => 'required',
            'description' => 'required'
        ]);

        $permission = Permission::create( $request->all() );
        return redirect()->route('admin.permissions.edit', $permission)->with('info', ['type' => 'success', 'title' => 'Permission created!', 'text' => 'Permission created successfully.']);
    }


    public function edit(Permission $permission) 
    {
        return view('admin.permissions.edit', compact('permission'));
    }

    public function update(Request $request, Permission $permission) 
    {
        $request->validate([
            'name'        => 'required',
            'description' => 'required'
        ]);

        $permission->update($request->all());
        return redirect()->route('admin.permissions.edit', $permission)->with('info', ['type' => 'success', 'title' => 'Permission updated!', 'text' => 'Permission updated successfully.']);
    }

    public function destroy(Permission $permission) 
    {
        $permission->delete();
        return redirect()->route('admin.permissions.index')->with('info', ['type' => 'success', 'title' => 'Permission deleted!', 'text' => 'Permission deleted successfully.']);
    }
}
