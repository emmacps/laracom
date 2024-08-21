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
               <div class="card">
                   <div class="card-header">
                       Add New Product
                   </div>
                   <div class="card-body">
                       <form action="" method="post">
                           <div class="mb-3">
                               <label for="" class="form-label">Email address</label>
                               <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                               <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                           </div>
                           <div class="mb-3">
                               <label for="exampleInputPassword1" class="form-label">Password</label>
                               <input type="password" class="form-control" id="exampleInputPassword1">
                           </div>
                           <div class="mb-3 form-check">
                               <input type="checkbox" class="form-check-input" id="exampleCheck1">
                               <label class="form-check-label" for="exampleCheck1">Check me out</label>
                           </div>
                           <button type="submit" class="btn btn-primary">Submit</button>
                       </form>
                   </div>
               </div>
            </div>
        </div>

    </div>
@endsection
