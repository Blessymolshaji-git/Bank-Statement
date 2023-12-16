@extends('auth.layouts')
@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card"  style="margin-top:100px; width:400px; font-weight:bold; background-color:#ffffff; border:1px solid black;opacity:0.8;">
                    <h3 class="card-header text-center">Student Record</h3>
                    <div class="card-body" >
                    @if($message=Session::get('success'))
    <div class="alert alert-success alert-black">
{{$message}}
    </div>
@endif
                        <form method="GET" action="{{ route('create.student') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="First Name" id="form" class="form-control" name="firstname"
                                    required autofocus style="font-weight:bold;">
                                @if ($errors->has('firstname'))
                                <span class="text-danger">{{ $errors->first('firstname') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Last Name" id="form" class="form-control"
                                    name="lastname" required style="font-weight:bold;">
                                @if ($errors->has('lastname'))
                                <span class="text-danger">{{ $errors->first('lastname') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="number" placeholder="Age" id="form" class="form-control"
                                    name="age" required style="font-weight:bold;">
                                @if ($errors->has('age'))
                                <span class="text-danger">{{ $errors->first('age') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Class" id="form" class="form-control"
                                    name="class" required style="font-weight:bold;">
                                @if ($errors->has('class'))
                                <span class="text-danger">{{ $errors->first('class') }}</span>
                                @endif
                            </div>
                           
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Roll Number" id="form" class="form-control"
                                    name="rollnumber" required style="font-weight:bold;">
                                @if ($errors->has('rollnumber'))
                                <span class="text-danger">{{ $errors->first('rollnumber') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="email" placeholder="Email" id="form" class="form-control"
                                    name="email" required style="font-weight:bold;">
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Number" id="form" class="form-control"
                                    name="number" required style="font-weight:bold;">
                                @if ($errors->has('number'))
                                <span class="text-danger">{{ $errors->first('number') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Place" id="form" class="form-control"
                                    name="place" required style="font-weight:bold;">
                                @if ($errors->has('place'))
                                <span class="text-danger">{{ $errors->first('place') }}</span>
                                @endif
                            </div>
                            
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                    <a href="/list" class="btn btn-dark btn-block">Show</a>
                                    </label>
                                    <label>
                                    <button type="submit" class="btn btn-dark btn-block">Submit</button>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection