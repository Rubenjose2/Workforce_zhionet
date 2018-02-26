@extends('layouts.simple')

@section('content')
<div class="container-fluid">
        <div class="panel-body">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <!-- Login container -->
            <div class=" col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <img src="{{asset('/img/zhionet.png')}}" alt="logo" class="login-image-container">
                        <h3 class="panel-title login-title text-center">WorkForce</h3>
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('password.email') }}" method="POST">
                            {{csrf_field()}}
                            <legend>Reset for password Information</legend>
                            <div class="form-group form-group-default{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label>E-Mail Address</label>

                                <div>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required> @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class=" col-md-4 col-lg-4">
                </div>
            </div>
        </div>
    @endsection