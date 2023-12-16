@extends('Bank.banklayout')
@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card"  style="margin-top:50px; width:400px; font-weight:bold; background-color:#ffffff; border:1px solid black;opacity:0.8;">
                    <h3 class="card-header text-center">Transfer Money</h3>
                    <div class="card-body" >
                    @if($message=Session::get('success'))
    <div class="alert alert-success alert-black">
{{$message}}
    </div>
@endif
                        <form method="GET" action="{{ route('transfer.bank') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="email" placeholder="Enter Email" id="form" class="form-control" name="email"
                                    required autofocus style="font-weight:bold;">
                                @if ($errors->has('amount'))
                                <span class="text-danger">{{ $errors->first('amount') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Amount</label>
                                <input type="number" placeholder="Enter Amount to deposit" id="form" class="form-control" name="amount"
                                    required autofocus style="font-weight:bold;">
                                @if ($errors->has('amount'))
                                <span class="text-danger">{{ $errors->first('amount') }}</span>
                                @endif
                            </div>
                            <input type="hidden" name="type" value="Debit">
                           
                            <button type="submit" class="btn btn-dark btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection