<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Action index()
    public function index(){
        return 'Home';
    }

    //Action getNews()
    public function getNews(){
        return 'Danh sách tin tức';
    }

    //Action getCategories()
    public function getCategories($id){
        return 'Chuyên mục: '.$id;
    } 
}
