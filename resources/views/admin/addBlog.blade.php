@push('styles')
    <!--  summernote -->
    {{--<link href="{{asset('public/admin/assets/summernote/dist/summernote.css')}}" rel="stylesheet">--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
@endpush
@extends('admin.master')
@section('title', 'Blog Add')
@section('content')

    <div class="col-lg-12">
        <section class="card">
            <header class="card-header">
                Add New Blog
                @if($errors->any())
                    <small id="cName" class="form-text text-danger">
                        @foreach($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </small>
                @endif
            </header>
            <div class="card-body">
                <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="inputCategory" class="col-sm-2 col-form-label">Category Name:</label>
                        <div class="col-sm-10">
                            <select name="categoryId" id="inputCategory" class="form-control">
                                <option value="">Select Category</option>
                                @foreach($category as $categories)
                                    <option value="{{ $categories->id }}">{{ $categories->categoryName }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputTitle" class="col-sm-2 col-form-label">Blog Title</label>
                        <div class="col-sm-10">
                            <input type="text" name="blog_title" class="form-control" id="inputTitle" placeholder="blog title.....  " required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="summernote" class="col-sm-2 col-form-label">Blog Content</label>
                        <div class="col-sm-10">
                            <textarea name="blog_content" class="editordata form-control" id="summernote" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputImage" class="col-sm-2 col-form-label">Blog Photo</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="photo" id="inputImage" required>
                        </div>
                    </div>

                    <fieldset class="form-group">
                        <div class="row">
                            <label class="col-form-label col-sm-2 pt-0">Status:</label>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="1" checked="">
                                    <label class="form-check-label" for="gridRadios1">
                                        Active
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="0">
                                    <label class="form-check-label" for="gridRadios2">
                                        Inactive
                                    </label>
                                </div>

                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" name="add_blog" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

    </div>

@endsection
@push('scripts')
    <!--summernote-->
    {{--<script src="{{ asset('public/admin/assets/summernote/dist/summernote.min.js')}}"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
    <script>
        $('#summernote').summernote({
            placeholder: 'Blog content here',
            tabsize: 2,
            height: 100
        });
    </script>
@endpush
