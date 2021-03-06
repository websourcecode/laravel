@extends('app')
@section('header_styles')
<style>
    body {
        font-family: 'Open Sans', sans-serif;
        background: url('images/background.png')no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        height: 100%;
        font-size: 14px;
        line-height: 1.42857143;
        color: #333;
    }
    .form-group label{float: left; font-weight: bold; color: #000000; width:25%; text-align: left;}
    .omb_loginForm .form-group  input {height: 40px; width:65%}
</style>

@stop
@section('content')
    <div class="container">
        <div class="row">
            <div class="box">
                <h2 class="text-center text-primary">Login</h2>
                <br>
                <!-- Notifications -->

                <form action="{!! URL::route('user.doLogin') !!}" class="omb_loginForm" autocomplete="off" method="POST" style="margin-bottom: 60px;">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group ">
                        <label for="userId">UserID</label>
                        <input type="text" class="form-control" name="uid" placeholder="UserID" required>
                    </div>
                    <span class="help-block"></span>
                    <div class="form-group ">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <span class="help-block"></span>
                    <input type="submit" class="btn btn-block btn-primary" value="Login" style="margin-top: 20px;;">
                    <div class="checkbox pull-left">
                    <label> <input type="checkbox" value="1" name="remember" id="remember"> Keep me logged in</label>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('footer_scripts')

@stop

@stop
