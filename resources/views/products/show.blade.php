@extends('products.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 mt-4">
        <div class="d-flex align-items-center ">
            <div class="pull-right me-2">
                <a class="btn btn-secondary" href="{{ route('products.index') }}"> Back</a>
            </div>
            <h2 class="m-0">Detail: {{ $product->name }}</h2>
        </div>
    </div>
</div>

<div class="row">
    <form class="row g-3">
        <div class="col-md-12">
            <label class="form-label d-block">Image</label>
            <img src="/storage/{{$product->image}}" width="130">
        </div>

        <div class="col-md-8">
            <label class="form-label">Title</label>
            <input readonly name="name" value="{{ $product->name }}" type="text" class="form-control">
        </div>

        <div class="col-md-4">
            <label class="form-label">Price</label>
            <div class="input-group">
                <input readonly name="price" type="number" value="{{ $product->price }}" class="form-control">
                <div class="input-group-text">$</div>
            </div>
        </div>

        <div class="col-md-12">
            <label class="form-label">Description</label>
            <textarea readonly name="detail" rows="5" class="form-control">{{ $product->detail }}</textarea>
        </div>
    </form>
</div>
@endsection