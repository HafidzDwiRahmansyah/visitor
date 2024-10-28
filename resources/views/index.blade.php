@extends('layout.layout')

@section('title','Login Page')

@section('content')
<div class="jarak"></div>
<section class="login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card border-0 shadow rounded-2">
                    <div class="card-body">
                        <h3 class="text-center py-2">Login Page</h3>
                        <form action="/login" method="post">
                            @csrf
                            <label class="form-label" for="name">Username</label>
                            <input class="form-control" type="text" name="name" id="name" placeholder="username..."><br>
                            <label class="form-label" for="password">Username</label>
                            <input class="form-control" type="password" name="password" id="password"
                                placeholder="password..."><br>
                            <button class="btn btn-primary mx-auto d-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection