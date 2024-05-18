@extends('layouts.app')
  
@section('title', 'Show Product')
  
@section('contents')
    <h1 class="mb-0">Detail Product</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $product->title }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Ship Name</label>
            <input type="text" name="ship_name" class="form-control" placeholder="Ship Name" value="{{ $product->ship_name }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Company Name</label>
            <input type="text" name="company" class="form-control" placeholder="Company Name" value="{{ $product->company }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Location</label>
            <input type="text" name="location" class="form-control" placeholder="Location" value="{{ $product->location }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Company Email</label>
            <input type="text" name="email" class="form-control" placeholder="Company Email" value="{{ $product->email }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $product->description }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Image</label>
            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->title }} Image" width="300" height="200">
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection