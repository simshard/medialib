@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h5><a href="/products"> &laquo; All Products</a></h3>
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                     <h1>  {{$product->name}} </h1>
                <div><img src="{{$product->getFirstMediaUrl('images')}}" /></div>
                     <p> {{$product->description}} </p>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
