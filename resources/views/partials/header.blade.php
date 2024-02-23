@php
    $links = [
        [
            'url' => '/',
            'label' => 'Characters',

        ],
        [
            'url' => '/comics',
            'label' => 'Comics',

        ],
        [
            'url' => '/movie',
            'label' => 'Movie',

        ],
        [
            'url' => '/tv',
            'label' => 'TV',

        ],
        [
            'url' => '/games',
            'label' => 'Games',

        ],
        [
            'url' => '/collectibles',
            'label' => 'Collectibles',

        ],
        [
            'url' => '/videos',
            'label' => 'Videos',

        ],
        [
            'url' => '/fans',
            'label' => 'Fans',

        ],
        [
            'url' => '/news',
            'label' => 'News',

        ],
        [
            'url' => '/shop',
            'label' => 'Shop',

        ]
 ];
@endphp

<header>
    <nav>
      <div class=" container">
        
        <div class="box-header">
            <div class="logo-header">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </div>
        
            <div class="navbar-header">
                <ul class="d-flex">
                    @foreach ($links as $link)

                    <li class=" list-unstyled m-2">
                       <a class=" text-decoration-none item" href="">{{$link['label']}}</a>
                    </li>

                   @endforeach
                </ul>
            </div>
            <div class="input-header">
              <input class=" border-0" type="text" placeholder="search"><span><i class="fa-solid fa-magnifying-glass"></i></span>
            </div>
        </div>
      </div>
    </nav>
    <div class="bottom-header">
        <div class=" container  position-relative ">
            <button class="blu-button">CURRENT SERIES</button>
        </div>
        
    </div>
</header>
