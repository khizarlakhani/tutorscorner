@extends('layouts.app')
<link href="{{URL::asset('css/style1.css')}}" rel="stylesheet">

@section('content')
<div class="container">
        <div class="form">
            <h1>Sign Up for Free</h1>
            <form role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="field-wrap{{ $errors->has('name') ? ' has-error' : '' }}">
                        <fieldname>Name</fieldname>
                        <input id="name" type="text" name="name" style="width:100%;height:36px;padding:6px 12px;" required autofocus>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="field-wrap{{ $errors->has('email') ? ' has-error' : '' }}">
                    <fieldname>E-Mail Address</fieldname>
                        <input id="email" type="email" name="email" style="width:100%;height:36px;padding:6px 12px;" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="field-wrap{{ $errors->has('password') ? ' has-error' : '' }}">
                    <fieldname>Password</fieldname>
                        <input id="password" type="password" name="password" style="width:100%;height:36px;padding:6px 12px;" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="field-wrap">
                    <fieldname>Confirm Password</fieldname>
                        <input id="password-confirm" type="password" name="password_confirmation" style="width:100%;height:36px;padding:6px 12px;" required>
                </div>


                <button type="submit" class="button button-block">
                    Register
                </button>
            </form>
        </div>
</div>
@endsection
