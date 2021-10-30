@extends('layouts.admin.admin')

@section('adminContent')
    <div class="row">
        <div class="col-12">
            <a href="/dashboard/category/create" class="btn btn-primary btn-sm">Add Category</a>
        </div>
    </div>
    <div class="row my-2">
        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <a href="/dashboard/category/{{ $category->slug }}" class="btn btn-info btn-sm m-2"><i class="bi bi-eye"></i></a>
                                            <a href="/dashboard/category/{{ $category->slug }}/edit" class="btn btn-warning btn-sm m-2"><i class="bi bi-pencil"></i></a>
                                            <form action="/dashboard/category/{{ $category->slug }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm m-2" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-end">
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection