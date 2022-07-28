<div class="bluepart">

    <div class="container">

        @foreach (config('shop') as $item)
        <li>
            <div class="small-container">

                <img src="{{ asset('/img/'.$item['img']) }}" alt="{{ $item['alt'] }}">
                <p>{{ $item['text'] }}</p>
            </div>
        </li>
        @endforeach


    </div>
</div>

