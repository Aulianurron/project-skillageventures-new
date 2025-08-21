<div id="add-order-modal" tabindex="-1"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Tambah Order
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="add-order-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="p-6 space-y-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="category_order"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori order</label>
                        <select name="category_order[]" id="category_order"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required>
                            <option selected disabled>Pilih Kategori Order</option>
                            <option value="Pembelian di Toko">Pembelian di Toko</option>
                            <option value="Shopee">Shopee</option>
                            <option value="Tokopedia">Tokopedia</option>
                            <option value="Lazada">Lazada</option>
                            <option value="Bukalapak">Bukalapak</option>
                            <option value="Tiktokshop">Tiktokshop</option>
                            <option value="Whatsapp">Whatsapp</option>
                            <option value="Projek">Projek</option>
                        </select>
                        @error('category_order')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="category_product"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Metode pembayaran</label>
                        <select name="payment_method_id[]" id="category_product"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required>
                            <option selected disabled>Pilih metode pembayaran</option>
                            @foreach ($payment_methods as $payment_method)
                            <option value="{{$payment_method->id}}">{{$payment_method->payment_method}}</option>
                            @endforeach
                        </select>
                        @error('payment_method_id')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-6">
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi produk</label>
                            <textarea name="description" id="description" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Masukkan deskripsi produk"></textarea>
                            @error('description')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    <div class="card">
                        <div class="card-header">
                            Products
                        </div>
                        
                        <div class="card-body">
                            <table class="divide-gray-200 table-fixed dark:divide-gray-600">
                                <thead class="bg-gray-100 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Produk
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Jumlah
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Diskon
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                            Informasi
                                        </th>
                                    </tr>
                                </thead>
                                
                                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                    <tr id="product0">
                                        <td>
                                            <select name="products[]" class="form-control">
                                                <option value="">-- choose product --</option>
                                                @foreach ($products as $product)
                                                    <option value="{{ $product->id }}">
                                                        {{ $product->product_name }} (${{ number_format($product->price, 2) }})
                                                    </option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <input type="number" name="amount_product[]" class="form-control" value="1" />
                                        </td>
                                        <td>
                                            <input type="number" name="discount[]" class="form-control" value="0" />
                                        </td>
                                        <td>
                                            <textarea type="text" name="information[]" class="form-control"></textarea>
                                        </td>
                                    </tr>
                                    <tr id="product1"></tr>
                                </tbody>
                            </table>

                            <div class="row mt-5">
                                <div class="columns-2">
                                    <button id="add_row" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 pull-left">Tambah Produk</button>
                                    <button id='delete_row' class="pull-right text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Hapus produk</button>
                                </div>
                                <div class="columns-2 mt-3">
                                    <input class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="submit" value="{{ trans('Simpan orderan')}}">

                                    <button type="button" data-modal-hide="add-order-modal"
                                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batalkan orderan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
            $(document).ready(function(){
        let row_number = 1;
        $("#add_row").click(function(e){
        e.preventDefault();
        let new_row_number = row_number - 1;
        $('#product' + row_number).html($('#product' + new_row_number).html()).find('td:first-child');
        $('#products_table').append('<tr id="product' + (row_number + 1) + '"></tr>');
        row_number++;
        });

        $("#delete_row").click(function(e){
        e.preventDefault();
        if(row_number > 1){
            $("#product" + (row_number - 1)).html('');
            row_number--;
        }
        });
    });
</script>