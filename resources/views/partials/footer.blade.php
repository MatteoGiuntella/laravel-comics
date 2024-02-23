@php
$iconItem = [
    [
        'name'=> 'Digital Comics',
        'img'=> 'resources/img/buy-comics-digital-comics.png'
    ],
    [
        'name'=> 'Dc Merchandise',
        'img'=> 'resources/img/buy-comics-merchandise.png'
    ],
    [
        'name'=> 'Subscriptions',
        'img'=> 'resources/img/buy-comics-shop-locator.png'
    ],
    [
        'name'=> 'Comic shop locator',
        'img'=> 'resources/img/buy-comics-subscriptions.png'
    ],
    [
        'name'=> 'Dc power visa',
        'img'=> 'resources/img/buy-dc-power-visa.svg'
    ]
];
$linksFooter =[
    'DC COMICS'=>[
        'Characters',
        'Comics',
        'Movie',
        'TV',
        'Games',
        'Videos',
        'News'
    ],
    'DC'=>[
        'Terms Of Use',
        'Privacy policy(New)',
        'Ad Choices',
        'Advertising',
        'Jobs',
        'Subscriptions',
        'Talent Workshops',
        'CPSC Certificates',
        'Ratings',
        'Shop Help',
        'Contact Us'
    ],
    'SITES'=>[
        'DC',
        'MAD Magazine',
        'DC Universe',
        'DC Power Visa'
    ],
    'SHOP'=>[
        'Shop DC',
        'Shop DC collectibles'
    ]
];
$socialFooter =[
    'footer-facebook.png',
    'footer-twitter.png',
    'footer-youtube.png',
    'footer-pinterest.png',
    'footer-periscope.png'
];
@endphp
<footer>
    <div class="box-footer-top">
        <div class=" container d-flex p-3 ">
            @foreach ($iconItem as $item)
                <div class="item-box d-flex flex-no-wrap align-items-center pt-4 pb-4 ">
                    <div>
                        <img class=" w-75" src={{ Vite::asset($item['img']) }} alt="">
                    </div>
                    <div class=" ps-2 ">
                        <p>{{$item['name']}}</p>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
    
</footer>
