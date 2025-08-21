<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryProduct;
use App\Models\Expense;
use App\Models\FinancialReport;
use Carbon\Carbon;

class ExpenseController extends Controller
{
    public function index(){
        $expenses = Expense::get();
        $categories = CategoryProduct::get();
        return view('pages.admin.management-expense.index', compact('expenses', 'categories'));
    }

    public function create()
    {
        $expenses = Expense::all();
        $categories = CategoryProduct::all();
        return view('pages.admin.management-expense.partials.create-modal', compact('categories', 'expense'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_expenses_id' => 'required|integer',
            'description' => 'required|string|max:255',
            'total' => 'required|numeric',
        ]);

        Expense::create([
            'category_expenses_id' => $request->category_expenses_id,
            'description' => $request->description,
            'total' => $request->total,
        ]);

        $this->updateFinancialReport();

        return redirect()->route('management-expense.index')
            ->with('success', 'produk created successfully.');
    }

    public function show(CategoryProduct $categories, Expense $expenses)
    {
        //
    }

    public function edit($id)
    {
        $expenses = Expense::findOrFail($id);
        return view('pages.admin.management-expense.partials.edit-modal', compact('expenses'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_expenses_id' => 'required|integer',
            'description' => 'required|string|max:255',
            'total' => 'required|numeric',
        ]);

        $expenses = Expense::findOrFail($id);
        $expenses->update([
            'description' => request('description'),
            'total' => request('total'),
            'category_expenses_id' => request('category_expenses_id'),
        ]);

        $this->updateFinancialReport();

        return redirect()->route('management-expense.index')
            ->with('success', 'produk updated successfully.');
    }

    public function destroy($id )
    {
        $expenses = Expense::findOrFail($id);
        $expenses->delete();
        $this->updateFinancialReport();

        return redirect()->route('management-expense.index')
            ->with('success', 'produk deleted successfully.');
    }

    private function updateFinancialReport()
    {
        $totalExpenses = Expense::sum('total');

        $financialReport = FinancialReport::where('date', Carbon::now()->format('Y-m-d'))->first();

        if ($financialReport) {
            $financialReport->update(['expense' => $totalExpenses]);
        } else {
            FinancialReport::create([
                'date' => Carbon::now()->format('Y-m-d'),
                'expense' => $totalExpenses,
                'saldo' => $totalExpenses, // Assuming saldo is the same as total expenses initially
            ]);
        }
    }
}
