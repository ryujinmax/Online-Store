@extends('layouts.parent')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Show Product</h5>
                <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Name Product</label>
                        <input type="text" class="form-control" name="name" id="inputNanme4"
                            value="{{ $product->name }}" disa>

                        <label for="inputNanme4" class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" id="inputNanme4"
                            value="{{ $product->price }}" disabled>

                        <label for="inputNanme4" class="form-label">Category Product</label>
                        <input type="number" class="form-control" name="price" id="inputNanme4"
                            value="{{ $product->category->name }}" disabled>
                    </div>

                    <div class="col-12">
                        <textarea name="description" id="description" class="col-12" disabled>{!! $product->description !!}</textarea>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
@endsection
