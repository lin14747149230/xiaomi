@extends('admin.index')

@section('title')
<h3 class="page-header"><i class="fa fa-laptop"></i>用户修改</h3>
@endsection

@section('content') 
<div class="row">
 	<section class="panel">
        <div class="panel-body">
            <form class="form-horizontal" role="form" action="/user/{{$user->id}}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-lg-2 control-label">用户名</label>
                    <div class="col-lg-10">
                        <input type="username" class="form-control" name="username" value="{{$user->username}}" id="inputusername" placeholder="admin">
                    </div>
                </div>
                <div class="form-group">
                  	<label class="col-lg-2 control-label">邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱</label>
                  	<div class="col-lg-10">
                      	<input type="email" class="form-control" placeholder="Email" name="email" value="{{$user->email}}">
                  	</div>
              	</div>
                <div class="form-group">
                    <img src="{{$user->profile}}" alt="" width="600" height="300">
                    <hr>
                    <label class="col-lg-2 control-label">头&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;像</label>
                    <div class="col-lg-10">
                        <input type="file" class="form-control" id="inputEmail" name="profile">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                </div>
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button type="submit" class="btn btn-danger">更新</button>
                        <button type="reset" class="btn btn-primary">重置</button>
                    </div>
                </div>
            </form>
        </div>
	</section>  
</div> 
@endsection 


















