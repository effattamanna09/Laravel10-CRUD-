@extends('layouts.master')
@section('content')
    <div class="container">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger"> {{ $error }}</div>
            @endforeach
        @endif
        <div class="card mt-4">
            <div class="card-header">
                <h1>Create Post</h1>
                <a href="{{ route('post.index') }}" class="btn-sm btn-success">GO Back</a>
            </div>

            <div class="card-body">
                <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Category</label>
                        <select type="text" class="form-control" name="category_id">
                            <option value="">Please select Category</option>
                            @foreach ($categorys as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Description</label>
                        <textarea type="text" class="form-control" rows="5" name="description"></textarea>
                    </div>

                    <div class="form-group mt-3">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
