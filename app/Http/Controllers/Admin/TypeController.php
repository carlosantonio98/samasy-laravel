<?php

namespace App\Http\Controllers\Admin;

use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TypeController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.types.index')->only('index');
        $this->middleware('can:admin.types.create')->only('create', 'store'); // Quiero que este middleware verifique que los usuarios que entren a la ruta tanto create como store tengan el permiso admin.types.create
        $this->middleware('can:admin.types.edit')->only('edit', 'update');
        $this->middleware('can:admin.types.destroy')->only('destroy');
    }

    public function index()
    {
        $types = Type::latest()->get();
        return view('admin.types.index', compact('types'));
    }

    public function create()
    {
        return view('admin.types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:types'
        ]);
        
        $type = Type::create( $request->all() + [ 'user_id' => Auth()->user()->id ] );

        return redirect()->route('admin.types.edit', $type);
    }

    public function edit(Type $type)
    {
        return view('admin.types.edit', compact('type'));
    }

    public function update(Request $request, Type $type)
    {
        $request->validate([
            'name' => 'required|unique:types,name,' . $type->id
        ]);

        $type->update( $request->all() );

        return redirect()->route('admin.types.edit', $type);
    }

    public function destroy(Type $type)
    {
        $type->delete();

        return redirect()->route('admin.types.index');
    }
}
