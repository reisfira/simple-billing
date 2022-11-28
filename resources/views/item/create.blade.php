@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['url' => route('item.store')]) !!}

            @include('item.form')

        {!! Form::close() !!}
    </div>
</div>
@endsection
