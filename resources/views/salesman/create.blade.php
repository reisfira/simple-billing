@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['url' => route('salesman.store')]) !!}

            @include('salesman.form')

        {!! Form::close() !!}
    </div>
</div>
@endsection