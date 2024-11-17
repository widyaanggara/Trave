<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        if (auth()->user()->role !== 'admin') {
            return redirect('/');
        }

        // Ambil jumlah pemesanan per bulan untuk tahun ini
        $ordersPerMonth = Pemesanan::selectRaw('MONTH(date_order) as month, COUNT(*) as count')
            ->whereYear('date_order', Carbon::now()->year) // Ambil data untuk tahun ini
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        // Format data pemesanan agar sesuai untuk grafik
        $months = [];
        $orderCounts = [];
        for ($i = 1; $i <= 12; $i++) {
            $months[] = Carbon::create()->month($i)->monthName;
            $orderCounts[] = $ordersPerMonth->where('month', $i)->first()->count ?? 0; // Jika tidak ada data, isi dengan 0
        }

        return view('admin.dashboard-admin', compact('months', 'orderCounts'));
    }
}
