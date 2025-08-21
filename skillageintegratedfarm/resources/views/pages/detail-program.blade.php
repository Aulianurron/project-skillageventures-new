<x-home-layout>
  @section('Skillage integrated Farm')
    @section('guest')
    @include('components.navbar')
<body>    
  
    <div class="text-center tex">
        <h1 style="font-weight: bolder;">Program Kami</h1>
        <hr class="len">
    </div>
    <!-- program -->
     <div class="container text-center prog">
        <div class="row text-align-start">
            <div class="col-lg-8 col-md-6 col-sm-12">
                <img src="{{ asset($program->image) }}" alt="" style="width:80%">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <h1>Investasi Titip</h1>
                <h1>Domba</h1>
                <div class="d-grid gap-2 buton">
                    <button type="button" class="btn btn-outline-success">Buka File pendukung {{ $program->document_program }}</button>
                    <button class="btn btn-success bi bi-whatsapp" type="button">    whatsApp</button>
                </div>
            </div>
            <div class="text-start mt-5">
              <h1>{{ $program->name }}</h1>
            </div>
            <div class="text-start mt-5">
              <p>{{ $program->description }}</p>
            </div>
        </div>
     </div>
    <div class="container text-center mt-5">
      <div class="row">

        
        @foreach ($otherPrograms as $program) <!-- Assuming you want to list other programs -->
        <div class="col-lg-4 col-md-12 col-12 skillage-kandang mt-5">
            <img src="{{ asset($program->image) }}" alt="" style="width: 100%;">
            <h4 style="font-weight: bold; text-align: center;" class="mt-3">{{ $program->name }}</h4>
            <a href="{{ route('detail-program', $program->id) }}" class="btn btn-secondary d-block" style="background-color: #83C900">Selengkapnya</a>
        </div>
      @endforeach
      </div>
      
    </div>
     
     
   



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
    @include('components.footer')
  </body>
  @endsection
</x-home-layout>
