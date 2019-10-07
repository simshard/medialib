@extends('layouts.app')
@section('content')
<div class="container">
   <div class=" py-3 mb-3">
    <a href="/products/create" class="btn btn-primary  ml-6 my-2"> Add New Product </a>
   </div>

    @foreach($products as $product)
        <div>
        <h1>{{$product->name}}</h1>
        <p><img src="{{$product->getFirstMediaUrl('images')}}" />
            {{$product->description}}</p>
        <hr>
        </div>

      @endforeach


</div>
@endsection
