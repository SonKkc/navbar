<div class="w-full bg-[#FDF8F1]">
    <style>
        /* Định nghĩa lớp zigzag-before */
    .zigzag-after::after {
        content: '';
        position: absolute;
        height: 100%;
        width: 30px;
        bottom: 0;
        left: 0;
        top: 0;
        transform: scaleY(-1); 
        mask-image: url('images/triangle.svg');
        background-color: var(--zigzag-color, #6AB5F5);
    }

    .zigzagMobile::after {
        content: '';
        position: absolute;
        height: 30px;
        width: 100%;
        bottom: 0;
        transform:scaleX(-1); 
        mask-image: url('images/triangleUp.svg');
        background-color: var(--zigzagmb-color, #6AB5F5);;
    }

    .wave::after{
        content: '';
        position: absolute;
        top: 0;
        width: 100%;
        height: 20px;
        transform: rotate(180deg);
        transform: scaleY(1);
        mask-image: url('images/wave.svg');
        background-color: #0049AC;
    }

    </style>
    <div class="min-[1040px]:mx-12 bg-white sm:mx-2">
        {{-- hero-banner --}}
        <div class="mx-auto max-w-7xl relative ">
            <!-- Swiper -->
            <div class="swiper mySwiper sm:hidden min-[1040px]:block">
                <div class="swiper-wrapper">
                    <div class="swiper-slide flex items-center  max-h-[445px] overflow-hidden">
                        <div class="flex h-screen w-4/12 flex-col justify-center gap-4 bg-[#6AB5F5] px-12 py-10 overflow-hidden ">
                            <h2 class="text-3xl text-black">Unlock thier reading powers</h2>
                            <span class="text-sm text-black">
                                Personalized books to inspire a love of reading
                            </span>
                            <button class="w-8/12 border border-black bg-black p-4 text-lg text-[#6AB5F5] hover:bg-transparent hover:text-black">
                                Shop bestsellers
                            </button>
                        </div>
                        <div class="w-8/12 relative">
                            <img src="{{ asset('images/baby-read-book.avif') }}" alt=""
                                class="h-full w-full object-contain">
                                <div class="bg-pink-400/75 zigzag-after"></div>
                        </div>
                    </div>
                    <div class="swiper-slide flex items-center max-h-[445px] overflow-hidden">
                        <div class="flex h-screen w-4/12 flex-col justify-center gap-4 bg-pink-400/75 px-12 py-10">
                            <h2 class="text-3xl text-black">Peronalized books for birthdays</h2>
                            <span class="text-sm text-black">
                                Gift to make thier day, whether they're your parter, parent or BFF
                            </span>
                            <button class="w-8/12 border border-black bg-black p-4 text-lg text-pink-400/75 hover:bg-transparent hover:text-black">
                                Shop birthday gift
                            </button>
                        </div>
                        <div class="w-8/12 relative">
                            <img src="{{ asset('images/mommy-read-book.avif') }}" alt=""
                                class="h-full w-full object-cover">
                                <div class="bg-pink-400/75 zigzag-after" style="--zigzag-color: #F795C8;"></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-btn-next text-center rounded-full bg-black text-white text-sm p-2 absolute top-2/4 -right-6 z-20 sm:hidden min-[1040px]:block">
                <svg class="w-10 h-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10 16 4-4-4-4"/>
                  </svg>
            </div>
            <div class="swiper-btn-prev text-center rounded-full bg-black text-white text-sm p-2 absolute top-2/4 -left-6 z-20 sm:hidden min-[1040px]:block">
                  <svg class="w-10 h-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14 8-4 4 4 4"/>
                  </svg>
            </div>
            <script>
                var swiper = new Swiper(".mySwiper", {
                    navigation: {
                        nextEl: ".swiper-btn-next",
                        prevEl: ".swiper-btn-prev",
                    },
                    pagination: {
                        el: ".swiper-pagination",
                    },
                });
            </script>
            {{-- end-swiper --}}

            {{-- sưiper-mobile --}}
            <div class="swiperMobile swiper sm:block min-[1040px]:hidden overflow-hidden">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="flex flex-col overflow-hidden">
                        <div class="relative">
                            <img src="{{ asset('images/baby-read-book.avif') }}" alt="" class="h-96 w-full object-cover">
                            <div class="zigzagMobile"></div>
                        </div>
                        <div class="flex flex-col gap-4 justify-center items-center bg-[#6AB5F5] px-12 py-10">
                            <h2 class="text-3xl text-black">Unlock thier reading powers</h2>
                            <span class="text-sm text-black">
                                Personalized books to inspire a love of reading
                            </span>
                            <button class="border border-black bg-black p-4 text-lg text-[#6AB5F5] hover:bg-transparent hover:text-black">
                                Shop bestsellers
                            </button>
                        </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="flex flex-col overflow-hidden">
                        <div class="relative">
                            <img src="{{ asset('images/mommy-read-book.avif') }}" alt="" class="h-96 w-full object-cover">
                            <div class="zigzagMobile" style="--zigzagmb-color: #F795C8;"></div>
                        </div>
                        <div class="flex flex-col gap-4 justify-center items-center bg-pink-400/75 px-12 py-10">
                            <h2 class="text-3xl text-black">Peronalized books for birthdays</h2>
                            <span class="text-sm text-black">
                                Gift to make thier day, whether they're your parter, parent or BFF
                            </span>
                            <button class="border border-black bg-black p-4 text-lg text-pink-400/75 hover:bg-transparent hover:text-black">
                                Shop birthday gift
                            </button>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
              <!-- Initialize Swiper -->
              <script>
                var swiper = new Swiper(".swiperMobile", {
                  slidesPerView: "auto",
                  spaceBetween: 30,
                  pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                  },
                });
              </script>
            {{-- end-swiper-mobile --}}
        </div>
        {{-- end-banner-hero --}}
        {{-- best-seller --}}
        <div class="border-t border-gray-200 mt-12 pb-12">
            <div class="mx-auto max-w-7xl pt-12">
                <h2 class="text-3xl font-semibold text-gray-700">Our bestsellers</h2>
                <span class="text-gray-700 text-sm">Personalized stories loved by millions</span>
                <div class="grid grid-cols-4 gap-4 pt-6 max-sm:grid-cols-2">
                    {{-- @foreach ($products as $product)
                    <div class="flex flex-col gap-4 justify-between">
                        <div class="flex flex-col gap-4">
                            <img src="{{ asset('images/bestseller-pic-1.avif') }}" alt="" class="w-full object-cover bg-[#FDF8F1]">
                            <div class="text-gray-700 text-lg font-semibold">{{$product->name}}</div>
                            <span class="text-gray-700 text-sm break-all">{{$product->description}}</span>
                        </div>
                        <button class="mt-8 border border-black bg-black p-3 text-lg text-white hover:bg-transparent hover:text-black w-7/12">
                            Personalize
                        </button>
                    </div>
                    @endforeach --}}
                    
                    <div class="flex flex-col gap-4 justify-between">
                        <div class="flex flex-col gap-4">
                            <img src="{{ asset('images/bestseller-pic-1.avif') }}" alt="" class="h-72 w-72 object-contain bg-[#FDF8F1]">
                            <div class="text-gray-700 text-lg font-semibold">When You Were Born</div>
                            <span class="text-gray-700 text-sm">A story to celebrate a new baby</span>
                        </div>
                        <div class="">
                            <button class="mt-8 border border-black bg-black p-2 px-8 text-lg text-white hover:bg-transparent hover:text-black">
                                Personalize
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4 justify-between">
                        <div class="flex flex-col gap-4">
                            <img src="{{ asset('images/bestseller-pic-2.avif') }}" alt="" class="h-72 w-72 object-contain bg-[#FDF8F1]">
                            <div class="text-gray-700 text-lg font-semibold">Me and My Big Brother / My Big Sister</div>
                            <span class="text-gray-700 text-sm">A story about growing up together</span>
                        </div>
                        <div class="">
                            <button class="mt-8 border border-black bg-black p-2 px-8 text-lg text-white hover:bg-transparent hover:text-black">
                                Personalize
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4 justify-between">
                        <div class="flex flex-col gap-4">
                            <img src="{{ asset('images/bestseller-pic-3.avif') }}" alt="" class="h-72 w-72 object-contain bg-[#FDF8F1]">
                            <div class="text-gray-700 text-lg font-semibold">I'm a Name-O-Saurus</div>
                            <span class="text-gray-700 text-sm">A stomping, romping dinosaur adventure</span>
                        </div>
                        <div class="">
                            <button class="mt-8 border border-black bg-black p-2 px-8 text-lg text-white hover:bg-transparent hover:text-black">
                                Personalize
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4 justify-between">
                        <div class="flex flex-col gap-4">
                            <img src="{{ asset('images/bestseller-pic-4.avif') }}" alt="" class="h-72 w-72 object-contain bg-[#FDF8F1]">
                            <div class="text-gray-700 text-lg font-semibold">First Mother’s Day for Mommy and Me</div>
                            <span class="text-gray-700 text-sm">Capture that first precious Mother's Day</span>
                        </div>
                        <div class="">
                            <button class="mt-8 border border-black bg-black p-2 px-8 text-lg text-white hover:bg-transparent hover:text-black">
                                Personalize
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- --}}

        {{-- navigation --}}
        <div class="bg-[#0049AC] w-full relative">
            <div class="mx-auto max-w-7xl">
                <div class="flex justify-between">
                    <div class="w-7/12">
                        <div class="flex flex-col gap-4 pt-12 pb-6">
                            <h2 class="text-3xl text-white">Shop by</h2>
                            <div class="grid grid-col-3 gap-6">
    
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative">
            <div class="wave pb-12 bg-white"></div>
        </div>
        {{-- end-navigation --}}
    </div>

</div>