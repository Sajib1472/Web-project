@extends('layouts.app')
  
@section('title', 'Edit Product')
  
@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $product->title }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Ship Name</label>
                <input type="text" name="ship_name" class="form-control" placeholder="Ship Name" value="{{ $product->ship_name }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Company Name</label>
                <input type="text" name="company" class="form-control" placeholder="Company Name" value="{{ $product->company }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Location</label>
                <input type="text" name="location" class="form-control" placeholder="Location" value="{{ $product->location }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Company Email</label>
                <input type="text" name="email" class="form-control" placeholder="Company Email" value="{{ $product->email }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" >{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Image</label>
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->title }} Image" width="300" height="200">
                <input type="file" name="image" class="form-control" placeholder="Image" value="{{ $product->image }}" >
            </div>
        </div>
        
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection