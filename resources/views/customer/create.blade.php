@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['url' => route('customer.store')]) !!}

            @include('customer.form')

        {!! Form::close() !!}
    </div>
</div>
@endsection