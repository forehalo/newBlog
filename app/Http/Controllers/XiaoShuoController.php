<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class XiaoShuoController extends Controller
{
    public function read(Request $req)
    {
        $id = $req -> input('id');
        if(!$id) dd('无语了。');
        $title_obj = \App\Model\XiaoShuo::where('xiaoshuo_id', $id) -> select('type', 'title') -> first();
        $text = \App\Model\XiaoShuoContent::where('pid', $id) -> select('content') -> first();
        $h1 = $title_obj -> title;
        $type = $title_obj -> type;
        $h1 = $type. ' -=> '.$h1;
        $text = '<p>'.str_replace("\n", '</p><p>', $text -> content).'</p>';
        return view('xiaoshuo.read', compact('text', 'h1'));
    }
}
