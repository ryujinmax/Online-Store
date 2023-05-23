@extends('layouts.parent')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Create Category</h5>
                <form class="row g-3" action="{{ route('dashboard.product.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Name Product</label>
                        <input type="text" class="form-control" name="name" id="inputNanme4"
                            value="{{ old('name') }}">

                        <label for="inputNanme4" class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" id="inputNanme4"
                            value="{{ old('price') }}">

                        <label class="col-sm-2 col-form-label">Select</label>
                        <div class="col-sm-12">

                            <select class="form-select" aria-label="Default select example" name="category_id">
                                <option selected>Pilih Category</option>
                                @foreach ($category as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="col-12">
                        <textarea name="description" id="description" class="col-12"></textarea>
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
