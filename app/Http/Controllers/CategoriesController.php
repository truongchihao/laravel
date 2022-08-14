<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function _construct(Request $request){
        /*
         Nếu là trang danh sách chuyên mục => Hiển thị ra dòng chữ:  Xin chào
         */
        // if($request->is('categories')){
        //     echo '<h3>xin chào</h3>';
        // }
    }

    //Hiển thị danh sách chuyên mục (Phương thức GET)
    public function index(Request $request){
        // if(isset($_GET['id'])){
        //     echo $_GET['id'];
        // }
        //dd($request);

        // $alldata = $request->all();
        // echo $alldata['id'];
        // dd($alldata);

        // $path =$request->path();
        // echo $path;

        // $url = $request->url();
        // echo $url;

        // $fullurl = $request->fullurl();
        // echo $fullurl;

        // $method = $request->method();
        // echo $method;

        // if($request->ismethod('GET')){
        //     echo 'Phương thức GET';
        // }

        // $ip = $request->ip();
        // echo 'IP là: '.$ip;

        // $server = $request->server();
        // dd($server);
        //print_r($server);

        // $header = $request->header();
        // dd($header);

        // $id = $request->input('id');
        // echo $id;

        // $input = $request->input();
        // dd($input);

        // $id = $request->input('id.1');
        // dd($id)d;

        // $id = $request->input('id');
        // dd($id);

        // $id = $request->input('id.*.name');
        // dd($id);

        // $id = $request->id;
        // $id = $request->name;
        // dd($id);

        // dd(request()->id);

        $id = request('id', '0');
        dd($id);
        return view('clients/categories/list');
    }

    //Lấy ra 1 chuyên mục theo id (Phương thức GET)
    public function getCategory($id){
        return view('clients/categories/edit');

    }

    //Cập nhật 1 chuyên mục (Phương thức POST)
    public function updateCategory($id){
        return 'Submit sửa chuyên mục: '.$id;

    }

    ///Show form thêm dữ liệu (Phương thức GET)
    public function addCategory(Request $request){

        // $path =$request->path();
        // echo $path;

        // $url = $request->url();
        // echo $url;

        // $fullurl = $request->fullurl();
        // echo $fullurl;

        // $method = $request->method();
        // echo $method;

        return view('clients/categories/add');
    }

    //Thêm dữ liệu vào chuyên mục (Phương thức POST)
    public function handleAddCategory(Request $request){

        // $alldata = $request->all();
        // dd($alldata);
        //print_r($_POST);
        //return redirect(route('categories.add'));
        //return 'Submit thêm chuyên mục';

        if($request->ismethod('POST')){
            echo 'Phương thức POST';
        }

    }

    //Xóa dữ liệu (Phương thức Delete)
    public function deleteCategory($id){
        return 'Submit xóa chuyên mục: '.$id;

    }



}
