@push('styles')
    <!--  summernote -->
    <link href="{{asset('public/admin/assets/summernote/dist/summernote.css')}}" rel="stylesheet">
@endpush
@extends('admin.master')
@section('title', 'Edit Blog')
@section('content')

    <div class="col-lg-12">
        <section class="card">
            <header class="card-header">
                Edit Blog
                @if($errors->any())
                    <small id="cName" class="form-text text-danger">
                        @foreach($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </small>
                @endif
            </header>
            <div class="card-body">
                <form method="POST" action="{{ Route('blog.update', $blog->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="inputCategory" class="col-sm-2 col-form-label">Category Name:</label>
                        <div class="col-sm-10">
                            <select name="categoryId" id="inputCategory" class="form-control">
                                <option value="">Select Category</option>
                                @foreach($category as $categories)
                                    <option value="{{ $categories->id }}" {{ $blog->cat_id==$categories->id?'selected':'' }}>{{ $categories->categoryName }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputTitle" class="col-sm-2 col-form-label">Blog Title</label>
                        <div class="col-sm-10">
                            <input type="text" name="blog_title" class="form-control" value="{{ $blog->title }}" id="inputTitle" placeholder="blog title.....  " required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputContent" class="col-sm-2 col-form-label">Blog Content</label>
                        <div class="col-sm-10">
                            <textarea name="blog_content" class="summernote form-control" id="inputContent" required>{{ $blog->content }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputImage" class="col-sm-2 col-form-label">Blog Photo</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="photo" id="inputImage">
                            <img src="{{ asset($blog->photo) }}" alt="" height="100px" width="150px">
                        </div>
                    </div>

                    <fieldset class="form-group">
                        <div class="row">
                            <label class="col-form-label col-sm-2 pt-0">Status:</label>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="1" {{ $blog->status==1?'checked':'' }}>
                                    <label class="form-check-label" for="gridRadios1">
                                        Active
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="0" {{ $blog->status==0?'checked':'' }}>
                                    <label class="form-check-label" for="gridRadios2">
                                        Inactive
                                    </label>
                                </div>

                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button class="btn btn-danger"><a href=" {{ URL::previous() }}">Cancle</a></button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

    </div>

@endsection
@push('scripts')
    <!--summernote-->
    <script src="{{ asset('public/admin/assets/summernote/dist/summernote.min.js')}}"></script>
    <script>

        jQuery(document).ready(function(){

            $('.summernote').summernote({
                height: 200,                 // set editor height

                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor

                focus: true                 // set focus to editable area after initializing summernote
            });
        });

    </script>
@endpush
