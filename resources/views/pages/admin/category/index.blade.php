@extends('layouts.parent')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Table with stripped rows</h5>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('dashboard.category.create') }}" class="btn btn-primary">
                        Create
                    </a>
                </div>

                <!-- Table with stripped rows -->
                <table class="table table-striped datatable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($category as $row)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->slug }}</td>
                                <td>
                                    <a href="{{ route('dashboard.category.edit', $row->id) }}" class="btn btn-warning mb-2">
                                        <i class="bi bi-pencil"></i>
                                        Edit
                                    </a>
                                    <a href="{{ route('dashboard.category.show', $row->id) }}" class="btn btn-info mb-2">
                                        <i class="bi bi-eye"></i>
                                        Show
                                    </a>
                                    <form action="{{ route('dashboard.category.destroy', $row->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="bi bi-trash">
                                                Delete
                                            </i>
                                        </button>
                                    </form>
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
