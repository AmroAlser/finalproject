@extends('layouts.home')
@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="section-heading">
                <h2>Latest Products</h2>
                <a href="{{url('/products')}}">view all products <i class="fa fa-angle-right"></i></a>
                <form action="/search" method="post" class="from-inline" style="float: right; padding:10px;">
                    @csrf
                    <input class="from-control" type="search" name="search" placeholder="Search">
                    <input class="btn btn-success" type="submit" value="search">
                </form>
            </div>
        </div>
        @foreach ($data as $product)
            <div class="col-md-4">
                <div class="product-item">
                    <a href="#"><img height="300" width="150" src="{{ asset('productimage/' . $product->image) }}" alt=""></a>
                    <div class="down-content">
                        <a href="#">
                            <h4>{{ $product->title }}</h4>
                        </a>
                        <h6>${{ $product->price }}</h6>
                        <p>{{ $product->description }}</p>
                        <form action="/addcart/{{ $product->id }}" method="post">
                            @csrf
                            <input type="number" value="1" min="1" class="from-control" style="width:100px " name="num">
                            <br>
                            <br>
                            <input class="btn btn-primary" type="submit" value="Add Cart">
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        @if (method_exists($data, 'links'))
            <div class="d-flex justify-content-center">
                {{ $data->links() }}

            </div>
        @endif
    @endsection
