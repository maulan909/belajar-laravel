@extends('layouts.admin.admin')

@section('adminContent')
    <div class="row">
        <div class="col-12 col-lg-10">
            <div class="card">
                <div class="card-body">
                    <form action="/dashboard/post" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text"
                                class="form-control @error('title')
                                is-invalid
                            @enderror"
                                id="title" name="title" placeholder="Title" value="{{ old('title') }}" autofocus required>
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text"
                                class="form-control @error('slug')
                                is-invalid
                            @enderror"
                                id="slug" name="slug" required value="{{ old('slug') }}">
                            @error('slug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select
                                class="form-select @error('category_id')
                                is-invalid
                            @enderror"
                                id="category" name="category_id" required>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $category->id == old('category_id') ? 'selected' : '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Post Image</label>
                            <div id="box-preview" style="max-height: 300px; overflow:hidden" class="d-none">
                                <img src="" class="img-preview w-100" >
                            </div>
                            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                            @error('image')
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

        title.addEventListener('change', function() {
            fetch('http://belajar-laravel.test/dashboard/post/checkslug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug);
        });

        const image = document.getElementById('image');
        const box = document.getElementById('box-preview');
        const imgPreview = document.querySelector('.img-preview');

        image.addEventListener('change', function(){
            box.classList.toggle('d-none',false);
            box.classList.toggle('mb-3',true);

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        });
    </script>
@endsection
