<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreExpense;
use App\Http\Requests\UpdateExpense;
use Illuminate\Http\Request;
use App\Models\Expense;

class ExpenseController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.expenses.index')->only('index');
        $this->middleware('can:admin.expenses.create')->only('create', 'store'); // Quiero que este middleware verifique que los usuarios que entren a la ruta tanto create como store tengan el permiso admin.expenses.create
        $this->middleware('can:admin.expenses.edit')->only('edit', 'update');
        $this->middleware('can:admin.expenses.destroy')->only('destroy');
    }

    public function index()
    {
        $expenses = Expense::latest()->get();
        return view('admin.expenses.index', compact('expenses'));
    }

    public function create()
    {
        $expense = new Expense();
        return view('admin.expenses.create', compact('expense'));
    }

    public function store(StoreExpense $request)
    {
        $expense = Expense::create($request->all() + [ 'user_id' => Auth()->user()->id ]);
        return redirect()->route('admin.expenses.edit', $expense);
    }

    public function edit(Expense $expense)
    {
        return view('admin.expenses.edit', compact('expense'));
    }

    public function update(UpdateExpense $request, Expense $expense)
    {
        $expense->update($request->all());
        return redirect()->route('admin.expenses.edit', $expense);
    }

    public function destroy(Expense $expense)
    {
        $expense->delete();
        return redirect()->route('admin.expenses.index');
    }
}
