<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class SoftController extends Controller
{
    public function soft_restore()
    {
        //получения всех удаленных cтатей

        $articles = Article::withTrashed()->restore();
        dd($articles);


    }


    public function soft_delete()
    {
         $article = new Article();
        dd($article->check_author());
//        $categories = ['blabeКla', 'blabКela1', 'blaКbela2'];
//        foreach($categories as $category)
//        {
//            Article::create([
//                'text'  =>  $category,
//            ]);
//        }
//
//        $user = User::create([
//            'name'  =>  'Home Brixton Faux Leather Armchair',
//            'price' =>  199.99,
//            'email' =>  'vanwКffwfr3rfr3ia@kuee.ru',
//            'password' =>  'vafffКr3ffrr3rwwn2ia@kuwf3f.ru',
//
//        ]);
//        $categories = Article::find([2,3]); // Modren Chairs, Home Chairs
//        dd($user->articles());
//        dd(4);

       //восстановлениe удаленных статей
        $articles = Article::onlyTrashed();
        dd($articles);




    }
}
