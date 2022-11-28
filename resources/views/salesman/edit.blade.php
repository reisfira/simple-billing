@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($resource, ['url' => route('salesman.update', $resource->id), 'method' => 'PUT']) !!}

            @include('salesman.form')

        {!! Form::close() !!}
    </div>
</div>
@endsection