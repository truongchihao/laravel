<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Route::get('/home', function () {
    $user = new User();
    dd($user);
    //return view('home');

});

Route::get('/san-pham', function () {
    return view('product');

});

// test router

// Route::get('1', function(){
//     return view('form');
// });

// Route::get('1', function(){
//     return 'Phuong thuc get cua path /1';
// });

// Route::post('1', function(){
//     return 'Phuong thuc post cua path /1';
// });

// Route::put('1', function(){
//     return 'Phương thức put của path /1';
// });

// Route::delete('1', function(){
//     return 'Phương thức delete của path /1';
// });

// Route::patch('1', function(){
//     return 'Phương thức patch của path /1';
// });

// Route::match(['get', 'post'], '1', function(){
//     return $_SERVER['REQUEST_METHOD'];
// });

// Route::any('1', function(REQUEST $request){
//     return $request->method();
// });

// Route::get('show-form', function(){
//     return view('form');
// });

// Route::redirect('1', 'show-form', 404);

// Route::view('show-form', 'form');

// Route::prefix('admin')->group(function(){
//     Route::get('1', function(){
//         return 'Phuong thuc get cua path /1';
//     });
    
//     Route::get('show-form', function(){
//         return view('form');
//     });

//     Route::prefix('products')->group(function(){
//         Route::get('/', function(){
//             return 'Danh sách sản phẩm';
//         });
        
//         Route::get('add', function(){
//             return 'Thêm sản phẩm';
//         });

//         Route::get('edit', function(){
//             return 'Sửa sản phẩm';
//         });

//         Route::get('delete', function(){
//             return 'Xóa sản phẩm';
//         });
//     });
// });

// Route::get('/', function(){
//     return view('home');
// });

// Route::prefix('admin')->group(function(){
    // Route::get('1/{id?}', function($id=null){
    //     $content = 'Phuong thuc get cua path /1 với tham số: ';
    //     $content .='id='.$id;
    //     return $content;
    // });

    // Route::get('tin-tuc/{slug?}-{id?}', function($slug=null, $id=null){
    //     $content = 'Phuong thuc get cua path /1 với tham số: ';
    //     $content .='id='.$id.'<br/>';
    //     $content .='slug='.$slug.'<br/>';
    //     return $content;
    // });

    // Route::get('tin-tuc/{slug}-{id}.html', function($slug=null, $id=null){
    //     $content = 'Phuong thuc get cua path /1 với tham số: ';
    //     $content .='id='.$id.'<br/>';
    //     $content .='slug='.$slug;
    //     return $content;
    // })->where(
    //     [
    //         'slug'=>'.+',
    //         'id'=>'[0-9]+'
    //     ]
    // );

    // Route::get('tin-tuc/{id?}/{slug?}.html', function($id=null, $slug=null){
    //     $content = 'Phuong thuc get cua path /1 với tham số: ';
    //     $content .='id='.$id.'<br/>';
    //     $content .='slug='.$slug;
    //     return $content;
    // })->where(
    //     [
    //         'slug'=>'.+',
    //         'id'=>'[0-9]+'
    //     ]
    // )->name('admin.tintuc');

    // Route::get('show-form', function(){
    // return view('form');
    // })->name('admin.show-form');
// });

// Route::get('/', function(){
//     return view('home');
// })->name('home');

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/tin-tuc', 'App\Http\Controllers\HomeController@getNews')->name('news');
Route::get('/chuyen-muc/{id}', [HomeController::class, 'getCategories'])->name('chuyenmuc');

Route::prefix('admin')->group(function(){
    Route::prefix('products')->middleware('CheckPermission')->group(function(){
        Route::get('/', function(){
            return 'Danh sách sản phẩm';
        });
        
        Route::get('add', function(){
            return 'Thêm sản phẩm';
        });

        Route::get('edit', function(){
            return 'Sửa sản phẩm';
        });

        Route::get('delete', function(){
            return 'Xóa sản phẩm';
        });
    });
});