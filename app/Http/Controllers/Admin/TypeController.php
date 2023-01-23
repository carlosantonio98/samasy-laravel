<?php

namespace App\Http\Controllers\Admin;

use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TypeController extends Controller
{

    public function index()
    {
        $types = Type::latest()->get();
        return view('types.index', compact('types'));
    }

    public function create()
    {
        return view('types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:types'
        ]);

        $type = Type::create( $request->all() );

        return redirect()->route('admin.types.edit', $type);
    }

    public function edit(Type $type)
    {
        return view('types.edit', compact('type'));
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
