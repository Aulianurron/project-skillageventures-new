<x-home-layout>
  @section('Skillage integrated Farm')
    @section('guest')
    @include('components.navbar')
  <body>
  
    <div class="container">
      <div class="text-center mt-5">
        <h2 class="line-under-text mt-5 text-center" style="font-weight: bold;">Detail produk</h2>
      </div>
        <div class="row mt-4">
            <div class="col-lg-5 col-md-12 col-12 ms-2">
                <img src="{{ asset($products->image) }}"class="domba">
            </div>
            <div class="col-lg-6 col-md-12 col-12 ms-2">
              <h2>{{ $products->product_name }}</h2>
              <p style="color: rgb(17, 92, 17);">Rp.3.500.000</p>
              <p>{{ $products->description }}</p>
              <h6>{{ $products->stock }}<br></br></h6>
              <button class="btn-login btn text-center" style="background-color: #83C900; color: white;"data-bs-toggle="modal" data-bs-target="#belisekarang">
                beli sekarang
              </button>
              <div class="modal fade" id="belisekarang" tabindex="-1" role="dialog" aria-labelledby="belisekarang" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="belise">Link Product</h53>
                    </div>
                    <div class="modal-body">
                      <div class="row" class="pembayaran">
                        
                          
                        
                        <div class="col-lg-5 col-md-12 col-12">
                          @foreach($products->link_product as $link_products)
                          <p>{{ $link_products->marketplace_name }}</p>
                          <a href="{{ $link_products->link_product }}" class="pembayaran1"></a>
                          @endforeach
                        </div>
                       
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div class="container">
      <div class="row ">
        @foreach ($otherproducts as $product)
        <div class="col-lg-4 col-md-6 col-12">
            <div class="card2">
              <a href="{{ route('detail-product', $product->slug)}} "><img src="{{ asset($product->image) }}" alt="" style="border-radius: 1%; height: 370px; width: 100%"></a>
              <h3 class="p-3" style="color: #83C900">{{ $product->product_name }}</h3>
              <h5 class="p-3" style="color: #83C900">{{ $product->price }}</h5>
            </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>
     @include('components.footer')
  </body>
  @endsection
</x-home-layout>





    

