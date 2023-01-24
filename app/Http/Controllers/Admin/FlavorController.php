<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Flavor;

class FlavorController extends Controller
{

    public function index()
    {
        $flavors = Flavor::latest()->get();
        return view('flavors.index', compact('flavors'));
    }

    public function create()
    {
        return view('flavors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:flavors'
        ]);

        $flavor = Flavor::create( $request->all() );

        return redirect()->route('admin.flavors.edit', $flavor);
    }

    public function edit(Flavor $flavor)
    {
        return view('flavors.edit', compact('flavor'));
    }

    public function update(Request $request, Flavor $flavor)
    {
        $request->validate([
            'name' => 'required|unique:flavors,name,' . $flavor->id
        ]);

        $flavor->update( $request->all() );

        return redirect()->route('admin.flavors.edit', $flavor);
    }

    public function destroy(Flavor $flavor)
    {
        $flavor->delete();

        return redirect()->route('admin.flavors.index');
    }
}
