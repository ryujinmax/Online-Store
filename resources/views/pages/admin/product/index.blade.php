@extends('layouts.parent')

@section('content')
    @extends('layouts.parent')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"></h5>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('dashboard.product.create') }}" class="btn btn-primary">
                        Create Product
                    </a>
                </div>

                <!-- Table with stripped rows -->
                <table class="table table-striped datatable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Category</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($product as $row)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $row->name }}</td>
                                <td>Rp. {{ number_format($row->price) }}</td>
                                <td>{{ $row->category->name }}</td>
                                <td>
                                    {!! Str::limit($row->description, 20) !!}
                                </td>
                                <td>
                                    <div class="d-sm-flex flex-column gap-2">
                                        <a href="{{ route('dashboard.product.gallery.index', $row->id) }}" class="btn btn-success">
                                            <i class="bi bi-camera"></i>
                                            Gallery
                                        </a>
                                        <a href="{{ route('dashboard.product.show', $row->id) }}" class="btn btn-info">
                                            <i class="bi bi-eye"></i>
                                            Show
                                        </a>
                                        <a href="{{ route('dashboard.product.edit', $row->id) }}" class="btn btn-warning">
                                            <i class="bi bi-pencil"></i>
                                            Edit
                                        </a>

                                        @csrf
                                        @method('DELETE')
                                        <form action="{{ route('dashboard.product.destroy', $row->id) }}" method="post">
                                            <button type="submit" class="btn btn-danger">
                                                <i class="btn btn-trash"></i>
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Data Kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->

            </div>
        </div>
    </div>
@endsection

@endsection
