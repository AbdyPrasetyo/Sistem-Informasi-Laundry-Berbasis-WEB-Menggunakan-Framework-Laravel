<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Role;
use App\Models\User;
use App\Models\Service;
use App\Models\Voucher;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Function to show admin dashboard view
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        $user = Auth::user();

        $recentTransactions = Transaction::whereNull('finish_date')
            ->with('status')
            ->where('service_type_id', 1)
            ->orderByDesc('created_at')
            ->limit(10)
            ->get();

        $membersCount = User::where('role', Role::Member)->count();
        $productCount = Service::all()->count();
        $voucherCount = Voucher::all()->count();

        $transactionsCount = Transaction::count();

        $priorityTransactions = Transaction::whereNull('finish_date')
            ->with('status')
            ->where('service_type_id', 2)
            ->orderByDesc('created_at')
            ->limit(10)
            ->get();

        return view('admin.index', compact(
            'user',
            'recentTransactions',
            'membersCount',
            'transactionsCount',
            'priorityTransactions',
            'productCount',
            'voucherCount',
        ));
    }
}
