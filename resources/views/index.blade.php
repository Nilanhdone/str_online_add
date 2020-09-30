@extends('layouts.mainindex')
@section('page_title', 'STR ALL')
@section('content')

<div class="space-10"></div>
<div class="space-10"></div>
<div class="space-10"></div>
<div class="space-10"></div>

<div class="container">
        <div class="card card-container">
        <div class="space-10"></div>
        <div class="center animated fadeInDown">
            <img src="{{ url('/images/amlio_logo.png') }}" width="140" />
        </div>
        <hr>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

            <form class="form-signin" method="POST" action="{{ url('/login')}}">
            {{ csrf_field() }}
                <span id="reauth-email" class="reauth-email"></span>
                <p class="input_title">Username</p>
                <input type="text" id="username" name="username" class="login_box" placeholder="Input Username" required autofocus>
                <p class="input_title">Password</p>
                <input type="password" id="password" name="password" class="login_box" placeholder="Input Password" required>
                <div id="remember" class="checkbox">
                    <label>

                    </label>
                </div>
                <button class="btn btn-lg btn-primary" type="submit">Login</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->


@stop
