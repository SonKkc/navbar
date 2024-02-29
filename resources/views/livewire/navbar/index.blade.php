<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <h1>Navbar Livewire</h1>
    <div class="">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, facilis officia porro ea, eos velit ut
        veritatis vitae reiciendis consequatur odio aliquam vero! Nesciunt perferendis saepe accusantium eaque iste.
        Sint.Explicabo, impedit ab repellat ipsum fuga laudantium. Animi necessitatibus praesentium beatae. Molestiae
        ipsum molestias beatae facere. Quos aperiam quisquam tempore, dolore recusandae earum ut, incidunt magnam,
        nesciunt explicabo consectetur omnis.
    </div>

    <div class="">
        <div>
            <ul>
                @foreach($menuData as $menuItem)
                    <li>
                        {{ $menuItem['title'] }}
                        @if(isset($menuItem['items']))
                            <ul>
                                @foreach($menuItem['items'] as $subItem)
                                    <li>{{ $subItem['title'] }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>


