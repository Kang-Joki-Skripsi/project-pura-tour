<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/galery', function() {
    // ini akan mencari pada folder public
    $madya_mandala = public_path('main_asset/img/galery/madya_mandala');
    $nista_mandala = public_path('main_asset/img/galery/nista_mandala');
    $utama_mandala = public_path('main_asset/img/galery/utama_mandala');
    $filesUtamaMandala = File::files($utama_mandala);
    $filesMadyaMandala = File::files($madya_mandala);
    $filesNistaMandala = File::files($nista_mandala);

    $files = [
        "utama_mandala" => [],
        "madya_mandala" => [],
        "nista_mandala" => [],
    ];

    foreach ($filesUtamaMandala as $file) {
        $files["utama_mandala"][] = asset('main_asset/img/galery/utama_mandala') . "/" . $file->getFilename();
    }
    foreach ($filesMadyaMandala as $file) {
        $files["madya_mandala"][] = asset('main_asset/img/galery/madya_mandala') . "/" . $file->getFilename();
    }
    foreach ($filesNistaMandala as $file) {
        $files["nista_mandala"][] = asset('main_asset/img/galery/nista_mandala') . "/" . $file->getFilename();
    }

    return response()->json($files);
});

Route::get('/videos', function() {
    // ini akan mencari pada folder public
    $filepath = public_path('img/3D');

    $videos3D = File::files($filepath);

    $files = [];

    foreach ($videos3D as $video) {
        $files[] = asset('/main_asset/img/3D') . "/" . $video->getFilename();
    }

    return response()->json($files);
});