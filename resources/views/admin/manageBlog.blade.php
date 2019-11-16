@extends('admin.master')
@section('title', 'Blog Manage')
@section('content')

    <div class="col-lg-12">
        <section class="card">
            <header class="card-header">
                Blog List
                @if(session()->get('message'))
                    <span class="form-text text-danger">
                        <hr>
                    {{ session()->get('message') }}
                    </span>
                @endif
            </header>

            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Category</th>
                    <th>Photo</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($blog as $blog)
                    <tr>
                        <td>{{ $sl++ }}</td>
                        <td>{{ $blog->categoryName }}</td>
                        <td><img src="{{ asset($blog->photo) }}" alt="" height="30px" width="40px"></td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->content }}</td>
                        <td>
                            <form action="{{ Route('blog.status', $blog->id) }}" method="post" style="display:inline-block">
                                @csrf
                                @method('PUT')
                                @if($blog->status == 1)
                                    <input type="hidden" name="active" value="1">
                                    <button class="btn btn-success btn-sm"><i class="fa fa-thumbs-up"></i> Active</button>
                                @elseif($blog->status == 0)
                                    <input type="hidden" name="active" value="0">
                                    <button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-down"></i> Inactive</button>
                                @endif
                            </form>
                        </td>
                        <td>
                            <button class="btn btn-primary btn-sm">
                                <a class="fa fa-pencil" href="{{ Route('blog.edit', $blog->id) }}"></a>
                            </button>

                            <form action="{{ Route('blog.destroy', $blog->id) }}" method="post" style="display:inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                            </form>
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#showblog"><i class="fa fa-eye"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </div>

    {{--Modal--}}
    <div class="modal fade" id="showblog" tabindex="-1" role="dialog" aria-labelledby="showblog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="showblog">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById(showblog).innerHTML="Hello";
    </script>


@endsection
