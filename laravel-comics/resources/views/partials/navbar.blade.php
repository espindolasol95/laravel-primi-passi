@php
    $nav = [
        [
            'id' => 1,
            'label' => 'characters',
            'href' => '#',
            'active' => false,
        ],
        [
            'id' => 2,
            'label' => 'comics',
            'href' => '#',
            'active' => false,
        ],
        [
            'id' => 3,
            'label' => 'movies',
            'href' => '#',
            'active' => false,
        ],
        [
            'id' => 4,
            'label' => 'tv',
            'href' => '#',
            'active' => false,
        ],
        [
            'id' => 5,
            'label' => 'games',
            'href' => '#',
            'active' => false,
        ],
        [
            'id' => 6,
            'label' => 'collectibles',
            'href' => '#',
            'active' => false,
        ],
        [
            'id' => 7,
            'label' => 'videos',
            'href' => '#',
            'active' => false,
        ],
        [
            'id' => 8,
            'label' => 'fans',
            'href' => '#',
            'active' => false,
        ],
        [
            'id' => 9,
            'label' => 'news',
            'href' => '#',
            'active' => false,
        ],
        [
            'id' => 10,
            'label' => 'shop',
            'href' => '#',
            'active' => false,
        ],
    ];
@endphp


<header class="header-col">

    <div class="logo">
        <img src="{{  Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo">
    </div>


    <nav class="nav">
        <ul>

            @foreach ($nav as $link)

                <li class="{{ $link['active'] ? 'active' : '' }}">
                    <a href="{{ $link['href'] }}">
                        {{ $link['label'] }}
                    </a>
                </li>

            @endforeach

        </ul>
    </nav>

</header>
