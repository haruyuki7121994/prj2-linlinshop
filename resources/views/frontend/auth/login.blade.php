@extends('frontend.layout.master')
@section('content')
    <section>
        <div class="container">
            <br><br>
            <legend style="text-align: center; font-weight: bolder; font-size: 3em; font-family: Verdana, Geneva, Tahoma, sans-serif;">LOGIN</legend>
            <div class="borderlogin">
                @include('cms.layout.message')
                <form method="post" method="post" action="{{route('auth.login.authenticate')}}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Pass</label>
                        <input type="password" class="form-control" name="password" id="pass" placeholder="Enter password">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" id="remember" name="remember"> Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-danger">Submit</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </form>
            </div>
            <br><br>
        </div>
        <br><br>
    </section>
@endsection
