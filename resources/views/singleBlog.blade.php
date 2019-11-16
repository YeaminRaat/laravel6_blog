@extends('master')

@section('title', 'Single Blog Page')

@section('content')

    <h1 class="my-4">Page Heading</h1>

    <!-- Blog Blog -->
    @foreach($blog as $viewBlog)
        <div class="card mb-4">
            <img class="card-img-top" src="{{ asset($viewBlog->photo) }}" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">{{ $viewBlog->title }}</h2>
                <p class="card-text">{{ $viewBlog['content'] }}</p>
            </div>
            <div class="card-footer text-muted">
                Posted on {{ $viewBlog->created_at }} by
                <a href="#">{{ $viewBlog->uploader_name }}</a>
            </div>
        </div>
    @endforeach

    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
        <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
        </li>
        <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
        </li>
    </ul>

@endsection
