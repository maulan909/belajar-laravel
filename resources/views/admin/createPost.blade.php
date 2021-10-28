@extends('layouts.admin.admin')

@section('adminContent')
    <div class="row">
        <div class="col-12 col-lg-10">
            <div class="card">
                <div class="card-body">
                    <form action="/dashboard/post" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title')
                                is-invalid
                            @enderror" id="title" name="title" placeholder="Title" value="{{ old('title') }}" autofocus required>
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control @error('slug')
                                is-invalid
                            @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
                            @error('slug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select @error('category_id')
                                is-invalid
                            @enderror" id="category" name="category_id" required>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ ($category->id == old('category_id')) ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Body</label>
                            <input id="body" type="hidden" name="body" required value="{{ old('body') }}">
                            <trix-editor input="body"></trix-editor>
                            @error('body')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Publish</button>
                            <button type="submit" class="btn btn-secondary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        const title = document.getElementById('title');
        const slug = document.getElementById('slug');

        title.addEventListener('change', function(){
            fetch('http://belajar-laravel.test/dashboard/post/checkslug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug);
        });
    </script>
@endsection