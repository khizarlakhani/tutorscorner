@extends('layouts.app')
<link href="{{URL::asset('css/style1.css')}}" rel="stylesheet">
<script type="text/javascript" src="{{ asset('js/index1.js') }}"></script>
@section('content')
<div class="container">
        <div id="login" class="form">
            <h1>Welcome Back!</h1>
            <form role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="field-wrap{{ $errors->has('email') ? ' has-error' : '' }}">
                        E-Mail Address<span class="req">*</span>
                        <input id="email" type="email"  name="email" style="width:100%;height:36px;padding:6px 12px;" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="field-wrap{{ $errors->has('password') ? ' has-error' : '' }}">
                        Password<span class="req">*</span>
                        <input id="password" type="password" name="password" style="width:100%;height:36px;padding:6px 12px;" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>

                <a class="forgot" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
                <button class="button button-block" type="submit" class="btn btn-primary">
                    Login
                </button>

            </form>
        </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

@endsection
