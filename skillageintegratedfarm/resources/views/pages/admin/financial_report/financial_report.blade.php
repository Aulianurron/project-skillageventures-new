<x-admin-layout>
    @section('title', 'Laporan Keuangan')

    @section('admin')
        <div class="p-4 bg-white rounded shadow mb-6">
            <h1 class="text-2xl font-bold mb-4">Laporan Keuangan Tanggal {{ $date }}</h1>
            <div class="grid grid-cols-3 gap-4 text-center mb-6">
                <div class="bg-green-100 p-4 rounded">
                    <h2 class="text-lg font-semibold text-green-700">Total Pemasukan</h2>
                    <p class="text-xl font-bold text-green-900">Rp {{ number_format($totalIncome, 0, ',', '.') }}</p>
                </div>
                <div class="bg-red-100 p-4 rounded">
                    <h2 class="text-lg font-semibold text-red-700">Total Pengeluaran</h2>
                    <p class="text-xl font-bold text-red-900">Rp {{ number_format($totalExpenses, 0, ',', '.') }}</p>
                </div>
                <div class="bg-blue-100 p-4 rounded">
                    <h2 class="text-lg font-semibold text-blue-700">Saldo</h2>
                    <p class="text-xl font-bold text-blue-900">Rp {{ number_format($saldo, 0, ',', '.') }}</p>
                </div>
            </div>
        </div>
    @endsection
</x-admin-layout>
