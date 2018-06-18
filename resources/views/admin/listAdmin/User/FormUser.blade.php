@extends('admin.layoutAdmin.master')
@section('title', 'Create User')
@section('style')

@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create User</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-primary">
                <div class="panel-heading text-capitalize">
                    đăng ký thành viên
                </div>
                <div class="panel-body">
                    <form id="add-user" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-right">Fullname</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="fullname" placeholder="Nhập tên đầy đủ"  required="required">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-right">Phone</label>
                            <div class="col-md-8">
                                <input type="number" class="form-control" id="phone" placeholder="Nhập số điện thoại" required="required" pattern="{8,14}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-right">Password</label>
                            <div class="col-md-8">
                                <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" required="required">
                                <p style="color:red;display:none;" class="error errorPassword"></p>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-right">Email</label>
                            <div class="col-md-8">
                                <input type="email" class="form-control" id="email" placeholder="Nhập email" required="required">
                            </div>
                        </div>
                        {{--<div class="form-group row">--}}
                        {{--<label class="col-md-2 col-form-label text-right">Salt</label>--}}
                        {{--<div class="col-md-8">--}}
                        {{--<input type="text" class="form-control" id="salt" placeholder="Nhập tên đầy đủ" >--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-right" >Gender</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="gender"
                                       placeholder="Nhập giới tính của bạn" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-right">Avatar</label>
                            <div class="col-md-8">
                                <input type="file" id="avatar">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label></label>
                            </div>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-default">Submit</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('vendor-admin/datatables/js/jquery.dataTables.min.js')}}"></script>

    <script src="{{asset('vendor-admin/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>

    <script src="{{asset('vendor-admin/datatables-responsive/dataTables.responsive.js')}}"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>

    <script src="{{asset('vendor-admin/datatables-responsive/dataTables.responsive.js')}}"></script>
    <script src="{{asset('js/admin/formUser.js')}}"></script>
    <script>

        </script>

@endsection