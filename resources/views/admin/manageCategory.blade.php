@extends('admin.master')
@section('title', 'Category Manage')
@section('content')

    <div class="col-lg-12">
        <section class="card">
            <header class="card-header">
                Category List
            </header>
            <header class="card-header">
                @if(session()->get('message'))
                    <span class="form-text text-danger">
                    {{ session()->get('message') }}
                    </span>
                @endif
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th><i class="fa fa-bullhorn"></i> Sl</th>
                    <th><i class="fa fa-question-circle"></i> Category Name</th>
                    <th><i class="fa fa-bookmark"></i> Status</th>
                    <th><i class=" fa fa-edit"></i> Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($category as $categories)
                <tr>
                    <td><a href="#">{{ $sl++ }}</a></td>
                    <td class="hidden-phone">{{ $categories->categoryName }}</td>
                    <td>
                        <form action="{{ Route('category.status', $categories->id) }}" method="post" style="display:inline-block">
                            @csrf
                            @method('PUT')
                        @if($categories->status == 1)
                                <input type="hidden" name="active" value="1">
                                <button class="btn btn-success btn-sm"><i class="fa fa-thumbs-up"></i> Active</button>
                        @elseif($categories->status == 0)
                                <input type="hidden" name="active" value="0">
                                <button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-down"></i> Inactive</button>
                        @endif
                        </form>
                    </td>
                    <td>
                        {{--<form action="{{ Route('category.status', $categories->id) }}" method="post" style="display:inline-block">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-success btn-sm"><i class="fa fa-check"></i></button>
                        </form>--}}
                        <button class="btn btn-primary btn-sm">
                            <a class="fa fa-pencil" href="{{ Route('category.edit', $categories->id) }}"></a>
                        </button>
                        <form action="{{ Route('category.destroy', $categories->id) }}" method="post" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o "></i></button>
                        </form>
                    </td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </div>

@endsection
