@extends('Bank.banklayout')
@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card"  style="margin-top:50px; width:400px; font-weight:bold; background-color:#ffffff; border:1px solid black;opacity:0.8;">
                    <h3 class="card-header text-center">Welcom {{$bankuser->name}}</h3>
                    <div class="card-body" >
                    @if($message=Session::get('success'))
    <div class="alert alert-success alert-black">
{{$message}}
    </div>
@endif
                        <form method="GET" action="">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" value=" Name : {{ $bankuser->name}}" id="form" class="form-control" name=""
                                    required autofocus style="font-weight:bold;">
                                @if ($errors->has('firstname'))
                                <span class="text-danger">{{ $errors->first('firstname') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" value="Email : {{ $bankuser->email}}" id="form" class="form-control"
                                    name="" required style="font-weight:bold;">
                                @if ($errors->has('lastname'))
                                <span class="text-danger">{{ $errors->first('lastname') }}</span>
                                @endif
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection