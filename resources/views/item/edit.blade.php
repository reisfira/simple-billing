@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($resource, ['url' => route('item.update', $resource->id), 'method' => 'PUT']) !!}

            @include('item.form')

        {!! Form::close() !!}
    </div>
</div>
@endsection
