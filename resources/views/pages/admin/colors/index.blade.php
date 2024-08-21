@extends('layouts.master')
@section('content')
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Colors Page</h1>
                <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <div class="container p-5">
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        Side Bar Nav
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a class="btn btn-primary" href="{{ route('adminpanel') }}">Dashboard</a></li>
                        <li class="list-group-item"><a class="btn btn-primary" href="{{ route('categories') }}">Categories</a></li>
                        <li class="list-group-item"><a class="btn btn-primary" href="{{ route('products') }}">Products</a></li>
                        <li class="list-group-item"><a class="btn btn-primary" href="{{ route('colors') }}">Colors</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card p-2">
                    <div class="card-header">Add New Category</div>
                    <div class="card-body">
                        <form action="{{ route('adminpanel.colors.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="col">
                                    <input type="color" class="form-control" name="code">
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary" type="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Code</th>
                        <th scope="col">Publish</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($colors as $color)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{$color->name}}</td>
                            <td>{{$color->code}}</td>
                            <td>{{$color->created_at}}</td>
                            <td>
                                <form action="{{route('adminpanel.colors.destroy', $color->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
