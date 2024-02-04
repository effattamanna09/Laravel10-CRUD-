@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="card mt-4">
            <div class="card-header">
                <h1>Trashed Post</h1>
                <a href="#" class="btn-sm btn-warning">Go Back</a>
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
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <img src="https://picsum.photos/200" alt="crud-image" />
                            </td>
                            <td>Crud</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id nulla nam laboriosam dolorum
                                voluptatem eum tempore aut libero nostrum non vitae sequi, sunt delectus aperiam fuga
                                commodi recusandae incidunt eaque!</td>
                            <td>News</td>
                            <td>Date</td>
                            <td>
                                <a href="#" class="btn-sm btn-success">Show</a>
                                <a href="#" class="btn-sm btn-primary">Edit</a>
                                <a href="#" class="btn-sm btn-danger">Delete</a>

                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
