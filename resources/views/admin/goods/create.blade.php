@extends('admin.index')

@section('title')
<h3 class="page-header"><i class="fa fa-laptop"></i>商品添加</h3>
@endsection

@section('content') 
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>
<div class="row">
 	<section class="panel">
        <div class="panel-body">
            <form class="form-horizontal" role="form" action="/goods" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-lg-2 control-label">商品名称</label>
                    <div class="col-lg-10">
                        <input class="form-control" name="goods_tit">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">商品分类</label>
                    <div class="col-lg-10">
                    <select class="form-control" name="fl_id">
                        <option value="0">分类名称</option>
                        @foreach($cates as $k=>$v)
                        <option value="{{$v->id}}">{{$v->name}}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-lg-2 control-label">价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="goods_price">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">库&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;存</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="goods_kucun">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">商品图片</label>
                    <div class="col-lg-10">
                        <input type="file" class="form-control" name="pic[]" multiple>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">商品详情</label>
                    <script id="editor" name="goods_con" type="text/plain" style="width:1000px;"></script>
                </div>
                
                {{csrf_field()}}
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button type="submit" class="btn btn-danger">添加</button>
                        <button type="reset" class="btn btn-primary">重置</button>
                    </div>
                </div>
            </form>
        </div>
	</section>  
</div> 
<script>
    var ue = UE.getEditor('editor');
</script>
@endsection 


















