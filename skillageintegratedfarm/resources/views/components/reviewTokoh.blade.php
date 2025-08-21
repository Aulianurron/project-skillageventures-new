<body class="bg-white">
    <div class="relative w-[22902.8px] glide-04 ">
        <!-- Slides -->
        <div class="overflow-hidden" >
            <div class="relative p-0 flex" style="width: 22902.8px !important">
                @foreach($reviewsTokoh as $rTokoh)
                <div class="rounded-xl shadow-xl outline outline-1 outline-gray-200 text-black p-10 m-10">
                    <div class="flex flex-row">
                        <img src="{{ asset($rTokoh->photo) }}" class="w-[85px] h-[85px] object-cover rounded-full"
                            alt="foto berita" loading="lazy">
                        <div class="ml-2">
                            <p class="text-2xl">{{ $rTokoh->name }}</p>
                            <p>{{ $rTokoh->position }}</p>
                        </div>
                    </div>
                    <div class="">
                        <img src="{{ asset('img/reviews_photo/quote-icon.webp') }}" class="absolute" alt="icon quote">
                        <p class="pt-5 pl-5">{{ $rTokoh->content }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Controls -->
        <div class="flex items-center justify-center w-full gap-2 p-4" data-glide-el="controls">
            <button
                class="inline-flex items-center justify-center w-8 h-8 transition duration-300  lg:w-12 lg:h-12 text-slate-700  "
                data-glide-dir="<" aria-label="prev slide">
                <x-s-v-g-s.arrow-left />
            </button>
            <button
                class="inline-flex items-center justify-center w-8 h-8 transition duration-300  lg:w-12 lg:h-12 text-slate-700 "
                data-glide-dir=">" aria-label="next slide">
                <x-s-v-g-s.arrow-right />
            </button>
        </div>
    </div>
</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/glide.js"></script>
<script>
    // lg
    var input = document.querySelector('.glide-04')

    var glide04 = new Glide('.glide-04', {
        type: 'carousel',
        perView: 4,
        breakpoints: {
            1024: {
                perView: 2
            },
            640: {
                perView: 1
            }
        },
    }, )

    input.addEventListener('input', function(event) {
        glide.update({
            perView: event.target.value
        })
    })

    glide04.mount()
</script>