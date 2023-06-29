<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/create', function () {
    $img = Image::make('../public/images/drizzy-template.png');
    $section1 = $_POST['section-1'];
    $section2 = $_POST['section-2'];
    $img->text($section1, 310, 23, function ($font) {
        $font->color('#000000');
        $font->align('center');
        $font->valign('top');
    });
    $img->text($section2, 310, 270, function ($font) {
        $font->color('#000000');
        $font->align('center');
        $font->valign('top');
    });
    return $img->response('jpg');
});
