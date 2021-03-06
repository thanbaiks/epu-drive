@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Đăng nhập hệ thống</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{$errors->has('password') ? ' has-error' : ''}}">
                            <label class="col-md-4 control-label">Mật khẩu</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Ghi nhớ
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Đăng nhập
                                </button>
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Quên mật khẩu?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Tài khoản demo
                </div>
                <table class="table table-bordered table-hover table-centered should-copy">
                    <tr>
                        <th>&nbsp;</th>
                        <th>Email</th>
                        <th>Mật khẩu</th>
                    </tr>
                    <tr>
                        <th>Quản trị viên</th>
                        <td>admin@epu.edu.vn</td>
                        <td>123456</td>
                    </tr>
                    <tr>
                        <th>Giảng viên</th>
                        <td>giangvien@epu.edu.vn</td>
                        <td>123456</td>
                    </tr>
                    <tr>
                        <th>Sinh viên</th>
                        <td>sinhvien@epu.edu.vn</td>
                        <td>123456</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection