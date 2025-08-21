<x-admin-layout>
    @section('admin')
    <div class="p-4 lg:ml-20 sm:ml-10 mt-15 sm:flex items-center justify-between  lg:mt-1.5 dark:bg-gray-800 ">
        <div class="w-full mb-1">
            <div class="mb-4">
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Dashboard</h1>
            </div>
            <div class="grid grid-cols-2 items-center lg:gap-4 sm:gap-4">
                <div
                    class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <x-s-v-g-s.person />
                    <a href="">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">{{$product}}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Jumlah Produk</p>
                </div>
                <div
                    class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <x-s-v-g-s.star />
                    <a href="">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">{{$program}}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Jumlah program</p>
                </div>
            </div>

            <div class="grid grid-cols-2 lg:gap-4 sm:gap-2 mt-10">
                <div
                    class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <x-s-v-g-s.category />
                    <a href="">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">{{$order}}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Jumlah order</p>
                </div>
                <div
                    class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <x-s-v-g-s.news />
                    <a href="">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">{{$income}}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Total Pendapatan</p>
                </div>
            </div>
        </div>

    </div>
    </div>
    @endsection
</x-admin-layout>