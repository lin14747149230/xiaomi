@extends('admin.index')

@section('title')
<h3 class="page-header"><i class="fa fa-laptop"></i>用户添加</h3>
@endsection

@section('content') 
<div class="row">
 	<section class="panel">
        <div class="panel-body">
            <form class="form-horizontal" role="form" action="/user" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-lg-2 control-label">用户名</label>
                    <div class="col-lg-10">
                        <input type="username" class="form-control" name="username" id="inputusername" placeholder="admin">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码</label>
                    <div class="col-lg-10">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">确认密码</label>
                    <div class="col-lg-10">
                        <input type="password" class="form-control" placeholder="repassword" name="repassword">
                    </div>
                </div>
                <div class="form-group">
                  	<label class="col-lg-2 control-label">邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱</label>
                  	<div class="col-lg-10">
                      	<input type="email" class="form-control" placeholder="Email" name="email">
                  	</div>
              	</div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">头&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;像</label>
                    <div class="col-lg-10">
                        <input type="file" class="form-control" id="inputEmail" name="profile">
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


















