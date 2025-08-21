<x-home-layout>
  @section('skillage/ integrated Farm')
    @section('guest')
    @include('components.navbar')
    <body>
      <!-- banner -->
    <div class="text-center" style="position: relative;">
      <img src="skillage/download 22.png" alt="" style="width: 100%; height: 550px;">  
    </div>
    <div class="hero-text">
      <h1 style="color: white; font-size: xx-large; font-weight: bold;">Contact Us</h1>   
    </div>
    <div class="text-center garis" style="text-align: center;">
      <h2>Hubungi kami</h2>
      <hr class="line">
      <p>Dapatkan penawaran menarik dari kami lewat WhatsApp</p>
    </div>
      <!-- Contact Us -->
    <div class="container text-center">
      <div class="row align-items-start">
        <div class="col-lg-6 col-md-6 col-12">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-6 text-start">
                  <i class="fa-regular fa-envelope email"></i>
                  <h4 class="mt-2">Email Us</h4>
                  <p>skillage/islamic@gmail.com</p>
              </div>  
              <div class=" col-lg-6 col-md-6 col-6 text-start">
                <i class="fa-brands fa-whatsapp what"></i>
                <h4 class="mt-2">Telepon</h4>
                <h6>0852-1980-1259</h6>
              </div>
              <div class="row">
                <div class=" col-lg-6 col-md-6 col-6 mt-5 text-start">
                  <i class="fa-regular fa-envelope kontak"></i>
                  <h4 class="mt-2">Alamat</h4>
                  <p>Jl. Raya Dayeuh Kp. Tegal Putat, RT.01/RW.06, Sukasirna, Kec.jonggol kabupaten Bogor, Jawa Barat 16830</p>
                </div>
                
              </div>
          </div>
        </div>
        <!-- maps -->
        <div class="col-lg-6 col-md-6 col-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.2086768902373!2d107.0525401086121!3d-6.495243131583821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69bdf6b3779957%3A0xdbf697642be5a11e!2sSkill%20Village%20Islamic%20School!5e0!3m2!1sid!2sid!4v1729237472143!5m2!1sid!2sid" width="100%" height="420px" style="border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="maps"></iframe>
        </div>
      </div>
    </div>
    @include('components.footer')
    </body>
    @endsection
  </x-home-layout>