<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\FinancialReport;
use Carbon\Carbon;

class FinancialReportController extends Controller
{
    public function index()
    {
        $dateToday = Carbon::now()->format('Y-m-d');

        // Sum total income from paid orders
        $totalIncome = Order::where('status', 'paid')->sum('total');

        // Sum total expenses
        $totalExpenses = \App\Models\Expense::sum('total');

        // Calculate saldo
        $saldo = $totalIncome - $totalExpenses;

        // Update or create financial report for today
        $financialReport = FinancialReport::where('date', $dateToday)->first();

        if ($financialReport) {
            $financialReport->update([
                'income' => $totalIncome,
                'expense' => $totalExpenses,
                'saldo' => $saldo,
            ]);
        } else {
            FinancialReport::create([
                'date' => $dateToday,
                'income' => $totalIncome,
                'expense' => $totalExpenses,
                'saldo' => $saldo,
            ]);
        }

        return view('pages.admin.financial_report.financial_report', [
            'totalIncome' => $totalIncome,
            'totalExpenses' => $totalExpenses,
            'saldo' => $saldo,
            'date' => $dateToday,
        ]);
    }
}
