@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Articles</h3>
            </div>
            <div class="col text-right">
                <a href="{{ url('/articles/create') }}" class="btn btn-sm btn-primary">New article</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($articles as $article)
                <tr>
                    <th>{{$article->id}}</th>
                    <th>{{$article->serialNumber}}</th>
                    <th>{{$article->name}}</th>
                    <th>{{$article->description}}</th>
                    <th>{{$article->status}}</th>
                    <td>
                        <a href="" class="btn btn-sm btn-warning">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Delete</a>

                    </td>
                </tr>
                @endforeach


                </tr>

            </tbody>


        </table>
    </div>
</div>




@endsection