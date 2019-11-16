@extends('admin.master')
@section('title', 'Category Add')
@section('content')

    <div class="col-lg-8">
        <section class="card">
            <header class="card-header">
                Add New Category
            </header>
            <div class="card-body">
                <form method="post" action="{{ Route('category.store') }}">
                    @csrf
                    <div class="form-group row ">
                        <label for="Name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="name" name="categoryName" value="{{ old('categoryName') }}" placeholder="category name..." required autocomplete="categoryName" aria-describedby="cName">
                            @if($errors->has('categoryName'))
                                <small id="cName" class="form-text text-danger">
                                    @foreach($errors->all() as $error)
                                        {{ $error }}
                                    @endforeach
                                </small>
                            @endif
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="1" checked>
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
                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

    </div>

@endsection
