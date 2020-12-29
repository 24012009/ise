@extends("layouts.admin")
@section("content")
@if(session()->has('message'))
    <div class="alert alert-warning shadow-sm">
        {{ session()->get('message') }}
    </div>
@endif
@endsection
