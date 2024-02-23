@extends('layouts.app')
@php
    $iconMain = ['buy-comics-digital-comics.png', 'buy-comics-merchandise.png', 'buy-comics-shop-locator.png', 'buy-comics-subscriptions.png', 'buy-dc-power-visa.svg'];
@endphp
@section('main-content')
    <main>
        <div class="bg-box-main">
            <div class=" container  d-flex flex-wrap p-1 ">
                @foreach ($comics as $comic)
                    <div class="card m-2 " style="width: 12rem;">
                        <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="">
                        <div class="card-body card-p">
                            <p class="card-text">{{ $comic['series'] }}</p>
                        </div>
                    </div>
                @endforeach
                <div class=" d-flex justify-content-center pb-4  pt-4 box-button">
                    <button class="blu-button">LOAD MORE </button>
                </div>
            </div>

        </div>
    </main>
@endsection
