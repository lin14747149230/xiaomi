@extends('admin.index')

@section('title')
<h3 class="page-header"><i class="fa fa-laptop"></i>详情添加</h3>
@endsection

@section('content') 
<div class="row">
 	<section class="panel">
        <div class="panel-body">
            <form class="form-horizontal" role="form" action="/xq" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-lg-2 control-label">详情标题</label>
                    <div class="col-lg-10">
                        <input class="form-control" name="tit">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">图片文字</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">图&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;片</label>
                    <div class="col-lg-10">
                        <input type="file" class="form-control" name="photo">
                    </div>
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
@endsection 


















