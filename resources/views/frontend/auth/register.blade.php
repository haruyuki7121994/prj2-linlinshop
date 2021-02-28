@extends('frontend.layout.master')
@section('content')
    <section>
        <div class="container">
            <br>

            <h2 style="text-align: center; font-weight: bolder; font-size: 3em;">Sign Up</h2>
            <div class="col-md-6 col-xs-1" style="margin: auto;">
                <div class="borderlogin">
                    <fieldset>
                        @include('cms.layout.message')
                        <form action="{{route('auth.register.verify')}}" method="post">
                            @csrf
                            <label style="text-align: center;" for="email">Email</label><br>
                            <input class="form-control" type="email" name="email" id="txtMail" value="{{old('email')}}" placeholder="Email" required>
                            <br>
                            <label for="Password">Password</label><br>
                            <input class="form-control" type="password" name="password" id="txtpass" value="{{old('password')}}" placeholder="Password"
                                   required> <br>
                            <label for="Password">Name</label><br>
                            <input class="form-control" type="text" name="name" id="name" value="{{old('name')}}" placeholder="Name"
                                   required> <br>

                            <label for="Password">Phone Number</label><br>
                            <input class="form-control" type="tel" name="mobile" value="{{old('mobile')}}" id="phone" placeholder="Phone"
                                   required> <br>

                            <label for="Password">Province / City</label><br>
                            <select class="form-control" name="province_id" id="">
                                <option value="">Please select</option>
                                @foreach($provinces as $province)
                                    <option {{old('province') == $province->id ? 'selected' : ''}} value="{{$province->id}}">{{$province->name}}</option>
                                @endforeach
                            </select><br>

                            <label for="Password">Address</label><br>
                            <input class="form-control" type="text" value="{{old('address')}}" name="address" id="phone" placeholder="Address"
                                   required> <br>

                            <input class="btn btn-danger" type="submit" name="btnokk" value="Submit" id="Submit">
                            <input class="btn btn-primary" type="reset" value="Reset">

                        </form>
                    </fieldset>
                </div>
            </div>
            <br>
            <br>
        </div>
    </section>
@endsection
