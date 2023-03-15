<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Flavor;

class FlavorController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.flavors.index')->only('index');
        $this->middleware('can:admin.flavors.create')->only('create', 'store'); // Quiero que este middleware verifique que los usuarios que entren a la ruta tanto create como store tengan el permiso admin.flavors.create
        $this->middleware('can:admin.flavors.edit')->only('edit', 'update');
        $this->middleware('can:admin.flavors.destroy')->only('destroy');
    }

    public function index()
    {
        $flavors = Flavor::latest()->get();
        return view('admin.flavors.index', compact('flavors'));
    }

    public function create()
    {
        return view('admin.flavors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:flavors'
        ]);

        $flavor = Flavor::create( $request->all() + [ 'user_id' => Auth()->user()->id ] );

        return redirect()->route('admin.flavors.edit', $flavor)->with('info', ['type' => 'success', 'title' => 'Flavor created', 'text' => 'Flavor created with exit!']);
    }

    public function edit(Flavor $flavor)
    {
        return view('admin.flavors.edit', compact('flavor'));
    }

    public function update(Request $request, Flavor $flavor)
    {
        $request->validate([
            'name' => 'required|unique:flavors,name,' . $flavor->id
        ]);

        $flavor->update( $request->all() );

        return redirect()->route('admin.flavors.edit', $flavor)->with('info', ['type' => 'success', 'title' => 'Flavor updated', 'text' => 'Flavor updated with exit!']);;
    }

    public function destroy(Flavor $flavor)
    {
        $flavor->delete();

        return redirect()->route('admin.flavors.index')->with('info', ['type' => 'success', 'title' => 'Flavor deleted', 'text' => 'Flavor deleted with exit!']);
    }
}
