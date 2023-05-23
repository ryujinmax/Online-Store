@extends('layouts.parent')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Show Category</h5>
                @csrf
                @method('POST')
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">Name Category</label>
                    <input type="text" class="form-control" name="name" id="inputNanme4" value="{{ $category->name }}" disabled>
                </div>
                <div class="text-end">
                    <a href="{{ route('dashboard.category.show', $category->id) }}">
                    <i class="btn btn-arrow-left"></i>
                    Back
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
