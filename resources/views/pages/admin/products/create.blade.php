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
                   @if ($errors->any())
                       <div class="alert alert-danger">
                           <ul>
                               @foreach ($errors->all() as $error)
                                   <li>{{ $error }}</li>
                               @endforeach
                           </ul>
                       </div>
                   @endif
                   <div class="card-body">
                       <form action="{{route('adminpanel.products.store')}}" method="post" enctype="multipart/form-data">
                           @csrf
                           <div class="mb-3">
                               <label for="" class="form-label">Tile</label>
                               <input type="text" class="form-control" id="title" name="title">
                           </div>
                           <div class="mb-3">
                               <label for="" class="form-label">Price</label>
                               <input type="text" class="form-control" id="price" name="price">
                           </div>
                           <div class="mb-3 form-check">
                               <label for="" class="form-label">Select Category</label>
                               <select name="category_id" class="form-control">
                                   <option value="">--Select Category--</option>
                                   @foreach($categories as $category)
                                       <option value="{{$category->id}}" {{old('category_id') == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                   @endforeach
                               </select>
                           </div>

                           <div class="mb-3 form-check">
                               <label for="" class="form-label">Select Color</label>
                                   @foreach($colors as $color)
                                       <input type="checkbox" name="colors[]" class="form-check-input" value="{{$color->id}}">
                                   @endforeach
                           </div>
                           <div class="mb-3">
                               <label for="" class="form-label">Image</label>
                               <input type="file" class="form-control" id="image" name="image">
                           </div>
                           <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>

                           <button type="submit" class="btn btn-primary">Submit</button>
                       </form>
                   </div>
               </div>
            </div>
        </div>

    </div>
@endsection
