@extends('layouts.master')
@section('content')
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Products Page</h1>
                <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
            </div>
        </div>
    </header>
    <!-- Section-->
        <div class="container pt-5">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            Sidebar Menu
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
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Category</th>
                            <th scope="col">Color</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{$product->title}}</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
@endsection
