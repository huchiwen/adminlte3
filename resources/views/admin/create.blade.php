@extends('layouts.layout')
@section('content')
    <div class="row">
            <div class="col-md-12">
                    <div class="box primary">
                       <div class="box-header">
                           <h5>管理员添加</h5>
                       </div>

                        <div class="box-body">
                            <a class="btn btn-primary btn-sm" href="javascript:history.go(-1)">返回</a>
                            <a class="btn btn-primary btn-sm" href="{{route('admin.index')}}">管理员管理</a>
                        </div>

                        <div class="hr-line-dashed m-t-sm m-b-sm"></div>

                        <form action="" class="form-horizontal" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">用户名:</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="" placeholder="" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">密码:</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="" placeholder="" type="password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">头像:</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="" placeholder="" type="file">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">所属角色:</label>
                                    <label for="inputEmail3" class="input-group col-sm-2">
                                        <input type="checkbox"/>&nbsp;超级管理员
                                    </label>

                                    <label for="inputEmail3" class="input-group col-sm-2">
                                        <input type="checkbox"/>&nbsp;管理员
                                    </label>

                                </div>

                            </div>

                        </form>


                    </div>
            </div>
    </div>
@endsection