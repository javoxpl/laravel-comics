@extends('templates.base')

@section('pageTitle', 'DC Comics')

@section('pageMain')

    <main>
        <div class="content">

            <div class="container">

              <div class="series">

                <h2>CURRENT SERIES</h2>
              </div>

              <div class="comics-container">

                <!-- qui ci va il tag che ti crei nel componente -->
                @foreach (config('comics') as $card)

                    <a href="{{route('product', ['id' => $card['id']]) }}">

                        <div class="comics-card">

                            <img src="{{ $card['thumb'] }}" alt="{{ $card['series'] }}">
                            <h4>{{ $card['series'] }}</h4>
                        </div>
                    </a>
                @endforeach
              </div>

              <div class="load-b">

                <a href="#">LOAD MORE</a>
              </div>
            </div>
          </div>
    </main>
@endsection
