@extends('layouts.layout')
@section('sidebar')
@endsection
@section('content')

    <div class="row">
        
        <div class="col s12 m9">
            <div class="card blue-grey darken-1" style="margin-top: 20%">
                <div id="crd" class="card-content white-text red accent-4">
                    <div class="row">
                        <div class="col m2 offset-m5 ">
                            <i class="material-icons" style="font-size: 140px;">account_circle</i>
                            <span class="card-title card1 card2">Login</span>
                        </div>
                    </div>
                </div>
                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                    <div class="card-content white-text grey darken-2">


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="mailUtilisateur" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-action grey darken-2">


                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <button type="submit" class="btn btn1">
                                    Login
                                </button>
                            </div>
                        </div>
                    
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
