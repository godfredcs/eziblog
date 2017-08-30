@extends('layouts.app')

@section('title')
    Log in
@endsection

@section('content')
<div class="wrapper">
<section id="login-form">
    <div class="row">
        <div class="col-xs-10 col-sm-4 col-md-4 col-xs-offset-1 col-sm-offset-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #0A3658 !important;">
                    <div class="form-group">
                        <h3 class="text-center" style="color: #fff;">LOG IN</h3>
                    </div>
                </div>
                <div class="panel-body">
                    <form action="{{ route('login') }}" method="POST" role="form">
                        {{ csrf_field() }}       

                        <div class="form-group">
                            <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Email" autofocus required>
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-8 col-sm-6 col-md-6 col-xs-offset-2 col-sm-offset-3 col-md-offset-3">
                                    <input type="submit" value="Submit" class="btn btn-block btn-default">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>      
        </div>
    </div>
</section>
</div>
@endsection

