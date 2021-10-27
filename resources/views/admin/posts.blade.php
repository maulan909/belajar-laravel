@extends('layouts.admin.admin')

@section('adminContent')
    <div class="col-12 col-xl-10">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->category->name }}</td>
                                    <td>
                                        <a href="/dashboard/post/{{ $post->slug }}" class="btn btn-info btn-sm m-2"><i class="bi bi-eye"></i></a>
                                        <a href="#" class="btn btn-warning btn-sm m-2"><i class="bi bi-pencil"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm m-2"><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection