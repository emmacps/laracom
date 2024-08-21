@extends('layouts.master')
@section('content')
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Shop in style</h1>
                <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-8 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <div class="card-body p-4">
                            <div class="text-center"><h1>User Registration</h1></div>
                            <form action="{{route('register')}}" method="post">
                                @csrf
                                @error('name')
                                <span>{{$message}}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                @error('email')
                                <span>{{$message}}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                @error('password')
                                <span>{{$message}}</span>
                                @enderror
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control"  id="password" name="password">
                                </div>

                                <div class="form-group">
                                    <label for="">Confirm Password</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                </div>
                                <button class="btn btn-primary mt-2" type="submit">Register</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
