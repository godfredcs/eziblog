@extends('layouts.app')

@section('title')
    Sign up
@endsection

@section('content')
<div class="wrapper">
<section id="register-form">  
    <div class="row">
        <div class="col-xs-10 col-sm-4 col-md-4 col-xs-offset-1 col-sm-offset-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #0A3658 !important;">
                    <div class="form-group">
                        <h3 class="text-center" style="color: #fff;">CREATE ACCOUNT</h3>
                    </div>
                </div>
                <div class="panel-body">
                    <form action="{{ route('register') }}" method="POST" role="form">
                        {{ csrf_field() }}
                  
                        <div class="form-group">
                            <input type="text" name="firstname" id="firstname" value="{{ old('firstname') }}" placeholder="Firstname" class="form-control" autofocus required>
                        </div>

                        <div class="form-group">
                            <input type="text" name="lastname" id="lastname" value="{{ old('lastname') }}" placeholder="Lastname" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <input type="text" name="othernames" id="othernames" value="{{ old('othernames') }}" placeholder="Other names" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" id="password" value="{{ old('password') }}" placeholder="Password" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <input type="password" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-8 col-sm-6 col-md-6 col-xs-offset-2 col-sm-offset-3 col-md-offset-3">                
                                    <input type="submit" name="submit" value="Submit" class="btn btn-block btn-default">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    <script type="text/javascript">
        $('#login-link').on('click' , function(e) {
            e.preventDefault();
            
            alert('clicked');
        });
    </script>
</section>
</div>
@endsection