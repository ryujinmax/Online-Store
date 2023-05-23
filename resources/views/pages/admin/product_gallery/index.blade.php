@extends('layouts.parent')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Product Gallery {{ $product->name }}</h5>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('dashboard.product.gallery.create', $product->id) }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i>
                        Back
                    </a>
                    <a href="" class="btn btn-primary ms-1">
                        <i class="bi bi-plus"></i>
                        Create Gallery
                    </a>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $row)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>Image</td>
                                <td>Action</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Data Kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
