@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="card mt-4">
            <div class="card-header">
                <h1>Edit Post</h1>
                <a href="{{route('post.index')}}" class="btn-sm btn-success">GO Back</a>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <label for="" class="form-label">Image</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Category</label>
                        <select type="text" class="form-control">
                            <option value="">Please select Category</option>
                            <option value="1">Ctg1</option>
                            <option value="2">Ctg2</option>
                            <option value="3">Ctg3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Description</label>
                        <textarea type="text" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Category</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                       <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
