@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-4"></div>
    <div class="card p-4 mt-3 col-4">
        <h4>Welcome Back, {{ Auth::user()->name }}</h4>
        <h6>Thanks for login</h6>
    </div>
</div>
@endsection