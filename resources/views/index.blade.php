@extends('master')

@section('title', 'Home Page')

@section('content')

    <h1 class="my-4">Page Heading</h1>

    <!-- Blog Blog -->
    @foreach($blog as $blogs)
    <div class="card mb-4">
        <img class="card-img-top" src="{{ asset($blogs->photo) }}" alt="Card image cap">
        <div class="card-body">
            <h2 class="card-title">{{ $blogs->title }}</h2>
            <p class="card-text">{!! substr($blogs['content'], 0, 400) !!}</p>
            <a href="{{ Route('viewBlog', $blogs['id']) }}" class="btn btn-primary">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted">
            Posted on {{ $blogs->created_at }} by
            <a href="#">{{ $blogs->uploader_name }}</a>
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
