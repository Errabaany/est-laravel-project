@extends('products.layout')

@section('content')
<div class="row mt-4">
    @foreach ($products as $product)
    <div class="col-4">
        <div class="card" style="width: 18rem;">
            <img 
            style="height: 200px;object-fit: cover;"
            src="/storage/{{$product->image}}" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }} - <span class="link-primary"> ${{ $product->price }}</span></h5>
                <p class="card-text">
                    {{ $product->detail }}
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>

{!! $products->links() !!}

@endsection