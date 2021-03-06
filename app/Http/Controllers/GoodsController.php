<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $num = $request->input('num', 10);
        $keywords = $request->input('keywords','');

        //关键字检索
        if($request->has('keywords')) {

            //列表显示
            $goods = DB::table('goods')
                ->where('username','like','%'.$keywords.'%')
                ->paginate($num);

        }else{
            //列表显示
            $goods = DB::table('goods')->paginate($num);

        }

        
        //解析模板
        return view('admin.goods.index',[
            'goods'=>$goods,
            'keywords' => $keywords,
            'num' => $num
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //读取分类信息
        $cates = DB::table('cates')->get(); 
        //分配变量 解析模板
        return view('admin.goods.create', ['cates'=>$cates]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
       $data = $request->only(['goods_tit','fl_id','goods_price','goods_kucun','goods_con']);
        
        //补时间
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['status'] =1;

        //将数据插入到商品表中
        $res = DB::table('goods')->insertGetId($data);
       
        //如果插入成功
        if($res > 0) {
        }
        if($request->hasFile('pic')){
            $images = [];
            //遍历文件上传的数组
            foreach($request->file('pic') as $k=>$v) {
                $tmp = [];
                //获取文件的后缀名
                $suffix = $v->extension();
                //创建一个新的随机名称
                $name = uniqid('img_').'.'.$suffix;
                //文件夹路径
                $dir = './uploads/'.date('Y-m-d');
                //echo $dir.'/'.$name.'.'.$suffix;die;
                //移动文件
                $v->move($dir, $name);
                //获取文件的路径
                $tmp['goods_id'] = $res;
                $tmp['pic'] = trim($dir.'/'.$name,'.');
                $images[] = $tmp;

            }
            //将图片信息插入到商品图片表中
            DB::table('goods_pic')->insert($images);
            return redirect('/goods')->with('msg','添加成功');
        }else{
            return redirect('/goods')->with('msg','添加失败');
        }
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function good ()
    {
        return view('home.goods.show');
    }
}
