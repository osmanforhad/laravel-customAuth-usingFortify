@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-4"></div>
    <div class="card p-4 mt-3 col-4">
        <h4>Register a new account</h4>
        <form method="POST" action="#">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirm">
            </div>
            <button type="submit" class="btn btn-primary">REGISTER</button>
        </form>
    </div>
</div>
@endsection