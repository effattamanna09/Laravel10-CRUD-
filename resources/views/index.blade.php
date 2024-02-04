@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="card mt-4">
            <div class="card-header">
                <h1>All Post</h1>
              
                    <a href="{{ route('post.create')}}" class="btn-sm btn-success">Create</a>
                    <a href="#" class="btn-sm btn-warning">Trashed</a>
               
                
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 5%;">ID</th>
                            <th scope="col" style="width: 10%;">Image</th>
                            <th scope="col" style="width: 15%;">Title</th>
                            <th scope="col" style="width: 25%;">Description</th>
                            <th scope="col" style="width: 10%;">Category</th>
                            <th scope="col" style="width: 10%;">Publish Date</th>
                            <th scope="col" style="width: 15%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <th scope="row">{{$post->id}}</th>
                            <td>
                                <img src="{{asset('storage/'.$post->image)}}" alt="crud-image" width="300px"/>
                            </td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->description}}</td>
                            <td>{{$post->category_id}}</td>
                            <td>{{ date('d-m-y', strtotime($post->updated_at)) }}</td>

                            <td>
                                <a href="#" class="btn-sm btn-success">Show</a>
                                <a href="#" class="btn-sm btn-primary">Edit</a>
                                <a href="#" class="btn-sm btn-danger">Delete</a>

                            </td>
                        </tr>
                        @endforeach
                     

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
