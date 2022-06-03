@extends('layouts.products')
@section('contents')
    <!-- Page Content -->




    <div class="col-md-12">
        <div class="filters">
            <ul>
                <li class="active" data-filter="*"><a href="{{url('/products')}}">All Products</a> </li>
                <li data-filter=".des"><a href="{{url('/menuser')}}">Men</a></li>
                <li data-filter=".dev"><a href="{{url('/womenuser')}}">Women</a></li>
                <li data-filter=".gra"><a href="{{url('/kiduser')}}">Kids</a></li>
            </ul>
        </div>
        <form action="/searchh" method="post" class="from-inline" style="float: right; padding:10px;">
                    @csrf
                    <input class="from-control" type="search" name="search" placeholder="Search">
                    <input class="btn btn-success" type="submit" value="search">
                </form>
    </div>
    <div class="col-md-12">
        <div class="filters-content">
            <div class="row grid">
                @foreach ($data as $product)
                    <div class="col-md-4">
                        <div class="product-item">
                            <a href="#"><img height="300" width="150" src="{{ asset('productimage/' . $product->image) }}"
                                    alt=""></a>
                            <div class="down-content">
                                <a href="#">
                                    <h4>{{ $product->title }}</h4>
                                </a>
                                <h6>${{ $product->price }}</h6>
                                <p>{{ $product->description }}</p>


                            </div>
                        </div>
                    </div>
                @endforeach
                @if (method_exists($data, 'links'))
                    <div class="d-flex justify-content-center">
                        {{ $data->links() }}

                    </div>
                @endif

            </div>
        </div>
    </div>

@endsection
