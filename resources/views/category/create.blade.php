@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['url' => route('category.store')]) !!}

            @include('category.form')

        {!! Form::close() !!}
    </div>
</div>
@endsection