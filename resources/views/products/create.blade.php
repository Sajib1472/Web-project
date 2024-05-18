@extends('layouts.app')
  
@section('title', 'Create Product')
  
@section('contents')
    <h1 class="mb-0">Add Product</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Ship Name</label>
                <input type="text" name="ship_name" class="form-control" placeholder="Ship Name" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Company Name</label>
                <input type="text" name="company" class="form-control" placeholder="Company Name" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Location</label>
                <input type="text" name="location" class="form-control" placeholder="Location" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Company Email</label>
                <input type="text" name="email" class="form-control" placeholder="Company Email" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" ></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control" placeholder="Price" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Image</label>
                {{-- <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->title }} Image" width="300" height="200"> --}}
                <input type="file" name="image" class="form-control" placeholder="Image" >
            </div>
        </div>
        {{-- <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="Price">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="product_code" class="form-control" placeholder="Product Code">
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Descriptoin"></textarea>
            </div>
        </div> --}}
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection