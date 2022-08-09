<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Action index()
    public function index(){
        $title = 'Học lập trình web';
        $content = 'Học lập trình Laravel';
        // $dataview = [
        //     'title' => $title,
        //     'content' => $content
        // ];
        // return view('home1' , $dataview);
        return view('home1' , compact('title', 'content'));
        //$contentView = view('home1');
        //$contentView = $contentView->render();
        //$contentView = view('home1')->render();
        //dd($contentView);
        //return $contentView;
    }

    //Action getNews()
    public function getNews(){
        return 'Danh sách tin tức';
    }

    //Action getCategories()
    public function getCategories($id){
        return 'Chuyên mục: '.$id;
    }

    public function getProductDetail($id){
        return view('clients.products.detail', compact('id'));
    }
}
