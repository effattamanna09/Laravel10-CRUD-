@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="card mt-4">
            <div class="card-header">
                <h1>Edit Post</h1>
                <a href="{{ route('post.index') }}" class="btn-sm btn-success">GO Back</a>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <div>
                            <img src="{{ asset('storage/' . $post->image) }}" alt="crud-image" width="300px"
                                height="150px" />
                        </div>

                        <label for="" class="form-label">Image</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control" value="{{ $post->title }}">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Category</label>
                        <select type="text" class="form-control">
                            <option value="">Please select Category</option>
                            @foreach ($categories as $catagory)
                                <option {{ $catagory->id == $post->category_id ? 'selected' : '' }}
                                    value="{{ $catagory->id }}">{{ $catagory->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Description</label>
                        <textarea type="text" class="form-control" rows="5">{{ $post->description }}</textarea>
                    </div>

                    <div class="form-group mt-3">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
