<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class IndexController extends Controller
{
    public function index()
    {
    	//遍历一级分类
    	$cat = DB::table('cates')->where('pid','0')->get();
    	$goods = DB::table('goods')->get();
    	foreach ($cat as $k => $v) {
    		$v->goods = DB::table('goods')->where('fl_id', $v->id)->get();
            foreach ($v->goods as $a => $b) {
                $b->goods_pic = DB::table('goods_pic')->where('goods_id',$b->goods_id)->get();
            }
    	}
         //dd($cat);
    	return view('home.index', compact('cat'));
    }

}
