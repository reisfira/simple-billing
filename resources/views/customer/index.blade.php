@extends('layouts.master')

@section('content')
<a href="{{ route('customer.create') }}" class="btn btn-primary mb-3">Create</a>
<div class="card">
    <div class="card-body">
        Customer Page
    </div>
</div>
@endsection