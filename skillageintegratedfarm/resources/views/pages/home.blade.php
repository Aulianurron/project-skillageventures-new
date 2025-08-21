<x-home-layout>
    @section('Skillage integrated Farm')
    @section('guest')
    @include('components.navbar')
    <body>
        <div class="hero-image">
          {{-- @foreach($banners as $banner) --}}
            <img src="{{ asset($banners->image)}}" alt="" class="banner brightness-50 ">
          {{-- @endforeach --}}
          <div class="hero-text">
              <h1 class="hero-header-text" style="font-size: 70px; font-weight: bold;"> <br>Mewujudkan Generasi<br> Emas Berwirausaha!<br> </h1>
              <p class="hero-header-text">Mewujudkan kreativitas dan kemandirian melalui <br>pertanian, konstruksi, dan bisnis kreatif. <br></p>
            <div class="box hero-header-text">
              <h6>Belanja Sekarang</h6>
            </div>
          </div>
        </div>
          <h1 class="text-center mt-5">Apa saja yang ada di </h1>
          <h1 class="text-center"  style="color:#54B8DF;">Skillage Ventures </h1>
        <div class="scroll-container mt-5">
          <div class="card">
           <div class="row">
            <div class="col-lg-4 col-md-5 col-4 p-3">
              <img src="skillage/tanaman hijau.jpeg.jpg" alt="" class="img-card" style="height:110px; border-radius: 10%;">
            </div>
            <div class="col-lg-8 col-md-7 col-8 p-4" style="top: 11% !important; position: absolute; left: 33%;">
              <h5 style="font-size: 18px;"> Peternakan domba</h5>
              <P>(fattening dan breeding)<P>
            </div>
           </div> 
          </div>
          <div class="card">
            <div class="row">
             <div class="col-lg-4 col-md-5 col-4 p-3">
               <img src="skillage/pupuk.jpg" alt="" class="img-card" style="height: 115px; border-radius: 10%;">
             </div>
             <div class="col-lg-8 col-md-7 col-8 p-4" style="top: 5% !important; position: absolute; left: 33%;">
               <h5 style="font-size: 18px;">Produk silase</h5>
               <P>hijauan makanan ternak <P>
             </div>
            </div> 
           </div>
           <div class="card">
            <div class="row">
             <div class="col-lg-4 col-md-5 col-4">
               <img src="skillage/kotoran.jpg" alt="" class="img-card" style="height: 150px; border-radius: 40px;">
             </div>
             <div class="col-lg-8 col-md-7 col-8 p-3"style="top: 27% !important; position: absolute; left: 33%;">
               <h5 style="font-size: 18px;">Olahan daging</h5>
             </div>
            </div> 
           </div>
           <div class="card">
            <div class="row">
             <div class="col-lg-4 col-md-5 col-4 p-3">
               <img src="skillage/farm.jpeg.jpg" alt="" class="img-card" style="height: 160%; border-radius: 10px;">
             </div>
             <div class="col-lg-8 col-md-7 col-8 p-4" style="position: absolute; left: 33%;">
               <h5 style="font-size: 18px;">Produk hulu & hilir peternakkan</h5>
               <P>(kotoran,pupuk,kompos, konsentrat, complete feed)<P>
             </div>
            </div> 
           </div>
           <div class="card">
            <div class="row">
             <div class="col-lg-4 col-md-5 col-4 p-3">
               <img src="skillage/download.jpeg" alt="" class="img-card" style="height: 110px; border-radius: 10px;">
             </div>
             <div class="col-lg-8 col-md-7 col-8 p-4" style="position: absolute; left: 33%;">
               <h5 style="font-size: 18px;">Empowering and learning center</h5>
             </div>
            </div> 
           </div>
      </div>
      <div class="scroll-container">
        <div class="card">
         <div class="row p-3">
          <div class="col-lg-4 col-md-5 col-4">
            <img src="skillage/edupark.jpg" alt="" class="img-card" style="height:110px;border-radius: 10%;">
          </div>
          <div class="col-lg-8 col-md-7 col-8 p-4 " style="top: 26% !important; position: absolute; left: 33%;">
            <h5 style="font-size: 18px;">Perternakan sapi </h5>
          </div>
         </div> 
        </div>
        <div class="card">
          <div class="row p-3">
           <div class="col-lg-4 col-md-5 col-4">
             <img src="skillage/glamping.jpg" alt="" class="img-card" style="width: 100%; height: 110px; border-radius: 10%">
           </div>
           <div class="col-lg-8 col-md-7 col-8" style="top: 27% !important; position: absolute; left: 33%;">
             <h5 style="font-size: 18px;">Glamping </h5>
           </div>
          </div> 
         </div>
         <div class="card">
          <div class="row p-3">
           <div class="col-lg-4 col-md-5 col-4">
             <img src="skillage/image (5).png" alt="" class="img-card" style="height: 110px; width: 150px; border-radius: 10px;">
           </div>
           <div class="col-lg-8 col-md-7 col-8 p-3" style="top: 26% !important; position: absolute; left: 33%;">
             <h5 style="font-size: 18px;">Gazebo  </h5>
           </div>
          </div> 
         </div>
         <div class="card">
          <div class="row">
           <div class="col-lg-4 col-md-5 col-4 p-3" >
             <img src="Skillage/sapi2.png" alt="" class="img-card" style="height: 110%; border-radius: 10px;">
             
           </div>
           <div class="col-lg-8 col-md-7 col-8 p-4" style="top: 26% !important; position: absolute; left: 33%;">
             <h5 style="font-size: 18px;">domba</div>
           </div>
          </div> 
         </div>
    </div>
    <div class="container" style="margin-top: 100px; margin-bottom: 100px">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 mt-5">
        <iframe  style="display: block; margin: auto;" width="560" height="315" src="https://www.youtube.com/embed/g4UQ9AHdy1g?si=VD5fB_VeCW1MNuEe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </div>
    </div>  
    <div class="container" id="product">
      <div class="row">
        <div class="col-lg-4">
          <img src="skillage/Logo skillage Ventures.png" alt="" class="picture" style="box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.3); border: 1px solid #ddd;" widht">
        </div>
        <div class="col-lg-8 mb-5">
          <h1>Produk <span class="highlight">Skillage Ventures</span></h1>               
          <P>Tersedia berbagai macam produk</P>
          <a href="{{route('products')}}" class="btn " style="color: white; background: #54B8DF;
  background: linear-gradient(to right bottom, #54B8DF, #2E6479);">Cek selengkapnya</a>
        </div>
      </div>
    </div>
        
      <div class="container">
        <div class="row" >
          @foreach ($products as $product)
          <div class="col-lg-4 col-md-6 col-12">
            <a href="{{ route('detail-product', $product->slug)}}" style="text-decoration: none">
              <div class="card2">
                <img src="{{ asset($product->image) }}" alt="" style="border-radius: 1%; height: 370px; width: 100%">
                <h3 class="p-3" style="color: #54B8DF">{{ $product->product_name }}</h3>
                <h5 class="p-3" style="color: #54B8DF">{{ $product->price }}</h5>
              </div>
            </a>
          </div>
          @endforeach
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 mt-5" style="padding: 0 !important;">
          <div class="hero-image4">
            <img src="skillage/banner.jpg" alt="" class="image-skillage2">
            <div class="hero-text4 hero-header-text2">
              <div class="row">
                <div class="col-lg-10 col-md-10 col-8" style="color: #ddd;">
                  <h1>Skillage Ventures wujudkan bisnis kreatif!</h1>
                  <p>Skillage Ventures menghadirkan produk inovatif di properti, teknologi, pangan, dan gaya hidup, untuk memberikan solusi berkualitas dan berkelanjutan yang meningkatkan kesejahteraan hidup Anda.</p>
                </div>
                <div class="col-lg-2 col-md-2 col-4 mt-4">
                  <button class="btn" style="color: white; background: #54B8DF;background: linear-gradient(to right bottom, #54B8DF, #2E6479);" #ddd;"><i class="bi bi-whatsapp"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                    </svg>  Whatsapp</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-10 col-md-9 col-7">
            <h2 class="line-under-text" style="font-weight: bold;">Program kami</h2>
            <p>Ikuti program kami</p>
          </div>
          <div class="col-lg-2 col-md-3 col-5">
            <button style="color: white; background: #54B8DF; background: linear-gradient(to right bottom, #54B8DF, #2E6479);" class="btn">Cek selengkapnya</button>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mt-5">
          @foreach ($programs as $program)
         <div class="col-lg-4 col-md-12 col-12 skillage-kandang mt-5">
          <img src="{{ asset($program->image) }}" alt="" style="width: 100%;">
          <h4 style="font-weight: bold; text-align: center;" class="mt-3">{{ $program->name }}</h4>
          <a href="{{ route('programs', $program->slug) }}" class="btn btn-secondary d-block" style="background-color: #83C900">Selengkapnya</a>
        </div>
        @endforeach
      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-10 col-md-10 col-10 mt-5">
            <h2 class="line-under-text mt-5" style="font-weight: bold;">Review pelanggan</h2>
          </div>
        </div>
      </div>
      <div class="container mt-5">
        <div class="row">
            <div class="reviews">
              <div class="col-lg-4 col-md-4 col-12">
                  <div class="review-card">
                    <div class="review-header">
                        <div>
                            <img src="skillage/habibie.png" alt="">
                            <h4>Jack B.</h4>
                        </div>
                        <div class="stars">★★★★★</div>
                    </div>
                    <div class="review-body">
                      Produk berkualitas<br> tinggi dan layanan yang sangat baik 
                    </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                  <div class="review-card">
                    <div class="review-header">
                        <div>
                            <img src="skillage/habibie.png" alt="">
                            <h4>Sarah K.</h4>
                        </div>
                        <div class="stars">★★★★★</div>
                    </div>
                    <div class="review-body">
                      Sangat direkomendasikan <br>untuk peternak sapi
                    </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                  <div class="review-card">
                    <div class="review-header">
                        <div>
                            <img src="skillage/habibie.png" alt="">
                            <h4>Mike S.</h4>
                        </div>
                        <div class="stars">★★★★★</div>
                    </div>
                    <div class="review-body">
                       Terkesan dengan efektivitas <br> 
                       pupuk kandang
                    </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    <div class="container">
      <div class="row mt-5 on-maps">
        <div class="col-lg-4 col-md-4 col-4 mt-5">
          <img src="skillage/email.png" alt="">
          <h3 class="mt-2">Email us </h3>
          <p class="mt-2">skillageventures@gmail.com</p>
          <img src="skillage/lokasi.png" alt="" class="mt-5">
          <h3 class="mt-2">Alamat</h3>
          <p>Jl. Raya Dayeuh Kp. Tegal Putat,<BR> RT.01/RW.06, Sukasirna, Kec. Jonggol, <BR>Kabupaten Bogor, Jawa Barat 16830</p>
        </div>
        <div class="col-lg-4 col-md-4 col-4 mt-5">
          <img src="skillage/wa.png" alt="">
          <h3 class="mt-2">Telepon</h3>
          <p class="mt-2">0852-1980-1259 </p>
          <img src="skillage/4 kotak.png" alt="" class="mt-5">
          <h3 class="mt-2">Sosial media</h3>
            <div class="row">
              <div class="col-2">
                <img src="skillage/youtube.png" alt="">
              </div>
              <div class="col-2">
                <img src="skillage/Social Icons.png" alt="">
              </div>
              <div class="col-2">
                <img src="skillage/Social Icons@2x.png" alt="" style="width: 40%;">
              </div>
              <div class="col-2">
                <img src="skillage/facebook.png" alt="">
              </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-4 mt-5">
          <img src="skillage/kandang-atas.png" alt="">   
        </div>  
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15856.836825940423!2d107.0523144!3d-6.4951759!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69bdf6b3779957%3A0xdbf697642be5a11e!2sSkill%20Village%20Islamic%20School!5e0!3m2!1sid!2sid!4v1732068696208!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      
       
    </div>
    @include('components.footer')
    </body>
    @endsection
</x-home-layout>