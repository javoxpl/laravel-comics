@extends('templates.base')

@section('pageTitle', 'DC Products')

@section('pageMain')

    <main>
        <div class="blue-stripe"></div>
        <div class="content-card">

            <div class="container-card">

                <div class="series-card">

                    <img class="abs-img" src="{{ $comics['thumb'] }}" alt="{{ $comics['series'] }}">

                    <div class="card-info">

                        <h1>{{ $comics['title'] }}</h1>

                        <div class="card-misc">

                            <div class="card-price">
                                <span>U.S. Price: <span class="price">{{ $comics['price'] }}</span></span>
                                <span>AVAILABLE</span>
                            </div>
                            <div class="card-avail">
                                <span>Check Availability</span>
                            </div>
                        </div>

                        <p>{{ $comics['description'] }}</p>
                    </div>

                    <div class="card-advert">
                        <h4>ADVERTISEMENT</h4>
                        <img src="{{ asset('img/adv.jpg') }}" alt="">
                    </div>
                </div>

            </div>

            <div class="card-other-info">

                <div class="other-info-wrapper">

                    <div class="talent">

                        <h3>Talent</h3>
                        <div>
                            <span>Art by:</span>
                            @foreach ($comics['artists'] as $item)

                                <span>{{ $item }},</span>
                            @endforeach
                        </div>
                        <div>
                            <span>Written by:</span>
                            @foreach ($comics['writers'] as $item)

                                <span>{{ $item }},</span>
                            @endforeach
                        </div>
                    </div>

                    <div class="specs">
                        <h3>Specs</h3>
                        <div>
                            <span>Series:</span>

                            <span>{{ $comics['series'] }}</span>
                        </div>
                        <div>
                            <span>U.S. Price:</span>

                            <span>{{ $comics['price'] }}</span>
                        </div>
                        <div>
                            <span>On Sale Date:</span>

                            <span>{{ $comics['sale_date'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection
