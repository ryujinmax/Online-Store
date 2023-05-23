@extends('layouts.parent')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Update Category</h5>
                <form class="row g-3" action="{{ route('dashboard.category.edit', $category->id) }}" method="put" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Name Category</label>
                        <input type="text" class="form-control" name="name" id="inputNanme4" value="{{ $category->name }}">
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
