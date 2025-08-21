<x-home-layout>
  @section('Skillage integrated Farm')
    @section('guest')
    @include('components.navbar')
  <body>
    
    <!-- banner -->
    <div class="text-center mt-5" style="position: relative;">
        <img src="skillage/IMG-20241025-WA0008.jpg" alt="" style="width: 100%; height: 100%;">  
      </div>
      <div class="centered">
        <h1 style="color: white; font-size: xx-large; font-weight: bold;">Produk</h1>   
      </div>
      <div class="container mt-5">
        <div class="row d-flex justify-content-between">
          <div class="col-lg-6 col-md-6 col-12 mt-4 check">
            <select class="form-select" aria-label="Default select example">
              <option selected>Cek Selengkapnya</option>
              <option value="1">Domba</option>
              <option value="2">Tanaman Hijau</option>
              <option value="3">Sapi</option>
            </select>
          </div>
          <div class="col-lg-6 col-md-6 col-12 search">
            <div class="">
              <label for="exampleFormControlInput1" class="form-label"></label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Search">
            </div>
          </div>
        </div>
      </div>
      <!-- produk -->
        <div class="container mt-5">
          <div class="row">
            @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 col-12">
              <a href="{{ route('detail-product', $product->slug)}}" style="text-decoration: none">
                <div class="card2">
                  <img src="{{ asset($product->image) }}" alt="" style="border-radius: 1%; height: 370px; width: 100%">
                  <h3 class="p-3" style="color: #83C900">{{ $product->product_name }}</h3>
                  <h5 class="p-3" style="color: #83C900">{{ $product->price }}</h5>
                </div>
              </a>
            </div>
            @endforeach
        </div>
      </div>
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
    @include('components.footer')
  </body>
  @endsection
</x-home-layout>

