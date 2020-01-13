@extends('layouts.app')


@include('includes.navbar')
@section('content')

<div class="row mt-3">
    @include('includes.sidebarcart')
    <div class="col-md-9">
        <div class="card-group">
            <div class="row">
            @foreach ($products as $products)
                <div class="col-md-3">
                <div class="card mb-2">
                    <img class="img-fluid" src="{{ asset('/images/card4.jpg') }}" alt="Wala usa">
                    <div class="card-body">
                        <h4 class="card-title"> <a href="/carts/{{$products->id}}">{{$products->product_name}}</a> <span class="float-right"><strong>{{ $products->price }}</strong></span></h4>
                        <p class="lead">{{ $products->brand }}</p>
                        <!--<a href="/products/edit" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a> -->
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
