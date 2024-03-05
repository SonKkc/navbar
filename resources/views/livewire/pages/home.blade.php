<div class="w-full bg-[#FDF8F1]">
    {{-- hero-banner --}}
    <div class="mx-12 bg-white ">
        <div class="mx-auto max-w-7xl relative">
            <!-- Swiper -->
            <div class="swiper mySwiper ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide flex items-center  max-h-[445px] overflow-hidden">
                        <div class="flex h-[450px] w-4/12 flex-col justify-center gap-4 bg-pink-400/75 px-12 py-10 overflow-hidden">
                            <h2 class="text-3xl text-black">Peronalized books for birthdays</h2>
                            <span class="text-sm text-black">
                                Gift to make thier day, whether they're your parter, parent or BFF
                            </span>
                            <button
                                class="w-8/12 border border-black bg-black p-4 text-lg text-pink-400/75 hover:bg-transparent hover:text-black">
                                Shop birthday gift
                            </button>
                        </div>
                        <div class="w-8/12">
                            <img src="{{ asset('images/baby-read-book.avif') }}" alt=""
                                class="h-full w-full object-cover">
                        </div>
                    </div>
                    <div class="swiper-slide flex items-center max-h-[445px] overflow-hidden">
                        <div class="flex h-[445px] w-4/12 flex-col justify-center gap-4 bg-pink-400/75 px-12 py-10">
                            <h2 class="text-3xl text-black">Peronalized books for birthdays</h2>
                            <span class="text-sm text-black">
                                Gift to make thier day, whether they're your parter, parent or BFF
                            </span>
                            <button
                                class="w-8/12 border border-black bg-black p-4 text-lg text-pink-400/75 hover:bg-transparent hover:text-black">
                                Shop birthday gift
                            </button>
                        </div>
                        <div class="w-8/12">
                            <img src="{{ asset('images/mommy-read-book.avif') }}" alt=""
                                class="h-full w-full object-cover">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-btn-next text-center rounded-full bg-black text-white text-sm p-2 absolute top-1/2 -right-6 z-20">
                <svg class="w-10 h-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10 16 4-4-4-4"/>
                  </svg>
            </div>
            <div class="swiper-btn-prev text-center rounded-full bg-black text-white text-sm p-2 absolute top-1/2 -left-6 z-20">
                  <svg class="w-10 h-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14 8-4 4 4 4"/>
                  </svg>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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

        </div>
    </div>

    <div class="">

        <h1>Navbar Livewire</h1>

        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ipsam magni quo natus!
            Deserunt totam aut perferendis animi iusto nostrum atque nesciunt consectetur? Enim sunt sint repellat
            quibusdam est qui.
            Illo magni accusantium voluptatem dignissimos neque eveniet ipsum quaerat, nobis praesentium enim vero
            doloremque necessitatibus ut pariatur similique unde consequuntur officia optio cupiditate earum provident
            quas odio! Illo, quisquam facilis.
            Illo iste doloremque, voluptatibus quis ipsum similique nostrum exercitationem nulla maiores, at sapiente
            dicta quae sed inventore earum harum dolor sint recusandae eos, aspernatur blanditiis hic veritatis? Nulla,
            asperiores quibusdam.</p>
        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla est magni temporibus harum
            eius,
            fugit corrupti, saepe amet, aspernatur laborum sint architecto ratione. Veniam expedita a, pariatur amet
            optio impedit.
            Numquam ea quidem, doloremque dolorum repudiandae hic provident neque quos, officia iste adipisci ad
            nesciunt nostrum saepe facilis amet ullam tenetur, cupiditate illum natus quasi molestias possimus! Maxime,
            doloribus et!
            Culpa sequi, maxime incidunt nulla ipsa et minus, error ab, quis temporibus autem quasi nam omnis
            repellendus nisi dolorum velit voluptates ipsum eligendi accusantium eveniet. Cum ullam mollitia eligendi
            nam.
            Tenetur odit ab quibusdam omnis explicabo minima quo asperiores et earum perferendis dolore enim vel,
            possimus maxime excepturi aut sint nulla soluta deserunt. Voluptatum sint nostrum corporis enim? Minus,
            deserunt.</p>

        <div class="">
            <a href="/" wire:navigate>Home</a>
        </div>

        <style>
            .zigzag-border {
              position: relative;
              background: url('data:image/svg+xml,%3Csvg width="28" height="74" fill="none" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath d="M28 0v74h-2c0-.618-.191-.854-.455-1.18-.163-.202-.354-.438-.545-.82L1 39.5c-.55-.75-1-1.649-1-2.5 0-.901.45-1.802 1-2.503L25 2c.5-.5 1-1 1-2h2Z" fill="%2323231E"%3E%3C/path%3E%3C/svg%3E') repeat-x;
              background-size: 28px 74px; /* Điều chỉnh kích thước của mũi nhọn và khoảng cách giữa chúng */
            }
          </style>

        <div class="flex items-center">
            <div class="zigzag-border flex-shrink-0 w-32">
              <!-- Nội dung của thẻ div đầu tiên bên trái -->
              <div class="p-4 bg-blue-500 text-white w-80 h-80">Div 1</div>
            </div>
            <!-- Nội dung của thẻ div thứ hai bên phải -->
            <div class="p-4 bg-green-500 text-white w-80 h-80">Div 2</div>
          </div>


</div>