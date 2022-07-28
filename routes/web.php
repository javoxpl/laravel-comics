<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home', [
        'arrDComics' => config('dcomics'),
    ]
);
});

Route::get('/product/{id}', function ($id) {
    $card = null;
    foreach (config('comics') as $value) {
        if ($value['id'] == $id) {
            $card = $value;
            break;
        }
    }

    if ($card) {
        return view('product', [
            'comics'     => $card,
            'arrDComics' => config('dcomics'),
        ]);
    } else {
        abort(404);
    }
})->name('product');

// <a href="{{route('comic')}}">Prodotti</a>

// return view('product', [
//     'arrDComics' => config('dcomics'),
// ]
// );
