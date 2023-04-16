@extends('products.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 mt-4">
        <div class="d-flex align-items-center ">
            <div class="pull-right me-2">
                <a class="btn btn-secondary" href="{{ route('products.index') }}"> Back</a>
            </div>
            <h2 class="m-0">Edit: {{ $product->name }}</h2>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="mt-4">
    <form class="row g-3" method="POST" action="{{ route('products.update',$product->id) }}">
        @csrf
        @method('PUT')
        <div class="col-md-12">
            <label class="form-label">Image</label>
            <input   name="image" value="{{ $product->image }}" type="file" accept="image/png, image/gif, image/jpeg" class="form-control">
            <img src="/storage/{{$product->image}}" width="130">
        </div>

        <div class="col-md-8">
            <label class="form-label">Title</label>
            <input required name="name" value="{{ $product->name }}" type="text" class="form-control">
        </div>

        <div class="col-md-4">
            <label class="form-label">Price</label>
            <div class="input-group">
                <input required name="price" type="number" value="{{ $product->price }}" class="form-control">
                <div class="input-group-text">$</div>
            </div>
        </div>

        <div class="col-md-12">
            <label class="form-label">Description</label>
            <textarea required name="detail" rows="5" class="form-control">{{ $product->detail }}</textarea>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary w-100">Update Menu</button>
        </div>
    </form>
</div>
@endsection