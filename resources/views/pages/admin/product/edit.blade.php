@extends('layouts.parent')

@section('content')
    <div class="container">
        <h5>Edit Product</h5>
        <form action="{{ route('dashboard.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-12">
                <label for="name" class="form-label">Name Product</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}">
            </div>

            <div class="col-12">
                <label for="name" class="form-label">Price Product</label>
                <input type="number" class="form-control" name="price" id="name" value="{{ $product->price }}">
            </div>

            <label class="col-sm-2 col-form-label">Select</label>
            <div class="col-sm-12">

                <select class="form-select" aria-label="Default select example" name="category_id">
                    <option selected value="{{ $product->category->id }}" selected>{{ $product->category->name }}</option>
                    <option>Pilih Categori</option>
                    @foreach ($category as $row)
                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-12">
                <textarea name="description" id="description" class="col-12">{{ $product->description }}</textarea>
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
@endsection
