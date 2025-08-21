<aside id="sidebar"
    class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 font-normal duration-75 lg:flex transition-width"
    aria-label="Sidebar">
    <div
        class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
            <div class="flex-1 px-3 space-y-1 bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                <ul class="pb-2 space-y-2">
                    {{-- search --}}
                    <li>
                        <x-dashboard.sidebar.mobile-search-form />
                    </li>

                    {{-- dashboard --}}
                    <li>
                        <x-dashboard.sidebar.item path="{{ route('dashboard') }}" class="items-start">
                            <x-s-v-g-s.dashboard class="w-6 h-6" />
                        </x-dashboard.sidebar.item>
                    </li>

                    {{-- Manajemen Tenaga Pengasuh dan Fasilitator --}}
                    <li>
                        <x-dashboard.sidebar.item path="{{ route('category-product.index') }}"
                            content="Manajemen Kategori Produk">
                            <x-s-v-g-s.person
                                class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" />
                        </x-dashboard.sidebar.item>
                    </li>

                    {{-- Manajemen produk --}}
                    <li>
                        <x-dashboard.sidebar.item path="{{ route('product.index') }}" content="Manajemen Produk">
                            <x-s-v-g-s.news
                                class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" />
                        </x-dashboard.sidebar.item>
                    </li>

                    
                    {{-- Manajemen Kategori Artikel --}}
                    <li>
                        <x-dashboard.sidebar.item path="{{ route('category-articles.index') }}"
                            content="Manajemen Kategori artikel">
                            <x-s-v-g-s.category
                                class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" />
                        </x-dashboard.sidebar.item>
                    </li>

                    {{-- Manajemen artikel --}}
                    <li>
                        <x-dashboard.sidebar.item path="{{ route('article.index') }}" content="Manajemen artikel">
                            <x-s-v-g-s.news
                                class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" />
                        </x-dashboard.sidebar.item>
                    </li>

                    {{-- Manajemen Kategori Program --}}
                    <li>
                        <x-dashboard.sidebar.item path="{{ route('category-program.index') }}" content="Manajemen Kategori Program">
                            <x-s-v-g-s.news
                                class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" />
                        </x-dashboard.sidebar.item>
                    </li>

                    {{-- Manajemen Review --}}
                    <li>
                        <x-dashboard.sidebar.item path="{{ route('program.index') }}" content="Manajemen Program">
                            <x-s-v-g-s.star
                                class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" />
                        </x-dashboard.sidebar.item>
                    </li>
                    {{-- Manajemen Gallery --}}
                    <li>
                        <x-dashboard.sidebar.item path="{{ route('banners.index') }}" content="Manajemen Banner">
                            <x-s-v-g-s.star
                                class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" />
                        </x-dashboard.sidebar.item>
                    </li>
                    {{-- Metode Pembayaran --}}
                    <li>
                        <x-dashboard.sidebar.item path="{{ route('metode-pembayaran.index') }}" content="Metode Pembayaran">
                            <x-s-v-g-s.star
                                class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" />
                        </x-dashboard.sidebar.item>
                    </li>
                    {{-- Metode Pembayaran --}}
                    <li>
                        <x-dashboard.sidebar.item path="{{ route('order.index') }}" content="Order">
                            <x-s-v-g-s.star
                                class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" />
                        </x-dashboard.sidebar.item>
                    </li>
                    {{-- Manajemen Order --}}
                    {{-- <li>
                        <x-dashboard.sidebar.item path="{{ route('order.index') }}" content="Manajemen Order">
                            <x-s-v-g-s.star
                                class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" />
                        </x-dashboard.sidebar.item>
                    </li> --}}
                    {{-- Manajemen Order --}}
                    <li>
                        <x-dashboard.sidebar.item path="{{ route('management-expense.index') }}" content="Manajemen Kategori Pengeluaran">
                            <x-s-v-g-s.star
                                class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" />
                        </x-dashboard.sidebar.item>
                    </li>
                    {{-- Financial Report --}}
                    <li>
                        <x-dashboard.sidebar.item path="{{ route('financial-report.index') }}" content="Laporan Keuangan">
                            <x-s-v-g-s.star
                                class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" />
                        </x-dashboard.sidebar.item>
                    </li> 
                </ul>
            </div>
        </div>
    </div>
</aside>