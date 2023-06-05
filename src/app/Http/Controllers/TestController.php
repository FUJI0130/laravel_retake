<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;


class TestController extends Controller
{
    //
    public function index()
    {
        //Eloquent
        $values = Test::all();

        //コレクション型ではなくて数字になる
        $count = Test::count();

        //Modelのインスタンスが取れる
        $first = Test::findOrFail(1);

        //getをつけないと、Eloquentでも数字でもModelのインスタンスでもない形になる
        // $whereBBB = Test::where('text','=', 'bbb');

        //getをつけるとEloquentのコレクションに変わる
        $whereBBB = Test::where('text','=', 'bbb')->get();

        dd($values,$count,$first,$whereBBB);

        // dd($values);
        return view('tests.test',compact('values'));//すぐ上にある$values（変数）を指定している
    }
}
