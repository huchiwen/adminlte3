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

                        <form action="{{route('admin.store')}}" class="form-horizontal" method="post">
                            {!! csrf_field() !!}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">用户名:</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="username" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="hr-line-dashed m-t-sm m-b-sm"></div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">密码:</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="password" placeholder="" type="password">
                                    </div>
                                </div>
                                <div class="hr-line-dashed m-t-sm m-b-sm"></div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">头像:</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="avatr" type="file">
                                    </div>
                                </div>
                                <div class="hr-line-dashed m-t-sm m-b-sm"></div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">所属角色:</label>
                                    <div class="form-check">
                                        <input type="checkbox" name="role[]" class="form-check-input" id="Check1">
                                        <label class="form-check-label" for="Check1">&nbsp;超级管理员</label>
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" name="role[]" class="form-check-input" id="Check2">
                                        <label class="form-check-label" for="Check2">&nbsp;管理员</label>
                                    </div>
                                    <div class="hr-line-dashed m-t-sm m-b-sm"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">状态：</label>
                                        <div class="input-group col-sm-1">
                                            <select class="form-control" name="status">
                                                <option value="1">正常</option>
                                                <option value="2">锁定</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed m-t-sm m-b-sm"></div>
                                    <div class="form-group">
                                        <div class="col-sm-12 col-sm-offset-2">
                                            <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i>&nbsp;保 存</button>　<button class="btn btn-white" type="reset"><i class="fa fa-repeat"></i> 重 置</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
            </div>
    </div>
@endsection