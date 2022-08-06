<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function _construct(){

    }

    //Hiển thị danh sách chuyên mục (Phương thức GET)
    public function index(){
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
    public function addCategory(){
        return view('clients/categories/add');
    }

    //Thêm dữ liệu vào chuyên mục (Phương thức POST)
    public function handleAddCategory(){
        //return redirect(route('categories.add'));
        return 'Submit thêm chuyên mục';

    }

    //Xóa dữ liệu (Phương thức Delete)
    public function deleteCategory($id){
        return 'Submit xóa chuyên mục: '.$id;

    }



}
