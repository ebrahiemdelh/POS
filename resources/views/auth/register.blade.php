@extends('layout.master')
@section('title')
    Register Page
@endsection
@section('content')
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Register</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{ route('user.store') }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Username</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter Username">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                                        placeholder="Password">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
