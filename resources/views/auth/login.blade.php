@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Login
                </div>
                <div class="panel-body">
                    <form action="{{ url('/login') }}" class="form-horizontal" method="POST" role="form">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" for="email">
                                E-Mail:
                            </label>
                            <div class="col-md-6">
                                <input class="form-control" id="email" name="email" placeholder="franco@gmail.com" type="email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('email') }}
                                        </strong>
                                    </span>
                                    @endif
                                </input>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" for="password">
                                Password
                            </label>
                            <div class="col-md-6">
                                <input class="form-control" id="password" name="password" type="password">
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('password') }}
                                        </strong>
                                    </span>
                                    @endif
                                </input>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox">
                                            Recordar
                                        </input>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-btn fa-sign-in">
                                    </i>
                                    Acceder
                                </button>
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Olvidaste tu password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
