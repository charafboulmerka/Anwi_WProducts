@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!--{{ __('You are logged in!') }}-->
                    @if(Auth::user()->role == "admin")
                    <a type="button" class="btn btn-primary btn-lg btn-block col-12" href="{{url('productsApprove')}}">Approve Products</a><br><br>
                    
                    <a type="button" class="btn btn-secondary btn-lg btn-block col-12" href="{{url('productsSetFinalPrice')}}">Set Products Final Price</a><br><br>
                    
                    <a type="button" class="btn btn-success btn-lg btn-block col-12" href="{{url('productsResults')}}">View Products Results</a><br><br>
                    @endif

                    @if(Auth::user()->role == "results")
                    <a type="button" class="btn btn-success btn-lg btn-block col-12" href="{{url('productsResults')}}">View Products Results</a><br><br>

                    <a type="button" class="btn btn-warning btn-lg btn-block col-12" href="#">JSON Result</a><br><br>
                    
                    
                    @endif
                    
                    @if(Auth::user()->role == "price")
                    <a type="button" class="btn btn-warning btn-lg btn-block col-12" href="{{url('productsSetPrice')}}">Set Products Price</a><br><br>
                    
                    <a type="button" class="btn btn-success btn-lg btn-block col-12" href="{{url('productsResults')}}">View Products Results</a><br><br>
                    @endif

                    @if(Auth::user()->role == "description")
                    <a type="button" class="btn btn-primary btn-lg btn-block col-12" href="{{url('productsSetDescription')}}">Set Products Description</a><br><br>
                    @endif

                    @if(Auth::user()->role == "picture")
                    <a type="button" class="btn btn-primary btn-lg btn-block col-12" href="{{url('productsSetPicture')}}">Set Products Picture</a><br><br>
                    <a type="button" class="btn btn-success btn-lg btn-block col-12" href="{{url('productsResults')}}">View Products Results</a><br><br>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
