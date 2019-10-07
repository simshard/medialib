@extends('layouts.app')
@section('content')
<div class="container">
<div class="col-md-8 blog-main">
<h1>Create product</h1>
@include('layouts.errors')

    <form method="POST" action="/products" enctype="multipart/form-data">
  @csrf
  @include('products.productForm')
  </form>
</div>
</div>
@endsection
